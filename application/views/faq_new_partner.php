<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Process</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
</style>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            /* max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
        }
        .header {
            background-color: crimson;
            color: #fff;
            padding: 5px 10px;
            text-align: center;
            font-size: 25px;
            border-radius:10px;
        }
        .section {
            margin-top: 20px;
        }
        .section-title {
            color: crimson;
            font-size: 20px;
            margin-bottom: 10px;
        }
        .button {
            background-color: crimson;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px 0;
        }
        .list {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .list-item {
            margin: 5px 0;
        }
        .list-item a {
            text-decoration: none;
            color: crimson;
        }
        .email p{
            margin-top: 20px;
            text-align: center;
            font-size: 1rem;
        }
        .email a {
            color: #e60000;
            text-decoration: none;
            font-size:1.2rem;
        }
    </style>

<style>
    .active {
        color: crimson;
    }

    .wl-link-color:hover {
        color: #cd2653;
    }
    .poppins-medium {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-style: normal;
}
.work-list-ul li{
  padding: 5px 0px;
}
.fa-book-bookmark{
  transform: rotate(90deg);
  margin-right: 1rem;
}
.list-item:hover{
   color:black ;
}
.list-item i{
  color:crimson;
}
.list-item a:hover,.list-item i:hover{
  color:black !important;
}
.photo-cards h4,.photo-cards p{

    text-align:center;
}
.photo-cards img{
    padding: 25px;
    border-radius: 50%;
}
.bg-img{
    background:lightgray;
}

</style>

</head>
<body>
<?php include_once "navbar.php" ?>

<section id='membership' >
    <div class="container mt-5">
       <div class='d-flex justify-content-center ' ><div class="header w-75">Quality Development Boards</div></div> 
        <div class="">
        </div>
        <div class="d-flex h-100 mt-4">
            <div class="col-md-8">
         
            <div class="container">
    <div class="row">
        <div class="row justify-content-around photo-cards" >
            <div class="col-md-5 mb-3 d-flex justify-content-end">
                <div class="col-md-9 card ">
                   <div class="d-flex justify-content-center bg-img">
                   <img src="<?= base_url() ?>assets/OurTeam/02_Dheeraj_rathi.jpg" class='w-75' alt="Profile Image 1">
                   </div> 
                  
                    <h4>John Doe</h4>
                    <p>Software Engineer</p>
                </div>
            </div>
            <div class="col-md-5 mb-3 d-flex justify-content-end">
                <div class="col-md-9 card">
                <div class="d-flex justify-content-center bg-img">
                   <img src="<?= base_url() ?>assets/OurTeam/02_Dheeraj_rathi.jpg" class='w-75' alt="Profile Image 1">
                   </div> 
                    <h4>John Doe</h4>
                    <p>Software Engineer</p>
                </div>
            </div>
            <div class="col-md-5 mb-3 d-flex justify-content-end">
                <div class="col-md-9 card">
                <div class="d-flex justify-content-center bg-img">
                   <img src="<?= base_url() ?>assets/OurTeam/02_Dheeraj_rathi.jpg" class='w-75' alt="Profile Image 1">
                   </div> 
                    <h4>John Doe</h4>
                    <p>Software Engineer</p>
                </div>
            </div>
            <div class="col-md-5 mb-3 d-flex justify-content-end">
                <div class="col-md-9 card">
                <div class="d-flex justify-content-center bg-img">
                   <img src="<?= base_url() ?>assets/OurTeam/02_Dheeraj_rathi.jpg" class='w-75' alt="Profile Image 1">
                   </div> 
                    <h4>John Doe</h4>
                    <p>Software Engineer</p>
                </div>
            </div>
          
        </div>
    </div>
</div>

             
            </div>
          <div class="col-md-4">
          <?php include_once "membership_list.php" ?>
          </div>
          </div>
      
       
        <div class="email">
          <p>  If you want to reach all members of the Audit Task Force, please mailto: <a href="mailto:audit@rkda.com">audit@rkda.com</a></p>
        </div>
    </div>
    </section>
         <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
       $(document).ready(function () {
            $('ul.tree ul').hide();

            $('.tree li > ul').each(function (i) {
                var $subUl = $(this);
                var $parentLi = $subUl.parent('li');
                var $toggleIcon = '<i class="js-toggle-icon">+</i>';

                $parentLi.addClass('has-children');

                $parentLi.prepend($toggleIcon).find('.js-toggle-icon').on('click', function () {
                    $(this).text($(this).text() == '+' ? '-' : '+');
                    console.log('$subUl', $subUl);
                    $subUl.slideToggle('fast');
                });
            });
        });
    </script>

<script>
        $(document).ready(function () {
            // Get the current URL
            var currentPageUrl = window.location.href;

            // Get the page name by removing the base URL
            var pageName = currentPageUrl.split('<?= base_url() ?>').pop();

            // Set 'active' class to the element with the ID of the page name
            $('#' + pageName).addClass('active');

            // Remove 'active' class from all links and add 'active' class to the clicked link
            $('.wl-link-color').removeClass('active');
            $('.wl-link-color[href="' + currentPageUrl + '"]').addClass('active');

            // On link click
            $('.wl-link-color').on('click', function (e) {
                e.preventDefault();
                var linkHref = $(this).attr('href');

                // Remove 'active' class from all links
                $('.wl-link-color').removeClass('active');

                // Add 'active' class to the clicked link
                $(this).addClass('active');

                // Store the clicked link in localStorage
                localStorage.setItem('lastClickedLink', linkHref);

                // Navigate to the clicked link
                window.location.href = linkHref;
            });
        });


    </script>
</body>
</html>
