<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <title>Integration Checklist</title>
</head>

<body>
    <?php include_once "header.php" ?>
    <div class="container-fluid">
        <div class='my-3 mx-2'>
            <h1 class='acc-for-heading'>Integration Checklist</h1>
        </div>
        <div class="d-flex">
            <div class="col-md-7">
                <div class="" style="">
                    <button type="button" class='btn btn-danger md-btn' id="downlaodpdf">Checklist Integration</button>


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
    document.getElementById('downlaodpdf').addEventListener('click', async () => {
    try {
        const response = await fetch('<?= base_url() ?>assets/expansion_global_rankings.pdf');
        const blob = await response.blob();

        const downloadLink = document.createElement('a');
        downloadLink.href = URL.createObjectURL(blob);
        downloadLink.download = 'expansion_global_rankings.pdf';
        document.body.appendChild(downloadLink);
        downloadLink.click();
        document.body.removeChild(downloadLink);
    } catch (error) {
        console.error('Error downloading file:', error);
    }
});

</script>
</body>

</html>