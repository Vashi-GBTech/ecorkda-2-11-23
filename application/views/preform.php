<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preliminary Application Form</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto');

    /*------------------------*/
    input:focus,
    button:focus,
    .form-control:focus {
        outline: none;
        box-shadow: none;
    }

    .form-control:disabled,
    .form-control[readonly] {
        background-color: #fff;
    }

    /*----------step-wizard------------*/
    .d-flex {
        display: flex;
    }

    .justify-content-center {
        justify-content: center;
    }

    .align-items-center {
        align-items: center;
    }

    /*---------signup-step-------------*/
    .bg-color {
        background-color: #333;
    }

    .signup-step-container {
        padding: 50px 0px;
        padding-bottom: 60px;
    }




    .wizard .nav-tabs {
        position: relative;
        margin-bottom: 0;
        border-bottom-color: transparent;
    }

    .wizard>div.wizard-inner {
        position: relative;
        margin-bottom: 50px;
        text-align: center;
    }

    .connecting-line {
        height: 2px;
        background: #e0e0e0;
        position: absolute;
        width: 75%;
        margin: 0 auto;
        left: 0;
        right: 0;
        top: 15px;
        z-index: 1;
    }

    .wizard .nav-tabs>li.active>a,
    .wizard .nav-tabs>li.active>a:hover,
    .wizard .nav-tabs>li.active>a:focus {
        color: #555555;
        cursor: default;
        border: 0;
        border-bottom-color: transparent;
    }

    span.round-tab {
        width: 30px;
        height: 30px;
        line-height: 30px;
        display: inline-block;
        border-radius: 50%;
        background: #fff;
        z-index: 2;
        position: absolute;
        left: 0;
        text-align: center;
        font-size: 16px;
        color: #0e214b;
        font-weight: 500;
        border: 1px solid #ddd;
    }

    span.round-tab i {
        color: #555555;
    }

    .wizard li.active span.round-tab {
        background: crimson;
        color: #fff;
        border-color: crimson;
    }

    .wizard li.active span.round-tab i {
        color: #5bc0de;
    }

    .wizard .nav-tabs>li.active>a i {
        color: crimson;
    }

    .wizard .nav-tabs>li {
        width: 25%;
    }

    .wizard li:after {
        content: " ";
        position: absolute;
        left: 46%;
        opacity: 0;
        margin: 0 auto;
        bottom: 0px;
        border: 5px solid transparent;
        border-bottom-color: red;
        transition: 0.1s ease-in-out;
    }



    .wizard .nav-tabs>li a {
        width: 30px;
        height: 30px;
        margin: 20px auto;
        border-radius: 100%;
        padding: 0;
        background-color: transparent;
        position: relative;
        top: 0;
    }

    .wizard .nav-tabs>li a i {
        position: absolute;
        top: -15px;
        font-style: normal;
        font-weight: 400;
        white-space: nowrap;
        left: 15px;
        transform: translate(-50%, -50%);
        font-size: 12px;
        font-weight: 700;
        color: #000;
    }

    .wizard .nav-tabs>li a:hover {
        background: transparent;
    }

    .wizard .tab-pane {
        position: relative;
        padding-top: 20px;
    }


    .wizard h3 {
        margin-top: 0;
    }

    .prev-step,
    .next-step {
        font-size: 13px;
        padding: 8px 24px;
        border: none;
        border-radius: 4px;
        margin-top: 30px;
    }

    .preview {
        font-size: 13px;
        padding: 8px 24px;
        border: none;
        border-radius: 4px;
        margin-top: 30px;
        background-color: #17a2b8;
        color: white;
    }

    .next-step {
        background-color: #0db02b;
        color: white;
    }

    .skip-btn {
        background-color: #cec12d;
    }

    .step-head {
        font-size: 20px;
        text-align: center;
        font-weight: 500;
        margin-bottom: 20px;
    }

    .term-check {
        font-size: 14px;
        font-weight: 400;
    }

    .custom-file {
        position: relative;
        display: inline-block;
        width: 100%;
        height: 40px;
        margin-bottom: 0;
    }

    .custom-file-input {
        position: relative;
        z-index: 2;
        width: 100%;
        height: 40px;
        margin: 0;
        opacity: 0;
    }

    .custom-file-label {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1;
        height: 40px;
        padding: .375rem .75rem;
        font-weight: 400;
        line-height: 2;
        color: #495057;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: .25rem;
    }

    .custom-file-label::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 3;
        display: block;
        height: 38px;
        padding: .375rem .75rem;
        line-height: 2;
        color: #495057;
        content: "Browse";
        background-color: #e9ecef;
        border-left: inherit;
        border-radius: 0 .25rem .25rem 0;
    }

    .footer-link {
        margin-top: 30px;
    }

    .all-info-container {}

    .list-content {
        margin-bottom: 10px;
    }

    .list-content a {
        padding: 10px 15px;
        width: 100%;
        display: inline-block;
        background-color: #f5f5f5;
        position: relative;
        color: #565656;
        font-weight: 400;
        border-radius: 4px;
    }

    .list-content a[aria-expanded="true"] i {
        transform: rotate(180deg);
    }

    .list-content a i {
        text-align: right;
        position: absolute;
        top: 15px;
        right: 10px;
        transition: 0.5s;
    }

    .form-control[disabled],
    .form-control[readonly],
    fieldset[disabled] .form-control {
        background-color: #fdfdfd;
    }

    .list-box {
        padding: 10px;
    }

    .signup-logo-header .logo_area {
        width: 200px;
    }

    .signup-logo-header .nav>li {
        padding: 0;
    }

    .signup-logo-header .header-flex {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .list-inline li {
        display: inline-block;
    }

    .pull-right {
        float: right;
    }

    /*-----------custom-checkbox-----------*/
    /*----------Custom-Checkbox---------*/
    input[type="checkbox"] {
        position: relative;
        display: inline-block;
        margin-right: 5px;
    }

    input[type="checkbox"]::before,
    input[type="checkbox"]::after {
        position: absolute;
        content: "";
        display: inline-block;
    }

    input[type="checkbox"]::before {
        height: 16px;
        width: 16px;
        border: 1px solid #999;
        left: 0px;
        top: 0px;
        background-color: #fff;
        border-radius: 2px;
    }

    input[type="checkbox"]::after {
        height: 5px;
        width: 9px;
        left: 4px;
        top: 4px;
    }

    input[type="checkbox"]:checked::after {
        content: "";
        border-left: 1px solid #fff;
        border-bottom: 1px solid #fff;
        transform: rotate(-45deg);
    }

    input[type="checkbox"]:checked::before {
        background-color: #18ba60;
        border-color: #18ba60;
    }






    @media (max-width: 767px) {
        .sign-content h3 {
            font-size: 40px;
        }

        .wizard .nav-tabs>li a i {
            display: none;
        }

        .signup-logo-header .navbar-toggle {
            margin: 0;
            margin-top: 8px;
        }

        .signup-logo-header .logo_area {
            margin-top: 0;
        }

        .signup-logo-header .header-flex {
            display: block;
        }
    }


    /* modal */
    .popup-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        z-index: 999;
    }

    .popup-container {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        overflow: hidden;
        width: 85%;
        opacity: 0;
        transform: scale(0.8);
        transition: all 0.3s ease-in-out;
        height: 90%;
        overflow-y: auto;
    }

    .popup-card {
        padding: 20px;
        text-align: center;
    }

    .popup-card h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .popup-card p {
        font-size: 16px;
        margin-bottom: 20px;
    }

    #close-popup {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 18px;
    }

    #close-popup:hover {
        background-color: #0056b3;
    }

    /* previeww */
    .prev-label-style{
        font-weight: bold;
    }
    .prev-text-style{
        padding-left: 5px;
    }

</style>

<body>
    <?php include_once "header.php" ?>

    <div class='container my-2'>
        <h1 class='acc-for-heading mb-3'>RKDA Network</h1>
        <h4>Membership Application Form</h4>
        <p>If you’d like to join us, please complete the form below. We’ll arrange your interaction with a senior
            partner to confirm that you’ll get the most from RKDA Network and be a great contributor to our
            Network. Once you’re approved, we’ll be in touch to arrange for next steps.</p>



        <section class="signup-step-container">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-11">
                        <div class="wizard">
                            <div class="wizard-inner">
                                <div class="connecting-line"></div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab"
                                            aria-expanded="true"><span class="round-tab">1 </span> <i>Personal
                                                Details</i></a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab"
                                            aria-expanded="false"><span class="round-tab">2</span> <i>Business
                                                Details</i></a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span
                                                class="round-tab">3</span> <i>Experience</i></a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span
                                                class="round-tab">4</span> <i>Reffered By</i></a>
                                    </li>
                                </ul>
                            </div>

                            <form role="form" class="login-box" id="userPreAppDetails" onsubmit="savePreAppForm()">
                                <div class="tab-content" id="main_form">

                                    <div class="tab-pane active my-3 p-3 bg-gray-ipm" role="tabpanel" id="step1">
                                        <h5 class=''>Personal Details</h5>

                                        <div class="container p-5">

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="firstName">First Name:</label>
                                                        <input type="text" class="form-control" id="firstName"
                                                            name="fname">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="lastName">Last Name:</label>
                                                        <input type="text" class="form-control" id="lastName"
                                                            name="lname">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="email">Email:</label>
                                                        <input type="email" class="form-control" id="email"
                                                            name="mem_email">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="mobile">Mobile:</label>
                                                        <input type="tel" class="form-control" id="mobile"
                                                            name="mem_mobile">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="icaiMembershipNumber">ICAI Membership
                                                            Number:</label>
                                                        <input type="text" class="form-control"
                                                            id="icai_mem_number" name="icaiMembershipNumber">
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="default-btn next-step mt-0">Continue to
                                                        next step</button></li>
                                            </ul>
                                        </div>

                                    </div>


                                    <div class="tab-pane my-3 p-3 bg-gray-ipm" role="tabpanel" id="step2">
                                        <h5 class=''>Business Details</h5>

                                        <div class="container p-5">

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="businessName">Business Name:</label>
                                                        <input type="text" class="form-control" id="businessName"
                                                            name="b_name">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="firmRegistrationNumber">Firm Registration
                                                            Number:</label>
                                                        <input type="text" class="form-control"
                                                            id="firm_reg_num" name="firmRegistrationNumber">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="specialization">Specialization:</label>
                                                        <select class="form-control" id="specialization"
                                                            name="specialization">
                                                            <option value="Audit">Audit</option>
                                                            <option value="Tax">Tax</option>
                                                            <option value="Assurance">Assurance</option>
                                                            <option value="GST">GST</option>
                                                            <option value="Customs">Customs</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="website">Website:</label>
                                                        <input type="url" class="form-control" id="website"
                                                            name="website">
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label for="address">Address:</label>
                                                        <textarea class="form-control" id="address" name="address"
                                                            rows="1"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <ul class="list-inline pull-right">
                                                <li><button type="button"
                                                        class="default-btn prev-step mt-0">Back</button>
                                                </li>
                                                <li><button type="button"
                                                        class="default-btn next-step skip-btn  mt-0">Skip</button>
                                                </li>
                                                <li><button type="button"
                                                        class="default-btn next-step  mt-0">Continue</button></li>
                                            </ul>
                                        </div>
                                    </div>



                                    <div class="tab-pane my-3 p-3 bg-gray-ipm" role="tabpanel" id="step3">
                                        <h5 class=''>Experience</h5>

                                        <div class="container p-5">

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="yearOfIncorporation">Year of Incorporation:</label>
                                                        <input type="number" class="form-control"
                                                            id="yearOfIncorporation" name="yoi">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="typeOfFirm">Type of Firm:</label>
                                                        <select class="form-control" id="typeOfFirm" name="firm_typ">
                                                            <option value="Sole Proprietorship">Sole Proprietorship
                                                            </option>
                                                            <option value="Partnership">Partnership</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="yearsOfExperience">Years of Experience:</label>
                                                        <input type="number" class="form-control" id="yoe"
                                                            name="yearsOfExperience">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="totalPartners">Total Number of Partners:</label>
                                                        <input type="number" class="form-control" id="num_of_partners"
                                                            name="totalPartners">
                                                    </div>
                                                </div>
                                            </div>

                                            <p>* Enclosed Profile of the Firm </p>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button"
                                                        class="default-btn prev-step  mt-0">Back</button>
                                                </li>
                                                <li><button type="button"
                                                        class="default-btn next-step skip-btn  mt-0">Skip</button>
                                                </li>
                                                <li><button type="button"
                                                        class="default-btn next-step  mt-0">Continue</button></li>
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="tab-pane my-3 p-3 bg-gray-ipm" role="tabpanel" id="step4">
                                        <h5 class=''>Reffered By</h5>

                                        <div class="container p-5">

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="memberName">Name of Member/Firm:</label>
                                                        <input type="text" class="form-control" id="memberName"
                                                            name="firm_name">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="membershipNumber">Membership Number:</label>
                                                        <input type="text" class="form-control" id="membershipNumber"
                                                            name="mem_number">
                                                    </div>
                                                </div>
                                            </div>

                                            <ul class="list-inline pull-right">
                                                <li><button type="button"
                                                        class="default-btn prev-step btn-md mt-0">Back</button>
                                                </li>
                                                <!-- <li><button type="button" class="preview  mt-0" data-bs-toggle="popover"
                                                        data-bs-placement="bottom" data-bs-html="true"
                                                        id="preview">Preview</button>
                                                </li> -->
                                                <li><button type="submit"
                                                        class="default-btn next-step btn-md mt-0">Finish</button>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>


                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="popup-overlay">
        <div class="popup-container">
            <div class="popup-card">
                <div class='previewing-form ' id="previewing-form">
                    <div class="my-3 p-3 bg-gray-ipm">
                        <h5 class=''>Personal Details</h5>

                        <div class="container p-5">
                            <form>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group ">
                                            <label class="prev-label-style"  for="firstName">First Name:</label>
                                            <p id='fname' class='prev-text-style'>sanjana</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex">
                                        <div class="form-group d-flex">
                                            <label  class="prev-label-style" for="lastName">Last Name:</label>
                                            <p id='lname' class='prev-text-style'></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group d-flex">
                                            <label class="prev-label-style" for="email">Email:</label>
                                            <p id='email' class='prev-text-style'></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group d-flex">
                                            <label class="prev-label-style" for="mobile">Mobile:</label>
                                            <p id='mobile' class='prev-text-style'></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group d-flex">
                                            <label class="prev-label-style" for="icaiMembershipNumber">ICAI Membership Number:</label>
                                            <p id='icaiMembershipNumber' class='prev-text-style'></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="my-3 p-3 bg-gray-ipm">
                        <h5 class=''>Business Details</h5>

                        <div class="container p-5">
                            <form>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group d-flex">
                                            <label class="prev-label-style" for="businessName">Business Name:</label>
                                            <p id='businessName' class='prev-text-style'></p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group d-flex">
                                            <label  class="prev-label-style" for="firmRegistrationNumber">Firm Registration Number:</label>
                                            <p id='firmRegistrationNumber' class='prev-text-style'></p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="specialization">Specialization:</label>
                                            <select class="form-control" id="specialization" name="specialization">
                                                <option value="Audit">Audit</option>
                                                <option value="Tax">Tax</option>
                                                <option value="Assurance">Assurance</option>
                                                <option value="GST">GST</option>
                                                <option value="Customs">Customs</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="website">Website:</label>
                                            <input type="url" class="form-control" id="website" name="website">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="address">Address:</label>
                                            <textarea class="form-control" id="address" name="address"
                                                rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="my-3 p-3 bg-gray-ipm">
                        <h5 class=''>Experience</h5>

                        <div class="container p-5">
                            <form>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="yearOfIncorporation">Year of Incorporation:</label>
                                            <input type="number" class="form-control" id="yearOfIncorporation"
                                                name="yearOfIncorporation">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="typeOfFirm">Type of Firm:</label>
                                            <select class="form-control" id="typeOfFirm" name="typeOfFirm">
                                                <option value="Sole Proprietorship">Sole Proprietorship</option>
                                                <option value="Partnership">Partnership</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="yearsOfExperience">Years of Experience:</label>
                                            <input type="number" class="form-control" id="yearsOfExperience"
                                                name="yearsOfExperience">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="totalPartners">Total Number of Partners:</label>
                                            <input type="number" class="form-control" id="totalPartners"
                                                name="totalPartners">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p>* Enclosed Profile of the Firm </p>
                        </div>

                    </div>

                    <div class="my-3 p-3 bg-gray-ipm">
                        <h5 class=''>Reffered By</h5>

                        <div class="container p-5">
                            <form>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="memberName">Name of Member/Firm:</label>
                                            <input type="text" class="form-control" id="memberName" name="memberName">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="membershipNumber">Membership Number:</label>
                                            <input type="text" class="form-control" id="membershipNumber"
                                                name="membershipNumber">
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                    <button id="close-popup">Close</button>
                </div>

            </div>
        </div>
    </div>

    <?php include_once "footer.php" ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- <script>  var baseUrl = "<?= base_url() ?>";</script> -->
    <script>
        // ------------step-wizard-------------
        $(document).ready(function () {
            $('.nav-tabs > li a[title]').tooltip();

            //Wizard
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

                var target = $(e.target);

                if (target.parent().hasClass('disabled')) {
                    return false;
                }
            });

            $(".next-step").click(function (e) {

                var active = $('.wizard .nav-tabs li.active');
                active.next().removeClass('disabled');
                nextTab(active);

            });
            $(".prev-step").click(function (e) {

                var active = $('.wizard .nav-tabs li.active');
                prevTab(active);

            });
        });

        function nextTab(elem) {
            $(elem).next().find('a[data-toggle="tab"]').click();
        }
        function prevTab(elem) {
            $(elem).prev().find('a[data-toggle="tab"]').click();
        }


        $('.nav-tabs').on('click', 'li', function () {
            $('.nav-tabs li.active').removeClass('active');
            $(this).addClass('active');
        });


        // $(".preview").click(function (e) {
        //        $('.signup-step-container').hide();
        //        $('.previewing-form').show();

        // })


        const popupOverlay = document.querySelector(".popup-overlay");
        const popupContainer = document.querySelector(".popup-container");
        const closePopupButton = document.getElementById("close-popup");

        function openPopup() {
            popupOverlay.style.display = "flex";
            setTimeout(() => {
                popupContainer.style.opacity = "1";
                popupContainer.style.transform = "scale(1)";
            }, 100);
        }

        function closePopup() {
            popupContainer.style.opacity = "0";
            popupContainer.style.transform = "scale(0.8)";
            setTimeout(() => {
                popupOverlay.style.display = "none";
            }, 300);
        }

        // Automatically open the popup when the page loads
        $(".preview").click(function (e) {
            openPopup()
        });

        closePopupButton.addEventListener("click", closePopup);


        // function mapFormData(formData) {
        //     const mapping = {
        //         user_full_name: 'name',
        //         user_email: 'email'
           
        //     };

        //     const mappedData = {};
        //     for (let [key, value] of formData.entries()) {
        //         if (mapping[key]) {
        //             mappedData[mapping[key]] = value;
        //         }
        //     }
        //     return mappedData;
        // }
        function savePreAppForm() {
            event.preventDefault();

            const formData = new FormData(event.target);
            const fdata = {};
            for (let [key, value] of formData.entries()) {
                fdata[key] = value;
            }
            // Log form data to the console
            console.log('Form Data:', fdata);
            const dataForm=JSON.stringify(fdata)
            $.ajax({
                url: baseUrl + 'welcome/savePreAppForm',
                method: "POST",
                data:formData,
                contentType: false,
                processData: false,
                success: function (data) {
                    data = JSON.parse(data);
                    if (data.status == 200) {
                        console.log(data);
                    } else {
                        console.log('status not 200');
                    }
                   
                },
                error: function (err) {
                    console.log(err);
                }
            })
        }
    </script>
</body>

</html>