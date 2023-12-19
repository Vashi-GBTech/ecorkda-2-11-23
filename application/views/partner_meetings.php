<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <title>Partner Meetings</title>
</head>

<body>
    <?php include_once "header.php" ?>
    <div class="container-fluid">
        <div class='my-3 mx-2'>
            <h2 class='acc-for-heading'>Partner Meetings</h2>
        </div>
        <div class=''>
       
        <div class="d-flex">
            <div class="col-md-7" >
            <h5 class='mx-4'>Last IPM's</h5>
            <div class=" d-flex justify-content-between bg-gray-ipm p-4" style="flex-wrap:wrap" >
              <div class="col-md-4" >
              <a href="#" class="ipm-div mb-0 mt-2 px-2 d-flex" >
                <img src="<?=base_url()?>assets/images/icon_images/a/mumbai-2.jpg" class="ipm-img  margin-right" alt="" srcset="">
               <div class='ipm-name'> <p class='mb-0'>10/2023</p><h6 class="my-1" >IPM</h6> <h6 class="my-1" >Mumbai</h6> </div>
               </a>
              </div>
            
              <div class="col-md-4" >
              <a href="#" class="ipm-div mb-0 mt-2 px-2 d-flex" >
                <img src="<?=base_url()?>assets/images/icon_images/a/delhi-2.jpg" class="ipm-img  margin-right" alt="" srcset="">
               <div class='ipm-name'> <p class='mb-0'>05/2023</p><h6 class="my-1" >IPM</h6> <h6 class="my-1" >Delhi</h6> </div>
               </a>
              </div>
            
              <div class="col-md-4" >
              <a href="#" class="ipm-div mb-0 mt-2 px-2 d-flex" >
                <img src="<?=base_url()?>assets/images/icon_images/a/patna-2.jpg" class="ipm-img  margin-right" alt="" srcset="">
               <div class='ipm-name'> <p class='mb-0'>07/2023</p><h6 class="my-1" >IPM</h6> <h6 class="my-1" >Indore</h6></div>
               </a>
              </div>
            
             
             
            </div>
            <div class="my-3">
            <p>If you want to reach all members of the Audit Task Force, please mailto: <a href="mailto:audit@rkda.com" style="color:crimson"  >audit@rkda.com</a> </p>
            </div>
            </div>
            
            <div class="col-md-5 d-flex justify-content-center">
                <div class="col-md-8"> <?php include_once "work_list.php" ?></div>
            
            </div>
        </div>
        </div>
      
      


    </div>
    <?php include_once "footer.php" ?>
</body>

</html>