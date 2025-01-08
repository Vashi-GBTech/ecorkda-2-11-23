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
    padding: 0rem var(--pad-lr);
    /* height: 80dvh; */
    display: flex;
    align-items: unset;
    justify-content: space-between;
    gap: 2rem;
    flex-wrap: wrap;
}

.landing-page-s1 .left {
    flex: 1;
    margin-top:2rem;
    /* display: flex;
  flex-direction: column;
  justify-content: space-between; */
}

.landing-page-s1 .left h1 {
    font-size: clamp(2rem, 5vw, 4.5rem);
    color: crimson;
    margin:0px !important;
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
    font-weight:600;
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
    color: #6a6969;
    font-size: .9rem;
}

.left-scroll-part h3 {
    text-align: center;
    font-size: 4.5vw !important;

}

.left-scroll-part p {
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
    /* scrollbar-width: thin; */
    /* For Firefox */
    /* scrollbar-color: transparent transparent; */
}

.right-unscroll-div {
    height: auto;
    display: flex;
    flex-direction: column;
}

.video-container {
    height: 50vh;
    display: flex;
    justify-content: end;
}

/* For WebKit-based browsers (Chrome, Edge, Safari) */
.scrollable-content::-webkit-scrollbar {
    width: 5px; /* Makes the scrollbar thin */
}

.scrollable-content::-webkit-scrollbar-track {
    background: lightgray; /* Keeps a visible, neutral background for the track */
}

.scrollable-content::-webkit-scrollbar-thumb {
    background: linear-gradient(to bottom, darkgray, crimson); /* Adds the gradient to the thumb */
    border-radius: 10px; /* Rounds the edges of the thumb */
}

.scrollable-content::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(to bottom, crimson, darkgray); /* Reverses gradient on hover */
}

/* Remove start/end arrows */
.scrollable-content::-webkit-scrollbar-button {
    display: none !important; /* Hides up/down arrows */
}


/* Ensure flex layout behaves well at all screen sizes */
.scoped-card-container {
    display: flex;
    justify-content: space-evenly;
    align-items: stretch;
    /* Ensures all cards have equal height */
    flex-wrap: wrap;
}

.scoped-card-container .col-md-3,
.scoped-card-container .col-sm-6,
.scoped-card-container .col-12 {
    display: flex;
    /* Make columns flex containers */
    justify-content: center;
    /* Center content within the column */
    padding: 10px;
    /* Add padding for spacing */
}

.scoped-card-container .card-wrapper {
    background: white;
    text-align: center;
    padding: 20px;
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-image: url('http://localhost/ecorkda/assets/rkda/sqr-cards-bg.jpg');
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    height: 100%;
    width: 100%;
}

.scoped-card-container .card {
    flex-grow: 1;
    /* Make the card grow to fill available space */
    display: flex;
    flex-direction: column;
    /* Ensure content is arranged vertically */
    align-items: center;
    justify-content: space-between;
    /* Distribute content evenly */
    min-height: 250px;
    /* Optional: Ensure a minimum height */
}

.scoped-card-container .card-icon img {
    width: 30%;
    /* height: 50px; */
}

.scoped-card-container .card h3 {
    font-size: 65%;
    margin: 15px 0;
    font-weight: bold;
    color: #000;
}

.scoped-card-container .card p {
    font-size: 80%;
    color: lightgray;
    line-height: 1.5;
    text-align: justify;
}

.card-inner {
    width: 95%;
}



@media (min-width: 768px) and (max-width: 991px) {
    .scoped-card-container .col-sm-6 {
        flex: 0 0 50%;
        /* On medium screens, two cards per row */
    }
}

@media (min-width: 992px) {
    .scoped-card-container .col-md-3 {
        flex: 0 0 25%;
        /* On larger screens, four cards per row */
    }
}

@media (max-width: 1200px) {
    .scoped-card-container .card {
        min-height: 200px !important;
    }
}

@media (max-width: 1000px) {
    .scoped-card-container .card {
        min-height: 100px !important;
    }
}

@media (max-width: 770px) {
    .scoped-card-container .col-md-3 {
        max-width: 33% !important;
    }
}

/* Add responsive adjustments */
@media (max-width: 500px) {

    .scoped-card-container .col-sm-6,
    .scoped-card-container .col-md-3 {
        flex: 0 0 100% !important;
        /* Each card takes full width on smaller screens */
        max-width: 100% !important;

    }

    .scoped-card-container .card {
        min-height: 250px !important;
    }
}

body {
    font-size: calc(.5 * (1.5vh + 1.1vw));
}
</style>
<style>
.responsibility-section {
    background: #fff;
    display: flex;
    flex-direction: column;
    /* overflow: auto; */
    flex-wrap:wrap;
    justify-content: center;
    padding: 40px 90px;
    padding-bottom: 0px;
}

.content-wrapper {
    display: flex;
    width: 100%;
    max-width: 1304px;
    align-items: start;
    gap: 10px 0;
    justify-content: space-between;
    flex-wrap: wrap;
}

.grid-container {
    min-width: 240px;
    width: 1304px;
}

.grid-row {
    gap: 20px;
    display: flex;
}

.grid-column {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 25%;
    margin-bottom: 3rem;
}

.card-container {
    display: flex;
    align-items: center;
    gap: 10px;
    justify-content: flex-start;
}

.card-wrapper {
    align-self: stretch;
    display: flex;
    min-width: 240px;
    width: 287px;
    align-items: center;
    gap: 10px;
    justify-content: flex-start;
    margin: auto 0;
    padding: 10px;
}

.card {
    align-self: stretch;
    display: flex;
    min-width: 240px;
    width: 267px;
    align-items: center;
    gap: 13px;
    margin: auto 0;
}

.border-decoration {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    margin: auto 0;
}

.border-decoration.right {
    position: absolute;
    right: 0;
    z-index: 0;
}

.border-top {
    /* height: 4px;
  border: 4px solid #960808; */
}

.border-vertical-thick.left {
    width: 38px;
    height: 115px;
    border: 4px solid #960808;
    border-bottom: none;
}

.border-vertical-thick.right {
    width: 38px;
    height: 115px;
    border: 4px solid #960808;
    border-top: none;
}

.border-vertical-thin.left {
    width: 1px;
    height: 112px;
    border-left: 1px solid #4d4d4d;
}

.border-vertical-thin.right {
    width: auto;
    height: 112px;
    border-right: 1px solid #4d4d4d;
}

.border-horizontal {
    width: 38px;
    height: 0px;
    border: 1px solid black;
}

.content-card {
    border-radius: 13px;
    background: #e7c0c0;
    align-self: stretch;
    display: flex;
    flex-direction: column;
    font-family: Poppins, sans-serif;
    justify-content: center;
    padding: 16px 0;
    position: absolute;
    width: 90%;
    left: 12px;
    top: -28px;
    z-index: 50;
}

.inner-card {
    border-radius: 5px;
    background: #fff;
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    align-items: center;
    padding: 0px 10px 40px;
    height: 250px;

}

.card-icon {
    aspect-ratio: 1;
    object-fit: contain;
    object-position: center;
    width: 70px;
}

.card-title {
    color: #000;
    font-size: 14px;
    font-weight: 500;
    text-align: center;
    margin-top: 13px;
}

.card-description {
    color: #4d4d4d;
    font-size: 10px;
    font-weight: 300;
    align-self: stretch;
    margin-top: 24px;
}

.image-full {
    aspect-ratio: 0.92;
    object-fit: contain;
    object-position: center;
    width: 267px;
    align-self: stretch;
    min-width: 240px;
    margin: auto 0;
}

.red-btn{
    width: fit-content !important;
    padding: .7rem 1rem !important;
    margin-top: .5rem !important;
    font-weight: 700 !important;
    font-size: .8rem !important;
}
.circle-div{
    display: flex;
    justify-content: center;
    align-items: center;
}
.circle-div img{
    width: 80% !important;
}

.equal-height-cards {
    display: flex;
  }
  .equal-height-cards .card {
    flex: 1;
  }


/* Initial state of the underline */
.scaleFromCenter::after {
  content: '';
  position: absolute;
  bottom: -10px;
  left: 35%;
  width: 30%;
  height: 0.1em;
  background-color: #d53140;
  opacity: 0;
  transform: scaleX(0);
  transform-origin: center;
  transition: transform 900ms ease, opacity 900ms ease;
}

/* When the element is in view */
.scaleFromCenter.in-view::after {
  opacity: 1;
  transform: scaleX(1);
}



/* circless */
.circle-content {
    position: relative;
    text-align: center; 
    display:flex;
    justify-content:center;
}

.circle-content img {
    display: block;
    width: 100%;
    height: auto; /* Ensures responsive design */
}

.circle-content p {
    position: absolute;
    top: 69%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: black;
    font-size: .8rem;
    font-weight: bold;
    margin: 0;
}
.circle-div {
   display:flex;
   justify-content:center;
} 


.threeC-text {
    display: inline-block;
    font-size: 1.2rem;
    white-space: nowrap;
    overflow: hidden;
    width: 0; /* Initially hidden */
    visibility: hidden; /* Hide text initially */
    transition: width 2s ease; 
}

/* Typing animation */
.threeC-text.typing {
    visibility: visible; /* Make the text visible when typing */
    width: 100%; /* Gradually expand the width */
    animation: blink 0.8s step-end infinite; /* Optional cursor blink */
}



/* Cursor blink effect */
@keyframes blink {
    from {
        border-right-color: #d53140;
    }
    to {
        border-right-color: transparent;
    }
}
.threeC-text.typed{
    visibility: visible; /* Make the text visible when typing */
    width: 100%;
}


@media screen and (min-height: 580px) and (max-height: 800px) {
  /* Styles for screens with height between 590px and 800px */
  /* Your styles for screens taller than 590px */
  video{
   width: 90% !important;
  }
}

</style>

<body class="parent-body">
    <?php include_once "navbar.php" ?>
    <section id="home" style="margin-top: 7rem">
        <div class='landing-page-s1'>
            <div class="left">
                <div class="top">
                    <h1 class='' style="line-height: 1.1 !important;"><span class="text-dark heading-span" > Super CA is our </span></h1>
                    <h1 class='hading-fw mb-0' style="line-height: 1.1 !important;"><span class="text-dark heading-span" ></span>Resolve</h1>
                    <h1 class='' style="line-height: .9 !important;"><span class="text-dark heading-span" >Rest is Detail</span> </h1>
                </div>

                <div class="bottom">
                    <p style="font-size: 15px;color: #6a6969;">The network focuses on catering to the needs of listed companies with
                        global operations seeking high-quality audit and assurance services.</p>
                    <a href="<?= base_url() ?>opinion"
                        class='red-btn  d-flex justify-content-around align-items-center rounded-pill'
                        style="">
                        <span>Ask a Question</span>
                    </a>
                </div>
            </div>

            <div class="right" style="color: #212529;"> </div>
        </div>
        <div class="pt-5 px-5 mt-5">
            <div class="d-flex justify-content-center w-100">
                <h1 class="text-center mb-4 pyramid-heading scaleFromCenter">WHY WE'RE THE RIGHT CHOICE</h1>
            </div>
            <p class="text-justify mb-3 pyramid-sub-heading">Join us and unlock a world of opportunities designed to
                elevate your journey as a CA. Connect with experts, access powerful AI-driven tools, and streamline
                financial and governance solutions. Our platform empowers you to grow, scale your services, and deliver
                exceptional value to clients. This is your key to unlocking success in the CA profession.</p>
            <div class="d-flex justify-content-center">
                <a href="#" class='red-btn'>Join SUPER CA</a>
            </div>
            <img src="<?= base_url() ?>assets/rkda/superca-corp-adv.png" alt="" class='pt-5  mt-5' style="width: -webkit-fill-available;">
        </div>
        <div class="pt-4 px-5 mt-5">
            <div class="d-flex justify-content-center w-100">
                <h1 class="text-center mb-4 pyramid-heading scaleFromCenter">EXPLORE OUR OFFERINGS</h1>
            </div>
            <p class="text-justify mb-3 pyramid-sub-heading">RESOLVE, our AI-driven platform empowers Chartered
                Accountants to be true powerhouse for growth partnerships of their client. Enhance Capacity by
                automating tasks, Connecting with experts and enabling Clarity to build their practice is our promise.
                We invite you to Join our SUPER CA Community.</p>
                <div class="d-flex justify-content-center">
                    <div class='container row justify-content-center mt-5'>
                        <div class="col-md-3 circle-div">
                            <div class="circle-content">
                                <img src="<?= base_url() ?>assets/rkda/circle-i1.jpg" alt="" class="img-fluid">
                                <p class="threeC-text" data-text="Clarity"></p>
                            </div>
                        </div>
                        <div class="col-md-3 circle-div">
                            <div class="circle-content">
                                <img src="<?= base_url() ?>assets/rkda/circle-i2.jpg" alt="" class="img-fluid">
                                <p class="threeC-text" data-text="Capacity"></p>
                            </div>
                        </div>
                        <div class="col-md-3 circle-div">
                            <div class="circle-content">
                                <img src="<?= base_url() ?>assets/rkda/circle-i3.jpg" alt="" class="img-fluid">
                                <p class="threeC-text" data-text="Community"></p>
                            </div>
                        </div>
                    </div>
                </div>



        </div>

        <div class="container-fluid py-4 px-5 mt-5">
            <div class="d-flex flex-wrap my-5 ">
                <div class="col-md-6 px-0 d-flex justify-content-center left-scroll-part">
                    <div class="px-3 scrollable-content ">
                        <div>
                            <h3>Technology</h3>
                            <p><b>Advanced Analytics for Informed Decisions:</b> Our advisory services leverage
                                cutting-edge
                                analytics tools to provide insights that drive smarter business decisions.</p>
                            <p><b>Secure Digital Platforms:</b> We utilize state-of-the-art cybersecurity measures to
                                ensure that
                                your data remains confidential and protected, providing peace of mind in all your
                                interactions with us.</p>
                            <p><b>Streamlined Client Portals:</b> Access your reports, recommendations, and advisory
                                tools through
                                a user-friendly digital portal, designed to make navigating your data and insights
                                simple
                                and effective.</p>
                            <p><b>Customized Tech Solutions:</b>We tailor our technological tools to match your unique
                                needs,
                                ensuring that our digital solutions align perfectly with your business goals.</p>
                        </div>
                        <div>
                            <h3>Organize</h3>
                            <p><b>Advanced Analytics for Informed Decisions: </b>Our advisory services leverage
                                cutting-edge
                                analytics tools to provide insights that drive smarter business decisions.</p>
                            <p><b>Secure Digital Platforms:</b> We utilize state-of-the-art cybersecurity measures to
                                ensure that
                                your data remains confidential and protected, providing peace of mind in all your
                                interactions with us.</p>
                            <p><b>Streamlined Client Portals:</b> Access your reports, recommendations, and advisory
                                tools through
                                a user-friendly digital portal, designed to make navigating your data and insights
                                simple
                                and effective.</p>
                            <p><b>Customized Tech Solutions:</b> We tailor our technological tools to match your unique
                                needs,
                                ensuring that our digital solutions align perfectly with your business goals.</p>
                        </div>
                        <div>
                            <h3>Review</h3>
                            <p><b>Advanced Analytics for Informed Decisions:</b> Our advisory services leverage
                                cutting-edge
                                analytics tools to provide insights that drive smarter business decisions.</p>
                            <p><b>Secure Digital Platforms: </b>We utilize state-of-the-art cybersecurity measures to
                                ensure that
                                your data remains confidential and protected, providing peace of mind in all your
                                interactions with us.</p>
                            <p><b>Streamlined Client Portals:</b> Access your reports, recommendations, and advisory
                                tools through
                                a user-friendly digital portal, designed to make navigating your data and insights
                                simple
                                and effective.</p>
                            <p><b>Customized Tech Solutions:</b> We tailor our technological tools to match your unique
                                needs,
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
        <div class="container-fluid py-4 px-5 mt-5">
            <div class="d-flex justify-content-center w-100">
                <h1 class="text-center mb-4 pyramid-heading scaleFromCenter">HOW WE ACHIEVE IT</h1>
            </div>
            <p class="text-justify mb-3 pyramid-sub-heading">Our Corporate Finance offerings encompass a comprehensive
                suite of services designed to navigate the complex landscape of mergers and acquisitions (M&A). We
                specialize in detailed valuation processes and strategic M&A planning, ensuring that every transaction
                is meticulously structured to achieve optimal outcomes.</p>
        </div>
        <!-- <div class="container">
            <div class="row scoped-card-container">
                <div class="col-md-3">
                    <div class="card-wrapper">
                        <div class="card">
                            <div class="card-inner " >
                            <div class="card-icon">
                                <img src="<?= base_url() ?>assets/rkda/recycling.png" alt="Icon">
                            </div>
                            <h3>RESPONSIBILITY TOWARD PROFESSION</h3>
                            <p>Maintain integrity, honesty, and high standards, fostering trust and credibility within the network.</p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-wrapper">
                        <div class="card">
                        <div class="card-inner " >
                            <div class="card-icon">
                                <img src="<?= base_url() ?>assets/rkda/recycling.png" alt="Icon">
                            </div>
                            <h3>DESIRE TO LEARN AND GROW</h3>
                            <p>Embrace continuous learning, adapting to new challenges and opportunities to enhance expertise and value.</p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-wrapper">
                        <div class="card">
                        <div class="card-inner " >
                            <div class="card-icon">
                                <img src="<?= base_url() ?>assets/rkda/recycling.png" alt="Icon">
                            </div>
                            <h3>DILIGENCE IN WORK ETHIC AND SERVICE</h3>
                            <p>Consistently deliver excellence through dedication, ensuring clients' needs are met with thorough attention and care.</p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-wrapper">
                        <div class="card">
                        <div class="card-inner " >
                            <div class="card-icon">
                                <img src="<?= base_url() ?>assets/rkda/recycling.png" alt="Icon">
                            </div>
                            <h3>ACCOUNTABILITY TO STAKEHOLDERS AND SOCIETY</h3>
                            <p>Act with transparency and responsibility, ensuring actions positively impact both stakeholders and the broader community.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->





    </section>
    <section class="responsibility-section">
        <div class="content-wrapper">
            <div class="grid-container">
                <div class="row align-items-stretch">
                    <div class="grid-column col-12 col-md-6 col-lg-3">
                        <div class="card-container h-100">
                            <div class="card-wrapper h-100">
                                <div class="card h-100">
                                    <div class="border-decoration left">
                                        <div class="border-top left"></div>
                                        <div class="border-vertical-thick left"></div>
                                        <div class="border-vertical-thin left"></div>
                                        <div class="border-horizontal left"></div>
                                    </div>
                                    <div class="content-card">
                                        <div class="inner-card">
                                            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6adbd9f63e89df8f076ceaac82bd03bdc79f400451d71ac5376f0164180deb95?placeholderIfAbsent=true&apiKey=b229c8c8e9ba4159b2d71eac9ee82d43"
                                                alt="Responsibility Icon" class="card-icon" />
                                            <h3 class="card-title">RESPONSIBILITY TOWARD PROFESSSION</h3>
                                            <p class="card-description">Maintain integrity, honesty, and high standards,
                                                fostering trust and credibility within the network.</p>
                                        </div>
                                    </div>
                                    <div class="border-decoration right">
                                        <div class="border-horizontal right"></div>
                                        <div class="border-vertical-thin right"></div>
                                        <div class="border-vertical-thick right"></div>
                                        <div class="border-top right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-column col-12 col-md-6 col-lg-3">
                        <div class="card-container h-100">
                            <div class="card-wrapper h-100">
                                <div class="card h-100">
                                    <div class="border-decoration left">
                                        <div class="border-top left"></div>
                                        <div class="border-vertical-thick left"></div>
                                        <div class="border-vertical-thin left"></div>
                                        <div class="border-horizontal left"></div>
                                    </div>
                                    <div class="content-card">
                                        <div class="inner-card">
                                            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6adbd9f63e89df8f076ceaac82bd03bdc79f400451d71ac5376f0164180deb95?placeholderIfAbsent=true&apiKey=b229c8c8e9ba4159b2d71eac9ee82d43"
                                                alt="Responsibility Icon" class="card-icon" />
                                            <h3 class="card-title">DESIRE TO LEARN AND GROW</h3>
                                            <p class="card-description">Embrace continuous learning, adapting to new challenges and opportunities to enhance expertise and value.</p>
                                        </div>
                                    </div>
                                    <div class="border-decoration right">
                                        <div class="border-horizontal right"></div>
                                        <div class="border-vertical-thin right"></div>
                                        <div class="border-vertical-thick right"></div>
                                        <div class="border-top right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-column col-12 col-md-6 col-lg-3">
                        <div class="card-container h-100">
                            <div class="card-wrapper h-100">
                                <div class="card h-100">
                                    <div class="border-decoration left">
                                        <div class="border-top left"></div>
                                        <div class="border-vertical-thick left"></div>
                                        <div class="border-vertical-thin left"></div>
                                        <div class="border-horizontal left"></div>
                                    </div>
                                    <div class="content-card">
                                        <div class="inner-card">
                                            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6adbd9f63e89df8f076ceaac82bd03bdc79f400451d71ac5376f0164180deb95?placeholderIfAbsent=true&apiKey=b229c8c8e9ba4159b2d71eac9ee82d43"
                                                alt="Responsibility Icon" class="card-icon" />
                                            <h3 class="card-title">DILIGENCE IN WORK ETHIC AND SERVICE</h3>
                                            <p class="card-description">Consistently deliver excellence through dedication, ensuring clients' needs are met with thorough attention and care.</p>
                                        </div>
                                    </div>
                                    <div class="border-decoration right">
                                        <div class="border-horizontal right"></div>
                                        <div class="border-vertical-thin right"></div>
                                        <div class="border-vertical-thick right"></div>
                                        <div class="border-top right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-column col-12 col-md-6 col-lg-3">
                        <div class="card-container h-100">
                            <div class="card-wrapper h-100">
                                <div class="card h-100">
                                    <div class="border-decoration left">
                                        <div class="border-top left"></div>
                                        <div class="border-vertical-thick left"></div>
                                        <div class="border-vertical-thin left"></div>
                                        <div class="border-horizontal left"></div>
                                    </div>
                                    <div class="content-card">
                                        <div class="inner-card">
                                            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6adbd9f63e89df8f076ceaac82bd03bdc79f400451d71ac5376f0164180deb95?placeholderIfAbsent=true&apiKey=b229c8c8e9ba4159b2d71eac9ee82d43"
                                                alt="Responsibility Icon" class="card-icon" />
                                            <h3 class="card-title">ACCOUNTABILITY TO STAKEHOLDERS AND SOCIETY</h3>
                                            <p class="card-description">Act with transparency and responsibility, ensuring actions positively impact both stakeholders and the broader community.</p>
                                        </div>
                                    </div>
                                    <div class="border-decoration right">
                                        <div class="border-horizontal right"></div>
                                        <div class="border-vertical-thin right"></div>
                                        <div class="border-vertical-thick right"></div>
                                        <div class="border-top right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <?php include_once "merchandise.php" ?>






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
                    <a href="https://www.linkedin.com/company/ecovisrkca/" target="_blank">
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




    $(document).ready(function() {
        // Function to adjust font size
        function adjustFontSizeInEm() {
            const baseFontSize = 16; // Assume the base font size of the root element is 16px
            let screenWidth = $(window).width(); // Get the current screen width
            let emSize = Math.max(0.75, Math.min(1.5, screenWidth / 1600));
            // Adjust range: 0.75em (min) to 1.5em (max)

            $('py-4.px-5 p').css('font-size', emSize + 'em'); // Apply the calculated font size
            $('h3').css('font-size', emSize + 'em'); // Apply the calculated font size
        }

        // Call the function on page load
        adjustFontSizeInEm();

        // Adjust font size on window resize
        $(window).resize(function() {
            adjustFontSizeInEm();
        });

        function checkVisibility() {
            $(".scaleFromCenter").each(function () {
            var elementTop = $(this).offset().top; // Distance of the element from the top of the document
            var elementBottom = elementTop + $(this).outerHeight(); // Bottom of the element
            var viewportTop = $(window).scrollTop(); // Top of the viewport
            var viewportBottom = viewportTop + $(window).height(); // Bottom of the viewport

            // Check if the element is in the viewport
            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                if (!$(this).hasClass("in-view")) {
                $(this).addClass("in-view"); // Add animation class
                }
            } else {
                $(this).removeClass("in-view"); // Remove class when out of view
            }
            });
        }

        // Trigger the function on scroll
        $(window).on("scroll", function () {
            checkVisibility();
        });

        // Trigger on page load (for elements already in view)
        checkVisibility();


        function typingEffect() {
        $('.threeC-text').each(function () {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();

            // Check if element is in the viewport
            if (elementBottom > viewportTop && elementTop < viewportBottom && !$(this).hasClass('typing')) {
                var text = $(this).data('text'); // Get the text from the data attribute
                var $element = $(this);

                // Simulate typing effect
                $element.addClass('typing').css('visibility', 'visible'); // Make text visible
                let charIndex = 0;

                // Clear previous text and reset it for typing effect
                $element.text(''); 

                let typingInterval = setInterval(() => {
                    $element.text(text.substring(0, charIndex + 1)); // Display next character
                    charIndex++;
                    if (charIndex === text.length) {
                        clearInterval(typingInterval); // Stop typing
                        $element.removeClass('typing'); // Remove typing class for future animations
                        $element.addClass('typed'); 
                    }
                }, 100); // Adjust typing speed (in milliseconds)
            }
        });
    }

    // Trigger the function on page load and scroll
    $(window).on('scroll', typingEffect);
    typingEffect(); // Initial check

    });

    $(document).ready(function () {
        const parentArea = $("html"); // Replace with your parent area selector
        const scrollableContent = $(".scrollable-content");
         console.log(parentArea,scrollableContent,'parentArea');
         
        parentArea.on("scroll", function () {
            console.log(parentArea,'parentArea 2');
            scrollableContent.scrollTop(0); // Reset the scrollable area to the top
        });
    });

    </script>

</body>

</html>