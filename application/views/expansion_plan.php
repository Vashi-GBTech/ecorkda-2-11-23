<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <title>Expansion Plan</title>
</head>

<body>
    <?php include_once "header.php" ?>
    <div class="container-fluid">
        <div class='my-3 mx-2'>
            <h1 class='acc-for-heading'>Expansion Plan</h1>
        </div>
        <div class="d-flex">
            <div class="col-md-7">
                <div class="" style="">
                    <button type="button" class='btn btn-danger md-btn' id="pdfButton">RKDA International
                        Expansion</button>


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

    <script>
        document.getElementById('pdfButton').addEventListener('click', function () {
            window.open('<?= base_url() ?>assets/expansion_global_rankings.pdf', '_blank');
        });

    </script>
</body>

</html>