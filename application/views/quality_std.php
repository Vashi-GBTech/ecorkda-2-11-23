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
</style>

</head>
<body>
<?php include_once "navbar.php" ?>

<section id='membership' >
    <div class="container mt-5">
       <div class='d-flex justify-content-center ' ><div class="header w-75">Quality Standards</div></div> 
        <div class="">
            <!-- <h6>Lorem ipsum dolor sit amet consectetur. Aliquam massa odio egestas tincidunt. Mattis eget at nunc dui sollicitudin mi dictum. Condimentum dignissim turpis odio amet pulvinar venenatis. Sed amet ut eu quam aliquam tempus.</h6> -->
            <!-- <h2 class="text-danger" style='font-size:2.5rem !important'>Association Process</h2> -->
            <!-- <button class="button">Request</button>
            <button class="button">Membership</button>
            <button class="button">Essentials</button> -->

            
        </div>
        <div class="d-flex h-100 mt-4">
          <div class="col-md-8  ">
            <div>
            <h3 class="text-dark " style='font-size:1.5rem !important' >RKDA International General Quality Control manual</h3>
            <ul class="">
                <li class="list-item "><a href="#"><i class="fa-solid fa-book-bookmark mr-2"></i>EI-GCQM (2022)</a></li>
                <li class="list-item "><i class="fa-solid fa-book-bookmark mr-2"></i><a href="#">EI-GCQM (Previous Version in track mode )</a></li>
                <li class="list-item"><i class="fa-solid fa-book-bookmark mr-2"></i><a href="#">RKDA ISQM 1 Guidance tool </a></li>
                <li class="list-item"><i class="fa-solid fa-book-bookmark mr-2"></i><a href="#">Webinar - RKDA ISQM 1 Guidance tool (Youtube link)</a></li>
                <li class="list-item"><i class="fa-solid fa-book-bookmark mr-2"></i><a href="#">High level comparison of the new RKDA EI- GCQM to the previous Version</a></li>
            </ul>
            </div>
            <div>
            <h3 class="text-dark " style='font-size:1.5rem !important' >Independent Standard</h3>
            <ul class="">
                <li class="list-item "><a href="#"><i class="fa-solid fa-book-bookmark mr-2"></i>RKDA Independence Procedure</a></li>
                <li class="list-item "><i class="fa-solid fa-book-bookmark mr-2"></i><a href="#">Independence Check tool</a></li>
              
            </ul>
            </div>
            <div>
            <h3 class="text-dark " style='font-size:1.5rem !important' >Quality Monitoring</h3>
            <ul class="">
                <li class="list-item "><a href="#"><i class="fa-solid fa-book-bookmark mr-2"></i>Memo of the duties and responsibilities for IOR’s mode of execution</a></li>
                <li class="list-item "><i class="fa-solid fa-book-bookmark mr-2"></i><a href="#">Self-inspection and Interoffice review</a></li>
                
            </ul>
            </div>
            <div>
            <h3 class="text-dark " style='font-size:1.5rem !important' >Internal Complaints Procedure for RKDA member Firms</h3>
            <ul class="">
                <li class="list-item "><a href="#"><i class="fa-solid fa-book-bookmark mr-2"></i>Internal Complaints Procedure for RKDA Member Firms</a></li>
               
            </ul>
            </div>
           
            
        

           </div>
        
          <div>
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
