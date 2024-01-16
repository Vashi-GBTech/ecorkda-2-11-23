<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <title>Independence Standard</title>
</head>
<style>
    .independence-container p a{
        color: crimson !important;
        text-decoration: underline ;
    }
    .independence-container p a:hover{
        text-decoration: none;
    }
</style>
<body>
    <?php include_once "header.php" ?>
    <div class="container-fluid">
        <div class='my-3 mx-2'>
            <h2 class='acc-for-heading'>Independence Standard</h2>
        </div>
        <div class="d-flex">
            <div class="col-md-7 independence-container">
                <h4>Independence Check Tool</h4>
                <ul class='internship-pt-ul p-0'>
                    <li><a href="<?= base_url() ?>onlyForMembers">A 2.1 AURE:IND import file</a></li>
                    <li><a href="<?= base_url() ?>onlyForMembers">A 2.2 Check procedure</a></li>
                    <li><a href="<?= base_url() ?>onlyForMembers">A 2.3 Creation of Engagement</a></li>
                    <li><a href="<?= base_url() ?>onlyForMembers">A 2.4 User Manual</a></li>
                </ul>
                <p style='font-family:emoji;text-align: justify;'>RKDA International has introduced the IT-based
                    Independence Check Tool AURE.IND to manage the independence queries. The tool’s functions are
                    described in the A 2.4 User_manual.docx.</p>

                <p style='font-family:emoji;text-align: justify;'>Each RKDA office is obliged to examine the
                    independence of RKDA international network partners outside its home country when accepting new
                    audit engagements (see A 2.4 User_manual.docx).</p>

                <p style='font-family:emoji;text-align: justify;'>The international partners can choose to use the
                    AURE.IND tool either by uploading information on their existing clients for the automatic
                    independence check or can login and answer manually to each independence query. Initial client list
                    to be uploaded is included in specific sheet of A2.1AURE:IND_import_file and will be automatically
                    uploaded in the tool by the service provider. After initial upload, the partners need to regularly
                    update the information on those clients every 90 days. Please report once per year to Kolja Guzy <a
                        href="#">(mentor@rkda.in)</a> (deadline 31st March of each year) that your data input is up to
                    date.</p>

                <a href="#" class="text-dark my-3">If your firm does not have access to the Independence Check Tool yet,
                    please follow steps I to IV</a>

                <p class="my-4 "> <strong>
                        I. Please fill in the A 2.1AURE:IND_import_file (office details and user accounts) and mail a
                        soft copy of this Excel Sheet to Kolja Guzy <a href="#">(mentor@rkda.in)</a> .
                    </strong> </p>

                <p style='font-family:emoji;text-align: justify;'>We will forward your data to the service provider for
                    uploading on AURE.IND tool.
                    Please do not change the structure of the file (by deleting or adding lines or columns) and fill in
                    all sheets for each category. Please be informed there can be only one branch partner (who is
                    automatically a user as well) and multiple users within your firm.</p>

                <p class="my-4 "> <strong>
                        II. Once your data is incorporated in the database, your user account, defined as branch partner
                        account, will receive a welcome email with the login details and password for AURE.IND.
                    </strong> </p>
                <p class="my-4 "> <strong>
                        III. As soon as you received your login details from RKDA Independence, you are requested to
                        upload your clients by yourself and regularly keep your data up to date (in case your choice was
                        to provide client data for automatic independence check) or to answer to every independence
                        request according to email automatic notifications. Please be inform that every RKDA firm is
                        required to use AURE.IND for independence check or responses, even if services provided are
                        other than audit & assurance services.
                    </strong> </p>
                <p class="my-4 "> <strong>
                        IV. For each new audit engagement, even if is for a recurrent client of your firm, please use
                        AURE.IND to check your independence within RKDA group.
                    </strong> </p>

                <p class="my-4 "> <strong> Login:</strong> <a href="#">https://www.RKDA-independence.com</a></p>
                <p class="my-4 "> User manuals and video tutorials are also available at:<a
                        href="#">https://www.RKDA-independence.com</a></p>
                <p class="my-4 ">Help Desk is available via the following email address:<a href="#">help@auresw.cz</a>.
                </p>

                <h4 class='mb-0'>2. CaseWare</h4>
                <ul class='internship-pt-ul p-0'>
                    <li><a href="<?= base_url() ?>onlyForMembers">RKDA International Agreement 2020-2021</a></li>
                    <li><a href="<?= base_url() ?>onlyForMembers">RKDA International Agreement 2019-2020</a></li>
                    <li><a href="<?= base_url() ?>onlyForMembers">RKDA International Agreement 2018-2019</a></li>
                    <li><a href="<?= base_url() ?>onlyForMembers">RKDA International Agreement 2017-2018</a></li>
                    <li><a href="<?= base_url() ?>onlyForMembers">RKDA International Agreement 2016-2017</a></li>
                    <li><a href="<?= base_url() ?>onlyForMembers">RKDA International Agreement 2015-2016</a></li>
                    <li><a href="<?= base_url() ?>onlyForMembers">RKDA International Agreement 2014-2015</a></li>
                </ul>
                <h4 class='mb-0'>Webinar recording CaseWare</h4>
                <ul class='internship-pt-ul p-0'>
                    <li><a href="<?= base_url() ?>onlyForMembers">Webinar on youtube</a></li>
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