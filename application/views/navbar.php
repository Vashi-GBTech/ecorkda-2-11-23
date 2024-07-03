<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKDA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" >

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
    </head>
<style>
    body{
    min-height: 100vh;
    /* background-color: #1a1e21; */
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    /* font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
    overflow-x:hidden;
    }
    nav{
        background-color: white;
        /* box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.1); */
    }
    nav ul{
        width: 100%;
        list-style: none;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }
    nav li{
        height: 50px;
    }
    nav a{
        height: 100%;
        padding: 0 20px;
        text-decoration: none;
        display: flex;
        align-items: center;
        color: black;
        font-size:1rem
    }
    .hideOnMobile:hover{
        background-color: #f0f0f0;
        border-radius:50px;
    }
    nav li:first-child{
        /* margin-right: auto; */
    }
    .sidebar{
        position: fixed;
        top: 0;
        right: 0;
        height: 100vh;
        width: 250px;
        background-color: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(12px);
        box-shadow: -10px 0 10px rgba(0, 0, 0, 0.1);
        list-style: none;
        display: none;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
    }
    .sidebar li{
        width: 100%;
    }
    .sidebar a{
        width: 100%;
    }
    .menu-button{
        display: none;
    }
    @media(max-width: 800px){
        .hideOnMobile{
            display: none;
        }
        .menu-button{
            display: block;
        }
    }
    @media(max-width: 400px){
        .sidebar{
            width: 100%;
        }
    }

    a {
    text-decoration: none;
    }

    nav {
        /* font-family: monospace; */
    }

    ul {
    background: white;
        list-style: none;
        margin: 0;
        padding-left: 0;
    }

    li {
        color: black;
    background: white;
        display: block;
        float: left;
        padding: .2rem;
        position: relative;
        text-decoration: none;
    transition-duration: 0.5s;
    }
    
    li a {
    color: black;
    }

    li:hover {
        /* background: red; */
        cursor: pointer;
    }

    ul li ul {
        background: orange;
        visibility: hidden;
    opacity: 0;
    min-width: 5rem;
        position: absolute;
    transition: all 0.5s ease;
    margin-top: 1rem;
        left: 0;
    display: none;
    }

    ul li:hover > ul,
    ul li ul:hover {
    visibility: visible;
    opacity: 1;
    display: block;
    }

    ul li ul li {
        clear: both;
    width: 100%;
    }

    .hero-img {
        object-fit: cover;
        border-radius: 999px;
        width: 100%;
        min-width: 600px;
        min-height: 600px;
        overflow: hidden;
    }
    .hero-imgs{
        max-width: 534px;
        /* padding-top: 80px; */
        position: relative;
    }
    .hero-title-wrap {
        z-index: 2;
        text-align: center;
        max-width: 680px;
        position: relative;
    }
    .hero-wrap{
    grid-column-gap: 80px;
        grid-row-gap: 80px;
        flex-direction: column;
        grid-template-rows: auto;
        grid-template-columns: 1fr 1fr;
        grid-auto-columns: 1fr;
        justify-content: center;
        align-items: center;
        height: 100%;
        padding: 80px;
        display: grid;
        position: relative;
    }
    h1{
        margin-top: 0;
        margin-bottom: 0;
        font-family: Avenir Black, sans-serif;
        font-size: 53px;
        font-weight: 900;
        line-height: 60px;
    }
    .span-green {
        color: #04289D;
    }
    .hero {
        z-index: 2;
        background-color: var(--white);
        background-image: url('assets/a_hero-bg.png');
        background-position: 50% 100%;
        background-repeat: no-repeat;
        background-size: 103.35%;
        min-height: 768px;
        position: relative;
    }
    .intro {
        background-color: var(--white-smoke);
        margin-bottom: 0;
        padding-top: 0;
        padding-bottom: 0;
        position: relative;
    }
    .intro-bg {
        z-index: 0;
        position: relative;
        top: 0%;
        bottom: 0%;
        left: 0%;
        right: 0%;
    }
    .stat-number {
        font-family: Avenir Black, sans-serif;
        font-size: 75px;
        line-height: 75px;
        color:#FF3131;
        /* font-size: 66px; */
        line-height: 86px;
        font-weight:700;
    }
    .card{
        background-color:#E3DDDC !important;
    }
    .red-btn{
        background-color:#C61431;
        color: white;
    }
    .red-btn:hover {
        color: white;
        background-color: #df2c2c;
        border-color:#df2c2c;
    }
    /* style='background-color:#ebebeb' */
    header {
        position: -webkit-sticky; /* For Safari */
        position: sticky;
        top: 0;
        z-index: 1000; /* Ensures it stays above other content */
        background-color: #fff; /* Optional: add a background color */
        /* box-shadow: 0 2px 5px rgba(0,0,0,0.1); */
    }
    .active-header {
                background-color: #C61431;
            
                border-radius:50px;

    }
    .active-header a{
        color:white !important;
    }
    .navbar ul li ul{ 
       left: -100px !important;
   }
   .more-options ul li,.more-options .dropdown-menu, .more-options .dropdown-menu a{
    color: white !important;
    background: #f57e91 !important;
    transition: background-color 0.3s ease, transform 0.3s ease;
    /* padding: 10px; */
    
    /* margin: 5px 0; */
   }
   .more-options .dropdown-menu a:hover{
    background: white !important;
    color: #f57e91 !important;
    transform: scale(1);
    display:flex;
   }
   #needHelp p{
    font-size: 1.2rem;
    font-weight: 500;
   }
   #needHelp h1{
   font-family: monospace;
   font-size:90px !important;
   font-weight: 500 !important;
    line-height: 90px !important;
}
.navbar .dropdown-toggle::after{
    content:none !important;
}
.dropdown-toggle:hover{
   color:darkgray !important;
}

.navbar .fa-bars{     font-size: 2rem;}
</style>
<body class=''  >
<header>
<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    <a class="navbar-brand col-md-5" href="<?= base_url() ?>landing_page"><img src="<?= base_url() ?>assets/rkda/rkda-new-logo.png" alt="logo" class="d-inline-block align-top w-25" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse col-md-7" id="navbarNavDropdown">
     
      <ul class="navbar-nav">
        <li class="nav-item d-none d-lg-block">
          <a class="nav-link "  href="#home">Home</a>
        </li>
        <li class="nav-item d-none d-lg-block">
          <a class="nav-link" href="#about">About Us</a>
        </li>
        <li class="nav-item d-none d-lg-block">
          <a class="nav-link" href="#needHelp">Need Help?</a>
        </li>
        <li class="nav-item d-none d-lg-block" id="loginSignupLink">
          <a class="nav-link" href="rkda_login">Login/Signup</a>
        </li>
        <li class="nav-item dropdown more-options">
          <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="fas fa-bars"></span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Our Task Force</a></li>
            <li><a class="dropdown-item" href="#">Governance</a></li>
            <li><a class="dropdown-item" href="#">Our Capabilities</a></li>
            <li><a class="dropdown-item" href="#">Membership</a></li>
            <li><a class="dropdown-item" href="#">Contact us</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>

<!-- <section id="mission">
 <div class='row align-items-center'>
    <div class="col-md-6 col-sm-12 d-flex justify-content-center">
    <div class="col-md-8">
      <img src="<?= base_url() ?>assets/rkda/landing-left-rkda-forum.png" alt="" width='100%'>
    </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="col-md-10">
        <h1  class='mb-5'>Mission</h1>
        <p>Our mission is to build a thriving community where clients and experts collaborate seamlessly to create exceptional value. We are committed to providing state-of-the-art training and innovative technology solutions to enhance your professional capabilities. By fostering a supportive and resource-rich environment, we enable you to excel in your field, expand your client base, and contribute to a network that values growth, innovation, and mutual success.</p>
        </div>
    </div>
 </div>
</section> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

<script>
    document.addEventListener('scroll', function() {
        const sections = document.querySelectorAll('section');
        const navLi = document.querySelectorAll('header nav ul li a');

        let currentSection = '';

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= (sectionTop - sectionHeight / 3)) {
                currentSection = section.getAttribute('id');
            }
        });

        navLi.forEach(a => {
            a.parentElement.classList.remove('active-header');
            if (a.getAttribute('href').includes(currentSection)) {
                a.parentElement.classList.add('active-header');
            }
        });
    });


    document.addEventListener("DOMContentLoaded", function() {
      // Check if current URL includes 'login' or 'signup'
      if (window.location.href.includes('rkda_login')) {
        document.getElementById('loginSignupLink').classList.add('active-header');
      }
    });
    document.querySelectorAll('.navbar-nav .nav-link').forEach(function(link) {
        link.addEventListener('click', function() {
            var hrefValue = this.getAttribute('href');
            console.log('Href value:', hrefValue);
            console.log('link',link);
            window.location.href='landing_page'+hrefValue;
          document.querySelectorAll('.navbar-nav .nav-link').forEach(function(link) {
            link.classList.remove('active-header');
          });
          // Add active class to clicked link
          this.classList.add('active-header');
        });
      });
</script>
</body>
</html>