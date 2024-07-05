<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>
<style>
  .red-letter{
    color:crimson;
    font-size:1rem !important;
    font-weight:600;
    font-style: italic;
  }
  .justify-text{
    text-align:justify;
  }
</style>
<body>
    <?php include_once "navbar.php" ?>
<section id="home"  >
 <div class='row align-items-center pt-4'>

 <div class="col-md-6 col-sm-12 d-flex justify-content-end">
        <div class="col-md-11">
        <h1  class='mb-5'>Global Connects 
        Local Communities</h1>
        <a href="#" class='btn red-btn w-50 d-flex justify-content-around align-items-center rounded-pill' ><span>Explore more</span></a>
        </div>
    </div>
    <div class="col-md-6 col-sm-12 d-flex justify-content-center pt-5">
    <div class="col-md-8">
      <img src="<?= base_url() ?>assets/rkda/landing-right.png" alt="" width='100%'>
      
    </div>
    </div>
   
</div>

<div class='pb-5'>
    <img src="<?= base_url() ?>assets/rkda/random-text.png" alt="" style='    width: -webkit-fill-available;'>
</div>
</section>
<section id="about" class='my-5' >
 <div class='row align-items-center py-5 my-5'  style='height:100vh;'>
 <div class="col-md-5 col-sm-12 d-flex justify-content-center">
        <div class="col-md-10">
        <h4  class='mb-4'>WHY JOIN US? </h4>
         <p class='justify-text'>Connect with a network of <span class='red-letter' >C</span>lients and subject matter experts. Enhance <span class='red-letter' >C</span>apabilities through training and technology platforms. Join a global, value-driven <span class='red-letter' >C</span>ommunity. Serve clients better and acquire new ones. Expand <span class='red-letter' >C</span>apacity and gain access to social and financial <span class='red-letter' >C</span>apital as part of a larger community.</p>
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
 <div class="col-md-8 col-sm-12 d-flex justify-content-center">
        <div class="col-md-10">
         <h4  class='mb-3'>HOW IT WORKS? </h4>
         <p class='fst-italic'>Register with us. We'll guide you through a smooth onboarding process, helping you craft a stellar profile and co-create a personalized plan for success. Sharpen your skills with top-notch training and resources, then dive into a vibrant community of clients and members, ready to collaborate and build your business. Finally, your expertise takes center stage. Contribute through exciting projects, strategic investments, or even by growing alongside our company.</p>
           <div class='d-flex justify-content-end' style='font-weight:bold;'><a href="rkda_login" class='text-dark' >JOIN US ></a></div> 
        </div>
    </div>
    <div class="col-md-4 col-sm-12 d-flex justify-content-center">
    <div class="col-md-8 d-flex justify-content-center align-items-center">
      <img src="<?= base_url() ?>assets/rkda/howittake.jpg" alt="" width='70%'>
    </div>
    </div>
   
    </div>
     <div>
       <img src="<?= base_url() ?>assets/rkda/roadmap.jpg" alt="" width='100%'>
     </div>

    <div class='row align-items-center py-5 my-5'>
 <div class="col-md-8 col-sm-12 d-flex justify-content-center">
        <div class="col-md-10">
        <h4  class='mb-3'>WHAT IT TAKES? </h4>
         <p class='fst-italic'>Our Corporate Finance offerings encompass a comprehensive suite of services designed to navigate the complex landscape of mergers and acquisitions (M&A). We specialize in detailed valuation processes and strategic M&A planning, ensuring that every transaction is meticulously structured to achieve optimal outcomes.</p>
           <div class='d-flex justify-content-end' style='font-weight:bold;'><a href="rkda_login" class='text-dark' >KNOW MORE ></a></div> 
        </div>
    </div>
    <div class="col-md-4 col-sm-12 d-flex justify-content-center">
    <div class="col-md-8 d-flex justify-content-center align-items-center">
      <img src="<?= base_url() ?>assets/rkda/whatittakes.jpg" alt="" width='70%'>
    </div>
    </div>
   
    </div>
</section>
<section id="#howittakes" class='my-5'  >

</section>
<section id="#whatittakes" class='my-5'  >
 
</section>
<section id='needHelp' style='height:100vh;display:flex'>

    <div class='d-flex align-items-center'>
        <div class="col-md-7 d-flex justify-content-end ">
            <div class="col-md-10">
              <h1 class='mb-3 text-danger text-uppercase ' >Stay in touch with us!</h1>
              <h4>Connect with us.</h4>
              <div class='col-md-8 d-flex justify-content-end' >
                
                  <div class='col-md-11'>
                  <p class='text-danger' >+123-456-7890</p>
                  <p class='text-danger' >hello@reallygreatsite.com</p>
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
</body>
</html>