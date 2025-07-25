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
:root {
    --pad-lr: clamp(1rem, 7vw, 10rem)
}

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
    width: 90px
}

.card-img-abt-div {
    display: flex;
    justify-content: center;
    /* margin-top: -28%; */
    position: relative;
    /* margin-bottom: 2rem; */
    position: absolute;
    top: 0%;
    left: 50%;
    transform: translate(-50%, -50%);
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
    height: 100%;
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
    padding: 3rem var(--pad-lr);
    /* height: 80dvh; */
    display: flex;
    align-items: unset;
    justify-content: space-between;
    gap: 2rem;
    flex-wrap: wrap;
}

.landing-page-s1 .left {
    flex: 1;
    /* display: flex;
  flex-direction: column;
  justify-content: space-between; */
}

.landing-page-s1 .left h1 {
    font-size: clamp(2rem, 5vw, 4.5rem);
    color: crimson;
}

.landing-page-s1 .left .heading-span {
    font-size: 3rem;
}

.landing-page-s1 .left .bottom {
    margin-top: 2rem;
    /* max-width: 50%; */
}


/* 

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
} */



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

.about-section {
    /* height:80vh;  */
    display: flex;
    /* align-items: center;  */
    justify-content: space-between;
    flex-wrap: wrap;
}

.about-section-2 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 2rem;
    row-gap: 2rem;
    padding: 2rem var(--pad-lr);
    flex-wrap: wrap;
}

.about-section-3 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 4rem;
    row-gap: 2rem;
    padding: 2rem var(--pad-lr);
    flex-wrap: wrap;
}

.about-section-2 .about-left {
    flex: 6;
    min-width: 300px;
}

.about-section-2 .about-right {
    flex: 10;
    display: flex;
    justify-content: center;
}

.about-section-2 img {
    /* width: clamp(150px, 24vw, 300px); */
    width: 100%;
}

.about-section-3 img {
    width: clamp(150px, 24vw, 300px);
    /* width:100%; */
}

.about-section-3 .about-left {
    flex: 10;
    min-width: 300px;
}

.about-section-3 .about-right {
    flex: 5;
    display: flex;

}

.cards-container {
    padding: 2rem var(--pad-lr);
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    grid-gap: 1rem;
}

.card-body {
    padding: 1.75rem !important;
    padding-top: 4rem !important;
}

.contact-section {
    position: relative;
    display: flex;
    align-items: center;
    gap: 1rem;
    justify-content: flex-end;
    height: 100vh;
    /* margin-block: 6rem 0; */
    flex-wrap: wrap;
}

.contact-section .left {
    margin-left: var(--pad-lr);
    margin-bottom: 2rem;
    flex: 1;
}

.contact-section .right {
    width: clamp(30%, 450px, 100%);
    aspect-ratio: 1/1;
    background-image: var(--src);
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
}

@media only screen and (max-width: 767px) {
    .about-section {
        height: 100vh;
    }
}

@media only screen and (max-width: 442px) {
    .about-section {
        height: 120vh;
    }
}
</style>

<style>
@import url('https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@400;700;800&display=swap');

.landing-page-s1 .right {
    position: relative;
    min-width: 300px;
    flex: 1;
    aspect-ratio: 1/1;
    background: #fff;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1rem;
}

.landing-page-s1 .right .section {
    position: absolute;
    top: 0;
    height: 100%;
}

.landing-page-s1 .right .section .top {
    position: absolute;
    top: 0;
    cursor: pointer;
    overflow: hidden;
}

.landing-page-s1 .right .section .top .letter {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-family: "Nanum Myeongjo", serif;
    font-weight: 800;
    font-style: normal;
    font-size: clamp(5rem, 10vw, 7.5rem);
    line-height: 0;
    transition: all .3s ease;
}

.landing-page-s1 .right .section .top .details {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    height: 100%;
    width: 100%;
    transition: all .3s ease;
    text-align: center;
    opacity: 0;
    font-size: clamp(0.7rem, 3vw, 1rem);
    line-height: 1.25;
    display: flex;
    justify-content: center;
    align-items: center;
}

.landing-page-s1 .right .section .top:hover .letter {
    opacity: 0;
}

.landing-page-s1 .right .section .top:hover .details {
    opacity: 1;
}

.landing-page-s1 .right .section .bottom {
    position: absolute;
    background: #C61431;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
    overflow: hidden;
}

.landing-page-s1 .right .section .bottom .img-container {
    position: absolute;
}

.landing-page-s1 .right .section .bottom .img {
    position: absolute;
    background: #fff3;
    border-radius: 7px;
    background-image: var(--src);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

@keyframes move-up {
    0% {
        top: 100%;
    }

    100% {
        top: calc(var(--width) * -1);
    }
}
</style>
<style>
ol,
ol>li {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

ol {
    width: min(400px, 100% - 2rem);
    margin-inline: auto;
    list-style: none;
    display: grid;
    font-family: system-ui, sans-serif;
    color: white;
    counter-reset: liCount;
}

ol:not(.alternate) {
    gap: 0.5rem;
}

ol>li {
    --number-size: 3rem;
    --padding-inline: 2.5rem;
    --padding-block: 0.2rem;
    margin-block: var(--padding-block);
    padding: var(--padding-block) var(--padding-inline);
    background-color: var(--accent-color);
    display: grid;
    grid-template-columns: auto 1fr;
    grid-auto-flow: dense;
    align-items: center;
    gap: calc(1rem + var(--padding-block));
    border-radius: 100vmax;
    box-shadow:
        inset 0.15rem 0.15rem hsl(0 0% 0% / .125),
        inset 0.5rem 0.5rem 1rem hsl(0 0% 0% / .5),
        inset -0.15rem -0.15rem hsl(0 0% 100% / .75);
    position: relative;
    isolation: isolate;
    counter-increment: liCount;
    font-size: .74rem !important;
}

ol>li::before {
    content: counter(liCount);
    font-size: calc(var(--number-size) / 2);
    color: var(--accent-color);
    width: var(--number-size);
    aspect-ratio: 1;
    display: grid;
    place-items: center;
    border-radius: 100vmax;
    background-color: #e6e7e9;
    box-shadow:
        inset 0.05rem 0.05rem hsl(0 0% 100% / .75),
        0.25rem 0.25rem 0.5rem hsl(0 0% 0% / .5),
        inset -0.05rem -0.05rem hsl(0 0% 0% / .125);
}

ol>li::after {
    content: "";
    position: absolute;
    z-index: -1;
    --size: calc(var(--number-size) + var(--padding-block) * 4);
    width: var(--size);
    aspect-ratio: 1;
    inset-block-start: calc(var(--padding-block) * -1);
    --inset-inline: calc(var(--padding-inline) - var(--padding-block) * 2);
    inset-inline: var(--inset-inline) auto;
    border-radius: 100vmax;
    background-color: hsl(0 0% 100% / .125);
    background-image:
        radial-gradient(circle at calc(50% + 1px) calc(50% + 1px), transparent 67.7%, hsl(0 0% 100% / .5) calc(67.7% + 1px)),
        radial-gradient(circle at top left, hsl(0 0% 100% / .1) 50%, transparent calc(50% + 1px));
    --backdrop-filter: blur(2px);
    -webkit-backdrop-filter: var(--backdrop-filter);
    backdrop-filter: var(--backdrop-filter);
    box-shadow: 0.25rem 0.25rem 0.5rem hsl(0 0% 0% / 0.125);

}

ol.alternate>li:nth-child(even),
ol.right>li {
    grid-template-columns: 1fr auto;
}

ol.alternate>li:nth-child(even)::before,
ol.right>li::before {
    grid-column: 2;
}

ol.alternate>li:nth-child(even)::after,
ol.right>li::after {
    inset-inline: auto var(--inset-inline);
}

.pyramid-heading {
    position: relative;
    display: inline-block;
}

.pyramid-heading::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 50%;
    transform: translateX(-50%);
    width: 50%;
    height: 2px;
    background-color: #d53140;
    border-radius: 10px;
}

.pyramid-sub-heading {
    color: #a7a7a7;
    font-size: small;
}

.left-scroll-part h3 {
    text-align: center;
    font-size: 4.5vw !important;

}

.left-scroll-part p{
    text-align: justify;
}

.left-scroll-part {
    height: 100%;
    overflow: hidden;
}

.scrollable-content {
    flex: 1 !important;
    height: 50vh;
    overflow: auto;
    /* padding: 10px; */
    scrollbar-width: thin; /* For Firefox */
    scrollbar-color: transparent transparent; 
}

.right-unscroll-div {
    height: auto;
    display: flex;
    flex-direction: column;
}

.video-container {
    height: 50vh;
    display:flex;
    justify-content:end;
}
/* For WebKit-based browsers (Chrome, Edge, Safari) */
.scrollable-content::-webkit-scrollbar {
    width: 5px; /* Makes the scrollbar thin */
}

.scrollable-content::-webkit-scrollbar-track {
    background: transparent; /* Removes the background */
}

.scrollable-content::-webkit-scrollbar-thumb {
    background: linear-gradient(to bottom, darkgray, crimson); /* Adds the gradient */
    border-radius: 10px; /* Rounds the edges */
}

.scrollable-content::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(to bottom, crimson, darkgray); /* Reverses gradient on hover */
}

/* Remove start/end arrows */
.scrollable-content::-webkit-scrollbar-button {
    display: none; /* Hides up/down arrows */
}
</style>

<body>
    <?php include_once "navbar.php" ?>
    <section id="home" style="margin-top: 8rem">
        <div class='landing-page-s1'>
            <div class="left">
                <div class="top">
                    <h1 class=''><span class="text-dark heading-span"> Super CA is our </span></h1>
                    <h1 class='hading-fw mb-0'><span class="text-dark heading-span"></span>Resolve</h1>
                    <h1 class='mb-4 mb-0'><span class="text-dark heading-span">Rest is Detail</span> </h1>
                </div>

                <div class="bottom">
                    <p style="font-size: 18px">The network focuses on catering to the needs of listed companies with
                        global operations seeking high-quality audit and assurance services.</p>
                    <a href="<?= base_url() ?>opinion"
                        class='red-btn  d-flex justify-content-around align-items-center rounded-pill'
                        style="width: fit-content; padding: 0.5rem 2rem; margin-top: 3rem">
                        <span>Ask a Question</span>
                    </a>
                </div>
            </div>

            <div class="right" style="color: #212529;"> </div>
        </div>
        <div class="py-4 px-5">
            <div class="d-flex justify-content-center w-100">
                <h1 class="text-center mb-4 pyramid-heading">WHY WE'RE THE RIGHT CHOICE</h1>
            </div>
            <p class="text-justify mb-3 pyramid-sub-heading">Join us and unlock a world of opportunities designed to
                elevate your journey as a CA. Connect with experts, access powerful AI-driven tools, and streamline
                financial and governance solutions. Our platform empowers you to grow, scale your services, and deliver
                exceptional value to clients. This is your key to unlocking success in the CA profession.</p>
            <div class="d-flex justify-content-center mb-4">
                <a href="#" class='red-btn'>Join SUPER CA</a>
            </div>
            <img src="<?= base_url() ?>assets/rkda/superca-corp-adv.png" alt="" style="width: -webkit-fill-available;">
        </div>
        <div class="py-4 px-5">
            <div class="d-flex justify-content-center w-100">
                <h1 class="text-center mb-4 pyramid-heading">EXPLORE OUR OFFERINGS</h1>
            </div>
            <p class="text-justify mb-3 pyramid-sub-heading">RESOLVE, our AI-driven platform empowers Chartered
                Accountants to be true powerhouse for growth partnerships of their client. Enhance Capacity by
                automating tasks, Connecting with experts and enabling Clarity to build their practice is our promise.
                We invite you to Join our SUPER CA Community.</p>

            <div class='row justify-content-around mt-5'>
                <div class="col-md-3 ">
                    <img src="<?= base_url() ?>assets/rkda/u-c.png" alt="" style="width: -webkit-fill-available;">
                </div>
                <div class="col-md-3">
                    <img src="<?= base_url() ?>assets/rkda/n-c.png" alt="" style="width: -webkit-fill-available;">
                </div>
                <div class="col-md-3">
                    <img src="<?= base_url() ?>assets/rkda/n2-c.png" alt="" style="width: -webkit-fill-available;">
                </div>
            </div>
        </div>

        <div class="container-fluid py-4 px-5">
        <div class="d-flex flex-wrap my-5 ">
            <div class="col-md-6 px-0 d-flex justify-content-center left-scroll-part">
                <div class="scrollable-content ">
                    <div>
                        <h3>Technology</h3>
                        <p><b>Advanced Analytics for Informed Decisions:</b> Our advisory services leverage cutting-edge
                            analytics tools to provide insights that drive smarter business decisions.</p>
                        <p><b>Secure Digital Platforms:</b> We utilize state-of-the-art cybersecurity measures to ensure that
                            your data remains confidential and protected, providing peace of mind in all your
                            interactions with us.</p>
                        <p><b>Streamlined Client Portals:</b> Access your reports, recommendations, and advisory tools through
                            a user-friendly digital portal, designed to make navigating your data and insights simple
                            and effective.</p>
                        <p><b>Customized Tech Solutions:</b>We tailor our technological tools to match your unique needs,
                            ensuring that our digital solutions align perfectly with your business goals.</p>
                    </div>
                    <div>
                        <h3>Organize</h3>
                        <p><b>Advanced Analytics for Informed Decisions: </b>Our advisory services leverage cutting-edge
                            analytics tools to provide insights that drive smarter business decisions.</p>
                        <p><b>Secure Digital Platforms:</b> We utilize state-of-the-art cybersecurity measures to ensure that
                            your data remains confidential and protected, providing peace of mind in all your
                            interactions with us.</p>
                        <p><b>Streamlined Client Portals:</b> Access your reports, recommendations, and advisory tools through
                            a user-friendly digital portal, designed to make navigating your data and insights simple
                            and effective.</p>
                        <p><b>Customized Tech Solutions:</b> We tailor our technological tools to match your unique needs,
                            ensuring that our digital solutions align perfectly with your business goals.</p>
                    </div>
                    <div>
                        <h3>Review</h3>
                        <p><b>Advanced Analytics for Informed Decisions:</b> Our advisory services leverage cutting-edge
                            analytics tools to provide insights that drive smarter business decisions.</p>
                        <p><b>Secure Digital Platforms: </b>We utilize state-of-the-art cybersecurity measures to ensure that
                            your data remains confidential and protected, providing peace of mind in all your
                            interactions with us.</p>
                        <p><b>Streamlined Client Portals:</b> Access your reports, recommendations, and advisory tools through
                            a user-friendly digital portal, designed to make navigating your data and insights simple
                            and effective.</p>
                        <p><b>Customized Tech Solutions:</b> We tailor our technological tools to match your unique needs,
                            ensuring that our digital solutions align perfectly with your business goals.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 px-0 right-unscroll-div">
                <div class="video-container">
                    <video controls width="100%" height="100%" style="    width: fit-content;">
                        <source src="<?= base_url() ?>assets/rkda/videos/vid-1.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
        </div>



        <!-- <div class='landing-page-s1'>
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
              <div class="sections"></div>
            </a>
        </div> -->

        <!-- <div class='my-1'>
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
        </div> -->
    </section>

    <section id="about" class='my-5'>
        <div class="about-section mt-5">
            <div class="col-md-7 col-sm-12 d-flex justify-content-end">
                <div class="col-md-11">
                    <h4 class='mb-4' style="font-weight: 600;">WHY JOIN US? </h4>
                    <p class='text-justify' style='color: #726b6b;text-align:justify'><span
                            class='red-letter'>RESOLVE</span>, our AI-driven platform empowers Chartered Accountants to
                        be true powerhouse for growth partnerships of their client. Enhance <span
                            class='red-letter'>C</span>apacity by automating tasks, <span
                            class='red-letter'>C</span>onnecting with experts and enabling <span
                            class='red-letter'>C</span>larity to build their practice is our promise. We invite you to
                        Join our <span class='red-letter'>SUPER CA</span> Community.</p>
                    <div class='d-flex justify-content-end'>
                        <a href="rkda_login" class='red-btn' style="padding: .5rem 1rem">Join Us ></a>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3 col-sm-12 d-flex justify-content-center">
                <!-- <div class="col-md-8"> -->
                <!-- <img src="<?= base_url() ?>assets/rkda/about-rkda.png" alt="" width='100%'> -->
                <?php include_once "c_carousel.php" ?>
                <!-- </div> -->
            </div>
            <div class="col-md-1"></div>

        </div>

        <!-- <div class='row align-items-center py-0 my-0' style="margin-top: 2rem !important">
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
        </div> -->


        <div class='about-section-2' style="margin-top: 2rem !important; flex-direction: row-reverse">
            <div class="about-left">
                <h4 class='mb-3' style="font-weight: 600;text-align: center;">Register with us</h4>
                <!-- <p style='text-align: justify' style='color: #726b6b;'>Register with us. We'll guide you through a smooth
                    onboarding process, helping you craft a stellar profile and co-create a personalized plan for
                    success. Sharpen your skills with top-notch training and resources, then dive into a vibrant
                    community of clients and members, ready to collaborate and build your business. Finally, your
                    expertise takes center stage. Contribute through exciting projects, strategic investments, or
                    even by growing alongside our company.</p> -->
                <ol class="alternate p-0 mx-0 w-100">
                    <!--[left]/alternate/right-->
                    <li style="--accent-color: #d53140">Onboard with personalized profile setup</li>
                    <li style="--accent-color: #d53140">Access RESOLVE for AI tools, automation, and resources</li>
                    <li style="--accent-color: #d53140">Connect with clients and collaborate with peers</li>
                    <!-- <li style="--accent-color: #6b4495">Lorem Ipsum</li>
                        <li style="--accent-color: #229ab5">Lorem Ipsum</li> -->
                </ol>
                <div class='d-flex justify-content-end'>
                    <a href="rkda_login" class='red-btn' style="padding: .5rem 1rem">Become a SuperCA ></a>
                </div>
            </div>
            <div class="about-right">
                <img src="<?= base_url() ?>assets/rkda/superca-corp-adv.png" alt="">
            </div>
        </div>


        <div class='py-5'>
            <img src="<?= base_url() ?>assets/rkda/work-flow-3.png" alt="" width='100%'>
        </div>


        <div class='about-section-3 ' style="margin-top: 2rem !important">
            <div class="about-left">
                <h4 class='mb-3' style="font-weight: 600;">WHAT IT TAKES? </h4>
                <p style='text-align: justify' style='color: #726b6b;'>Our Corporate Finance offerings encompass a
                    comprehensive suite of services designed to navigate the complex landscape of mergers and
                    acquisitions (M&A). We specialize in detailed valuation processes and strategic M&A planning,
                    ensuring that every transaction is meticulously structured to achieve optimal outcomes.</p>
                <div class='d-flex justify-content-end'>
                    <a href="rkda_login" class='red-btn' style="padding: .5rem 1rem">Join Us ></a>
                </div>
            </div>
            <div class="about-right">
                <img src="<?= base_url() ?>assets/rkda/whatittakes.jpg" alt="">
            </div>
        </div>



        <div class="cards-container">
            <div class="abt-cards">
                <div class="card">
                    <div class="card-body">
                        <div class='card-img-abt-div'>
                            <img src="<?= base_url() ?>assets/rkda/PAE.png" class='card-img-abt' alt="">
                        </div>
                        <div>
                            <div class='d-flex justify-content-center'>
                                <h6 class='text-center  mb-2 poppins-medium'>RESPONSIBILITY TOWARDS PROFESSION</h6>
                            </div>
                            <P class='text-justify text-secondary'>Maintain integrity, honesty, and high standards,
                                fostering trust and credibility within the network.</P>
                        </div>
                    </div>
                </div>
            </div>

            <div class="abt-cards">
                <div class="card">
                    <div class="card-body">
                        <div class='card-img-abt-div'>
                            <img src="<?= base_url() ?>assets/rkda/WTC.png" class='card-img-abt' alt="">
                        </div>
                        <div>
                            <div class='d-flex justify-content-center'>
                                <h6 class='text-center   mb-2 poppins-medium'>DESIRE TO LEARN AND <br> GROW</h6>
                            </div>
                            <P class='text-justify text-secondary'>Embrace continuous learning, adapting to new
                                challenges and opportunities to enhance expertise and value.</P>
                        </div>
                    </div>
                </div>
            </div>

            <div class="abt-cards">
                <div class="card">
                    <div class="card-body">
                        <div class='card-img-abt-div'>
                            <img src="<?= base_url() ?>assets/rkda/EM.png" class='card-img-abt' alt="">
                        </div>
                        <div>
                            <div class='d-flex justify-content-center'>
                                <h6 class='text-center   mb-2 poppins-medium text-uppercase'>Diligence in work ethic &
                                    service</h6>
                            </div>
                            <P class='text-justify text-secondary'>Consistently deliver excellence through dedication,
                                ensuring clients' needs are met with thorough attention and care.</P>
                        </div>
                    </div>
                </div>
            </div>
            <div class="abt-cards">
                <div class="card">
                    <div class="card-body">
                        <div class='card-img-abt-div'>
                            <img src="<?= base_url() ?>assets/rkda/right-check-1.png" class='card-img-abt' alt="">
                        </div>
                        <div>
                            <div class='d-flex justify-content-center'>
                                <h6 class='text-center   mb-2 poppins-medium text-uppercase'>Accountability to
                                    stakeholders & society</h6>
                            </div>
                            <P class='text-justify text-secondary'>Act with transparency and responsibility, ensuring
                                actions positively impact both stakeholders and the broader community.</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include_once "merchandise.php" ?>
    </section>


    <section id='needHelp' class="contact-section" style=''>
        <div class="left">
            <div class='mb-3 text-danger text-uppercase poppins-medium' style="font-size: clamp(1.8rem, 4vw, 5.5rem)">
                Stay in touch</div>
            <h4>Connect with us.</h4>
            <div class='d-flex justify-content-start'>
                <div class="icon-container">
                    <a href="mailto:audit@rkda.com">
                        <div class="icon-circle">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </a>
                    <a href="tel:9137522708">
                        <div class="icon-circle">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                    </a>
                    <a href="https://www.linkedin.com/company/ecovisrkda/" target="_blank">
                        <div class="icon-circle">
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                    </a>
                </div>

            </div>
        </div>
        <div class="right" style='--src: url("<?= base_url() ?>assets/rkda/stayintouch.jpg")'></div>
    </section>

    <!-- <section id='needHelp' style='height:100vh;display:flex; margin-top: 6rem;'>

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
    </section> -->



    <?php include_once "new_footer.php" ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <!-- <script>
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

</script> -->

    <script>
    //   let imagesData = [
    //   { url: '<?= base_url() ?>assets/OurTeam/01_Pankaj_Bhargava.jpg' },
    //   { url: '<?= base_url() ?>assets/OurTeam/02_Dheeraj_rathi.jpg' },
    //   { url: '<?= base_url() ?>assets/OurTeam/03_Bharat_Mishra.jpg' },
    //   { url: '<?= base_url() ?>assets/OurTeam/04_Aditya_Pikle.jpg' },
    //   { url: '<?= base_url() ?>assets/OurTeam/05_Manish_Adukia.jpg' },
    //   { url: '<?= base_url() ?>assets/OurTeam/06_Sanjeev_Bindal.jpg' },
    //   { url: '<?= base_url() ?>assets/OurTeam/07_Sanjay_Surana.jpg' },
    //   { url: '<?= base_url() ?>assets/OurTeam/08_Ram_Verma.jpg' },
    //   { url: '<?= base_url() ?>assets/OurTeam/09_Parag_Shah.jpg' }, //
    //   { url: '<?= base_url() ?>assets/OurTeam/10_D_Bala.JPG' },
    //   { url: '<?= base_url() ?>assets/OurTeam/11_Rahul_Nagar.jpg' },
    //   { url: '<?= base_url() ?>assets/OurTeam/12_Manju_Latha_Boob.jpg' },
    //   { url: '<?= base_url() ?>assets/OurTeam/13_Siddharth_Baghmar.jpg' },
    //   { url: '<?= base_url() ?>assets/OurTeam/14_Jaigovind_boob.jpg' },
    //   { url: '<?= base_url() ?>assets/OurTeam/15_Bharat_Gupta.jpg' },
    //   { url: '<?= base_url() ?>assets/OurTeam/16_Kevin_Balm.jpg' }, //
    //   { url: '<?= base_url() ?>assets/OurTeam/17_Girish_Gangawat.png' },
    //   { url: '<?= base_url() ?>assets/OurTeam/18_Nidhi_Vira.png' },
    //   { url: '<?= base_url() ?>assets/OurTeam/19_deepa_shetty.jpg' },
    //   { url: '<?= base_url() ?>assets/OurTeam/20_Prasidh_Sapaliga.png' },
    //   { url: '<?= base_url() ?>assets/OurTeam/asit_pal.png' },
    //   { url: '<?= base_url() ?>assets/OurTeam/deepa-rathi.jpg' },
    //   { url: '<?= base_url() ?>assets/OurTeam/kc_gupta.png' }, //
    //   { url: '<?= base_url() ?>assets/OurTeam/MDKabra.png' },
    //   { url: '<?= base_url() ?>assets/OurTeam/pankaj-monga.jpg' },
    //   { url: '<?= base_url() ?>assets/OurTeam/pradip-das.png' },
    //   { url: '<?= base_url() ?>assets/OurTeam/r.s.kela.png' },
    //   { url: '<?= base_url() ?>assets/OurTeam/rl-kabra.jpg' },
    //   { url: '<?= base_url() ?>assets/OurTeam/SCKabra.png' },
    //   { url: '<?= base_url() ?>assets/OurTeam/shruti-ambegaonkar.jpg' }
    // ]

    let rightSectionContent = [{
            top: {
                letter: 'R',
                details: "Responsibility is the foundation of leadership."
            },
            bottom: [{
                    url: '<?= base_url() ?>assets/OurTeam/01_Pankaj_Bhargava.jpg'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/02_Dheeraj_rathi.jpg'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/03_Bharat_Mishra.jpg'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/04_Aditya_Pikle.jpg'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/05_Manish_Adukia.jpg'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/06_Sanjeev_Bindal.jpg'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/07_Sanjay_Surana.jpg'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/08_Ram_Verma.jpg'
                },
            ]
        },
        {
            top: {
                letter: 'K',
                details: "Knowledge empowers; wisdom transforms."
            },
            bottom: [{
                    url: '<?= base_url() ?>assets/OurTeam/09_Parag_Shah.jpg'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/10_D_Bala.JPG'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/11_Rahul_Nagar.jpg'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/12_Manju_Latha_Boob.jpg'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/13_Siddharth_Baghmar.jpg'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/14_Jaigovind_boob.jpg'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/15_Bharat_Gupta.jpg'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/16_Kevin_Balm.jpg'
                },
            ]
        },
        {
            top: {
                letter: 'D',
                details: "Diligence turns effort into excellence."
            },
            bottom: [{
                    url: '<?= base_url() ?>assets/OurTeam/17_Girish_Gangawat.png'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/18_Nidhi_Vira.png'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/19_deepa_shetty.jpg'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/20_Prasidh_Sapaliga.png'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/asit_pal.png'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/deepa-rathi.jpg'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/kc_gupta.png'
                },
            ]
        },
        {
            top: {
                letter: 'A',
                details: "Accountability fuels trust and progress."
            },
            bottom: [{
                    url: '<?= base_url() ?>assets/OurTeam/MDKabra.png'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/pankaj-monga.jpg'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/pradip-das.png'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/r.s.kela.png'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/rl-kabra.jpg'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/SCKabra.png'
                },
                {
                    url: '<?= base_url() ?>assets/OurTeam/shruti-ambegaonkar.jpg'
                }
            ]
        }
    ]


    function renderRightSection() {
        let rightSection = document.querySelector('.landing-page-s1 .right')
        rightSection.innerHTML = ''
        let rightSectionRect = rightSection.getBoundingClientRect()
        let sectionCount = rightSectionContent.length

        let gap1 = 10
        let gap2 = 5
        let sectionWidth = (rightSectionRect.width - (sectionCount - 1) * gap1) / sectionCount
        let animationSpeed = 2

        for (let i = 0; i < sectionCount; i++) {
            let isEven = i % 2 == 0
            // section
            let section = document.createElement('div')
            section.classList.add('section')
            section.style.left = i * (sectionWidth + gap1) + 'px'
            section.style.width = sectionWidth + 'px'
            rightSection.appendChild(section)

            // top
            let top = document.createElement('div')
            top.classList.add('top')
            top.style.width = sectionWidth + 'px'
            top.style.height = sectionWidth + 'px'
            top.style.top = isEven ? '0px' : rightSectionRect.height - (sectionWidth) + 'px'
            section.appendChild(top)

            // letter
            let letter = document.createElement('div')
            letter.classList.add('letter')
            letter.innerText = rightSectionContent[i].top.letter
            top.appendChild(letter)

            // details
            let details = document.createElement('div')
            details.classList.add('details')
            details.innerText = rightSectionContent[i].top.details
            top.appendChild(details)

            // bottom
            let bottom = document.createElement('div')
            bottom.classList.add('bottom')
            bottom.style.height = rightSectionRect.height - (sectionWidth + gap1) + 'px'
            bottom.style.width = sectionWidth + 'px'
            bottom.style.top = isEven ? sectionWidth + gap1 + 'px' : '0px'
            section.appendChild(bottom)

            let size = sectionWidth - 2 * gap2
            let images = rightSectionContent[i].bottom

            // img-container
            let imgContainer = document.createElement('a')
            imgContainer.href = `<?= base_url() ?>experts`
            imgContainer.classList.add('img-container')
            imgContainer.style.width = sectionWidth + 'px'
            // imgContainer.style.height = (images.length*size - (images.length + 1)) + 'px'
            imgContainer.style.height = (images.length * size - images.length * (window.innerWidth / 140)) + 'px'
            bottom.appendChild(imgContainer)

            // images
            for (let j = 0; j < images.length; j++) {
                let img = document.createElement('div')
                img.classList.add('img')
                img.style.top = '100%'
                img.style.setProperty('--width', size + 'px')
                img.style.setProperty('--src', `url("${images[j].url}")`)
                img.style.left = gap2 + 'px'
                img.style.width = size + 'px'
                img.style.height = size + 'px'
                img.style.animation =
                    `move-up ${!isEven? 'reverse' : ''} ${images.length*animationSpeed}s linear infinite`
                img.style.animationDelay = `calc(-${animationSpeed}s * ${j} )`
                imgContainer.appendChild(img)
            }
        }
    }
    renderRightSection()
    window.onresize = () => {
        renderRightSection()
    }


    //   let rightSection = document.querySelector('.landing-page-s1 .right .sections')


    //   // subdivide images into sections
    //   let imgCount = 14
    //   let sectionArray = []
    //   let i = 0
    //   while (i < imagesData.length) {
    //     if (i % imgCount == 0) sectionArray.push([])
    //     sectionArray[sectionArray.length - 1].push({...imagesData[i]})
    //     i++
    //   }
    //   // console.log(sectionArray);

    //   let section = sectionArray[0]
    //   let div = document.createElement('div')
    //   div.classList.add('section')
    //   let columnStart = 1
    //   let rowStart = 1
    //   let counter = 0
    //   section.forEach((card, j) => {
    //     console.log(j);

    //     // setting up grid-column and grid-row
    //     if (columnStart == 9) {
    //       columnStart = 2
    //       rowStart++
    //     } else if (columnStart == 8) {
    //       columnStart = 1
    //       rowStart++
    //     }

    //     let imgContainer = document.createElement('div')
    //     imgContainer.classList.add('img-container')
    //     imgContainer.style.backgroundImage = `url("${card.url}")`
    //     imgContainer.style.backgroundPosition = `center`
    //     imgContainer.style.backgroundSize = `cover`
    //     imgContainer.style.backgroundRepeat = `no repeat`

    //     imgContainer.style.gridColumn = `${columnStart} / ${columnStart + 2}`
    //     imgContainer.style.gridRow = `${rowStart} / ${rowStart}`
    //     div.appendChild(imgContainer)

    //     let img = new Image()
    //     img.src = card.url
    //     img.onload = () => {
    //       imgContainer.style.animation = 'popup 1s cubic-bezier(.6,-0.3,.16,1.62)'
    //       imgContainer.style.animationDelay = Math.random()*1+'s'
    //       imgContainer.count = 0
    //       imgContainer.j = j
    //       // imgContainer.style.animationDelay = j/section.length+'s'

    //       // updates each image independently
    //       let sectionCount = 0
    //       setInterval(() => {
    //         sectionCount++
    //         if (!sectionArray[sectionCount % sectionArray.length][j]) sectionCount = 0

    //         imgContainer.style.animation = 'popdown 1s cubic-bezier(.6,-0.3,.16,1.62)'

    //         setTimeout(() => {
    //           imgContainer.style.backgroundImage = `url("${sectionArray[sectionCount % sectionArray.length][j].url}")`
    //           imgContainer.style.animation = 'popup 1s cubic-bezier(.6,-0.3,.16,1.62)'
    //           imgContainer.style.animationDelay = Math.random()*1+'s'
    //         }, 1000);

    //       }, Math.random()*7000 + 5000)  // random between 3 to 10 seconds

    //     }
    //     columnStart += 2
    //   })
    //   rightSection.appendChild(div)


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