<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKDA - Contact us</title>    
    
<!-- custom css link  -->
<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <style>

    #location_icon {
        font-size: 50px;
        margin-right: 8%;
        margin-top: 5px;
        color: #cd1432;
    }

    .locations {
        margin-left: 25%;
        margin-top: 12%;
    }

    #comm_icon {
        font-size: 50px;
        /* color: #cd1432;
        margin: 15px; */
    }

    .communication {
        margin-left: 25%;
        margin-top: 10%;
    }

    .lets_connect {
        background-color: #cd1432;
        height: 30%;
        margin: 10px;
    }

    .lets_connect_button {
        background-color: transparent;
        border-radius: 5px;
        width: 15%;
        height: 15%;
        color: white;
        margin-top: 0px;
        border: 1px solid white;
        justify-content: center;
    }
</style>
</head>

<body>

    <!-- header -->
    <?php include_once "header.php" ?>

    <!-- banner   -->
    <div class="banner ">
        <img src="<?=base_url()?>assets/ecovis-images/careers_bannercroped.png" class="w-100" alt="">

        <div class="bannerDD pb-4 pt-2">
            <h3 class="text-center text-light mt-3">
                Let’s Connect
            </h3>
            <div class="font-weight-bold mb-2 mt-4 mx-auto problemDD py-2 text-light text-center" style="width: 60%;">
                <p class="mb-0">Career routes aren't direct all the time. We enroll a different blend of people by
                    taking a
                    gander at your true capacity and desire. Our wide scope of administration and industry
                    specialisms guarantees there's </p>
            </div>

        </div>

        <div class="justify-content-around mt-5 mx-0 row">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="mb-4 mt-4 text-center">Job Application</h3>
                        <form action="" class="form-group" method="post">
                            <input type="text" name="" id="" class="form-control bg-light box_shadow p-2  mx-auto w-75"
                                placeholder="Name">
                            <input type="text" name="" id="" class="form-control bg-light box_shadow p-2  mt-4 mx-auto w-75"
                                placeholder="Mobile No.">
                            <input type="text" name="" id="" class="form-control bg-light box_shadow p-2  mt-4 mx-auto w-75"
                                placeholder="Email">
                            <select name="functional_area" id="functional_area"
                                class="form-control box_shadow mt-4 bg-light p-2  mx-auto w-75">
                                <option>Functional Area</option>
                                <option>Functional Area</option>
                                <option>Functional Area</option>
                                <option>Functional Area</option>
                            </select>
                            <input type="file" name="" id="" class="form-control bg-light box_shadow p-2  mt-4 mx-auto w-75"
                                placeholder="Upload CV in Doc or Pdf format">
                            <button type="submit"
                                class="form-control box_shadow mt-5 border-0 bg-danger mt-4 text-light font-weight-bold mx-auto w-25"
                                style="box-shadow: 0px 2px 4px 0px gray;">SUBMIT</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="locations d-flex align-items-center">
                            <i class="fa-solid fa-location-dot" id="location_icon"></i>
                            <a href="<?=base_url()?>welcome/ecovis_india">
                                <button type="submit" class="bg-danger box_shadow btn font-weight-bold  text-light">VIEW OUR
                                    LOCATIONS</button>
                            </a>
                        </div>
                        <div class="communication">
                            <i class="fa-envelope fa-solid mx-3 text-danger" id="comm_icon"></i>
                            <i class="fa-brands mx-3 text-danger fa-linkedin" id="comm_icon"></i>
                            <i class="fa-brands mx-3 text-danger fa-instagram" id="comm_icon"></i>
                            <i class="fa-brands mx-3 text-danger fa-facebook" id="comm_icon"></i>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="row justify-content-around mx-0">
            <div class="col-md-9">
                <h4 class="mb-4 mt-4 text-center">Want to know more about us?Leave us a message</h3>
                    <form action="" class="form-group mb-5" method="post">
                        <div class="d-flex justify-content-between mb-5">
                            <input type="text" name="email" id="email" class="form-control bg-light box_shadow ml-4" style="width:40% !important"  placeholder="Email"
                            style="margin-right:15px;">
                            <div class="d-flex justify-content-between" style="width:55% !important">
                                <input type="text" name="first_name" id="first_name" class="form-control box_shadow bg-light mr-3"
                                placeholder="First Name">
                            <input type="text" name="last_name" id="last_name" class="form-control box_shadow bg-light "
                                placeholder="Last Name">
                            </div>
                       
                        </div>
                        
                        <span style="font-size:20px;">Your message or query : </span>
                        <textarea class="form-control box_shadow bg-light mt-2 mb-3" rows="3" style=" border-radius: 6px;"></textarea>
                        <p style="font-size:20px;" class="mb-2 text-center">Our team will get in touch with you as soon as possible</p>
                        <div class="text-center">
                        <button type="submit" class="bg-danger btn box_shadow font-weight-bold text-light" style="width: 12%;">SUBMIT</button>

                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-6">
                           
                        </div>
                    </div>
            </div>

        </div>
    </div>
    <!-- footer  -->
    <?php include_once "footer.php" ?>

</body>

</html>

