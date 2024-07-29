<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>superCa</title>

  <link rel="stylesheet" href="<?= base_url('assets/owl/owl.carousel.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/owl/owl.carousel.min.css') ?>">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<style>
  /* body {
  width: 100vw;
  height: 100vh;
  display: grid;
  padding: 60px 0;
  grid: 1fr min-content min-content 1fr / 1fr;
  align-items: center;
  justify-items: center;
} */
  /* 
header {
  font-size: 42px;
  font-weight: bold;
  text-align: center;
} */

  #superca {
    width: 100vw;
    overflow: hidden;
    position: relative;
    --v-offset: 60px;
    --curve-height: 105px;

  }

  #superca::before,
  #superca::after {
    content: "";
    display: block;
    background: white;
    width: calc(100vw + 2 * var(--v-offset));
    height: var(--curve-height);
    position: absolute;
    border-radius: 50%;
    left: calc(-1 * var(--v-offset));
    right: calc(-1 * var(--v-offset));
    z-index: 4;
  }

  #superca::before {
    top: calc(-0.6 * var(--curve-height));
  }

  #superca::after {
    bottom: calc(-0.4 * var(--curve-height));
  }

  .wrapper {
    /* display: grid;
    grid-template-rows: 316px;
    grid-auto-flow: column;
    grid-gap: 24px;
    overflow: auto;
    scroll-snap-type: x mandatory; */
    background: whitesmoke !important;
  }

  .wrapper img {
    scroll-snap-align: center;
    height: 250px;
    /* width: 280px; */
    display: block;
    -webkit-user-select: none;
    margin: auto;
    background-color: hsl(0, 0%, 90%);
    transition: background-color 300ms;
  }

  .km {
    color: crimson;
    font-weight: 500;

  }

  .km:hover {
    color: black;


  }

  .header {
    background-color: crimson;
    color: #fff;
    padding: 5px 10px;
    text-align: center;
    font-size: 25px;
    border-radius: 10px;
  }

  .video-player {
    border: none;
    outline: none;
  }

  .swal2-html-container {
    padding: 1.25em 1.6em 0!important;
  }
  .swal2-actions {
    display: none !important;
  }
  .swal2-popup.swal2-modal.swal2-show {
    margin: 0rem !important;
  }
</style>

<script src="<?= base_url('assets/owl/owl.carousel.min.js') ?>" defer></script>

<body>
  <?php include_once "navbar.php" ?>
  <section id='superca_page'>


    <div class="d-flex justify-content-center">
      <div class='' style="margin: 0 3rem">
        <div class="mt-5">
          <div class="header w-100" style="margin-bottom: 1rem">Super CA</div>
        </div>

        <p class='text-center'>SuperCA empowers Chartered Accountants through specialized tools, resources, and
          community support. It enables CAs to explore niches like investment banking, forensic auditing, and
          entrepreneurship. Key features include state-of-the-art tools, comprehensive training, vibrant community
          engagement, and opportunities for mentorship and networking</p>
        <div class="d-flex justify-content-center">
          <a href="https://forum.iitcouncil.org/superca/" class='km red-btn  text-center  rounded-pill'
            style='width:17%'>Know more</a>
        </div>
      </div>
    </div>
    <section id='superca'>


      <!-- <div class="wrapper owl-carousel owl-theme">
        <a target=”_blank”
          href="https://www.linkedin.com/posts/ecovisrkca_careers-dreams-work-activity-7186988292234436610-6JdY?utm_source=share&utm_medium=member_desktop"><img
            src="<?= base_url() ?>assets/rkda/s1.jpeg" alt="Image 1"></a>

        <a target=”_blank”
          href="https://www.linkedin.com/posts/ecovisrkca_finance-accounting-charteredaccountants-activity-7214595656718442496-GW7r?utm_source=share&utm_medium=member_desktop"><img
            src="<?= base_url() ?>assets/rkda/s2.jpeg" alt="Image 2"></a>

        <a target=”_blank” href=""><img src="<?= base_url() ?>assets/rkda/s3.jpeg" alt="Image 3"></a>

        <a target=”_blank”
          href="https://www.linkedin.com/posts/ecovisrkca_superca-findingyourniche-superca-activity-7217128047269847040-34lQ?utm_source=share&utm_medium=member_desktop"><img
            src="<?= base_url() ?>assets/rkda/s4.jpeg" alt="Image 4"></a>
        <a target=”_blank”
          href="https://www.linkedin.com/posts/deeparathi_50yearsofexcellence-innovationintech-newinitiatives-activity-7214576209861496832-YtjE?utm_source=share&utm_medium=member_desktop"><img
            src="<?= base_url() ?>assets/rkda/s5.jpeg" alt="Image 5"></a>
        <a target=”_blank”
          href="https://www.linkedin.com/posts/ecovisrkca_charteredaccountancy-careerexploration-professionaldevelopment-activity-7183076534373535744-Xvw1?utm_source=share&utm_medium=member_desktop"><img
            src="<?= base_url() ?>assets/rkda/s6.jpeg" alt="Image 6"></a>

        <a target=”_blank”
          href="https://www.linkedin.com/posts/ecovisrkca_charteredaccountant-professionalgrowth-makeadifference-activity-7184151996868812801-jQ79?utm_source=share&utm_medium=member_desktop"><img
            src="<?= base_url() ?>assets/rkda/s7.jpeg" alt="Image 7"></a>
        <a target=”_blank”
          href="https://www.linkedin.com/posts/ecovisrkca_do-you-want-to-become-a-super-ca-too-activity-7185622930616107009-d9G8?utm_source=share&utm_medium=member_desktop">
        <img src="<?= base_url() ?>assets/rkda/s8.jpeg" alt="Image 8"></a>

        <a target=”_blank”
          href="https://www.linkedin.com/posts/ecovisrkca_careers-dreams-work-activity-7186988292234436610-6JdY?utm_source=share&utm_medium=member_desktop"><img
            src="<?= base_url() ?>assets/rkda/s1.jpeg" alt="Image 1"></a>

        <a target=”_blank”
          href="https://www.linkedin.com/posts/ecovisrkca_finance-accounting-charteredaccountants-activity-7214595656718442496-GW7r?utm_source=share&utm_medium=member_desktop"><img
            src="<?= base_url() ?>assets/rkda/s2.jpeg" alt="Image 2"></a>

        <a target=”_blank” href=""><img src="<?= base_url() ?>assets/rkda/s3.jpeg" alt="Image 3"></a>

        <a target=”_blank”
          href="https://www.linkedin.com/posts/ecovisrkca_superca-findingyourniche-superca-activity-7217128047269847040-34lQ?utm_source=share&utm_medium=member_desktop"><img
            src="<?= base_url() ?>assets/rkda/s4.jpeg" alt="Image 4"></a>
        <a target=”_blank”
          href="https://www.linkedin.com/posts/deeparathi_50yearsofexcellence-innovationintech-newinitiatives-activity-7214576209861496832-YtjE?utm_source=share&utm_medium=member_desktop"><img
            src="<?= base_url() ?>assets/rkda/s5.jpeg" alt="Image 5"></a>
        <a target=”_blank”
          href="https://www.linkedin.com/posts/ecovisrkca_charteredaccountancy-careerexploration-professionaldevelopment-activity-7183076534373535744-Xvw1?utm_source=share&utm_medium=member_desktop"><img
            src="<?= base_url() ?>assets/rkda/s6.jpeg" alt="Image 6"></a>

        <a target=”_blank”
          href="https://www.linkedin.com/posts/ecovisrkca_charteredaccountant-professionalgrowth-makeadifference-activity-7184151996868812801-jQ79?utm_source=share&utm_medium=member_desktop"><img
            src="<?= base_url() ?>assets/rkda/s7.jpeg" alt="Image 7"></a>
        <a target=”_blank”
          href="https://www.linkedin.com/posts/ecovisrkca_do-you-want-to-become-a-super-ca-too-activity-7185622930616107009-d9G8?utm_source=share&utm_medium=member_desktop">
        <img src="<?= base_url() ?>assets/rkda/s8.jpeg" alt="Image 8"></a>
      </div> -->


      <div class="wrapper owl-carousel owl-theme">
        <img src="<?= base_url() ?>assets/rkda/s1.jpeg" alt="Image 1" data-video="<?= base_url() ?>assets/rkda/videos/vid-1.mp4">
        <img src="<?= base_url() ?>assets/rkda/s2.jpeg" alt="Image 2" data-video="<?= base_url() ?>assets/rkda/videos/">
        <img src="<?= base_url() ?>assets/rkda/s3.jpeg" alt="Image 3" data-video="<?= base_url() ?>assets/rkda/videos/">
        <img src="<?= base_url() ?>assets/rkda/s4.jpeg" alt="Image 4" data-video="<?= base_url() ?>assets/rkda/videos/Saloni 2ndd Upload.m4v">
        <img src="<?= base_url() ?>assets/rkda/s5.jpeg" alt="Image 5" data-video="<?= base_url() ?>assets/rkda/videos/">
        <img src="<?= base_url() ?>assets/rkda/s6.jpeg" alt="Image 6" data-video="<?= base_url() ?>assets/rkda/videos/vid-6.mp4">
        <img src="<?= base_url() ?>assets/rkda/s7.jpeg" alt="Image 7" data-video="<?= base_url() ?>assets/rkda/videos/vid-7.mp4">
        <img src="<?= base_url() ?>assets/rkda/s8.jpeg" alt="Image 8" data-video="<?= base_url() ?>assets/rkda/videos/vid-8.mp4">
      </div>


    </section>
    <div class='d-flex justify-content-center'>
      <div class="col-md-7">
        <ul>
          <li><strong>Specialized Support:</strong> Tailored tools and resources for niche areas within accounting.</li>
          <li><strong>Community Engagement:</strong> Vibrant professional network fostering collaboration and learning.
          </li>
          <li><strong>Professional Growth:</strong> Opportunities for mentorship, networking, and advanced training.
          </li>
          <li><strong>Career Advancement:</strong> Empowering CAs to optimize practices and achieve career success.</li>
        </ul>

      </div>
    </div>



  </section>
  <?php include_once "new_footer.php" ?>

  <script>
    $(document).ready(function(){
      $('.owl-carousel').owlCarousel({
        margin: 20,
      });
    });
  </script>

  <script>
    let wrapperImages = document.querySelectorAll('.wrapper img')

    
    wrapperImages.forEach(img => {
      img.onclick = () => showVideo(img) 
    })

    function showVideo(img) {
      let path = img.getAttribute('data-video')
      
      let html = path.charAt(path.length - 4) == '.'? `
          <video controls controlsList="nodownload" autoplay width="100%" class="video-player">
            <source src="${path}" type="video/mp4">
          </video>` : `
          <h3 style="color: #df3255;">Cannot play this Video!</h3>`

      Swal.fire({
        html,
        showCloseButton: false,
        showCancelButton: false,
        focusConfirm: false,
      })
    }

  </script>

 
</body>

</html>