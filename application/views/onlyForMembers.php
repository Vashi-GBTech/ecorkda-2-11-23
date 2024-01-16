<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No Access</title>

    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<?php include_once "header.php" ?>
    <div class="d-flex justify-content-center py-5" style="background:#C8C8C8" >
        <div class="col-md-6 d-flex justify-content-center py-5" >
            <div class="col-md-12 " >
              <div class='d-flex justify-content-center'> <img src="<?= base_url() ?>assets/ecovis-images/lock.png" alt="lock"  class="w-25" ></div> 
                <h4 class="text-center" >Access to this page is restricted</h4>
                <p class="text-center" > Members can only Access this page</p>
               <div  class='d-flex justify-content-center'  >
                <a href="<?= base_url() ?>preliminaryAppForm">
                <button type="button" class="btn btn-danger btn-lg rounded-pill" style="border-radius:100px" >become a Member <i class="fas fa-arrow-right"></i></button>

                </a>

               </div> 
            </div>
        </div>
    </div>
    <?php include_once "footer.php" ?>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>