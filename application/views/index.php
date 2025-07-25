<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKDA - Ecovis</title>
    <link rel="icon" href="<?= base_url()?>assets/images/ecovis_logoes/Ecovis_rkda_logo_ball.png" type="image/icon type">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        .client_stories_details {
            display: block;
            display: -webkit-box;
            /* margin: 0 auto; */
            /* color: #cf6824; */
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .client_stories_heading {
            display: block;
            display: -webkit-box;
            /* margin: 0 auto; */
            /* color: #cf6824; */
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;

        }
      
    </style>

</head>

<body>

    <!-- header -->
    <?php include_once "header.php" ?>
    
    
    <!-- ecovis banner  -->
    <div id="homebannner" class="carousel slide" style="height: 450px;" data-ride="carousel">
        <div class="carousel-inner h-100">
            <div class=" carousel-item active">
                <img class="d-block w-100" src="<?= base_url()?>assets/images/ecovis_banners/homepage_b1_ecovis_india.png" style="height: 450px;" alt="First slide">
                <!-- <img class="d-block w-100" src="<?=base_url()?>assets/ecovis-images/homepage_banner.jpg" style="height: 450px;" alt="First slide"> -->
                <div class="carousel-caption ">
                    <div class="animate__animated animate__fadeInDown">
                        <h1 style="font-family: 'Libre Baskerville', serif; font-size: 3.5rem;" class="">RKDA INDIA</h1>
                       <div class="d-flex justify-content-center"><h6 class="font-weight-normal w-50">Aspires to be  largest Contributor of professional services for Startup ECOSYSTEM Member Firms</h6>
                       </div> 
                        <a href="<?= base_url()?>welcome/ecovis_india"> <button class="btn text-light mt-5" style="border: 2px solid whitesmoke; background-color: transparent;">Our Firms</button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <img class="d-block w-100" src="<?= base_url()?>assets/images/ecovis_banners/homepage_b2_our_team.png" style="height: 450px;" alt="Second slide">
                <!-- <img class="d-block w-100" src="<?=base_url()?>assets/ecovis-images/careers_banner.png" style="height: 450px;" alt="Second slide"> -->
                <div class="carousel-caption ">
                    <div class="animate__animated animate__fadeInDown">
                        <h1 style="font-family: 'Libre Baskerville', serif; font-size: 2.5rem; color:transparent;">RKDA INDIA</h1>
                        <h3 class="font-weight-normal">The people who intensify our Business</h3>
                        <a href="<?= base_url()?>welcome/team"> <button class="btn text-light mt-5" style="border: 2px solid whitesmoke; background-color: transparent;">OUR TEAM</button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url()?>assets/images/ecovis_banners/homepage_b3_job_vaccancies.png" style="height: 450px;" alt="Third slide">
                <!-- <img class="d-block w-100" src="<?=base_url()?>assets/ecovis-images/homepage_banner.jpg" style="height: 450px;" alt="First slide"> -->
                <div class="carousel-caption ">
                    <div class="animate__animated animate__fadeInDown">
                        <h1 style="font-family: 'Libre Baskerville', serif; font-size: 2.5rem; color:transparent">RKDA INDIA</h1>
                        <h3 class="font-weight-normal">Build your future with us </h3>
                        <a href="<?= base_url()?>welcome/careers"> <button class="btn text-light mt-5" style="border: 2px solid whitesmoke; background-color: transparent;">CAREER PATHS</button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url()?>assets/images/ecovis_banners/lets_connect.png" style="height: 450px;" alt="Forth slide">
                <!-- <img class="d-block w-100" src="<?=base_url()?>assets/ecovis-images/homepage_banner.jpg" style="height: 450px;" alt="First slide"> -->
                <div class="carousel-caption">
                    <div class="animate__animated animate__fadeInDown">
                        <h1 style="font-family: 'Libre Baskerville', serif; font-size: 2.5rem; color:transparent">RKDA INDIA</h1>
                        <!-- <h3 class="font-weight-normal">Network with us</h3> -->
                        <a href="<?= base_url()?>welcome/careers"> <button class="btn text-light mt-5" style="border: 2px solid whitesmoke; background-color: transparent;">LET'S CONNECT</button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?=base_url()?>assets/images/ecovis_banners/mentor_bi.png" style="height: 450px;" alt="Fifth slide">
                <!-- <img class="d-block w-100" src="<?=base_url()?>assets/ecovis-images/homepage_banner.jpg" style="height: 450px;" alt="First slide"> -->
                <div class="carousel-caption ">
                    <div class="animate__animated animate__fadeInDown">
                        <img src="<?= base_url()?>assets/images/ecovis_logoes/Mentor_bi.png" class="w-25 mb-3 mt-4" style="min-width: 120px;" alt="">
                        <!-- <h1 style="font-family: 'Libre Baskerville', serif; font-size: 2.5rem; color:transparent">RKDA  INDIA</h1> -->
                        <h3 class="font-weight-normal">An initiative for Business Transformation</h3>

                        <!-- <p class="normalText">An initiative for Business Transformation</p> -->
                        <!-- <h3 class="font-weight-normal">Network with us</h3> -->
                        <a href="<?= base_url()?>welcome/careers"> <button class="btn text-light mt-3" style="border: 2px solid whitesmoke; background-color: transparent;">EXPLORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev " href="#homebannner" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#homebannner" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>


    </div>
    
    


    <!-- banner problem solving drop down  -->
    <div class="" id="Business_in_India">
        
    </div>
   

   
    <div id="glance-div">
    <div class="my-5 ">
        <h2 class="text-center ">Practice Area At Glance</h2>
    
    </div>
    <div class="row mx-0 justify-content-center">
        <div class="col-lg-12 col-sm-11">
            <div class="row mx-0 justify-content-around">

                <div class="col-lg-4 col-md-6 col-sm-6 serviceColomn ">
                    <a href="<?= base_url()?>LitigationLegalServices" class="text-dark" style="text-decoration: none;">
                        <div class="text-center">
                            <div class="mx-auto service_icons"  style="width:70px">
                                <!-- <div class=" w-75 mx-auto services_logo Legalb_logo"></div> -->

                                <img src="<?= base_url()?>assets/new_icon_images/Legalb.png" class="index-service-logo"  style="width:inherit" alt="">
                            </div>
                            <h4 class="offeringservicesHeading primaryHeading text-capitalize">Legal and GRC Services
                            </h4>
                            <p class="offeringservicesdetails">We create a platform to offer you legal services and
                                consultancy.</p>
                        </div>
                    </a>


                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 serviceColomn ">
                    <a href="<?= base_url()?>BusinessSupportandFinancialReporting" class="text-dark" style="text-decoration: none;">
                        <div class="text-center">
                            <div class="mx-auto service_icons"  style="width:70px">
                                <!-- <div class=" w-75 mx-auto businessSupport_logo services_logo"></div> -->
                                <img src="<?= base_url()?>assets/new_icon_images/BusinessSupportb.png" class="index-service-logo"  style="width:inherit" alt="">
                            </div>
                            <h4 class="offeringservicesHeading primaryHeading text-capitalize">Business Support and
                                Financial Reporting</h4>
                            <p class="offeringservicesdetails">Offering accounting business support to grow your
                                business.</p>
                        </div>
                    </a>

                </div>
            </div>

            <div class="row mx-0 justify-content-around">

                <div class="col-lg-4 col-md-6 col-sm-6 serviceColomn ">
                    <a href="<?= base_url()?>Strategy_Performance_Consulting_services" class="text-dark"
                        style="text-decoration: none;">
                        <div class="text-center">
                            <div class="mx-auto service_icons  ">
                                <!-- <div class=" w-75 mx-auto services_logo Strategy_Performance_Consulting_logo "></div> -->
                                <img src="<?= base_url()?>assets/ecovis_icons/Assurance.png" class="index-service-logo"  style="width:inherit" alt="">
                            </div>
                            <h4 class="offeringservicesHeading primaryHeading">Strategy & Performance Consulting </h4>
                            <p class="offeringservicesdetails">Giving you the certainty to drive open and
                                straightforward development.</p>
                        </div>
                    </a>

                </div>
            </div>
            <div class="row mx-0  justify-content-around">
                <div class="col-lg-4 col-md-6 col-sm-6 serviceColomn ">
                    <a href="<?= base_url()?>Digital_transformation" class="text-dark" style="text-decoration: none;">
                        <div class="text-center">
                            <div class="mx-auto service_icons"  style="width:70px">
                                <!-- <div class=" w-75 mx-auto Digital_Transformationb_logo services_logo"></div> -->

                                <img src="<?= base_url()?>assets/new_icon_images/Digital_Transformationb.png" class="index-service-logo"  style="width:inherit"
                                    alt="">
                            </div>
                            <h4 class="offeringservicesHeading primaryHeading text-capitalize">Digital Transformation
                            </h4>
                            <p class="offeringservicesdetails">Transform and foster your business digitally using our
                                digital transformation services.</p>
                        </div>
                    </a>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 serviceColomn ">
                    <a href="<?= base_url()?>Financial_and_Capital_Services" class="text-dark" style="text-decoration: none;">
                        <div class="text-center">
                            <div class="mx-auto service_icons"  style="width:70px">
                                <!-- <div class=" w-75 mx-auto services_logo financial_capital_Services"></div> -->

                                <img src="<?= base_url()?>assets/ecovis_icons/Growth-Services.png" class="index-service-logo"  style="width:inherit" alt="">
                            </div>
                            <h4 class="offeringservicesHeading primaryHeading text-capitalize">Financial & Capital
                                Services </h4>
                            <p class="offeringservicesdetails">We want to build a long-term value in the financial
                                services business by transforming it from the ground up.</p>
                        </div>
                    </a>

                </div>
            </div>

        </div>
    </div>
    </div>



    <!-- Client stories  -->
    <div class="mainHeading text-center  mt-5" id="client_Stories">
        <h2 class="text-capitalize mainHeading mb-5">Know Us through Our Clients</h2>
    </div>
    <div class=" owl-carousel owl-theme mt-4 mb-0 position-relative">
        <div class="1 item  client_story">
            <div class=" float-right">
                <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c1_baggingoutcomes_r.jpg" class="w-100 client_stories_images" alt="">
                <div class="pb-3 pt-4 px-4">
                    <h5 class="client_stories_heading text-center">Combined efforts bagging successful outcomes!</h5>
                    <p class="client_stories_details text-justify">The main motive of our company which is completely aimed at is to render professional services to its potential clients from different fields of the varied economy sectors.</p>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url()?>welcome/clientStoriesDetailPage1"><span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span></a>
                    </div>
                    <!-- <a href="#" style="text-decoration: none;">Read More</a> -->
                </div>


            </div>
        </div>
        <div class="2 item  client_story">
            <div class=" float-right">
                <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c2_lendinghand_r.jpg" class="w-100 client_stories_images" alt="">

                <!-- <img src="<?=base_url()?>assets/ecovis-images/our_team_banner.png" class="w-100" alt=""> -->
                <div class="pb-3 pt-4 px-4">
                    <h5 class="client_stories_heading text-center">A Lending Hand for the procuration of the client!</h5>
                    <p class="client_stories_details text-justify mb-2">With the mission of owning and operating high-quality wireless infrastructure sites in stable markets, PTI was established in the year 2013.</p>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url()?>welcome/clientStoriesDetailPage2"> <span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span></a>
                    </div>
                    <!-- <a href="#" style="text-decoration: none;">Read More</a> -->
                </div>


            </div>
        </div>
        <div class="3 item  client_story">
            <div class=" float-right">
                <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c3_Facilitationofcollective_r.png" class="w-100 client_stories_images" alt="">


                <!-- <img src="<?=base_url()?>assets/ecovis-images/our_team_banner.png" class="w-100" alt=""> -->
                <div class="pb-3 pt-4 px-4">
                    <h5 class="client_stories_heading text-center">Facilitation of collective outsources accounting, local tax compliance, and company formation services!</h5>
                    <p class="client_stories_details text-justify mb-2">The client is a subsidiary of a multinational company based in Turkey that functions in various fields of batteries, chargers, accessories for motive, etc.</p>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url()?>welcome/clientStoriesDetailPage3"> <span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span></a>

                        <!-- <span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span> -->
                    </div>
                    <!-- <a href="#" style="text-decoration: none;">Read More</a> -->
                </div>


            </div>
        </div>
        <div class="4 item  client_story">
            <div class=" float-right">
                <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c4_facilitating_r.png" class="w-100 client_stories_images" alt="">

                <!-- <img src="<?=base_url()?>assets/ecovis-images/our_team_banner.png" class="w-100" alt=""> -->
                <div class="pb-3 pt-4 px-4">
                    <h5 class="client_stories_heading text-center">Facilitating assistance for the expansion of Spanish automotive components producer.</h5>
                    <p class="client_stories_details text-justify mb-2">Our consumer could be a major transnational company within the automotive sector, with varied plants in Spain that manufacture automotive components. </p>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url()?>welcome/clientStoriesDetailPage4"> <span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span></a>

                        <!-- <span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span> -->
                    </div>
                    <!-- <a href="#" style="text-decoration: none;">Read More</a> -->
                </div>


            </div>
        </div>
        <div class="5 item  client_story">
            <div class=" float-right">
                <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c5_renderingextensive_r.png" class="w-100 client_stories_images" alt="">

                <!-- <img src="<?=base_url()?>assets/ecovis-images/our_team_banner.png" class="w-100" alt=""> -->
                <div class="pb-3 pt-4 px-4">
                    <h5 class="client_stories_heading text-center">Rendering extensive start-up services to our clients!</h5>
                    <p class="client_stories_details text-justify mb-2">KEO Films, which had recently won a contract to make an Australian adaptation of a UK TV series,</p>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url()?>welcome/clientStoriesDetailPage5"> <span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span></a>

                        <!-- <span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span> -->
                    </div>
                    <!-- <a href="#" style="text-decoration: none;">Read More</a> -->
                </div>


            </div>
        </div>
        <div class="6 item  client_story">
            <div class=" float-right">
                <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c6_assisstanceprovided_r.png" class="w-100 client_stories_images" alt="">

                <!-- <img src="<?=base_url()?>assets/ecovis-images/our_team_banner.png" class="w-100" alt=""> -->
                <div class="pb-3 pt-4 px-4">
                    <h5 class="client_stories_heading text-center">Assistance provided to electrical contractors for avoiding double taxation.</h5>
                    <p class="client_stories_details text-justify mb-2">Our client is a massive electrical contracting business located in New Zealand. </p>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url()?>welcome/clientStoriesDetailPage6"> <span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span></a>

                        <!-- <span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span> -->
                    </div>
                    <!-- <a href="#" style="text-decoration: none;">Read More</a> -->
                </div>


            </div>
        </div>
        <!-- <div class="item border p-4 client_story">
            <h5 class="">Combined efforts bagging successful
                outcomes!</h5>
            <p>The main motive of our company which is completely aimed at is to render professional services to its
                potential clients from different fields of the varied economy sectors. Out of the services facilitated
                so far, in the year 2015, one of our clients in need of the services was a non-profit organization whose
                functionality was for the accommodation services, gym facilities, social events, restaurants and sports
                events, etc. <a href="#" style="text-decoration: none;">Read More</a></p>
        </div>
        <div class="item border p-4 client_story">
            <h5 class="">Combined efforts bagging successful
                outcomes!</h5>
            <p>The main motive of our company which is completely aimed at is to render professional services to its
                potential clients from different fields of the varied economy sectors. Out of the services facilitated
                so far, in the year 2015, one of our clients in need of the services was a non-profit organization whose
                functionality was for the accommodation services, gym facilities, social events, restaurants and sports
                events, etc. <a href="#" style="text-decoration: none;">Read More</a></p>
        </div>
        <div class="item border p-4 client_story">
            <h5 class="">Combined efforts bagging successful
                outcomes!</h5>
            <p>The main motive of our company which is completely aimed at is to render professional services to its
                potential clients from different fields of the varied economy sectors. Out of the services facilitated
                so far, in the year 2015, one of our clients in need of the services was a non-profit organization whose
                functionality was for the accommodation services, gym facilities, social events, restaurants and sports
                events, etc. <a href="#" style="text-decoration: none;">Read More</a></p>
        </div>
        <div class="item border p-4 client_story">
            <h5 class="">Combined efforts bagging successful
                outcomes!</h5>
            <p>The main motive of our company which is completely aimed at is to render professional services to its
                potential clients from different fields of the varied economy sectors. Out of the services facilitated
                so far, in the year 2015, one of our clients in need of the services was a non-profit organization whose
                functionality was for the accommodation services, gym facilities, social events, restaurants and sports
                events, etc. <a href="#" style="text-decoration: none;">Read More</a></p>
        </div> -->

    </div>
    <div class="text-center">
        <a href="<?= base_url()?>welcome/client_stories"><button class="badge-pill btn btn-danger font-weight-bold mb-5 px-5">Explore All</button></a>
    </div>

    <!-- footer  -->
    <?php include_once "footer.php" ?>


    <script>
        $("#indexProblem").click(function() {
            $("#indexProblemDD").slideToggle("fast");
        });
    </script>

    <!-- oul carousel javascript cdn  -->
    <script src="<?= base_url()?>assets/bootstrap/js/javascript.js"></script>
    <!-- <script src="<?=base_url()?>assets/js/javascript.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script> -->
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            navText: ["<div class='nav-btn prev-slide bg-light prenavigate'> <i class='fa-solid fa-chevron-left text-danger'></i></div>", "<div class='nav-btn next-slide bg-light postnavigate'> <i class='fa-chevron-right fa-solid text-danger'></i></div>"],

            autoplay: false,
            autoplayTimeout: 3000,
            autoWidth: false,
            autoplayHoverPause: true,
            smartSpeed: 1300,
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1024: {
                    items: 3
                },
                1440: {
                    items: 4
                }
            }
        })



        $("#servicebtn").click(function() {
            $(".FIRSTserviceDD").slideDown();
        });

        function showDD(id, name) {
            $("#servicebtn").attr("attr-selected", id);
            $(".baseofselectedService").slideUp();
            $("#servicebtn").text('').text(name);

        }

        function showchildDD(id) {
            $(".baseofselectedService").hide();
            var childId = $("#" + id).attr('attr-selected');
            $("#" + childId).slideDown();
        }

        $(document).mouseup(function(e) {
            if ($(e.target).closest(".baseofselectedService").length === 0) {
                $(".baseofselectedService").slideUp();
                $(".FIRSTserviceDD").slideUp();
            }
        });
    </script>
</body>

</html>