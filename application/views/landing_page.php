<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">

</head>
<style>
  
    .owl-video-wrapper {
      width: 100%;
      height: 100%;
    }
  .red-letter{
    color:crimson;
    font-size:1rem !important;
    font-weight:600;
    /* font-style: italic; */
  }
  .justify-text{
    /* text-align:justify; */
  }
  .hading-fw{
    font-weight:600;
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
	max-width: 950px;
	margin: 0 auto;
	h2 {
		text-align: center;
	}
}
.splide {
	max-width: 950px;
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
.splide__arrow{
  top:60%;
}
.splide__pagination {
	margin-bottom: -35px;
}
.splide__pagination__page.is-active {
	background: crimson;
}
.splide__track iframe{
  width: -webkit-fill-available;
}
#carousel-heading{
  font-weight:600;
}
.card-img-abt{
  width:60%;

}
.card-img-abt-div{
  display:flex;
  justify-content:center;
  margin-top: -28%;
  position: relative;
  margin-bottom:2rem;
}
.abt-cards h6{
  font-weight:600;
}
.abt-cards p{
  text-align:justify;
}
.abt-cards .card{
  border: 2px solid crimson;
    border-radius: 36px;

}
.merchandise-div{
    height: 200px; 
    background-image: url('./assets/rkda/merchandise.jpeg');
    background-size: cover; /* Adjust this property as needed */
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
</style>

<body>
    <?php include_once "navbar.php" ?>
<section id="home"  >
 <div class='row align-items-center pt-4'>

 <div class="col-md-6 col-sm-12 d-flex justify-content-end">
        <div class="col-md-10">
        <h1  class='hading-fw'>Global Connects</h1>
        <h1  class='mb-4 hading-fw'> 
        Local Communities</h1>
        <a href="<?= base_url() ?>experts" class='btn red-btn w-50 d-flex justify-content-around align-items-center rounded-pill' ><span>Explore more</span></a>
        </div>
    </div>
    <div class="col-md-6 col-sm-12 d-flex justify-content-center pt-5">
    <div class="col-md-12">
      <img src="<?= base_url() ?>assets/rkda/landing-page-rkda.jpg" alt="" width='100%'>
      
    </div>
    </div>
   
</div>

<div class='my-5'>
    <!-- <img src="<?= base_url() ?>assets/rkda/random-text.png" alt="" style='    width: -webkit-fill-available;'> -->

    <div class="page-width">
	<section class="splide" aria-labelledby="carousel-heading">
		<h2 id="carousel-heading" class='mb-3' >Our Journey</h2>

		<div class="splide__track">
			<ul class="splide__list">
      <li class="splide__slide">
        <a href="https://youtu.be/hh0Iwt4lwa0" data-lity>
            <iframe  src="https://www.youtube.com/embed/hh0Iwt4lwa0" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
        </a>
        </li>



				<li class="splide__slide">
        <a href="https://youtu.be/XrT2Wfsk7gA" data-lity>
            <iframe  src="https://www.youtube.com/embed/XrT2Wfsk7gA" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
        </a>
				</li>

				<li class="splide__slide">
        <a href="https://youtu.be/ocPXwbIzNoM" data-lity>
            <iframe  src="https://www.youtube.com/embed/ocPXwbIzNoM" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
        </a>
				</li>

				<li class="splide__slide">
					<a href="https://youtu.be/C0OqyOU4B54" data-lity>
              <iframe  src="https://www.youtube.com/embed/C0OqyOU4B54" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>	
          </a>
				</li>

				<li class="splide__slide">
					<a href="https://youtu.be/JUBF1cZG7kA" data-lity>
          <iframe  src="https://www.youtube.com/embed/JUBF1cZG7kA" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>	
					</a>
				</li>
				<li class="splide__slide">
					<a href="https://youtu.be/oNZbmJisIyw" data-lity>
          <iframe  src="https://www.youtube.com/embed/oNZbmJisIyw" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>	
    			</a>
				</li>

			</ul>
		</div>
	</section>
</div>



</div>
</section>
<section id="about" class='my-5' >
 <div class='row align-items-center py-5 my-5'  style='height:100vh;'>
 <div class="col-md-5 col-sm-12 d-flex justify-content-end">
        <div class="col-md-10">
        <h4  class='mb-4'>WHY JOIN US? </h4>
         <p class='justify-text' style='color: #726b6b;' >Connect with a network of <span class='red-letter' >C</span>lients and subject matter experts. Enhance <span class='red-letter' >C</span>apabilities through training and technology platforms. Join a global, value-driven <span class='red-letter' >C</span>ommunity. Serve clients better and acquire new ones. Expand <span class='red-letter' >C</span>apacity and gain access to social and financial <span class='red-letter' >C</span>apital as part of a larger community.</p>
           <div class='d-flex justify-content-end' style='font-weight:bold;'><a href="rkda_login" class='text-dark' >Join Us ></a></div> 
        </div>
    </div>
    <div class="col-md-7 col-sm-12 d-flex justify-content-center">
        <!-- <div class="col-md-8"> -->
        <!-- <img src="<?= base_url() ?>assets/rkda/about-rkda.png" alt="" width='100%'> -->
        <?php include_once "c_carousel.php" ?>
        <!-- </div> -->
    </div>
   
    </div>
    <div class='row align-items-center py-5 my-5'>
 <div class="col-md-8 col-sm-12 d-flex justify-content-end">
        <div class="col-md-11 px-2">
         <h4  class='mb-3'>HOW IT WORKS? </h4>
         <p class=' text-justify' style='color: #726b6b;'  >Register with us. We'll guide you through a smooth onboarding process, helping you craft a stellar profile and co-create a personalized plan for success. Sharpen your skills with top-notch training and resources, then dive into a vibrant community of clients and members, ready to collaborate and build your business. Finally, your expertise takes center stage. Contribute through exciting projects, strategic investments, or even by growing alongside our company.</p>
           <div class='d-flex justify-content-end' style='font-weight:bold;'><a href="rkda_login" class='text-dark' >Join Us ></a></div> 
        </div>
    </div>
    <div class="col-md-4 col-sm-12 d-flex justify-content-center">
    <div class="col-md-8 d-flex justify-content-center align-items-center">
      <img src="<?= base_url() ?>assets/rkda/howittake.jpg" alt="" width='70%'>
    </div>
    </div>
   
    </div>
     <div>
       <img src="<?= base_url() ?>assets/rkda/work-flow.png" alt="" width='100%'>
     </div>

    <div class='row align-items-center py-5 my-5'>
 <div class="col-md-8 col-sm-12 d-flex justify-content-end">
        <div class="col-md-11 px-2">
        <h4  class='mb-3'>WHAT IT TAKES? </h4>
         <p class=' text-justify' style='color: #726b6b;' >Our Corporate Finance offerings encompass a comprehensive suite of services designed to navigate the complex landscape of mergers and acquisitions (M&A). We specialize in detailed valuation processes and strategic M&A planning, ensuring that every transaction is meticulously structured to achieve optimal outcomes.</p>
           <div class='d-flex justify-content-end' style='font-weight:bold;'><a href="rkda_login" class='text-dark' >Join Us ></a></div> 
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
            <div class='card-img-abt-div' >
              <img src="<?= base_url() ?>assets/rkda/PAE.png" class='card-img-abt' alt="">
            </div>
            <div>

            <div class='d-flex justify-content-center' > <h6 class='text-center w-75  mb-2 poppins-medium'>PROFFESIONL AND ETHICAL</h6></div>
            <P class='text-justify text-secondary' >Maintain integrity, honesty, and high standards, fostering trust and credibility within the network.</P>
            </div>
           

          </div>
        </div>
        <div class="card col-md-3">
          <div class="card-body">
            <div class='card-img-abt-div' >
              <img src="<?= base_url() ?>assets/rkda/WTC.png" class='card-img-abt' alt="">
            </div>
            <div class='d-flex justify-content-center' > <h6 class='text-center w-75  mb-2 poppins-medium text-uppercase'>WilliNGNESS TO CONTRIBUTE</h6></div>
              <P class='text-justify text-secondary' >Actively engage, share resources, and collaborate for collective success within the network.</P>

          </div>
        </div>
        <div class="card col-md-3">
          <div class="card-body">
            <div class='card-img-abt-div' >
              <img src="<?= base_url() ?>assets/rkda/EM.png" class='card-img-abt' alt="">
            </div>
            <div class='d-flex justify-content-center' >    <h6 class='text-center w-75  mb-2 poppins-medium text-uppercase'>ENTREPRENEURIAL MINDSET</h6></div>
              <P class='text-justify text-secondary' >Embrace innovation, proactive problem-solving, and adaptability for growth and success within the network.</P>

          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include_once "merchandise.php" ?>
</section>
<!-- <section id="#howittakes" class='my-5'  >

</section>
<section id="#whatittakes" class='my-5'  >
 
</section> -->

<section id='needHelp' style='height:100vh;display:flex'>

    <div class='d-flex align-items-center'>
        <div class="col-md-7 d-flex justify-content-end ">
            <div class="col-md-10">
              <h1 class='mb-3 text-danger text-uppercase poppins-medium' >Stay in touch</h1>
              <h4>Connect with us.</h4>
              <div class='col-md-8 d-flex justify-content-start' >
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



<footer>
    <div class='red-band'>

    </div>
</footer>
<!-- jQuery (required) -->
<!-- Owl Carousel JavaScript -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>


<script>
var splide = new Splide(".splide", {
	perPage: 3,
	gap: "2rem",
	breakpoints: {
		640: {
			perPage: 2,
			gap: "2rem",
			height: "6rem"
		},
		480: {
			perPage: 1,
			gap: "2rem",
			height: "6rem"
		}
	}
});

splide.mount();

</script>

</body>
</html>