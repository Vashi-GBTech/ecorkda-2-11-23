<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expanding Image Gallery</title>
    <style>
    .image-container {
        /* display: flex; */
        /* flex-wrap: wrap; */
        /* justify-content: space-between; */
        /* margin: 20px; */
    }

    .image-container img {
        width:250px;
        /* Adjust thumbnail width as needed */
        height: 150px;
        /* Adjust thumbnail height as needed */
        object-fit: cover;
        /* Maintain aspect ratio */
        /* margin: 5px; */
        cursor: pointer;
        padding:10px;
        transition: all 0.5s ease-in;
    }

    .large-img img{
        width:80% !important;
        height:80% !important;
        transition: all 0.5s ease-in;
    }
    .initial{
        font-size: 12rem;
        color: crimson;
        font-family: auto;

    }
 
    </style>
</head>

<body>

    <div class="image-container">
        <div class="div1 d-flex justify-content-center align-items-center">
            <div class="col-md-7 large-img d-flex justify-content-center " > <img src="<?= base_url() ?>assets/OurTeam/01_Pankaj_Bhargava.jpg" alt="Image 1"></div>
            <div class="col-md-5 small-img1">
            <div class="d-flex justify-content-center" >   <img src="<?= base_url() ?>assets/OurTeam/02_Dheeraj_rathi.jpg" alt="Image 2">
            </div>
            <div class="d-flex justify-content-center" >  <img src="<?= base_url() ?>assets/OurTeam/03_Bharat_Mishra.jpg" alt="Image 3"> </div>
            
            </div>
        </div>
        <div class="div2 d-flex align-items-center">
                <div class="col-md-5 small-img2">
                <div class="d-flex justify-content-center " >
                <img src="<?= base_url() ?>assets/OurTeam/06_Sanjeev_Bindal.jpg" alt="Image 4"></div>
                <div class="d-flex justify-content-center" > <img src="<?= base_url() ?>assets/OurTeam/09_Parag_Shah.jpg" alt="Image 5">
                </div>
            </div>
            <div class="col-md-7">
                <div class='d-flex align-items-center'>
                    <div class="col-md-5">
                        <p class='initial'>R</p>
                    </div>
                    <div class="col-md-7">
                    RKDA upholds responsibility in its profession by prioritizing ethical practices, professional integrity, and continuous learning, ensuring excellence and trust in every endeavor.
                    </div>

                </div>
              
            </div>
        </div>

       
        
      
    </div>

   

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

$(document).ready(function() {
    function fadeOutAndReplace(img, callback) {
        $(img).fadeTo(500, 0, function() {
            callback();
            $(img).fadeTo(500, 1);
        });
    }

    function replaceAndRotateClockwise(clickedImg) {
        let largeImg = $('.large-img img');
        let clickedSrc = $(clickedImg).attr('src');
        let largeSrc = largeImg.attr('src');

        // Replace large image with clicked image
        fadeOutAndReplace(largeImg, function() {
            largeImg.attr('src', clickedSrc);
            $(clickedImg).attr('src', largeSrc);

            // Get all small images in div1
            let smallImgs = $('.div1 .small-img1 img').toArray();
            let startIndex = smallImgs.indexOf(clickedImg);

            // Rotate the remaining images clockwise
            let newImgs = [];
            for (let i = 0; i < smallImgs.length; i++) {
                newImgs[(i + 1) % smallImgs.length] = $(smallImgs[i]).attr('src');
            }

            for (let i = 0; i < smallImgs.length; i++) {
                $(smallImgs[i]).attr('src', newImgs[i]);
            }
        });
    }

    function replaceAndRotateAntiClockwise(clickedImg) {
        let largeImg = $('.large-img img');
        let clickedSrc = $(clickedImg).attr('src');
        let largeSrc = largeImg.attr('src');

        // Replace large image with clicked image
        fadeOutAndReplace(largeImg, function() {
            largeImg.attr('src', clickedSrc);
            $(clickedImg).attr('src', largeSrc);

            // Get all small images in div2
            let smallImgs = $('.div2 .small-img2 img').toArray();
            let startIndex = smallImgs.indexOf(clickedImg);

            // Rotate the remaining images anti-clockwise
            let newImgs = [];
            for (let i = 0; i < smallImgs.length; i++) {
                newImgs[(i - 1 + smallImgs.length) % smallImgs.length] = $(smallImgs[i]).attr('src');
            }

            for (let i = 0; i < smallImgs.length; i++) {
                $(smallImgs[i]).attr('src', newImgs[i]);
            }
        });
    }

    $('.div1 .small-img1 img').on('click', function() {
        replaceAndRotateClockwise(this);
    });

    $('.div2 .small-img2 img').on('click', function() {
        replaceAndRotateAntiClockwise(this);
    });
});

    </script>
</body>

</html>