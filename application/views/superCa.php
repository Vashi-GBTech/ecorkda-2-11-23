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
    margin-block: 2rem;

  }

  /* #superca::before,
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
  } */

  /* #superca::before {
    top: calc(-0.6 * var(--curve-height));
  }

  #superca::after {
    bottom: calc(-0.4 * var(--curve-height));
  } */

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


    <div class="d-flex justify-content-center"  style="margin-top: 8.5rem;">
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
            style='padding: .5rem 2rem;'>Know more</a>
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
        
      </div>

      <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/hh0Iwt4lwa0?si=XWWEv9XzbdYW17Q1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->

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
    let wrapperImagesData = [
      { img: "<?= base_url() ?>assets/rkda/s1.jpeg", video: "<?= base_url() ?>assets/rkda/videos/vid-1.mp4" },
      { img: "<?= base_url() ?>assets/rkda/s2.jpeg", video: "<?= base_url() ?>assets/rkda/videos/" },
      { img: "<?= base_url() ?>assets/rkda/s3.jpeg", video: "<?= base_url() ?>assets/rkda/videos/" },
      { img: "<?= base_url() ?>assets/rkda/s4.jpeg", video: "<?= base_url() ?>assets/rkda/videos/Saloni 2ndd Upload.m4v" },
      { img: "<?= base_url() ?>assets/rkda/s5.jpeg", video: "<?= base_url() ?>assets/rkda/videos/" },
      { img: "<?= base_url() ?>assets/rkda/s6.jpeg", video: "<?= base_url() ?>assets/rkda/videos/vid-6.mp4" },
      { img: "<?= base_url() ?>assets/rkda/s7.jpeg", video: "<?= base_url() ?>assets/rkda/videos/vid-7.mp4" },
      { img: "<?= base_url() ?>assets/rkda/s8.jpeg", video: "<?= base_url() ?>assets/rkda/videos/vid-8.mp4" },
      { img: "<?= base_url() ?>assets/rkda/yt_thumb/thumb-1.jpg", video: "https://www.youtube.com/embed/hh0Iwt4lwa0" },
      { img: "<?= base_url() ?>assets/rkda/yt_thumb/thumb-2.jpg", video: "https://www.youtube.com/embed/XrT2Wfsk7gA" },
      { img: "<?= base_url() ?>assets/rkda/yt_thumb/thumb-3.jpg", video: "https://www.youtube.com/embed/ocPXwbIzNoM" },
      { img: "<?= base_url() ?>assets/rkda/yt_thumb/thumb-4.jpg", video: "https://www.youtube.com/embed/C0OqyOU4B54" },
      { img: "<?= base_url() ?>assets/rkda/yt_thumb/thumb-5.jpg", video: "https://www.youtube.com/embed/JUBF1cZG7kA" },
      { img: "<?= base_url() ?>assets/rkda/yt_thumb/thumb-6.jpg", video: "https://www.youtube.com/embed/oNZbmJisIyw" }
    ]

    let wrapperContainer = document.querySelector('.wrapper.owl-carousel')
    wrapperImagesData.forEach(({img, video}, i) => {
      let imgElem = document.createElement('img')
      imgElem.setAttribute('src', img)
      imgElem.setAttribute('alt', `Image ${i}`)

      imgElem.onclick = () => {
        let html = ''
        if (video.charAt(video.length - 4) == '.') { html = `<video controls controlsList="nodownload" autoplay width="100%" class="video-player"> <source src="${video}" type="video/mp4"> </video>` }
        else if (video.includes('youtube')) { html = `<iframe width="450" height="270" src="${video}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>` }
        else {html = `<h3 style="color: #df3255;">Cannot play this Video!</h3>`}

        Swal.fire({
          html,
          showCloseButton: false,
          showCancelButton: false,
          focusConfirm: false,
        })
      }

      wrapperContainer.appendChild(imgElem)
    })

  </script>

  
  <script>
    $(document).ready(function(){
      $('.owl-carousel').owlCarousel({
        margin: 20,
        autoWidth:true
      });
    });
  </script>

 
</body>

</html>