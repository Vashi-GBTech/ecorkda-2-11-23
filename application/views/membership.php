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
            font-size: 20px;
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
  .tree {
    margin: 0;
    padding-left: 25px;
    line-height: 3em;
    list-style: none;
    background-color: #fff;
  }

  .tree li {
    position: relative;
  }

  .tree li:before {
    position: absolute;
    top: 2px;
    left: -15px;
    display: block;
    width: 11px;
    height: 1.5em;
    content: "";
    border-bottom: 2px solid white;
    border-left: 2px solid white;
  }

  /* hide the vertical line on the first item */
  .tree>li:first-child:before {
    border-left: none;
  }

  .tree li:after {
    position: absolute;
    top: 0.85em;
    bottom: 1px;
    left: -15px;
    display: block;
    content: "";
    border-left: 2px solid white;
  }

  /* hide the lines on the last item */
  .tree li:last-child:after {
    display: none;
  }

  /* inserted via JS  */
  .js-toggle-icon {
    position: relative;
    z-index: 1;
    display: inline-block;
    width: 14px;
    margin-right: 2px;
    margin-left: -23px;
    line-height: 14px;
    text-align: center;
    font-style: normal;
    cursor: pointer;
    background-color: #fff;
    border: 1px solid white;
    border-radius: 2px;
  }

  . {
    padding: 4px;

  }

  .:hover {

    /* background: #afafaf; */
    box-shadow: 0px 2px 8px -1px gray;
  }
  .tree li a{
    color :white !important
  }
  .ass-pro{
    text-align: center;
    background: bisque;
    padding: 0px 10px;
    width: 50%;
    box-shadow: 0px 0px 7px -2px #d48e3b;
  }
  .tree{
    width:fit-content;
    background-color:crimson;
    padding:0px 30px !important;
    margin:0.5rem 0rem;
    border-radius:10px;
  }
  /* .tree{

  } */
  
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
       <div class='d-flex justify-content-center ' ><div class="header w-50">Membership process</div></div> 
        <div class="">
            <h2 class="text-danger" style='font-size:2.5rem !important'>Association Process</h2>
            <!-- <button class="button">Request</button>
            <button class="button">Membership</button>
            <button class="button">Essentials</button> -->

            
        </div>
        <div class="d-flex h-100">
          <div class="col-md-8 d-flex justify-content-around ">
            <div class="col-md-3  " style=''>
                <ul class="tree  " style=''>
                      <!-- <li class="ass-pro " >Association Process</li> -->
                      <li class='activeli '>
                        
                          <span class=' text-white'>Request</span>
                          <ul class='' style='padding-left: 0;' >
                            <li><a href="<?= base_url() ?>preliminaryAppForm"><span class=''>Interest</span></a></li>
                            <li><a href="<?= base_url() ?>NDA"><span class=''>NDA</span></a></li>
                            <li><a href="<?= base_url() ?>authorization"><span class=''>Authorization</span></a></li>
                          </ul>
                    
                      </li>
                    
                </ul>
            </div>
          
              <div class="col-md-3 d-flex  justify-content-center    align-items-baseline" style='margin-top:10%'>
                  <ul class="tree">
                      <!-- <li class="ass-pro " >Association Process</li> -->
                      
                      <li>
                      
                          <span class='text-white'>Membership</span>
                          <ul style='padding-left: 0;'>
                              <li><a href="#"><span class=''>Firm Details</span></a></li>
                              <li><a href="#"><span class=''>Walkthrough</span></a></li>
                              <li><a href="#"><span class=''>Agreement</span></a></li>
                              <li><a href="#"><span class=''>Induction</span></a></li>
                          </ul>
                      
                      </li>
                      
                  </ul>
              </div>
                <div class="col-md-3 d-flex justify-content-end align-items-baseline"  style='margin-top:20%'>
                    <ul class="tree">
                        <!-- <li class="ass-pro " >Association Process</li> -->
                        
                        <li>
                        
                            <span class='text-white'>Essentials</span>
                            <ul style='padding-left: 0;'>
                                <li><a href="#"><span class=''>Network System</span></a></li>
                                <li><a href="#"><span class=''>Code</span></a></li>
                                <li><a href="#"><span class=''>Quality Manual</span></a></li>
                            </ul>
                        
                        </li>
                    </ul>
                </div>
        
           </div>
        
           <div>
              <?php include_once "membership_list.php" ?>
          </div>
          </div>
        <div class="">
            <h3 class="text-danger " style='font-size:2.5rem !important' >Template Documentations</h3>
            <ul class="">
                <li class="list-item "><i class="fa-solid fa-book-bookmark mr-2"></i><a href="<?= base_url() ?>onlyForMembers">Template of License Agreement</a></li>
                <li class="list-item "><i class="fa-solid fa-book-bookmark mr-2"></i><a href="<?= base_url() ?>onlyForMembers">Appendix 3 to licence agreement - Constitution of RKDA Group</a></li>
                <li class="list-item"><i class="fa-solid fa-book-bookmark mr-2"></i><a href="<?= base_url() ?>onlyForMembers">Appendix 2 to licence agreement - The RKDA ESSENTIALS</a></li>
                <li class="list-item"><i class="fa-solid fa-book-bookmark mr-2"></i><a href="<?= base_url() ?>onlyForMembers">Statutes of RKDA International.</a></li>
                <li class="list-item"><i class="fa-solid fa-book-bookmark mr-2"></i><a href="<?= base_url() ?>onlyForMembers">Mediation Rules</a></li>
            </ul>
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
