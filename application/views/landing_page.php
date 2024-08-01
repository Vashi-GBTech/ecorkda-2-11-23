<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">


</head>
<style>
.owl-video-wrapper {
    width: 100%;
    height: 100%;
}

.red-letter {
    color: crimson;
    font-size: 1rem !important;
    font-weight: 600;
    /* font-style: italic; */
}

.justify-text {
    /* text-align:justify; */
}

.hading-fw {
    font-weight: 600;
}

.owl-carousel .item-video {
    display: block;
    width: 100%;
    height: auto;
}

/* .owl-carousel .owl-video {
  width: 100%;
  height: 500px;
} */
</style>
<style>
body {
    font-family: "Roboto Condensed", sans-serif;
}

.codepen-info {
    max-width: 950px;
    margin: 0 auto;
    background: #f4f4f4;
    padding: 20px 30px;
    margin-top: 40px;

    h1 {
        font-weight: 500;
        text-align: center;
        color: black;
        margin-top: 0;
    }

    p {
        color: #777;
    }

    .src {
        padding: 15px;
        background: white;
        border-radius: 5px;
        margin-bottom: 15px;

        p.coded {
            background: #f1f1f1;
            color: black;
        }
    }
}

.page-width {
    max-width: 100%;
    margin: 0 auto;

    h2 {
        text-align: center;
    }
}

.splide {
    max-width: 90%;
    margin: 0 auto;
}

.splide__slide {
    img {
        max-width: 100%;
    }
}

.splide__arrow--prev {
    margin-left: -75px;
}

.splide__arrow--next {
    margin-right: -75px;
}

.splide__arrow {
    top: 60%;
}

.splide__pagination {
    margin-bottom: -35px;
}

.splide__pagination__page.is-active {
    background: crimson;
}

.splide__track iframe {
    width: -webkit-fill-available;
}

#carousel-heading {
    font-weight: 600;
}

.card-img-abt {
    width: 60%;

}

.card-img-abt-div {
    display: flex;
    justify-content: center;
    margin-top: -28%;
    position: relative;
    margin-bottom: 2rem;
}

.abt-cards h6 {
    font-weight: 600;
}

.abt-cards p {
    text-align: justify;
}

.abt-cards .card {
    border: 2px solid crimson;
    border-radius: 36px;

}

.merchandise-div {
    height: 200px;
    background-image: url('./assets/rkda/merchandise.jpeg');
    background-size: cover;
    /* Adjust this property as needed */
    background-position: center;
}

.icon-container {
    display: flex;
    gap: 20px;
}

.icon-circle {
    width: 60px;
    height: 60px;
    background-color: crimson;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    font-size: 24px;
}

.icon-circle i {
    margin: 0;
}

.landing-page-s1 {
  box-sizing: border-box;
  padding: 3rem 6rem;
  height: 80dvh;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 2rem;
}
.landing-page-s1 .left{
  height: 90%;
  /* display: flex;
  flex-direction: column;
  justify-content: space-between; */
}
.landing-page-s1 .left h1 {
  font-size: clamp(2.5rem, 6vw, 5.5rem);
}
.landing-page-s1 .left .bottom {
  margin-top: 2rem;
  /* max-width: 50%; */
}

.landing-page-s1 .right {
  position: relative;
  height: 90%;
  aspect-ratio: 1/1;
  background: #fff;
  border-radius: 10px;
  border: 7px solid #aaa;
}


.landing-page-s1 .sections {
  position: relative;
  height: 100%;
  width: 100%;
}

.landing-page-s1 .sections .section {
  padding: 1rem;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  display: grid;
  grid-template-columns: repeat(8, 1fr);
  grid-template-rows: repeat(4, 1fr);
  grid-gap: 1rem;
  background: #fff;
  border-radius: 10px;
}
.landing-page-s1 .sections .section .img-container {
  border-radius: 5px;
  border: 1px solid #000;
  opacity: 0;
  animation-fill-mode: forwards !important;
}
.landing-page-s1 .sections .section .img-container:hover {
  filter: brightness(120%);
}

@keyframes popup {
  0% {
    opacity: 0;
    transform: scale(.2);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}
@keyframes popdown {
  0% {
    opacity: 1;
    transform: scale(1);
  }
  100% {
    opacity: 0;
    transform: scale(0);
  }
}



.carousel-container {
            width: 100%;
            /* max-width: 800px; */
            margin: auto;
        }

        .item {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f9f9f9;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 346px !important;
        }

        .item iframe {
            width: 100%;
            /* height: 315px; */
        }
        .owl-item.active.center {
    -webkit-transform: scale(1.8) !important;
    transform: scale(1.8) !important;
}

.ytp-large-play-button {
    transform: scale(0) !important;
}
       
</style>

<body>
    <?php include_once "navbar.php" ?>
    <section id="home">
    
        <div class='landing-page-s1'>

            <div class="left">
              <div class="top">
                <h1 class='hading-fw'>Where CAs </h1>
                <h1 class='mb-4 hading-fw'> Meet Excellence</h1>
              </div>

              <div class="bottom">
                <p style="font-size: 18px">The network focuses on catering to the needs of listed companies with global operations seeking high-quality audit and assurance services.</p>
                <a href="<?= base_url() ?>opinion" class='red-btn  d-flex justify-content-around align-items-center rounded-pill' style="width: fit-content; padding: 0.5rem 2rem; margin-top: 3rem" >
                  <span>Ask a Question</span>
                </a>
              </div>
            </div>

            <a class="right" href="<?= base_url('experts') ?>">
              <div class="sections"></div>  <!-- contains dyamic images -->
            </a>

        </div>

        <div class='my-1'>
            <!-- <img src="<?= base_url() ?>assets/rkda/random-text.png" alt="" style='    width: -webkit-fill-available;'> -->

            <div class="carousel-container">
                <div id="owl-carousel" class="owl-carousel">
                    <div class="item">
                        <a href="https://youtu.be/hh0Iwt4lwa0" data-lity>
                            <iframe src="https://www.youtube.com/embed/hh0Iwt4lwa0" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://youtu.be/XrT2Wfsk7gA" data-lity>
                            <iframe src="https://www.youtube.com/embed/XrT2Wfsk7gA" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://youtu.be/ocPXwbIzNoM" data-lity>
                            <iframe src="https://www.youtube.com/embed/ocPXwbIzNoM" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://youtu.be/C0OqyOU4B54" data-lity>
                            <iframe src="https://www.youtube.com/embed/C0OqyOU4B54" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://youtu.be/JUBF1cZG7kA" data-lity>
                            <iframe src="https://www.youtube.com/embed/JUBF1cZG7kA" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://youtu.be/oNZbmJisIyw" data-lity>
                            <iframe src="https://www.youtube.com/embed/oNZbmJisIyw" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://youtu.be/hh0Iwt4lwa0" data-lity>
                            <iframe src="https://www.youtube.com/embed/hh0Iwt4lwa0" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class='my-1'>
        <div class='row align-items-center py-0 my-0' style='height:100vh;'>
            <div class="col-md-5 col-sm-12 d-flex justify-content-end">
                <div class="col-md-10">
                    <h4 class='mb-4' style="font-weight: 600;">WHY JOIN US? </h4>
                    <p class='text-justify'  style='color: #726b6b;text-align:justify'><span
                    class='red-letter'>C</span>onnect with a network of clients and subject matter experts. Enhance <span
                            class='red-letter'>C</span>apabilities through training and technology platforms. Join a
                        global, value-driven <span class='red-letter'>C</span>ommunity. Serve clients better and acquire
                        new ones. Expand <span class='red-letter'>C</span>apacity and gain access to social and
                        financial <span class='red-letter'>C</span>larity as part of a larger community.</p>
                    <div class='d-flex justify-content-end'>
                        <a href="rkda_login" class='red-btn' style="padding: .5rem 1rem">Join Us ></a></div>
                    </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 col-sm-12 d-flex justify-content-center">
                <!-- <div class="col-md-8"> -->
                <!-- <img src="<?= base_url() ?>assets/rkda/about-rkda.png" alt="" width='100%'> -->
                <?php include_once "c_carousel.php" ?>
                <!-- </div> -->
            </div>
            <div class="col-md-1"></div>

        </div>
        <div class='row align-items-center py-0 my-0'>
            <div class="col-md-8 col-sm-12 d-flex justify-content-end">
                <div class="col-md-11 px-2">
                    <h4 class='mb-3' style="font-weight: 600;">HOW IT WORKS? </h4>
                    <p class=' text-justify' style='color: #726b6b;'>Register with us. We'll guide you through a smooth
                        onboarding process, helping you craft a stellar profile and co-create a personalized plan for
                        success. Sharpen your skills with top-notch training and resources, then dive into a vibrant
                        community of clients and members, ready to collaborate and build your business. Finally, your
                        expertise takes center stage. Contribute through exciting projects, strategic investments, or
                        even by growing alongside our company.</p>
                    <div class='d-flex justify-content-end'>
                        <a href="rkda_login" class='red-btn' style="padding: .5rem 1rem">Join Us ></a></div>
                    </div>
            </div>
            <div class="col-md-4 col-sm-12 d-flex justify-content-center">
                <div class="col-md-8 d-flex justify-content-center align-items-center">
                    <img src="<?= base_url() ?>assets/rkda/howittake.jpg" alt="" width='70%'>
                </div>
            </div>

        </div>
        <div class='py-5' >
            <img src="<?= base_url() ?>assets/rkda/work-flow-2.png" alt="" width='100%'>
        </div>

        <div class='row align-items-center py-2 my-0'>
            <div class="col-md-8 col-sm-12 d-flex justify-content-end">
                <div class="col-md-11 px-2">
                    <h4 class='mb-3'>WHAT IT TAKES? </h4>
                    <p class=' text-justify' style='color: #726b6b;'>Our Corporate Finance offerings encompass a
                        comprehensive suite of services designed to navigate the complex landscape of mergers and
                        acquisitions (M&A). We specialize in detailed valuation processes and strategic M&A planning,
                        ensuring that every transaction is meticulously structured to achieve optimal outcomes.</p>
                    <div class='d-flex justify-content-end' style='font-weight:bold;'><a href="rkda_login"
                            class='text-dark'>Join Us ></a></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 d-flex justify-content-center">
                <div class="col-md-8 d-flex justify-content-center align-items-center">
                    <img src="<?= base_url() ?>assets/rkda/whatittakes.jpg" alt="" width='70%'>
                </div>
            </div>

        </div>

        <div class="container mt-5 abt-cards">
            <div class="row">
                <div class="d-flex justify-content-around w-100">
                    <div class="card col-md-3">
                        <div class="card-body">
                            <div class='card-img-abt-div'>
                                <img src="<?= base_url() ?>assets/rkda/PAE.png" class='card-img-abt' alt="">
                            </div>
                            <div>

                                <div class='d-flex justify-content-center'>
                                    <h6 class='text-center w-75  mb-2 poppins-medium'>PROFFESIONL AND ETHICAL</h6>
                                </div>
                                <P class='text-justify text-secondary'>Maintain integrity, honesty, and high standards,
                                    fostering trust and credibility within the network.</P>
                            </div>


                        </div>
                    </div>
                    <div class="card col-md-3">
                        <div class="card-body">
                            <div class='card-img-abt-div'>
                                <img src="<?= base_url() ?>assets/rkda/WTC.png" class='card-img-abt' alt="">
                            </div>
                            <div class='d-flex justify-content-center'>
                                <h6 class='text-center w-75  mb-2 poppins-medium text-uppercase'>WilliNGNESS TO
                                    CONTRIBUTE</h6>
                            </div>
                            <P class='text-justify text-secondary'>Actively engage, share resources, and collaborate for
                                collective success within the network.</P>

                        </div>
                    </div>
                    <div class="card col-md-3">
                        <div class="card-body">
                            <div class='card-img-abt-div'>
                                <img src="<?= base_url() ?>assets/rkda/EM.png" class='card-img-abt' alt="">
                            </div>
                            <div class='d-flex justify-content-center'>
                                <h6 class='text-center w-75  mb-2 poppins-medium text-uppercase'>ENTREPRENEURIAL MINDSET
                                </h6>
                            </div>
                            <P class='text-justify text-secondary'>Embrace innovation, proactive problem-solving, and
                                adaptability for growth and success within the network.</P>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "merchandise.php" ?>
    </section>
   

    <section id='needHelp' style='height:100vh;display:flex; margin-top: 6rem;'>

        <div class='d-flex align-items-center'>
            <div class="col-md-7 d-flex justify-content-end ">
                <div class="col-md-10">
                    <h1 class='mb-3 text-danger text-uppercase poppins-medium'>Stay in touch</h1>
                    <h4>Connect with us.</h4>
                    <div class='col-md-8 d-flex justify-content-start'>
                        <div class="icon-container">
                            <div class="icon-circle">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="icon-circle">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="icon-circle">
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-5 d-flex justify-content-end">
                <img src="<?= base_url() ?>assets/rkda/stayintouch.jpg" alt="stayintouch" width='100%'>
            </div>
        </div>
    </section>



    <?php include_once "new_footer.php" ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
          
            $('.owl-carousel').owlCarousel({
                loop:true,
                autoplay: true,
                margin:10,
                center: true,
                autoPlay:true,
                autoplayTimeout:true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    600:{
                        items:3,
                        nav:false
                    },
                    1000:{
                        items:5,
                        nav:true,
                        loop:true
                    }
                }
            })
        });

</script>

<script>
  let imagesData = [
  { url: '<?= base_url() ?>assets/OurTeam/01_Pankaj_Bhargava.jpg' },
  { url: '<?= base_url() ?>assets/OurTeam/02_Dheeraj_rathi.jpg' },
  { url: '<?= base_url() ?>assets/OurTeam/03_Bharat_Mishra.jpg' },
  { url: '<?= base_url() ?>assets/OurTeam/04_Aditya_Pikle.jpg' },
  { url: '<?= base_url() ?>assets/OurTeam/05_Manish_Adukia.jpg' },
  { url: '<?= base_url() ?>assets/OurTeam/06_Sanjeev_Bindal.jpg' },
  { url: '<?= base_url() ?>assets/OurTeam/07_Sanjay_Surana.jpg' },
  { url: '<?= base_url() ?>assets/OurTeam/08_Ram_Verma.jpg' },
  { url: '<?= base_url() ?>assets/OurTeam/09_Parag_Shah.jpg' },
  { url: '<?= base_url() ?>assets/OurTeam/10_D_Bala.JPG' },
  { url: '<?= base_url() ?>assets/OurTeam/11_Rahul_Nagar.jpg' },
  { url: '<?= base_url() ?>assets/OurTeam/12_Manju_Latha_Boob.jpg' },
  { url: '<?= base_url() ?>assets/OurTeam/13_Siddharth_Baghmar.jpg' },
  { url: '<?= base_url() ?>assets/OurTeam/14_Jaigovind_boob.jpg' },
  { url: '<?= base_url() ?>assets/OurTeam/15_Bharat_Gupta.jpg' },
  { url: '<?= base_url() ?>assets/OurTeam/16_Kevin_Balm.jpg' },
  { url: '<?= base_url() ?>assets/OurTeam/17_Girish_Gangawat.png' },
  { url: '<?= base_url() ?>assets/OurTeam/18_Nidhi_Vira.png' },
  { url: '<?= base_url() ?>assets/OurTeam/19_deepa_shetty.jpg' },
  { url: '<?= base_url() ?>assets/OurTeam/20_Prasidh_Sapaliga.png' },
  { url: '<?= base_url() ?>assets/OurTeam/asit_pal.png' },
  { url: '<?= base_url() ?>assets/OurTeam/deepa-rathi.jpg' },
  { url: '<?= base_url() ?>assets/OurTeam/kc_gupta.png' },
  { url: '<?= base_url() ?>assets/OurTeam/MDKabra.png' },
  { url: '<?= base_url() ?>assets/OurTeam/pankaj-monga.jpg' },
  { url: '<?= base_url() ?>assets/OurTeam/pradip-das.png' },
  { url: '<?= base_url() ?>assets/OurTeam/r.s.kela.png' },
  { url: '<?= base_url() ?>assets/OurTeam/rl-kabra.jpg' },
  { url: '<?= base_url() ?>assets/OurTeam/SCKabra.png' },
  { url: '<?= base_url() ?>assets/OurTeam/shruti-ambegaonkar.jpg' }
]
  let rightSection = document.querySelector('.landing-page-s1 .right .sections')


  // subdivide images into sections
  let imgCount = 14
  let sectionArray = []
  let i = 0
  while (i < imagesData.length) {
    if (i % imgCount == 0) sectionArray.push([])
    sectionArray[sectionArray.length - 1].push({...imagesData[i]})
    i++
  }
  // console.log(sectionArray);

  let section = sectionArray[0]
  let div = document.createElement('div')
  div.classList.add('section')
  let columnStart = 1
  let rowStart = 1
  let counter = 0
  section.forEach((card, j) => {
    console.log(j);

    // setting up grid-column and grid-row
    if (columnStart == 9) {
      columnStart = 2
      rowStart++
    } else if (columnStart == 8) {
      columnStart = 1
      rowStart++
    }

    let imgContainer = document.createElement('div')
    imgContainer.classList.add('img-container')
    imgContainer.style.backgroundImage = `url("${card.url}")`
    imgContainer.style.backgroundPosition = `center`
    imgContainer.style.backgroundSize = `cover`
    imgContainer.style.backgroundRepeat = `no repeat`

    imgContainer.style.gridColumn = `${columnStart} / ${columnStart + 2}`
    imgContainer.style.gridRow = `${rowStart} / ${rowStart}`
    div.appendChild(imgContainer)

    let img = new Image()
    img.src = card.url
    img.onload = () => {
      imgContainer.style.animation = 'popup 1s cubic-bezier(.6,-0.3,.16,1.62)'
      imgContainer.style.animationDelay = Math.random()*1+'s'
      imgContainer.count = 0
      imgContainer.j = j
      // imgContainer.style.animationDelay = j/section.length+'s'

      // updates each image independently
      let sectionCount = 0
      setInterval(() => {
        sectionCount++
        if (!sectionArray[sectionCount % sectionArray.length][j]) sectionCount = 0
      
        imgContainer.style.animation = 'popdown 1s cubic-bezier(.6,-0.3,.16,1.62)'

        setTimeout(() => {
          imgContainer.style.backgroundImage = `url("${sectionArray[sectionCount % sectionArray.length][j].url}")`
          imgContainer.style.animation = 'popup 1s cubic-bezier(.6,-0.3,.16,1.62)'
          imgContainer.style.animationDelay = Math.random()*1+'s'
        }, 1000);
        
      }, Math.random()*7000 + 5000)  // random between 3 to 10 seconds

    }
    columnStart += 2
  })
  rightSection.appendChild(div)


  // updates one image at a time
  // let imgContainerAll = document.querySelectorAll('.img-container')
  // let prevRandomIndex
  // setInterval(() => {
  //   let randomIndex = Math.floor(Math.random()*imgContainerAll.length)
  //   if (prevRandomIndex == randomIndex) return

  //   let randomImg = imgContainerAll[randomIndex]
  //   randomImg.style.animation = 'popdown .5s cubic-bezier(.6,-0.3,.16,1.62)'

  //   randomImg.count++
  //   if (!sectionArray[randomImg.count % sectionArray.length][randomImg.j]) randomImg.count = 0

  //   setTimeout(() => {
  //     randomImg.style.backgroundImage = `url("${sectionArray[randomImg.count % sectionArray.length][randomImg.j].url}")`
  //     randomImg.style.animation = 'popup .5s cubic-bezier(.6,-0.3,.16,1.62)'
  //     // randomImg.style.animationDelay = Math.random()*1+'s'
  //   }, 700);

  //   prevRandomIndex = randomIndex
  // }, Math.random()*1000 + 700)


    </script>

</body>

</html>