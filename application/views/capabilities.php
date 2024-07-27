<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capabilities</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .img-div {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .clip{
            background-clip: text !important;
            -webkit-background-clip: text !important;
            background-clip: text !important;
            -webkit-text-fill-color: transparent !important;
            text-fill-color: transparent !important;
        }

        .capabilities-container {
            display: flex;
            justify-content: space-between;
            position: relative;
            height: 90dvh;
            background-image: url('<?=base_url()?>assets/images/capabilities/Capabiitites_Raw_Image.jpg');
        }

        .capabilities-container .left, .capabilities-container .right {
            position: relative;
        }
        .capabilities-container .right {
            flex: 4;
        }

        .capabilities-container .left {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            flex: 5;
        }
        .capabilities-container .left h1 {
            font-family: 'Poppins', sans-serif;
            font-size: clamp(6vw, 80px, 13vw);
            font-weight: 700;
            text-align: center;
            background: linear-gradient(90deg, #C61431 7.39%, #600A18 90.76%);
            animation: swap-gradient 1s infinite ease-in-out;
        }
        @keyframes swap-gradient {
            0% {
                background: linear-gradient(90deg, #C61431 7.39%,  90.76%);
            }
            100% {
                background: linear-gradient(90deg, #600A18 7.39%, #C61431 90.76%);
            }
        }

        .capabilities-container .left .animation{
            display: flex;
            flex-direction: column;
        }
        .capabilities-container .left .animation span {
            overflow: hidden;
        }
        .capabilities-container .left .animation span .txt { 
            font-family: 'Poppins', sans-serif;
            font-size: 40px;
            font-weight: 300;
            text-align: center;

            background: linear-gradient(to right, #000 20%, #666 100%);
            display: block;
            transform: translateY(-100%);
            animation: show-down 4s var(--delay) linear infinite;
        }
        @keyframes show-down {
            0% {
                transform: translateY(-100%);
            }
            10% {
                transform: translateY(0%);
            }
            50% {
                opacity: 1;
                transform: translateY(0%);
            }
            55% {
                opacity: 0;
                transform: translateY(0%);
            }
            100% {
                opacity: 0;
                transform: translateY(-100%);
            }
        }

        .capabilities-container .hand{
            --scale: 1.9;

            /* position: absolute; */
            position: relative;
            top: 0;
            float: right;
            width: clamp(30%, calc(323px* var(--scale)), 98%);
            /* width: min(calc(323px* var(--scale)), 100vw); */
            aspect-ratio: 323 / 234;
            background-image: url('<?=base_url()?>assets/images/capabilities/Capabiitites_Raw_Hand.png');
        }

        .capabilities-container .hand .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            
            background-image: url('<?=base_url()?>assets/images/capabilities/Capabiitites_Raw_Thumb.png');
            pointer-events: none;
        }

        .capabilities-container .blocks{
            /* display: none; */
            --scale: 1.8;
            position: absolute;
            bottom: 2rem;
            left: 0;
            width: clamp(22%, calc(210px* var(--scale)), 75%);
            aspect-ratio: 210 / 238;
            background-image: url('<?=base_url()?>assets/images/capabilities/Capabiitites_Raw_Image-blocks.png');
            
        }

        .capabilities-container .blocks .link-container {
            position: absolute;
            top: .5rem;
            left: .5rem;
            height: calc(100% - 1rem);
            width: calc(100% - 1rem);
            /* border: 1px solid #000; */
            display: flex;
            flex-direction: column;
        }

        a.block-content{
            display: flex;
            right: 0px;
            height: 25%;
            width: 85%;
            gap: 1rem;
            justify-content: space-between;
            align-items: center;
            padding: .5rem 1rem;
            /* background: #0002; */
        }
        .capabilities-container .hand a.block-content{
            position: absolute;
            bottom: 52%;
            left: .5rem;
            transform: translateY(50%) rotate(-4deg);
            height: 22%;
            width: 53%;
            padding-right: 3rem;
            flex-direction: row-reverse;
            /* background: #0003; */
        }
        .capabilities-container .hand a.block-content .info {
            color: #C61431;
        }

        a.block-content:hover {
            background: #0001;
        }
        .capabilities-container .blocks .link-container a:nth-child(2n) {
            align-self: flex-end;
            flex-direction: row-reverse;
        }
        .capabilities-container .blocks .link-container a:nth-child(2n) .info {
            color: #C61431;
        }
        .capabilities-container .blocks .link-container a:nth-child(2) {
            margin-right: .5rem;
        }

        a.block-content .info {
            display: flex;
            flex: 1;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            text-decoration: none;
            color: #000;
            /* font-size: clamp(.8rem, -0.875rem + 1.6vw, 2rem); */
            font-size: 20px;
        }
        a.block-content .icon {
            display: block;
            height: 70%;
            aspect-ratio: 1/1;
            background-image: var(--icon);
            
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
        }

        @media only screen and (max-height: 800px) {
            .capabilities-container {
                height: 120dvh;
            }
        }


        @media only screen and (max-width: 1400px) {
            .capabilities-container .hand {
                --scale: 1.5;
                width: min(calc(323px* var(--scale)), 100vw);
            }
            .capabilities-container .blocks {
                --scale: 1.4;
                width: min(calc(210px * var(--scale)), 100vw);
            }
            a.block-content .info {
                font-size: 16px;
            }
        }


        @media only screen and (max-width: 800px) {
            .capabilities-container .left {
                padding-block: 4rem;
            }
            .capabilities-container {
                flex-direction: column;
                /* gap: 2rem; */
                flex: 1;
            }
            .capabilities-container .right {
                min-height: min(90dvh, calc(1.7* 100vw));
            }
            .capabilities-container .blocks {
                left: 50%;
                transform: translateX(-50%);
            }
            a.block-content .info {
                font-size: clamp(.8rem, -0.875rem + 2vw, 2rem);
            }
        }
    </style>
</head>
<body style="display: flex; flex-direction: column;">
    <?php include_once "navbar.php" ?>

    <div class="capabilities-container img-div">
        <div class="left">
            <h1 class="clip">Capabilities</h1>
            <div class="animation">
                <span>
                    <div class="txt clip" style="--delay: 1s">Practice</div>
                </span>
                <span>
                    <div class="txt clip" style="--delay: 1.5s">Area</div>
                </span>
                <span>
                    <div class="txt clip" style="--delay: 2s">At</div>
                </span>
                <span>
                    <div class="txt clip" style="--delay: 2.5s">Glance</div>
                </span>
            </div>
        </div>

        <div class="right">
            <div class="hand img-div">
                <a href="<?= base_url() ?>Financial_and_Capital_Services" class="block-content">
                    <div class="info">Financial and Capital Services</div>
                    <div class="icon" style='--icon: url("<?=base_url()?>assets/images/capabilities/icons/Financial and capital servcies icon.png")'></div>
                </a>
                <div class="overlay img-div"></div>
            </div>

            <div class="blocks img-div">
                <div class="link-container">
                    <a href="<?= base_url() ?>BusinessSupportandFinancialReporting" class="block-content">
                        <div class="info">Business Support and Financial Reporting</div>
                        <div class="icon" style='--icon: url("<?=base_url()?>assets/images/capabilities/icons/Financial Report ICon.png")'></div>
                    </a>
                    <a href="<?= base_url() ?>Digital_transformation" class="block-content">
                        <div class="info">Digital Transformation</div>
                        <div class="icon" style='--icon: url("<?=base_url()?>assets/images/capabilities/icons/Digital Transformation Icon.png")'></div>
                    </a>
                    <a href="<?= base_url() ?>Strategy_Performance_Consulting_services" class="block-content">
                        <div class="info">Strategy and performance Consulting</div>
                        <div class="icon" style='--icon: url("<?=base_url()?>assets/images/capabilities/icons/Strategy,performance and consulting Icon.png")'></div>
                    </a>
                    <a href="<?= base_url() ?>LitigationLegalServices" class="block-content">
                        <div class="info">Legal and GRC Services</div>
                        <div class="icon" style='--icon: url("<?=base_url()?>assets/images/capabilities/icons/Legal and GRC Services ICon.png")'></div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    
    <?php include_once "new_footer.php" ?>

    <!-- <Script>
        function setScale() {
            let min = window.innerWidth <= window.innerHeight? window.innerWidth : window.innerHeight
            let max = window.innerWidth > window.innerHeight? window.innerWidth : window.innerHeight
            document.body.style.setProperty('--scale', max*0.6 / min)
        }
        setScale()
        window.onresize = () => {
            console.log('scaling');
            setScale()
        }
    </Script> -->
</body>
</html>