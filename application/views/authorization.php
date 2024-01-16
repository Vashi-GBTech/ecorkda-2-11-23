<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorization form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .nda-structure p {
        text-align: justify;
    }

    .nda-structure .outer-table td,
    .last-table th,
    td {
        border: none !important;
        text-align: justify;
    }

    .bold-rows-table {
        font-weight: bold;
    }

    .inner-table,
    .inner-table td,
    th {
        border: 1.5px solid darkgray !important;
        font-size: 12px;

    }

    .divider {
        width: 100%;
        height: 1px;
        background-color: #000;
        /* Change color as needed */
    }
</style>
<style>
    .file-drop {
        border: 2px dashed #ccc;
        padding: 20px;
        text-align: center;
        cursor: pointer;
    }

    .swal2-toast {
        background-color: crimson !important;
        /* Change background color */
    }

    .swal2-title {
        color: white !important;
        /* Change text color */
    }

    .file-label {
        display: inline-block;
    }

    .file-icon {
        font-size: 48px;
        color: #999;
        display: block;
        margin-bottom: 10px;
    }

    .file-input {
        display: none;
    }

    .file-text {
        font-size: 16px;
        color: #555;
    }
</style>

<body>
    <?php include_once 'header.php' ?>
    <h4 class='text-center mt-5' style="text-shadow: 2px 4px 2px darkgray;
    font-size: 28px;">AUTHORISATION LETTER</h4>
    <div class=' mt-3 mb-5 initial-page'>


        <div class=" justify-content-center w-100 py-3" style="display:flex" id="auth-form-div">
            <form class='col-md-12 d-flex justify-content-center needs-validation' id="auth-form" novalidate>
                <div class="card w-75 py-3 nda-card-css">
                    <div class="d-flex justify-content-center w-100">
                        <div class="form-group col-md-3">

                            <label for="salutation" class="form-label">Miss/Mr.</label>
                            <select class="form-select bg-white p-2 rounded-2" id="salutation" required>
                                <option selected disabled value="">Select</option>
                                <option value="Miss">Miss</option>
                                <option value="Mr.">Mr.</option>
                            </select>
                        </div>

                        <div class="form-group col-md-7">
                            <label for="partner_name">Partner Name</label>
                            <input type="text" class="form-control required-field" id="partner_name" name="partner_name"
                                placeholder="Enter Full Name" required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center w-100">
                    <div class="form-group col-md-7">
                            <label for="comp_name">Company Name</label>
                            <input type="text" class="form-control required-field" id="comp_name" name="comp_name"
                                placeholder="Enter Full Name" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center w-100">
                        <button type="submit" class="btn btn-dark col-md-3"
                            title='click to submit the form'>Submit</button>
                    </div>
                </div>



            </form>

        </div>

    </div>

    <div class='' id='congratsdiv' style='display:none'>
        <div style="text-align:center;margin-top:30px;position:relative;width:100%;height:100%;top:0px;left:0px;">
            <div class="checkmark-circle">
                <div class="background"></div>
                <div class="checkmark draw"></div>
            </div>
            <h1>Congratulations!</h1>
            <p>We are all set. Well done!</p>
            <div class="d-flex justify-content-center my-4">
                <button type="button" class="btn btn-danger btn-md rounded-pill " id="pdfButton">Download your NDA<i
                        class="fas fa-download"></i> </button>
            </div>
       
        </div>
    </div>

    <?php include_once 'footer.php' ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        document.getElementById('auth-form').addEventListener('submit', function (event) {
            event.preventDefault();

            if (this.checkValidity() === false) {
                event.stopPropagation();
            } else {
                // Form is valid, proceed with submission

                const formData = new FormData(event.target);
                formData.set('salutation' ,$('#salutation').val());
                const fdata = {};
                for (let [key, value] of formData.entries()) {
                    fdata[key] = value;
                }
                console.log(fdata ,$('#salutation').val());
               
                $.ajax({
                    url: baseUrl + 'Welcome/saveAuthFormDetails',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        console.log(response, 'response');
                        $('#response').html(response);
                        localStorage.setItem('auth-details', JSON.stringify(fdata));
                        $('#auth-form-div').hide();
                        $('#congratsdiv').show();
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }

            this.classList.add('was-validated');
        });

        $(document).ready(function () {


        });


        $('#pdfButton').on('click', function () {

            var details = localStorage.getItem('nda-details');
            var nda_details = JSON.parse(details);
            console.log(nda_details);
            var baseurl = 'http://localhost/ecorkda/Welcome/generateAuthPdf?partner_name=' + encodeURIComponent(nda_details.partner_name)

                + '&salutation=' + encodeURIComponent(nda_details.salutation)

                + '&comp_name=' + encodeURIComponent(nda_details.comp_name);

            console.log('nda_details', nda_details, baseurl);

            $.ajax({
                url: baseurl,
                method: 'GET',
                xhrFields: {
                    responseType: 'blob'
                },
                success: function (data) {
                    var a = document.createElement('a');
                    var url = window.URL.createObjectURL(data);
                    a.href = url;
                    a.download = 'output.pdf';
                    document.body.appendChild(a);
                    a.click();
                    window.URL.revokeObjectURL(url);
                    document.body.removeChild(a);
                    console.log('download successfully');
                },
                error: function (xhr, status, error) {
                    console.error('Error generating PDF:', error);
                }
            });
        });
    </script>

</body>

</html>