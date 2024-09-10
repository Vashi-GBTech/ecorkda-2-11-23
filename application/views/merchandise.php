<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet"> -->
    <style>
    .slider img {
        width: 120px;
        height: 100%;
        animation: scroll 60s linear infinite;
    }

    .slide-track {
        width: 100%;
        display: flex;
        gap: 3em;
        overflow: hidden;
        align-items: center;
    }

    .slider {
        background-color: whitesmoke;
        padding: 1em 0em;
		
    }

    .content {
        /* background-color: whitesmoke; */
        padding: 2em var(--pad-lr);
        margin-bottom: 0 !important;
    }


    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translatex(-1000%)
        }
    }
	.red-border-scroll{
		background-color:darkgray;
		height:4px;
	}
    </style>
</head>

<body>
    <div class='content'>
        <h4 class='mb-3 text-uppercase' style="font-weight: 600">Power of Community </h4>
        <!-- style='color: #726b6b;' -->
        <p class=' text-justify' >As a member of the RKDA community, enjoy significant advantages
            through collective bargaining and bulk purchasing, resulting in 5-80% discounts on various services. By
            pooling our resources, we achieve cost savings and increased bargaining power, securing better terms,
            including extended warranties and prompt responses. The collective wisdom of our group ensures we receive
            high-quality offers from partners nationwide. These benefits exemplify the power of our community in
            maintaining excellence and maximizing value in all our endeavors.</p>
    </div>

   

    <div class="slider">
        <div class="slide-track">
            <div class="slide">
                <img src="<?= base_url() ?>assets/brand-logos/apollo.png" width=200 alt="">
            </div>
            <div class="slide">
                <img src="<?= base_url() ?>assets/brand-logos/apple.png" alt="">
            </div>
            <div class="slide">
                <img src="<?= base_url() ?>assets/brand-logos/hyundai.png" alt="">
            </div>
            <div class="slide">
                <img src="<?= base_url() ?>assets/brand-logos/rename.png" alt="">
            </div>
            <div class="slide">
                <img src="<?= base_url() ?>assets/brand-logos/suzuki.png" alt="">
            </div>
            <div class="slide">
                <img src="<?= base_url() ?>assets/brand-logos/apollo.png" alt="" width=200>
            </div>
            <div class="slide">
                <img src="<?= base_url() ?>assets/brand-logos/apple.png" alt="">
            </div>
            <div class="slide">
                <img src="<?= base_url() ?>assets/brand-logos/hyundai.png" alt="">
            </div>
            <div class="slide">
                <img src="<?= base_url() ?>assets/brand-logos/rename.png" alt="">
            </div>
            <div class="slide">
                <img src="<?= base_url() ?>assets/brand-logos/suzuki.png" alt="">
            </div>
            <div class="slide">
                <img src="<?= base_url() ?>assets/brand-logos/apollo.png" alt="" width=200>
            </div>
            <div class="slide">
                <img src="<?= base_url() ?>assets/brand-logos/apple.png" alt="">
            </div>
            <div class="slide">
                <img src="<?= base_url() ?>assets/brand-logos/hyundai.png" alt="">
            </div>
            <div class="slide">
                <img src="<?= base_url() ?>assets/brand-logos/rename.png" alt="">
            </div>
            <div class="slide">
                <img src="<?= base_url() ?>assets/brand-logos/suzuki.png" alt="">
            </div>
        </div>
    </div>
	
</body>

</html>