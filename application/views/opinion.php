<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUP</title>
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
    <style>
         body::-webkit-scrollbar {
            width: 8px;
        }
        body::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        body::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }
        body::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        .container {
            max-width: 600px !important;
            padding: 20px !important;
            border-radius: 8px !important;
        }
        h2, p {
            text-align: left !important;
        }
        .form-control {
            border-radius: 20px !important;
        }
        .form-control, .input-group-text {
            border-color:crimson !important;
        }
        .form-control:focus{

            box-shadow: 0 0 0 0.20rem rgb(213 49 64 / 34%) !important;
        }
        /* .contact-number-input {
            border-radius: 0px !important;
            border-top-right-radius: 20px !important;
            border-bottom-right-radius: 20px !important;
        } */
        .btn-custom {
            background-color: #ff0000 !important;
            border: none !important;
            border-radius: 20px !important;
            padding: 10px 20px !important;
        }
        .btn-custom:hover {
            background-color: #cc0000 !important;
        }
        .input-group-text {
            border-top-left-radius: 20px !important;
            border-bottom-left-radius: 20px !important;
        }
        .input-group .form-control,
        .input-group-text {
            /* border: 1px solid #ced4da !important; */
        }
        .form-group label {
            display: block !important;
            margin-bottom: 5px !important;
            font-weight: 500 !important;
            font-size: smaller;
        }
        .login-link {
            text-align: center !important;
            margin-top: 10px !important;
        }
        .iti__country-list {
            white-space: normal !important;
        }
        .iti__country-list::-webkit-scrollbar-thumb {
            background: #888 !important;
            border-radius: 10px !important;
        }
        .form-group{
            margin-bottom:1rem !important;
        }
        .img-signup{
            background: lightgray;
            padding: 51px;
            border-radius: 0px 175px 0px 0px;
            display: flex;
            align-items: center;
        }
        textarea{
            padding: .375rem 1rem !important;
        }
        .form-group {
            margin-bottom: .3rem !important;
        }
    </style>

</head>
<body>
<?php include_once "navbar.php" ?>
  <section class='#signUp'>
    <div class='row'>
        <div class="col-md-5 img-signup" >
            <img src="<?= base_url() ?>assets/rkda/SignUp.png" alt="reg" width="95%">
        </div>
        <div class="col-md-7">
            <div class="container">
                <h2>Add Your Opinion</h2>
                <!-- <p>Join us to streamline Financial Processes</p> -->
                <form class='row'>
                    <div class="form-group col-md-12">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="contactNumber">Contact Number <span class='text-danger'>*</span> </label>
                        <div class="input-group">
                            <!-- <div class="input-group-prepend">
                                <span class="input-group-text">+91</span>
                            </div> -->
                            <input type="text" class="form-control contact-number-input" id="contactNumber" placeholder="Enter Contact Number">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="city">City <span class='text-danger'>*</span></label>
                        <input type="text" class="form-control" id="city" placeholder="Select City">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="email">E-Mail ID <span class='text-danger'>*</span></label>
                        <input type="email" class="form-control" id="email" placeholder="Enter E-Mail ID">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="area">Area</label>
                        <select class="form-control" id="area">
                            <option value="">Select Area</option>
                            <option value="area1">Area 1</option>
                            <option value="area2">Area 2</option>
                            <option value="area3">Area 3</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="subarea">Subarea</label>
                        <select class="form-control" id="subarea" disabled>
                            <option value="">Select Subarea</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="c_name">Company name <span class='text-danger'>*</span></label>
                        <input type="text" class="form-control" id="c_name" placeholder="Select City">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="s_urls">Social Media / Website URLS <span class='text-danger'>*</span></label>
                        <input type="text" class="form-control" id="s_urls" placeholder="Select City">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="question">What’s your question?<span class='text-danger'>*</span></label>
                        <textarea type="text" class="form-control " id="question" placeholder="Select City"></textarea>
                    </div>
                    
                    <div class="form-group col-md-12 d-flex justify-content-center mb-0">
                        <button type="submit" class="btn btn-danger my-0 rounded-pill btn-block w-50">Sign Up</button>
                    </div>
                    <div class="form-group col-md-12 login-link ">
                        <a href="#" class='text-dark'>Already have an account? <span class='text-danger' style='font-weight:500;'>Login</span> </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </section>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<script>
   $(document).ready(function() {
        var input = document.querySelector("#contactNumber");
        window.intlTelInput(input, {
            initialCountry: "in",
           separateDialCode: true,
	utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
        });
    });
</script>
</html>
