<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <!-- Include Bootstrap CSS, jQuery, and SweetAlert2 CSS and JS files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"
        integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
</head>

<style>
    .add-partner{
        background-image:url('<?= base_url() ?>assets/ecovis-images/b-1.jpg') !important;
        background-position:center center;
        background-size: cover; /* Adjust the size of the background image */
        background-repeat: no-repeat; 
    }
</style>
<body>
    <div id='getAccess'>
        <div class="container-fluid d-flex">

            <div class='col-md-6'>
                <img src="<?= base_url() ?>assets/ecovis-images/access.jpg" alt="access"
                    style="width:inherit;height: 100vh;" class='rounded-2'>
            </div>

            <div class='col-md-6 d-flex  align-items-center justify-content-center'>
                <div class="col-md-10 ">

                    <div class='d-flex justify-content-center' style='mix-blend-mode: hard-light;'>
                        <img src="<?= base_url() ?>assets/ecovis-images/user-logo.jpg" alt="access" style="width:100px;"
                            class=''>
                    </div>
                    <h5 class=''>Access With Credentials </h5>
                    <form class=''>
                        <div class="form-group">

                            <input type="email" class="form-control" id="email" name="email" required
                                placeholder='Email'>
                        </div>
                        <div class="form-group">

                            <input type="password" class="form-control" id="password" name="password" required
                                placeholder='Password'>
                        </div>
                        <button type="button" class="btn btn-dark w-100" onclick="checkCredentials()">Login</button>
                    </form>
                </div>
            </div>

            <!-- <div class='col-md-1'></div> -->
        </div>
    </div>

    <div class='col-md-12 px-0' id="add-partner-main-div" style='display:none' onsubmit="saveForm()">

        <div class='d-flex add-partner' id='add-partner'>
            <div class='col-md-1'></div>
            <div class='col-md-4 my-5'>
                <div class="card rounded">

                    <form id="user_form" enctype="multipart/form-data" class='px-5 py-5'>
                        <h5>Enter The Details</h5>

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>

                        <div class="form-group">
                            <label for="post">Designation:</label>
                            <input type="text" class="form-control" id="post" name="post" required>
                        </div>

                        <div class="form-group">
                            <label for="education">Education specialization:</label>
                            <input type="text" class="form-control" id="education" name="education" required
                                placeholder='separate with " , "'>
                        </div>
                        <div class="form-group">
                            <label for="desc">Profile Description:</label>
                            <!-- <input type="text" class="form-control" id="desc" name="desc" required placeholder='write something...'> -->
                            <textarea class="form-control" id="desc" name="desc" required
                                placeholder='write something...' id="exampleTextarea" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Upload Image:</label>
                            <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <!-- <input type="submit" value="Submit" class="btn btn-primary" onclick="saveForm()" id="form_submit"> -->
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
    <script>  var baseUrl = "<?= base_url() ?>";</script>
    <script>
        function checkCredentials() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            if (email === "dheeraj.r@rkabara.com" && password === "Dheeraj@rathi123") {
                Swal.fire({
                    title: 'Login Successful',
                    text: 'You can access this page.',
                    icon: 'success'
                }).then((result) => {
                    document.getElementById('add-partner-main-div').style.display = 'block';
                    document.getElementById('getAccess').style.display = 'none';
                });
            } else {
                Swal.fire({
                    title: 'Login Error',
                    text: 'You can\'t access this page. Invalid email or password.',
                    icon: 'error',
                    customClass: {
                        confirmButton: 'error-button-class'
                    }
                });
            }
        }
        $('#user_form').submit(function (e) {
            e.preventDefault();
        })
        $('#user_form').validate({
            rules: {
                name: 'required',
                post: 'required',
                education: 'required',
                // desc: 'required',
                image: 'required',
            }
        });

        function saveForm() {
            // let image = $('#image').val();
            let formd = document.getElementById('user_form');
            let formData = new FormData(formd);
            // formData.append('image', image);
            // return false;
            $.ajax({
                url: baseUrl + 'welcome/saveData',
                method: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function (data) {
                    data = JSON.parse(data);
                    console.log(data);
                    if (data == 'success') {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Your data has been saved',
                            showConfirmButton: false,
                            timer: 5000,
                            customClass: {
                                container: 'my-swal'
                            }
                        })
                        $('#user_form')[0].reset();
                    } else {
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Something went wrong!',
                            showConfirmButton: false,
                            timer: 3000,
                            customClass: {
                                container: 'my-swal'
                            }
                        })
                    }
                },
                error: function (err) {
                    console.log(err);
                }
            });
        }

    </script>

    <style>
        .error {
            color: red;
        }

        .error-button-class {
            background-color: #FE735C !important;
        }
    </style>
</body>