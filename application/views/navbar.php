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

    body {
        display: flex;
        flex-direction: column;
        overflow-x: hidden;
    }

    header {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 12px 24px;
        position: relative;
        /* overflow-x: hidden; */
    }

    header .logo-img{
        margin-left: 2rem;
    }

    header nav {
        display: flex;
        align-items: center;
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
        padding: .2rem 1.5rem;;
        position: relative;
        text-decoration: none;
        transition-duration: 0.5s;
    }

    nav li a {
        color: black !important;
    }

    nav li:hover {
        /* background: red; */
        cursor: pointer;
    }

    .more-options {
        font-size: 2rem;
    }

    .red-btn {
        background-color: #ffbdc8ba;
        color: #d83b59;
        padding: 10px;
        transition:.3s;
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
        top: calc(100% + .5rem);
        right: 1rem;
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
    <header>
        <a class="logo-img" href="<?= base_url() ?>landing_page"><img src="<?= base_url() ?>assets/rkda/rkda-new-logo.png" alt="logo" class="d-inline-block align-top w-25" ></a>

        <nav>
            <li class="nav-item d-none d-lg-block active-header">
                <a class="nav-link"  href="<?= base_url() ?>landing_page">Home</a>
            </li>
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link" href="<?= base_url() ?>#about">About Us</a>
            </li>
            <li class="nav-item d-none d-lg-block" id="loginSuperCA">
                <a class="nav-link" href="superCa">SuperCA</a>
            </li>
            <li class="nav-item d-none d-lg-block" id="loginSignupLink">
                <a class="nav-link" href="rkda_login">Login/Signup</a>
            </li>

            <li class="nav-item more-options" id="navbarDropdown">
                <span class="fas fa-bars"></span>
            </li>

            <div class="menu-section">
                <li><a href="<?= base_url() ?>task_force_new">Task Force</a></li>
                <li><a href="<?= base_url() ?>faq_new_partner">Governance</a></li>
                <li><a href="<?= base_url() ?>capabilities">Capabilities</a></li>
                <li><a href="<?= base_url() ?>membership">Membership</a></li>
                <li><a href="<?= base_url() ?>#needHelp">Contact us</a></li>
            </div>
        </nav>
    </header>


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

let menuBtn = document.querySelector('#navbarDropdown')
let menuBtnClicked = false
menuBtn.onclick = () => {
    menuBtnClicked = !menuBtnClicked

    if (menuBtnClicked) {
        document.querySelector('.menu-section').style.transform = 'translateX(0px)'
    }
    else {
        document.querySelector('.menu-section').style.transform = 'translateX(400px)'
    }
}

</script>
</body>
</html>