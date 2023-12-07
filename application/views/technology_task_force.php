<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <title>Technology Task Force</title>
</head>

<body>
    <?php include_once "header.php" ?>
    <div class="container-fluid">
        <div class='my-3 mx-2'>
            <h2 class='acc-for-heading'>Technology Task Force</h2>
        </div>
        <div class="d-flex">
            <div class="col-md-7" >
            <div class=" d-flex justify-content-between" style="flex-wrap:wrap" >
              <div>
                <img src="<?=base_url()?>assets/OurTeam/03_Bharat_Mishra.jpg" class="af-img" alt="" srcset="">
                <h6 class="my-1" ><a href="#" class="af-names mb-0 mt-2 px-2" >Bharat Mishra</a></h6>
              </div>
              <!-- <div>
                <img src="<?=base_url()?>assets/OurTeam/02_Dheeraj_rathi.jpg" class="af-img" alt="" srcset="">
                <h6 class="my-1" ><a href="#" class="af-names mb-0 mt-2 px-2" >Dheeraj Rathi</a></h6>
              </div>
              <div>
                <img src="<?=base_url()?>assets/OurTeam/03_Bharat_Mishra.jpg" class="af-img" alt="" srcset="">
                <h6 class="my-1"><a href="#" class="af-names mb-0 mt-2 px-2" >Bharat Mishra</a></h6>
              </div>
              <div>
                <img src="<?=base_url()?>assets/OurTeam/deepa-rathi.jpg" class="af-img" alt="" srcset="">
                <h6 class="my-1"><a href="#" class="af-names mb-0 mt-2 px-2" >Deepa Rathi</a></h6>
              </div> -->
            </div>
            <div class="my-3">
            <p>If you want to reach all members of the Audit Task Force, please mailto: <a href="mailto:" style="color:crimson"  >ecovis.india@ecovis.com</a> </p>
            </div>
            </div>
            
            <div class="col-md-5 d-flex justify-content-center">
                <div class="col-md-8"> <?php include_once "work_list.php" ?></div>
            
            </div>
        </div>
      


    </div>
    <?php include_once "footer.php" ?>
</body>

</html>