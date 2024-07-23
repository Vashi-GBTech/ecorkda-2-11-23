<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capabilities</title>

    <style>
        .img-div {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .capabilities-container {
            position: relative;
            height: 90dvh;
            background-image: url('<?=base_url()?>assets/images/capabilities/Capabiitites_Raw_Image.jpg');
        }
        .capabilities-container .hand{
            --scale: 1.5;
            position: absolute;
            top: 0;
            right: 0;
            height: calc(234px * var(--scale));
            width: calc(323px * var(--scale));
            background-image: url('<?=base_url()?>assets/images/capabilities/Capabiitites_Raw_Hand.png');
            /* filter: drop-shadow(0px 0px 5px #0003 ); */
        }

        .capabilities-container .blocks{
            --scale: 1.5;
            position: absolute;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            height: calc(238px * var(--scale));
            width: calc(210px * var(--scale));
            background-image: url('<?=base_url()?>assets/images/capabilities/Capabiitites_Raw_Image-blocks.png');
           /* filter: drop-shadow(0px 30px 40px -25px rgba(0, 0, 0, 1)); */
        }

        @media only screen and (max-width: 800px) {
            .capabilities-container .hand, .capabilities-container .blocks {
                --scale: 1.2;
            }
        }
    </style>
</head>
<body>
    <?php include_once "navbar.php" ?>

    <div class="capabilities-container img-div">
        <div class="hand img-div"></div>

        <div class="blocks img-div"></div>
    </div>

    <!-- <img src="<?= base_url() ?>assets/images/capabilities/Capabiitites_Raw_Hand.png" alt=""> -->
</body>
</html>