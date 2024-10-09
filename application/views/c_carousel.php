<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  :root {
    --animation-timing: 10s;
    --carousel-items: 5; /* Updated to 5 items */
    --animation-delay-fraction: calc(var(--animation-timing) / var(--carousel-items));
    --animation-steps-fraction: calc(100% / var(--carousel-items));
    --slide-change-timing: 3%;

  }

  body {
    font-family: 'Work Sans', sans-serif;
    font-weight: 400;
    height: 100vh;
  }

  .wrapper {
    background: linear-gradient(60deg, #420285, #08BDBD);
    height: 100%;
    width: 100%;
    display: flex;
    justify-content: center;
  }

  .carousel_wp {
    position: relative;
    width: 100%;
    max-width: 700px;
    display: flex;
    justify-content: center;
    flex-direction: column;
  }

  .carousel__item {
    display: flex;
    align-items: center;
    position: absolute;
    width: 100%;
    padding: 0 12px;
    opacity: 0;
    filter: drop-shadow(0 2px 2px #555);
    will-change: transform, opacity;
    animation: carousel-animate-vertical var(--animation-timing) linear infinite;
  }

  .carousel__item:nth-child(1) {
    animation-delay: calc(var(--animation-delay-fraction) * -1);
  }

  .carousel__item:nth-child(2) {
    animation-delay: calc(var(--animation-delay-fraction) * 0);
  }

  .carousel__item:nth-child(3) {
    animation-delay: calc(var(--animation-delay-fraction) * 1);
  }

  .carousel__item:nth-child(4) {
    animation-delay: calc(var(--animation-delay-fraction) * 2);
  }

  .carousel__item:nth-child(5) {
    animation-delay: calc(var(--animation-delay-fraction) * 3);
  }

  .carousel__item-head {
    border-radius: 50%;
    background-color: white;
    width: 100px;
    height: 100px;
    padding: 14px;
    position: relative;
    margin-right: -45px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 50px;
  }

  .carousel__item-body {
    width: 100%;
    background-color: #fff;
    border-radius: 8px;
    padding: 16px 20px 16px 70px;
  }

  .title {
    text-transform: uppercase;
    font-size: 20px;
    margin-top: 10px;
    color: crimson;
    font-weight: bold;
  }

  @keyframes carousel-animate-vertical {
    0% {
      transform: translateY(100%) scale(0.5);
      opacity: 0;
      visibility: hidden;
    }

    3%, 20% {
      transform: translateY(100%) scale(0.7);
      opacity: 0.4;
      visibility: visible;
    }

    23%, 40% {
      transform: translateY(0) scale(1);
      opacity: 1;
      visibility: visible;
    }

    43%, 60% {
      transform: translateY(-100%) scale(0.7);
      opacity: 0.4;
      visibility: visible;
    }

    63%, 100% {
      transform: translateY(-100%) scale(0.5);
      opacity: 0;
      visibility: hidden;
    }
  }
  .carousel__item:hover {
  animation-play-state: paused;
}

</style>
<body>

<div class="wrapper">
  <div class="carousel_wp">
    <div class="carousel__item">
      <div class="carousel__item-head"><img src="<?= base_url() ?>assets/rkda/connect.png" alt="" width='100px'></div>
      <div class="carousel__item-body">
        <p class="title">Connect</p>
        <p class='' style='font-size:smaller' >Connect with a diverse network of CAs, industry experts, clients, and partners. Collaborate, build relationships, and explore new business opportunities. </p>
      </div>
    </div>
    <div class="carousel__item">
      <div class="carousel__item-head"><img src="<?= base_url() ?>assets/rkda/community.png" alt="" width='100px'></div>
      <div class="carousel__item-body">
        <p class="title">Community</p>
        <p style='font-size:smaller'>Access cutting-edge tools, resources, and tailored training to enhance your skills. </p>
      </div>
    </div>
    <div class="carousel__item">
      <div class="carousel__item-head"><img src="<?= base_url() ?>assets/rkda/claritys.png" alt="" width='100px'></div>
      <div class="carousel__item-body">
        <p class="title">Clarity</p>
        <p style='font-size:smaller'>Join a vibrant community passionate about excellence and innovation.</p>
      </div>
    </div>
    <div class="carousel__item">
      <div class="carousel__item-head"><img src="<?= base_url() ?>assets/rkda/capacity.png" alt="" width='100px'></div>
      <div class="carousel__item-body">
        <p class="title">Capacity</p>
        <p style='font-size:smaller'>Optimize your practice with scalable infrastructure and streamlined processes. </p>
      </div>
    </div>
    <div class="carousel__item">
      <div class="carousel__item-head"><img src="<?= base_url() ?>assets/rkda/capability.png" alt="" width='100px'></div>
      <div class="carousel__item-body">
        <p class="title">Capability</p>
        <p style='font-size:smaller'>Navigate confidently with clear guidelines, policies, and communication channels. </p>
      </div>
    </div>

  </div>
</div>
    
</body>
<script>
  const carouselItems = document.querySelectorAll('.carousel__item');
    
    carouselItems.forEach(item => {
        item.addEventListener('mouseenter', () => {
            carouselItems.forEach(el => el.style.animationPlayState = 'paused');
        });
        item.addEventListener('mouseleave', () => {
            carouselItems.forEach(el => el.style.animationPlayState = 'running');
        });
    });
</script>
</html> -->




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
.infographic-container {
    display: flex;
    justify-content: center;
    align-items: center;
    /* height: 100vh; */
    flex-direction: column;
    position: relative;
    /* background-color: #f0f0f0; Light gray background */
    padding: 20px;
}

.circle-container {
    position: relative;
    width: 310px;
    height: 310px;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 1.5rem solid #e0e0e0;
    border-radius: 50%; /* Circle shape for the area */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.connector-lines {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 0; /* Ensure lines are behind the circles */
    display:none;
}

.circle {
    position: absolute;
    width: 140px;
    height: 140px;
    border-radius: 50%;
    background-color: #f0f0f0;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    justify-content: center;
    align-items: center;
    transition: transform 0.3s ease-in-out;
    cursor: pointer;
    z-index: 1; /* Ensure circles are above the lines */
}

.circle1 {
    top: -100px;
    /* left: 50%;
    transform: translateX(-50%); */
    /* background-color: #00bcd4; */
}

.circle2 {
    left: -80px;
    bottom: -15px;
    /* background-color: #ffc107; */
}

.circle3 {
    right: -80px;
    bottom: -15px;
    /* background-color: #03a9f4; */
}

.description-center {
  position: absolute;
    top: 35%;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    width: 50%;
}

#description-text {
    font-size: .7rem;
    color: #555;
}

.circle:hover {
    transform: scale(1.1);
    z-index: 1;
}

</style>
<body>
<div class="infographic-container">
    <!-- SVG for straight lines -->
    <svg class="connector-lines" width="400" height="400" viewBox="0 0 400 400">
        <!-- Straight lines connecting the circles -->
        <line x1="200" y1="60" x2="100" y2="320" stroke="#ffc107" stroke-width="3" />
        <line x1="100" y1="320" x2="300" y2="320" stroke="#03a9f4" stroke-width="3" />
        <line x1="300" y1="320" x2="200" y2="60" stroke="#00bcd4" stroke-width="3" />
    </svg>

    <!-- Circles -->
    <div class="circle-container">
       
        <div class="circle circle1" data-heading="Community" data-description="Join a vibrant community passionate about excellence and innovation."><img src="<?= base_url() ?>assets/rkda/comm-c.png" alt="" width='100px'></div>
        <div class="circle circle2" data-heading="Clarity" data-description="Access cutting-edge tools, resources, and tailored training to enhance your skills"><img src="<?= base_url() ?>assets/rkda/clarity-c.png" alt="" width='100px'></div>
        <div class="circle circle3" data-heading="Capacity" data-description="Optimize your practice with scalable infrastructure and streamlined processes. "><img src="<?= base_url() ?>assets/rkda/capacity-c.png" alt="" width='100px'></div>
    </div>

    <!-- Central Description -->
    <div class="description-center">
       
       
      <div><h5 class="text-danger " id="desc-head" ></h5>
      <p id="description-text"></p></div>  
      <h2 class="text-danger mt-4" id="super-head" style="font-weight: 650;" ></h2>
    </div>
</div>


<script>
 document.addEventListener('DOMContentLoaded', () => {
    // Set the default text when the page loads
    descriptionText.textContent = "";
    descHead.textContent = "";
    superHead.textContent= "Super CA";
});

const circles = document.querySelectorAll('.circle');
const descriptionText = document.getElementById('description-text');
const descHead = document.getElementById('desc-head');
const superHead = document.getElementById('super-head');

circles.forEach(circle => {
    circle.addEventListener('mouseenter', () => {
        const description = circle.getAttribute('data-description');
        const heading = circle.getAttribute('data-heading');
        descriptionText.textContent = description;
        descHead.textContent = heading;
        superHead.textContent= "";
    });

    circle.addEventListener('mouseleave', () => {
        descriptionText.textContent = "";
        descHead.textContent = "";
        superHead.textContent = "Super CA"; // Optionally reset the heading on mouse leave
    });
});

</script>
</body>
</html>