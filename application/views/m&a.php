<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merger and Accquisition</title>
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
padding: 15px;
border-radius: 50%;
}
.bg-img{
background:lightgray;
}
.bg-gray{
    background:#D9D9D9;
}
.text-justify{
    text-align:justify !important;
}
</style>

</head>
<body>
<?php include_once "navbar.php" ?>

<section id='membership' >
    <div class="container mt-5">
       <div class='d-flex justify-content-center ' ><div class="header w-100">Merger and Accquisition</div></div> 

        <div class="d-flex h-100 mt-5">
          <div class="col-md-8  d-flex justify-content-start bg-gray p-4 pb-2 rounded">
            <div>
           <div class='d-flex justify-content-center' >
           <p class='text-justify'>The Mergers & Acquisitions (M&A) Task Force drives the network’s strategic growth through mergers, acquisitions, and partnerships. Their roles include identifying and evaluating potential opportunities, conducting due diligence, and managing the integration process. They leverage advanced analytical tools to assess financial and strategic fit, ensuring value creation and alignment with organizational goals. The team collaborates with legal, tax, and financial experts to navigate complex transactions, mitigate risks, and ensure seamless integration, thereby enhancing the network’s competitive edge and market position.
           </p>
           
           </div>
            <div class="row justify-content-start photo-cards" >
                <div class="col-md-5 mb-3 d-flex justify-content-start">
                    <div class="col-md-9 card " style='border-radius: 1rem 1rem 1rem 1rem;' >
                      <div>

                       
                        <div class="d-flex justify-content-center bg-img" style='border-radius: 1rem 1rem 0px 0px;'>
                        <img src="<?= base_url() ?>assets/OurTeam/02_Dheeraj_rathi.jpg" class='w-50' alt="Profile Image 1">
                        </div> 
                        
                            <h4>Sanjeev Bindal</h4>
                            <p>Partner</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>

           </div>
           <div class='col-md-4 d-flex justify-content-end'>
              <div class='col-md-11' >
                <?php include_once "explore_list.php" ?>
              </div>
               
          </div>
          </div>
      
       
        <div class="email">
          <p>  If you want to reach all members of the Audit Task Force, please mailto: <a href="mailto:audit@rkda.com">audit@rkda.com</a></p>
        </div>
    </div>
    </section>
         <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 </body>
</html>
