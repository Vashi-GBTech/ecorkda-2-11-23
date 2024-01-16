<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <title>RKDA International Internship</title>
</head>

<body>
    <?php include_once "header.php" ?>
    <div class="container-fluid">
        <div class='my-3 mx-2'>
            <h2 class='acc-for-heading'>RKDA International Internship</h2>
        </div>
        <div class="d-flex">
            <div class="col-md-7">
                <div class="">
                    <p style='font-family:emoji;text-align: justify;'>In a globalized economy increasingly complex problems of taxation, of cross-border audit, of
                        financial accounting or of specific legal questions, have to be answered. This complexity can
                        only be handled by qualified personnel. The qualification should not be solely limited to the
                        professional level, but it must rather be socialized knowledge in the context of
                        country-specific characteristics. On the one hand, there is a need within Ecovis for the
                        development of cross-cultural as well as technical skills and for the creation of incentives in
                        terms of employee retention. On the other hand, concrete problems, like international mandate
                        expansions, need to be solved. In this framework, the development of internships within ECOVIS
                        and also the support of colleagues from other countries, make sense and create an assessable
                        benefit.</p>

                </div>
                <div class="my-3">
                    <ul class='internship-pt-ul p-0'>
                        <li><a href="<?= base_url() ?>onlyForMembers">General information about Ecovis Internships</a></li>
                        <li><a href="<?= base_url() ?>onlyForMembers">Checklist for hosts</a></li>
                        <li><a href="<?= base_url() ?>onlyForMembers">Checklist for interns</a></li>
                        <li><a href="<?= base_url() ?>onlyForMembers">Post evaluation (questionnaires)</a></li>
                    </ul>


                    <div>
                        <img src="<?= base_url() ?>assets/OurTeam/05_Manish_Adukia.jpg" class="af-img" alt="" srcset="">
                        <h6 class="my-1"><a href="#" class="af-names mb-0 mt-2 px-2">Manish Adhukia</a></h6>
                    </div>
                </div>
            </div>

            <div class="col-md-5 d-flex justify-content-center">
                <div class="col-md-8">
                    <?php include_once "work_list.php" ?>
                </div>

            </div>
        </div>



    </div>
    <?php include_once "footer.php" ?>
</body>

</html>