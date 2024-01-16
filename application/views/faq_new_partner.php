<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <title>FAQ (New Partner)</title>
</head>

<body>
    <?php include_once "header.php" ?>
    <div class="container-fluid">
        <div class='my-3 mx-2'>
            <h1 class='acc-for-heading'>FAQ (New Partner)</h1>
        </div>
        <div class="d-flex">
            <div class="col-md-7">
                <div class="d-flex justify-content-between" style="flex-wrap:wrap">
                    <ul class='internship-pt-ul p-0'>
                        <li><a href="<?= base_url() ?>onlyForMembers">How to get started?</a></li>
                        <li><a href="<?= base_url() ?>onlyForMembers">How is my status quo of the rkda compliance?</a></li>
                        <li><a href="<?= base_url() ?>onlyForMembers">What else do you have to know about rkda International?</a></li>
                        <li><a href="<?= base_url() ?>onlyForMembers">What else has to be done periodically?</a></li>
                        <li><a href="<?= base_url() ?>onlyForMembers">How do we work together in practice?</a></li>
                        <li><a href="<?= base_url() ?>onlyForMembers">How to develop the rkda brand with coherent marketing activities?</a></li>
                        <li><a href="<?= base_url() ?>onlyForMembers">How to use communication media to introduce rkda?</a></li>
                        <li><a href="<?= base_url() ?>onlyForMembers">How to implement the rkda Corporate Design?</a></li>
                        <li><a href="<?= base_url() ?>onlyForMembers">How to prepare your rkda internet country page?</a></li>
                        <li><a href="<?= base_url() ?>onlyForMembers">How to get and use my rkda E-Mail address?</a></li>
                    </ul>

                </div>
                <div class="my-3">
                    <p>If you want to reach all members of the Audit Task Force, please mailto: <a href="mailto:"
                            style="color:crimson">rkda.india@rkda.com</a> </p>
                </div>
            </div>

            <div class="col-md-5 d-flex justify-content-center">
                <div class="col-md-8">
                    <?php include_once "membership_list.php" ?>
                </div>

            </div>
        </div>



    </div>
    <?php include_once "footer.php" ?>
</body>

</html>