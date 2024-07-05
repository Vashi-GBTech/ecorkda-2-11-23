<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
 .red-band{
    height:3rem;
    background: crimson;
}
:root {
  --animation-timing: 27s;
  --carousel-items: 5; /* Updated to 5 items */
  --animation-delay-fraction: calc(var(--animation-timing) / var(--carousel-items));
  --animation-steps-fraction: calc(100% / var(--carousel-items));
  --slide-change-timing: 3%; /* percentage of total animation cycle */
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
  color:crimson;
  font-weight:bold;
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


</style>
<body>

<div class="wrapper">
  <div class="carousel_wp">
    <div class="carousel__item">
      <div class="carousel__item-head"><img src="<?= base_url() ?>assets/rkda/connect.png" alt="" width='100px'></div>
      <div class="carousel__item-body">
        <p class="title">Connect</p>
        <p>Connect with a diverse network of CAs, industry experts, clients, and partners. Collaborate, build relationships, and explore new business opportunities. Expand your reach, share insights, and unlock growth potential on our platform.</p>
      </div>
    </div>
    <div class="carousel__item">
      <div class="carousel__item-head"><img src="<?= base_url() ?>assets/rkda/community.png" alt="" width='100px'></div>
      <div class="carousel__item-body">
        <p class="title">Community</p>
        <p>Access cutting-edge tools, resources, and tailored training to enhance your skills. Stay ahead in finance with knowledge to tackle challenges and seize opportunities. Continuous learning ensures exceptional client value.</p>
      </div>
    </div>
    <div class="carousel__item">
      <div class="carousel__item-head"><img src="<?= base_url() ?>assets/rkda/claritys.png" alt="" width='100px'></div>
      <div class="carousel__item-body">
        <p class="title">Clarity</p>
        <p>Join a vibrant community passionate about excellence and innovation. Engage in meaningful discussions, share insights, and build lasting relationships. Find mentorship and camaraderie in a thriving environment where collaboration breeds success.</p>
      </div>
    </div>
    <div class="carousel__item">
      <div class="carousel__item-head"><img src="<?= base_url() ?>assets/rkda/capacity.png" alt="" width='100px'></div>
      <div class="carousel__item-body">
        <p class="title">Capacity</p>
        <p>Optimize your practice with scalable infrastructure and streamlined processes. Manage workloads, expand your client base, and maintain quality. Access cutting-edge technology and dedicated support to confidently scale your business.</p>
      </div>
    </div>
    <div class="carousel__item">
      <div class="carousel__item-head"><img src="<?= base_url() ?>assets/rkda/capability.png" alt="" width='100px'></div>
      <div class="carousel__item-body">
        <p class="title">Capability</p>
        <p>Navigate confidently with clear guidelines, policies, and communication channels. Our commitment to transparency ensures defined expectations, roles, and fair conflict resolution. Foster trust for informed decisions, meaningful relationships, and goal achievement.</p>
      </div>
    </div>
    <!-- <div class="carousel__item">
      <div class="carousel__item-head">🐡</div>
      <div class="carousel__item-body">
        <p class="title">blowfish</p>
        <p>Unicode: U+1F421</p>
      </div>
    </div>
    <div class="carousel__item">
      <div class="carousel__item-head">🦈</div>
      <div class="carousel__item-body">
        <p class="title">shark</p>
        <p>Unicode: U+1F988</p>
      </div>
    </div>
    <div class="carousel__item">
      <div class="carousel__item-head">🐙</div>
      <div class="carousel__item-body">
        <p class="title">octopus</p>
        <p>Unicode: U+1F419</p>
      </div>
    </div>
    <div class="carousel__item">
      <div class="carousel__item-head">🐚</div>
      <div class="carousel__item-body">
        <p class="title">spiral shell</p>
        <p>Unicode: U+1F41A</p>
      </div>
    </div> -->
  </div>
</div>
    
</body>
</html>