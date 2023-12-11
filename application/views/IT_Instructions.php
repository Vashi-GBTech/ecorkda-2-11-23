<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <title>IT Working Instructions</title>
</head>

<body>
    <?php include_once "header.php" ?>
    <div class="container-fluid">
        <div class='my-3 mx-2'>
            <h2 class='acc-for-heading'>IT Working Instructions</h2>
        </div>
        <div class="d-flex">
            <div class="col-md-7">
                <ul class='internship-pt-ul p-0'>
                    <li><a href="#">Data Backup – Instructions</a></li>
                    <li><a href="#">Usage of Emails – Instructions</a></li>
                    <li><a href="#">Usage of Network and Internet – Instructions</a></li>
                    <li><a href="#">Usage of Software – Instructions</a></li>
                </ul>

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