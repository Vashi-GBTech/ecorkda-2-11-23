<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
  <title>Membership Process</title>
</head>

<body>
  <?php include_once "header.php" ?>
  <div class="container-fluid">
    <div class='my-3 mx-2'>
      <h1 class='acc-for-heading'>Membership Process</h1>
    </div>
    <div class="d-flex">
      <div class="col-md-7">
        <div class="d-flex justify-content-between" style="flex-wrap:wrap">
          <ul class='internship-pt-ul p-0'>
            <li><a href="#">Template of licence agreement</a>
            <ul class='internship-pt-ul pl-2'>
            <li><a href="#">Template of licence agreement</a></li>  
            <li><a href="#">Template of licence agreement</a></li>  
           </ul>
           </li>
            <li><a href="#">Appendix 3 to licence agreement – Constitution of the RKDA Group</a></li>
            <li><a href="#">Appendix 2 to licence agreement – The RKDA ESSENTIALS</a></li>
            <li><a href="#">Statutes of RKDA International</a></li>
            <li><a href="#">Mediation Rules</a></li>
          </ul>
        </div>
        <div class="my-3">
          <p>If you want to reach all members of the Audit Task Force, please mailto: <a href="mailto:audit@rkda.com"
              style="color:crimson">audit@rkda.com</a> </p>
        </div>
      </div>

      <div class="col-md-5 d-flex justify-content-center">
        <div class="col-md-8">
          <?php include_once "why_us_list.php" ?>
        </div>

      </div>
    </div>



  </div>
  <?php include_once "footer.php" ?>
</body>

</html>