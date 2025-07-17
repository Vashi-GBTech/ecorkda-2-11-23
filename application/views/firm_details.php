<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKDA - Mentor Bi</title>
    <link rel="icon" href="<?= base_url() ?>assets/images/ecovis_logoes/Ecovis_rkda_logo_ball.png"
        type="image/icon type">
    <!-- bootstrap css cdn  -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/bootstrap.css">

    <!-- bootstrap javascript cdn  -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>

    <?php include_once "header.php" ?>

    <div class='' style='background:#1d252d;height: 200px;display:flex;justify-content:center'>
        <div class='aboutMeName'>
            <p id="name">R L Kabra</p>
        </div>
    </div>
    <div class='container-fluid'>
        <div class="row">
            <div class="col-md-1 ">

            </div>
            <div class="col-md-3 py-4 justify-content-center" style="display: grid;">
                <div class='w-100 justify-content-center' id="image-parent" style='display:flex;align-items:center'>
                    <img id="member-img" src="<?= base_url() ?>uploads/rl-kabra.jpg" alt=""
                        style='width:250px ;border-radius:50%;box-shadow: 2px -1px 8px 2px;'>
                </div>
                <div class='d-flex w-100 justify-content-center py-2'
                    style='color:#cd1432!important;font-size:20px;text-align:center;font-family:cursive'>
                    <div>
                        <p class='' id="post" style="font-size: 14px;font-weight: 700;color:black;"></p>
                        <p class='mb-0' id="email" style="font-size: 16px;"></p>
                        <div class="m-4" style="height: 1px;background-color:#cd1432"></div>
                    </div>

                </div>

                <div class=' w-100 d-flex justify-content-center py-2'>
                    <div>
                        <p class='mb-0'
                            style='color:#cd1432!important;font-size:20px;font-family:cursive;text-align:left'>
                            Practice Areas</p>
                        <ul id="specialist-list"
                            style="padding-left: 20px; margin-bottom: 0px;list-style: initial !important;">
                            <li class="options" value="Strategy & Performance Consulting">Strategy & Performance
                                Consulting</li>
                            <li class="options" value="Business Support & Financial Reporting">Business Support &
                                Financial Reporting</li>
                            <li class="options" value="Litigation & Legal Services">Litigation & Legal Services</li>
                            <li class="options" value="Financial & Capital Services">Financial & Capital Services</li>
                            <li class="options" value="Digital Transformation">Digital Transformation</li>
                        </ul>
                        <div>
                            <p class='mb-0' style='color:#cd1432!important;font-size:20px;font-family:cursive'>Locations
                            </p>
                            <ul style="padding-left: 20px; margin-bottom: 0px;list-style: initial !important;"
                                id="qualification-list">
                                <li>Nariman Point </li>
                                <li>Vikhroli </li>
                                <li>Vashi </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='w-100 justify-content-center d-flex py-2'>

                </div>
            </div>
            <div class="col-md-7 px-4">
                <div class=""
                    style='color:#cd1432!important;font-family:cursive;font-size :20px;height: 130px;display: flex;'>
                    <p style='display:flex;align-items:end'>founding partners of firm</p>

                </div>
                <p id="about-me">
                <p>I am Rameshwarlal Badrilalji Kabra, a highly experienced financial professional with close to five
                    decades of experience across industries, geographies, and economic cycles. As the Founding Partner
                    of ECOVIS RKDA I have played an instrumental role in developing the firm's capabilities and
                    reputation in the industry.</p>
                <p>I hold a Bachelor's degree in Commerce and am a Chartered Accountant (CA). Additionally, I am a
                    Certified Fraud Examiner (CFE), which highlights my expertise in detecting, investigating, and
                    preventing fraud. My vast experience and knowledge in finance have made me a trusted advisor to my
                    clients, and I have served clients across various sectors such as education and training,
                    telecommunication, and healthcare.,
                    Throughout my career, I have gained a deep understanding of the market, which has enabled me to
                    provide my clients with valuable insights and solutions to their financial challenges. As the
                    Founding Partner of ECOVIS RKDA I have been responsible for leading the firm's financial strategy
                    and ensuring that our team delivers high-quality services to our clients.,
                    Apart from my professional achievements, I am also actively involved in various social initiatives
                    aimed at improving the lives of the underprivileged. Giving back to society is a cause close to my
                    heart, and I have supported several charitable causes over the years.",
                    In conclusion, I take great pride in my accomplishments in the field of finance and banking. My
                    expertise, experience, and leadership have helped establish ECOVIS RKDA as a trusted financial and
                    banking service provider in the industry.</p>
                </p>

                <div class='d-flex w-100 justify-content-left py-2'>
                    <!-- <div>
           <button href="#"  type="button" class="btn btn-outline-danger"  varient='outlined' style="padding: 5px 49px !important;color: #cd1432 !important;border-color:#cd1432 !important">Connect on LinkedIn</button>
            </div>  -->
                </div>
            </div>
            <div class="col-md-1">

            </div>
        </div>

    </div>
</body>
<script>


</script>

</html>