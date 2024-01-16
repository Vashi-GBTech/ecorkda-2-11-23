<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Ecovis</title>
    <!-- font-awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css cdn  -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/bootstrap.css">
    <!-- Bootstrap Dropdown Popper cdn -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>

    <!-- custom css link  -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

    <!-- jquery cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
        integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- bootstrap javascript cdn  -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <!-- oul carousel link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- animate css cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<style>
    .row {
        margin-right: 0px !important;
    }

    .parent {
        display: block;
        position: relative;
        float: left;
        line-height: 50px;
        /* background-color: #34495e; */
        /* border-right: #CCC 1px solid; */
        width: auto;

    }


    .parent a {
        margin: 10px;
        text-decoration: none;
    }

    .parent:hover>ul {
        display: block;
        position: absolute;
        height: 50vh;
        overflow-y: overlay;
        transition: transform 0.3s ease;
    }

    .parent:hover>.membership {
        margin-left: -180px !important;
    }

    .child {
        display: none;
    }

    .child li {
        background-color: lightgray;
        line-height: 40px;
        border-bottom: #CCC 1px solid;
        border-right: #CCC 1px solid;
        width: 100%;
    }

    .child li a {
        color: #000000;
    }

    .child {
        list-style: none;
        margin: 0;
        padding: 0px;
        min-width: 19em;
    }

    /* ul ul ul {
    left: 100%;
    top: 0;
    margin-left: 1px;
} */

    /* li:hover {
        color: crimson !important;
    } */

    .parent li:hover {
        background-color: #F0F0F0;
    }

    .expand {
        font-size: 12px;
        float: right;
        margin-right: 5px;
        /* transition: transform 0.3s ease; */

    }


    .parent:hover .expand {
        transform: rotate(-180deg);
        transition: transform 0.3s ease;
        */
    }

    .child {
        display: none;
    }

    /* Show child ul when parent li is hovered */
    .parent:hover .child {
        display: block;
    }

    .parent-li:hover {
        color: crimson !important;
    }

    /* For Webkit based browsers (e.g., Chrome, Safari) */
    ::-webkit-scrollbar {
        width: 5px;
    }


    ::-webkit-scrollbar-track {
        background: #f1f1f1;

    }


    ::-webkit-scrollbar-thumb {
        background: crimson;

    }

    .parent-li.underlineNav {
        text-decoration: underline;
    }
</style>

<body>
    <!-- <input type="hidden" id="base_url" value="<?php echo base_url(); ?>"> -->
    <header>
        <div class="row mx-0">

            <div
                class="align-items-center col-md-12 bg-danger contact-header d-flex justify-content-between px-4 py-1 small text-light">
                <div>
                    <a href="<?= base_url() ?>welcome/NewsLetter"
                        style="text-decoration: none; font-size:medium; font-weight: 500;" class="text-light"> <span><i
                                class="fa-solid fa-newspaper"></i></span> NewsLetter</a>
                    <a href="#" style="text-decoration: none; font-size:medium; font-weight: 500;"
                        class="text-light ml-3">
                        <span><i class="fa-solid fa-envelope"></i></span> mentor@rkca.in</a>

                </div>
                <div class='d-flex align-items-end'>
                    <div>
                        <p class='mb-0' id='user-p'>
                            <span class="user-icon"><i class="fas fa-user"></i></span>
                            <span id="userMail" style="font-weight: 500;">example@email.com</span>
                        </p>
                    </div>
                    <div>
                        <a href="<?= base_url() ?>login" class="btn btn-dark rounded-pill btn-sm text-light ml-3 login">
                            Login <i class="fas fa-sign-in-alt"></i></a>
                        <a href="<?= base_url() ?>login" class="btn btn-dark rounded-pill btn-sm text-light ml-3 logout"
                            style='display:none'>
                            Logout <i class="fas fa-sign-in-alt"></i></a>
                    </div>


                </div>
            </div>

        </div>

        <div class="align-items-center col-md-12 d-flex justify-content-between main-header">
            <div class="logo py-2 text-center">
                <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/ecovis-images/rkda-logo.png" alt="img"
                        id="img1"></a>
                <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/ecovis-images/rkda-logo.png" alt="logo"
                        class="cssanimation fadeInBottom" style="display:none; align-items:end;" id="img2"></a>
            </div>
            <div style="display:none;" class="w-50" id="searchbar_section">
                <div class="align-items-center d-flex px-4 searchbar ">
                    <input type="search" name="searchbar" placeholder="Search..."  id="searchbar"
                        class="bg-light pl-3 border-0 normalText form-control w-100">
                    <span id="closeSearchBar"><i class="fa-solid text-danger fa-xmark"></i></span>
                </div>
            </div>
            <div id="menu" class="menu" style="width: 60%; z-index:50;">
                <ul class="d-flex mb-0 justify-content-around list-unstyled align-items-center">
                    <a href="<?= base_url() ?>" style="margin-right:10px;">
                        <li id="home" class="">Home</li>
                    </a>
                    <a href="#" id="about_us_link" title="Please Click">
                        <li id="about_us" class="about_us">About Us <i class="fas fa-chevron-down"
                                style='font-size:12px'></i></li>
                    </a>
                    <!-- <a href="<?= base_url() ?>welcome/client_stories">
                            <li>Governance</li>
                        </a> -->
                    <li class="parent" id="work-together"><a href="#" class='parent-li'>Task Force<span
                                class="expand"><i class="fas fa-chevron-down"></i></span></a>
                        <ul class="child work-together">
                            <li><a href="<?= base_url() ?>accounting_task_force" class="">Accounting </a>
                            </li>
                            <li><a href="<?= base_url() ?>audit_task_force">Audit </a></li>
                            <li><a href="<?= base_url() ?>legal_task_force">Legal </a></li>
                            <li><a href="<?= base_url() ?>ma_task_force">Merchants & Aquisition </a></li>
                            <li><a href="<?= base_url() ?>tax_task_force">Governance Risk Compliance </a></li>
                            <li><a href="<?= base_url() ?>technology_task_force">Technology </a></li>
                            <li><a href="<?= base_url() ?>women_leadership_group">Women Leadership Group</a></li>
                            <li><a href="<?= base_url() ?>rkda_internship">RKDA International Internships</a></li>
                            <li><a href="<?= base_url() ?>partner_meetings">Partner Meetings</a></li>
                            <!-- <li><a href="#">International Service Offerings</a></li> -->
                            <!-- <li><a href="#">Multinational project news</a></li> -->
                            <li><a href="#">VAT/ Experts</a></li>
                            <li><a href="#">Vision 2030</a></li>
                            <li><a href="#">Workshops & Webinars</a></li>
                        </ul>
                    </li>
                    <!-- <a href="<?= base_url() ?>welcome/ourSolution">
                            <li>Why Us</li>
                        </a> -->
                    <li class="parent" id="why-us"><a href="#" class='parent-li'>Governance<span class="expand"><i
                                    class="fas fa-chevron-down"></i></span></a>
                        <ul class="child why-us">
                            <li><a href="<?= base_url() ?>qty_dev_board">Quality Development Board</a></li>
                            <li><a href="<?= base_url() ?>essentials">Membership Process</a></li>
                            <li><a href="<?= base_url() ?>qty_standards">Quality Standards</a></li>
                            <li><a href="<?= base_url() ?>qty_monitoring">Quality Monitoring</a></li>
                            <li><a href="<?= base_url() ?>siir">Self-Inspection & Interoffice Review</a></li>
                            <li><a href="<?= base_url() ?>service_portfolio">Service Portfolio</a></li>
                            <!-- <li><a href="technical_standards">Technical Standards</a></li> -->
                        </ul>
                    </li>
                    <a href="#" id="services_link" title="Please Click">
                        <li id="services">Our Capabilities <i class="fas fa-chevron-down" style='font-size:12px'></i>
                        </li>
                    </a>
                    <!-- <a href="<?= base_url() ?>team">
                            <li>Our team</li>
                        </a> -->

                    <!-- <div class="btn-group">
                            <a href="#" class="align-items-center btn d-flex dropdown-toggle w-100" style="padding:0px"
                                data-toggle="dropdown" aria-expanded="false">
                                Let's Connect
                            </a>
                            <div class="dropdown-menu toggled">
                                <a href="#"><button class="dropdown-item" type="button">Be a Partner
                                    </button></a>
                                <a href="#"><button class="dropdown-item" type="button">Carrier
                                        Path</button></a>
                                <a href="#"><button class="dropdown-item" type="button">Current
                                        vacancies</button></a>
                            </div>
                        </div> -->
                    <li class="parent" id="membership"><a href="#" class='parent-li'>Membership<span class="expand"><i
                                    class="fas fa-chevron-down"></i></span></a>
                        <ul class="child membership">
                            <li><a href="<?= base_url() ?>faq_new_partner">FAQ (New Partner)</a></li>
                            <li><a href="<?= base_url() ?>expansion_plan">Expansion Plan</a></li>
                            <li><a href="<?= base_url() ?>info_new_partners">Information about New Partners</a></li>
                            <li><a href="<?= base_url() ?>integration_checklist">Integration Checklist</a></li>
                            <li><a href="<?= base_url() ?>first_steps_checklist">First Steps Checklist</a></li>

                        </ul>
                    </li>
                    <a href="#" id="toggleSearch">
                        <li><span><i class="fa-solid text-danger fa-magnifying-glass"></i></span></li>
                    </a>
                </ul>

            </div>
            <span id="menu_icon" class="menu_icon mr-3 d-none" style="font-size: x-large;"><i
                    class="fa-solid fa-bars"></i></span>
        </div>
        </div>
        <div class='d-flex justify-content-end ninja-btn'>
            <div class="message-sender" id="message">
                <!-- <a href="" class="text-white"> -->
                    <p>Hey..Are You Interested to become a Member ?</p>
                <!-- </a> -->
            </div>
            <a href="<?= base_url() ?>preliminaryAppForm" id="rocketBtn" class="bg-danger text-white rounded-circle mr-3 d-flex align-items-center"
                style="margin-bottom: 50px; box-shadow: 0px 0px 14px 2px #a3a3a3;"><i class="p-3 fas fa-rocket rocket-icon"></i></a>
        </div>


        <!-- about us -->
        <div class=" row position-absolute " style="display: none; z-index: 6; right: 0; left: 0;" id="aboutUs_menu">
            <div class="col-md-4 pr-0 text-center" style="background: linear-gradient(0deg, #CD1432, #dc4f54);">
                <!-- <div class="bg-light mt-5 mx-auto px-2 py-2 rounded-circle" style="width: 111px;"> -->
                <!-- <img src="<?= base_url() ?>assets/images/ecovis_logoes/Ecovis_rkca_logo_ball2.png" alt=""
                        class="rounded-circle"> -->
                <!-- </div> -->
                <h4 class="text-light  mt-5">Let’s Connect</h4>
                <p class="mx-auto text-justify text-light mt-3 w-75" style='font-size: 13px;'>RKDA is an ICAI approved
                    network of Multidisciplinary CA firms in major cities of India. It is the first of its kind,
                    leveraging technology to work on the core competency of execution excellence in the CA profession.
                    This is augmented by AI/ML capabilities of IIT Engineers and the rigor of multidisciplinary
                    functions. The founding principle of RKDA is to provide value to all stakeholders. First, towards
                    the profession by ensuring RESPONSIBILITY. Second, towards its members by ensuring KNOWLEDGE. Third,
                    towards clients by enabling DEDICATION towards excellence, lastly to be ACCOUNTABLE to society at
                    large. RKDA India has a presence across twenty cities in India and has a team of 100+ partners and a
                    resource base of 1000+ professional staff. With access to international and national associates in
                    over 90 countries, it brings the capability of global expertise with local faces in your
                    neighbourhood.</p>
                <a href="<?= base_url() ?>welcome/contact_us"><button
                        class="btn header_connectBTN mb-4 font-weight-bold text-light">CONTACT US</button></a>
            </div>
            <div class="col-md-8 px-0 ourPresents">
                <div class='d-flex' style='flex-wrap:wrap;'>

                    <div class="ourValues pt-4 col-md-6">
                        <h3 class=" d-inline ml-4 mt-3">Our Values</h3>
                        <ul class="list-unstyled">
                            <li class="mt-4">
                                <div class="align-items-center mb-2 row">
                                    <div class="col-3 pr-0 text-center w-75">
                                        <img src="<?= base_url() ?>assets/ecovis_icons/r_in.png" class=""
                                            style="width: 84%;">
                                    </div>
                                    <div class="col-9 pl-0">
                                        <h4 class="mb-0 font-weight-normal" style="color:#4b4d4f !important"><span
                                                style="color: #CD1432;">R</span>esponsibility</h4>
                                        <p class="mb-0" style="color: #4b4d4f !important;">for profession</p>
                                    </div>
                                </div>
                            </li>
                            <li class="">
                                <div class="align-items-center mb-2 row">
                                    <div class="col-3 pr-0 text-center w-75">
                                        <img src="<?= base_url() ?>assets/ecovis_icons/k_in.png" class="" alt=""
                                            style="width: 88%;">
                                    </div>
                                    <div class="col-9 pl-0">
                                        <h4 class="mb-0 font-weight-normal" style="color:#4b4d4f !important"><span
                                                style="color: #CD1432;">K</span>nowledge</h4>
                                        <p class="mb-0" style="color: #4b4d4f !important;">In people</p>
                                    </div>
                                </div>
                            </li>
                            <li class="">
                                <div class="align-items-center mb-2 row">
                                    <div class="col-3 pr-0 text-center w-75">
                                        <img src="<?= base_url() ?>assets/ecovis_icons/c_in.png" style="width: 60%;"
                                            alt="">
                                    </div>
                                    <div class="col-9 pl-0">
                                        <h4 class="mb-0 font-weight-normal" style="color:#4b4d4f !important"><span
                                                style="color: #CD1432;">D</span>iligent</h4>
                                        <p class="mb-0" style="color: #4b4d4f !important;">towards Clients</p>
                                    </div>
                                </div>
                            </li>
                            <li class="">
                                <div class="align-items-center mb-2 row">
                                    <div class="col-3 pr-0 text-center w-75">
                                        <img src="<?= base_url() ?>assets/ecovis_icons/a_in.png" class="" alt=""
                                            style="width: 84%;">
                                    </div>
                                    <div class="col-9 pl-0">
                                        <h4 class="mb-0 font-weight-normal" style="color:#4b4d4f !important"><span
                                                style="color: #CD1432;">A</span>ccountable</h4>
                                        <p class="mb-0" style="color: #4b4d4f !important;">to Society</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 pt-4">
                        <div class='d-flex '>
                            <h3 class="font-weight-normal d-inline ml-1 "
                                style='margin-left: 22px !important;line-height: 41px;border-bottom: 2.5px solid;width:fit-content'>
                                Our Mission </h3>
                        </div>
                        <p style='' class='om-style pt-1'>We would be the number one ICAI Approved Professional Network
                            of
                            India enabled by our Technology Platform Providers FORUM(Website Link) to leverage AI/ML in
                            field of Accounting, Having reach to all the parts of Indian districts, Serve maximum number
                            of
                            MSME clients through member firms and be foremost contributor to Startup ECOSYSTEM Of India.
                        </p>

                    </div>
                    <div class="ourPresents pt-4 col-md-6">
                        <h3 class="font-weight-normal d-inline ml-4 mt-3" style="margin-top:70px">Our Presence </h3>
                        <ul class="list-unstyled">
                            <li class="justify-content-between mb-3 mt-4">
                                <div class="align-items-center row">
                                    <a href="<?= base_url() ?>ecovis_india"
                                        class="d-flex justify-content-between text-dark w-100"
                                        style=" text-decoration: none;">
                                        <div class="col-3 pr-0 text-center w-75">
                                            <i class="fa-solid fa-location-pin text-danger"
                                                style="font-size: 2.5rem; "></i>
                                        </div>
                                        <div class="col-9 pl-0">
                                            <span>Member firms</span>
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="justify-content-between mb-1">
                                <div class="align-items-center row">
                                    <a href="<?= base_url() ?>welcome/geographical_locations"
                                        class="d-flex justify-content-between text-dark w-100"
                                        style=" text-decoration: none;">

                                        <div class="col-3 pr-0 text-center w-75">
                                            <i class="fa-solid fa-earth-asia" style="font-size: 2.5rem; "></i>
                                        </div>
                                        <div class="col-9 pl-0">
                                            <span>Our Presence</span>
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <div class="ourPresents pt-4 col-md-6">
                        <h3 class="font-weight-normal d-inline ml-4 mt-3" style="margin-top:70px">Our Purpose</h3>
                        <!-- <ul class="list-unstyled">
                            <li class="justify-content-between mb-3 mt-4">
                                <div class="align-items-center row">
                                    <a href="<?= base_url() ?>welcome/ecovis_india"
                                        class="d-flex justify-content-between text-dark w-100"
                                        style=" text-decoration: none;">
                                        <div class="col-3 pr-0 text-center w-75">
                                            <i class="fa-solid fa-location-pin text-danger"
                                                style="font-size: 2.5rem; "></i>
                                        </div>
                                        <div class="col-9 pl-0">
                                            <span>Member firms</span>
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="justify-content-between mb-1">
                                <div class="align-items-center row">
                                    <a href="<?= base_url() ?>welcome/geographical_locations"
                                        class="d-flex justify-content-between text-dark w-100"
                                        style=" text-decoration: none;">

                                        <div class="col-3 pr-0 text-center w-75">
                                            <i class="fa-solid fa-earth-asia" style="font-size: 2.5rem; "></i>
                                        </div>
                                        <div class="col-9 pl-0">
                                            <span>Our Presence</span>
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul> -->

                    </div>


                </div>

            </div>



        </div>



        <!-- services  -->

        <div class="mx-0 row  position-absolute " style="display: none; z-index: 10;" id="services_menu">
            <div class="col-md-4 text-center" style="background: linear-gradient(0deg, #CD1432, #dc4f54);">
                <div class="mt-5 mx-auto px-2 py-2 rounded-circle" style="width: 210px;">
                    <!-- <img src="<?= base_url() ?>images/ecovis_logoes/Mentor_bi.png" alt="" class="rounded-circle w-100"> -->
                </div>
                <h4 class="text-light  mt-3">Let’s Connect</h4>
                <p class="mx-auto text-justify text-light w-75">The CA network synergizes AI technology with human
                    intelligence to conquer business hurdles and amplify capacities. Through this fusion, it navigates
                    complexities, resolves challenges, and unlocks new potentials, creating an empowered ecosystem
                    fostering growth, innovation, and adaptability in today's dynamic business landscape.
                </p>
                <button class="btn header_connectBTN font-weight-bold text-light">CONTACT US</button>
            </div>

            <div class="col-md-8 ourValues px-0">
                <!-- <div class="w-100 my-4">
                    <h3 class="font-weight-normal d-inline ml-4"> Centre of Excellence -COE </h3>
                    <div class="row mt-3">
                        <div class="col-md-6 col-sm-12">
                            <ul class="list-unstyled">
                                <a href="<?= base_url() ?>Strategy_Performance_Consulting_services"
                                    style="text-decoration: none;" class="text-dark">
                                    <li class="mb-1 serviceList">
                                        <div class="align-items-center row">
                                            <div class="col-3 pr-0 text-center w-75">
                                                <img src="<?= base_url() ?>assets/images/ecovis_logoes/Core-Creators-Logo-768x260.png"
                                                    class="" style="width: 75%;" alt="">
                                            </div>
                                            <div class="col-9 pl-0">
                                                <h5 class="mb-1 serviceName">Strategy and Performance Consulting</h5>
                                                <p class="mb-0 small">Goal-oriented service focuses on the gaps between
                                                    business and performance outcomes</p>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <ul class="list-unstyled">
                                <a href="<?= base_url() ?>LitigationLegalServices" style="text-decoration: none;"
                                    class="text-dark">
                                    <li class="mb-1 serviceList">
                                        <div class="align-items-center row">
                                            <div class="col-3 pr-0 text-center w-75  ">
                                                <img src="<?= base_url() ?>assets/images/ecovis_logoes/rkca-law-associates-lawyer-job-mumbai-1.png"
                                                    class="" style="width: 75%;" alt="">
                                            </div>
                                            <div class="col-9 pl-0">
                                                <h5 class="mb-1 serviceName">Legal and GRC Services</h5>
                                                <p class="mb-0 small">Aiding you with legal advises and policies</p>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 col-sm-12">
                            <ul class="list-unstyled mb-0">
                                <a href="<?= base_url() ?>Onshore_Offshore_Advisory" style="text-decoration: none;"
                                    class="text-dark">
                                    <li class="mb-1 serviceList">
                                        <div class="align-items-center row">
                                            <div class="col-3 pr-0 text-center w-75    ">
                                                <img src="<?= base_url() ?>assets/images/ecovis_logoes/rkda.png"
                                                    class="" style="width: 100%;" alt="">
                                            </div>
                                            <div class="col-9 pl-0">
                                                <h5 class="mb-1 serviceName">Business Support and Financial Reporting
                                                </h5>
                                                <p class="mb-0 small">Efficient business support is crucial for accurate
                                                    financial reporting and sustained organizational growth.</p>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                            </ul>

                        </div>
                        <div class="col-md-6 col-sm-12">
                            <ul class="list-unstyled mb-0">
                                <a href="<?= base_url() ?>Financial_and_Capital_Services" style="text-decoration: none;"
                                    class="text-dark">
                                    <li class="mb-1 serviceList">
                                        <div class="align-items-center row">
                                            <div class="col-3 pr-0 text-center w-75 ">
                                                <img src="<?= base_url() ?>assets/images/ecovis_logoes/margom.png"
                                                    class="" style="width: 100%;" alt="">
                                            </div>
                                            <div class="col-9 pl-0">
                                                <h5 class="mb-1 serviceName">Financial & Capital Services</h5>
                                                <p class="mb-0 small">Offering services to make your business
                                                    financially sound</p>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 col-sm-12">
                            <ul class="list-unstyled mb-0">
                                <a href="<?= base_url() ?>Digital_transformation" style="text-decoration: none;"
                                    class="text-dark">
                                    <li class="mb-1 serviceList">
                                        <div class="align-items-center row">
                                            <div class="col-3 pr-0 text-center w-75 ">
                                                <img src="<?= base_url() ?>assets/images/ecovis_logoes/gbtLogo.png"
                                                    class="" style="width: 75%;" alt="">
                                            </div>
                                            <div class="col-9 pl-0">
                                                <h5 class="mb-1 serviceName">Digital Transformations</h5>
                                                <p class="mb-0 small">Transform and foster your business with our tech
                                                    experts and Data analytics team</p>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>

                </div> -->
                <div class="row mx-0  justify-content-center">
                    <div class="col-lg-12 col-sm-11">
                        <div class="mt-3 mb-3">
                            <h2 class="text-center ">Practice Area At Glance</h2>

                        </div>
                        <div class="row mx-0 justify-content-around">

                            <div class="col-lg-4 col-md-6 col-sm-6 serviceColomn px-0 ">
                                <a href="<?= base_url() ?>LitigationLegalServices" class="text-dark"
                                    style="text-decoration: none;">
                                    <div class="text-center">
                                        <div class="mx-auto service_icons" style="width:70px">


                                            <img src="<?= base_url() ?>assets/new_icon_images/Legalb.png"
                                                class="index-service-logo" style="width:inherit" alt="">
                                        </div>
                                        <h4 class="offeringservicesHeading primaryHeading text-capitalize">Legal and GRC
                                            Services
                                        </h4>
                                        <p class="offeringservicesdetails">We create a platform to offer you legal
                                            services and
                                            consultancy.</p>
                                    </div>
                                </a>


                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 serviceColomn  px-0">
                                <a href="<?= base_url() ?>BusinessSupportandFinancialReporting" class="text-dark"
                                    style="text-decoration: none;">
                                    <div class="text-center">
                                        <div class="mx-auto service_icons" style="width:70px">
                                            <img src="<?= base_url() ?>assets/new_icon_images/BusinessSupportb.png"
                                                class="index-service-logo" style="width:inherit" alt="">
                                        </div>
                                        <h4 class="offeringservicesHeading primaryHeading text-capitalize">Business
                                            Support and
                                            Financial Reporting</h4>
                                        <p class="offeringservicesdetails">Offering accounting business support to grow
                                            your
                                            business.</p>
                                    </div>
                                </a>

                            </div>
                        </div>

                        <div class="row mx-0 justify-content-around">

                            <div class="col-lg-4 col-md-6 col-sm-6 serviceColomn px-0 ">
                                <a href="<?= base_url() ?>Strategy_Performance_Consulting_services" class="text-dark"
                                    style="text-decoration: none;">
                                    <div class="text-center">
                                        <div class="mx-auto service_icons  ">
                                            <!-- <div class=" w-75 mx-auto services_logo Strategy_Performance_Consulting_logo "></div> -->
                                            <img src="<?= base_url() ?>assets/ecovis_icons/Assurance.png"
                                                class="index-service-logo" style="width:inherit" alt="">
                                        </div>
                                        <h4 class="offeringservicesHeading primaryHeading">Strategy & Performance
                                            Consulting </h4>
                                        <p class="offeringservicesdetails">Giving you the certainty to drive open and
                                            straightforward development.</p>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="row mx-0  justify-content-around">
                            <div class="col-lg-4 col-md-6 col-sm-6 serviceColomn  px-0">
                                <a href="<?= base_url() ?>Digital_transformation" class="text-dark"
                                    style="text-decoration: none;">
                                    <div class="text-center">
                                        <div class="mx-auto service_icons" style="width:70px">
                                            <!-- <div class=" w-75 mx-auto Digital_Transformationb_logo services_logo"></div> -->

                                            <img src="<?= base_url() ?>assets/new_icon_images/Digital_Transformationb.png"
                                                class="index-service-logo" style="width:inherit" alt="">
                                        </div>
                                        <h4 class="offeringservicesHeading primaryHeading text-capitalize">Digital
                                            Transformation
                                        </h4>
                                        <p class="offeringservicesdetails">Transform and foster your business digitally
                                            using our
                                            digital transformation services.</p>
                                    </div>
                                </a>

                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 serviceColomn  px-0">
                                <a href="<?= base_url() ?>Financial_and_Capital_Services" class="text-dark"
                                    style="text-decoration: none;">
                                    <div class="text-center">
                                        <div class="mx-auto service_icons" style="width:70px">
                                            <!-- <div class=" w-75 mx-auto services_logo financial_capital_Services"></div> -->

                                            <img src="<?= base_url() ?>assets/ecovis_icons/Growth-Services.png"
                                                class="index-service-logo" style="width:inherit" alt="">
                                        </div>
                                        <h4 class="offeringservicesHeading primaryHeading text-capitalize">Financial &
                                            Capital
                                            Services </h4>
                                        <p class="offeringservicesdetails">We want to build a long-term value in the
                                            financial
                                            services business by transforming it from the ground up.</p>
                                    </div>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



    </header>
    <script> const baseUrl = "<?= base_url() ?>"; </script>
    <script>
        function resetChevrons() {
            $("#about_us i, #services i").removeClass('fa-chevron-up').addClass('fa-chevron-down');
        }

        $("#why-us, #work-together, #membership").hover(
            function () {
                $("#aboutUs_menu, #services_menu").slideUp();
                resetChevrons();
            },
            function () {
                // Optionally add code here for actions when leaving the elements
            }
        );

        $("#about_us_link").click(function (e) {
            e.preventDefault();
            $("#services_menu").slideUp();
            $("#aboutUs_menu").slideToggle();

            $("#about_us i").toggleClass('fa-chevron-down fa-chevron-up');
        });

        // $("#services").click(function () {
        //     $("#services_menu").slideToggle();
        //     $("#aboutUs_menu").slideUp();
        //     // $("#menu").slideUp();
        // });
        $("#services_link").click(function (e) {
            e.preventDefault();
            $("#aboutUs_menu").slideUp();
            $("#services_menu").slideToggle();

            $("#services i").toggleClass('fa-chevron-down fa-chevron-up');
        });

        $("#menu_icon").click(function () {
            $("#menu").slideToggle();
            // $("#aboutUs_menu").slideUp();
            // $("#services_menu").slideUp();
        });


        // toggleSearch 
        $("#toggleSearch").click(function () {
            $("#menu").slideToggle(function () {
                $("#searchbar_section").slideToggle();
                // $("#searchbar_section").css({"visibility":"visible"});
            });



        });
        $("#closeSearchBar").click(function () {
            $("#searchbar_section").slideToggle(function () {
                // $("#searchbar_section").css({"visibility":"hidden"});
                $("#menu").slideToggle();

            });
        });

        // $(document).mouseup(function(e) {
        //     if ($(e.target).closest("#menu").length === 0 && $(e.target).closest("#menu_icon").length === 0) {
        //         $("#menu").slideUp();
        //     }
        // });
        $(document).mouseup(function (e) {
            if ($(e.target).closest("#aboutUs_menu").length === 0 && $(e.target).closest("#about_us").length === 0 && $(e.target).closest("header").length === 0) {
                $("#aboutUs_menu").slideUp();
            }
        });
        $(document).mouseup(function (e) {
            if ($(e.target).closest("#services_menu").length === 0 && $(e.target).closest("#services").length === 0) {
                $("#services_menu").slideUp();
            }
        });
        let prevScrollPos = window.pageYOffset;
        window.onscroll = function () {
            let currentScrollPos = window.pageYOffset;
            if (prevScrollPos > currentScrollPos) {
                // Scrolling up

                $("#img1").show();
                $("#img2").hide();
            } else {
                // Scrolling down

                $("#img1").hide();
                $("#img2").show();

            }
            prevScrollPos = currentScrollPos;
        }

        $(document).ready(function () {
            $(".parent-link").click(function (e) {
                e.preventDefault();
                $(this).parent().toggleClass("opened");
                $(this).next('.child').slideToggle();

            });

            const userEmail = localStorage.getItem('user-email');
            // console.log(userEmail, 'userEmail');
            if (userEmail != undefined) {
                $('#userMail').text(userEmail);
            }
            const isLoggedIn = localStorage.getItem('isLoggedIn');
            // console.log(isLoggedIn, 'isLoggedIn');
            if (isLoggedIn == 'true') {
                $('.login').hide();
                $('.logout').show();
                $('#user-p').show();
            }
            else {
                $('.login').show();
                $('.logout').hide();
                $('#user-p').hide();
            }

        });

        $('.logout').click(function () {
            localStorage.setItem('isLoggedIn', 'false');
            window.location.href = "<?= base_url() ?>login";
            $('.login').show();
            $('.logout').hide();
            $('#user-p').hide();
        })
    </script>
    <script>
        const baseURL = "<?php echo base_url(); ?>";

        $(document).ready(function () {
            let activeNav = localStorage.getItem('activeNav');

            // console.log(window.location.href);
            if (window.location.href === baseURL) {

                localStorage.setItem('activeNav', '');
                $('#home').css({
                    // 'font-weight': 'bold',
                    'text-decoration': 'underline'
                })
            } else {
                // console.log('inside elsee');
                if (activeNav) {
                    $('.parent-li').removeClass('underlineNav');
                    $(activeNav).find('.parent-li').addClass('underlineNav');
                }

                function handleMenuClick(selector) {
                    // console.log('inside handlemeuu', selector);
                    $('.parent-li').removeClass('underlineNav');
                    let activeLinkSelector = '#' + $(selector).closest('.parent').attr('id');
                    $(activeLinkSelector + ' .parent-li').addClass('underlineNav');
                    // console.log(activeLinkSelector, 'activeLinkSelector');
                    localStorage.setItem('activeNav', activeLinkSelector);

                    // Apply style immediately
                    $('.parent-li').css('text-decoration', 'none'); // Reset all underlines
                    $(activeLinkSelector + ' .parent-li').css('text-decoration', 'underline');
                    let activeNav = localStorage.getItem('activeNav');

                }
                $('.child.membership a').on('click', function () {
                    handleMenuClick('#membership');
                });

                $('.child.work-together a').on('click', function () {
                    handleMenuClick('#work-together');
                });

                $('.child.why-us a').on('click', function () {
                    handleMenuClick('#why-us');
                });

            }
        });


    </script>

    <script>
       $(document).ready(function() {
  $("#rocketBtn").hover(function() {
    $("#message").addClass("visible");
  }, function() {
    $("#message").removeClass("visible");
  });

  $("#rocketBtn").click(function(e) {
    e.preventDefault();
    $("#message").addClass("animate-bounce");
    setTimeout(function() {
      $("#message").addClass("animate-pop");
    }, 600);
    setTimeout(function() {
      $("#message").removeClass("animate-bounce animate-pop");
    }, 1200);
  });
});

    $('.rocket-icon').click( function(){
        window.location.href='<?= base_url() ?>preliminaryAppForm';
    })

    </script>
</body>

</html>