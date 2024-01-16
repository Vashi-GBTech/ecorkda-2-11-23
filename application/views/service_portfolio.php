<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <title>Service Portfolio</title>
</head>

<body>
    <?php include_once "header.php" ?>
    <div class="container-fluid">
        <div class='my-3 mx-2'>
            <h1 class='acc-for-heading'>Service Portfolio</h1>
        </div>
        <div class="d-flex mt-3">
            <div class="col-md-7" >
            <div class="" style="" >
            <h5 class="mb-0">Ideal Range of Services</h5>
            <p class="mb-4">In order to guarantee the uniform range of service portfolio within the network RKDA International has developed the tool “Ideal Range of Services”. The tool bundles information regarding service range of each RKDA office, responsible persons, their position and professional qualification for each offered service including the client focus. Furthermore the tool provides information on specialization of each professional in industries and on persons responsible for marketing and quality management system.</p>

            <ul class='internship-pt-ul p-0 mb-4'>
              <li><a href="<?= base_url() ?>onlyForMembers">Definition of the minimum of ideal range of services (PDF)</a></li>
              <li><a href="<?= base_url() ?>onlyForMembers">Ideal Range of Services (PDF)</a></li>
              <li><a href="<?= base_url() ?>onlyForMembers">Ideal Range of Services (XLS)</a></li>
            </ul>
            </div>
            <div class="my-3">
            <p>If you want to reach all members of the Audit Task Force, please mailto: <a href="mailto:audit@rkda.com" style="color:crimson"  >audit@rkda.com</a> </p>
            </div>
            </div>
            
            <div class="col-md-5 d-flex justify-content-center">
                <div class="col-md-8"> <?php include_once "why_us_list.php" ?></div>
            
            </div>
        </div>
      


    </div>
    <?php include_once "footer.php" ?>
</body>

</html>