<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKDA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" >

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<style>

    body {
        display: flex;
        flex-direction: column;
        overflow-x: hidden;
    }
    body {
        font-family: "Poppins", serif !important;
        /* font-weight: 500; */
        font-style: normal;
        }

    .header-container {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 100;
        background: #fff;
    }
    .header-container .top-bar {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        gap: 1.25rem;
        padding: 0.05rem clamp(1rem, 5vw, 3rem);
        background: #dc143c;
    }
    
    .header-container .top-bar a {

        color: #fff;
    }
    
    .header-container .top-bar span {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.85rem;
    }

    header {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: space-between;
        /* padding: 12px 24px; */
        position: relative;
        padding: .5rem clamp(1rem, 5vw, 1.5rem);
        /* overflow-x: hidden; */
    }

    /* header .logo-img{
        margin-left: 2rem;
    } */

    header nav {
        display: flex;
        align-items: center;
        position: relative;
        /* overflow: hidden; */
    }
    header nav li {
        list-style: none;
    }

    header nav li a {
        white-space: nowrap;
    }
    a {
        text-decoration: none !important;
    }


    nav li {
        color: black;
        background: white;
        display: block;
        position: relative;
        text-decoration: none;
        transition-duration: 0.5s;
        padding: .2rem 1.5rem;
    }

    nav li a {
        color: black !important;
    }

    nav li:hover {
        /* background: red; */
        cursor: pointer;
    }

    .more-options {
        font-size: 1.5rem;
        padding: 0;
    }

    .red-btn {
        background-color: #ffbdc8ba;
    color: #d83b59;
    padding: 12px 15px;
    transition: .3s;
    border-radius: 10px !important;
    /* opacity: 0; */
    font-weight: 600;
    font-size: .9vw;
        /* opacity: 0; */
    }

    .red-btn:hover {
        color: white;
        background-color: crimson;
        /* border-color: #df2c2c; */
    }
    .active-header a {
        border-bottom: 2px solid #000;
    }

    .menu-section {
        position: fixed;
        top: 5.4rem;
        right: clamp(1rem, 5vw, 0rem);
        transform: translateX(400px);
        border-radius: 5px;
        background: #fff;
        z-index: 100;
        overflow: hidden;
        transition: transform .3s ease;
        width: min(200px, calc(100dvw - 1rem));
        border: 1px solid #0003;
    }

    .menu-section li {
        padding: 0.5rem 1rem;
        transition-duration: 0s;
        font-size: 0.9rem;
    }
    .menu-section li:hover {
        background: #0001;
    }


</style>
<body class=''  >
    <div class="header-container">
        <div class="top-bar">
            <a href="mailto:audit@rkda.com"><i class="fa-solid fa-envelope"></i></a>
            <a href="https://www.linkedin.com/company/ecovisrkca/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            
        </div>
        <header>
            <a class="logo-img" href="<?= base_url() ?>landing_page"><img src="<?= base_url() ?>assets/rkda/rkda-new-logo.png" alt="logo" class="d-inline-block align-top" style="width: 20% !important;" ></a>

            <nav>
                <li class="nav-item d-none d-lg-block active-header">
                    <a class="nav-link"  href="<?= base_url() ?>landing_page">Home</a>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" href="<?= base_url() ?>#about">About Us</a>
                </li>
                <li class="nav-item d-none d-lg-block" id="loginSuperCA">
                    <a class="nav-link" href="<?= base_url() ?>superCa">SuperCA</a>
                </li>
                <li class="nav-item d-none d-lg-block" id="loginSignupLink">
                    <a class="nav-link" href="<?= base_url() ?>rkda_login">Login/Signup</a>
                </li>

                <li class="nav-item more-options" id="navbarDropdown">
                    <span class="fas fa-bars"></span>
                </li>

                <div class="menu-section shadow">
                    <a href="<?= base_url() ?>task_force_new"> <li>Task Force</li></a>
                    <a href="<?= base_url() ?>governance_sub">   <li>Governance</li></a>
                    <a href="<?= base_url() ?>capabilities">   <li>Capabilities</li></a>
                    <a href="<?= base_url() ?>new_membership">  <li>Membership</li></a>
                    <a href="<?= base_url() ?>#needHelp">  <li>Contact us</li></a>
                </div>
            </nav>
        </header>
    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>


<script>
$(document).ready(function () {
  var path = window.location.pathname;

  var lastSegment = path.substring(path.lastIndexOf('/') + 1);

  $('a.nav-link').each(function () {
    var href = $(this).attr('href');
    var linkSegment = href.substring(href.lastIndexOf('/') + 1);
     console.log(lastSegment,linkSegment);
    if (lastSegment === linkSegment) {
      $(this).parent().addClass('active-header');
    } else {
      $(this).parent().removeClass('active-header');
    }
  });

  $('a.nav-link').on('click', function () {
    $('a.nav-link').parent().removeClass('active-header');
    $(this).parent().addClass('active-header');
  });
});

let menuBtn = document.querySelector('#navbarDropdown');
let menuBtnClicked = false;

// Function to handle opening and closing the menu
menuBtn.onclick = (event) => {
    event.stopPropagation(); // Prevent click event from bubbling up to the document
    menuBtnClicked = !menuBtnClicked;

    if (menuBtnClicked) {
        document.querySelector('.menu-section').style.transform = 'translateX(0px)';
    } else {
        document.querySelector('.menu-section').style.transform = 'translateX(400px)';
    }
};

// Function to handle clicks outside the menu
document.addEventListener('click', (event) => {
    let menuSection = document.querySelector('.menu-section');
    
    // Check if the click happened outside the menu and the button
    if (!menuSection.contains(event.target) && !menuBtn.contains(event.target)) {
        if (menuBtnClicked) {
            menuBtnClicked = false;
            menuSection.style.transform = 'translateX(400px)'; // Close the menu
        }
    }
});


</script>
</body>
</html>