<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKDA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<style>
    body{
    min-height: 100vh;
    /* background-color: #1a1e21; */
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    /* font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
    overflow-x:hidden;
}
nav{
    background-color: white;
    /* box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.1); */
}
nav ul{
    width: 100%;
    list-style: none;
    display: flex;
    justify-content: space-around;
    align-items: center;
}
nav li{
    height: 50px;
}
nav a{
    height: 100%;
    padding: 0 20px;
    text-decoration: none;
    display: flex;
    align-items: center;
    color: black;
    font-size:1rem
}
.hideOnMobile:hover{
    background-color: #f0f0f0;
    border-radius:50px;
}
nav li:first-child{
    /* margin-right: auto; */
}
.sidebar{
    position: fixed;
    top: 0;
    right: 0;
    height: 100vh;
    width: 250px;
    background-color: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(12px);
    box-shadow: -10px 0 10px rgba(0, 0, 0, 0.1);
    list-style: none;
    display: none;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
}
.sidebar li{
    width: 100%;
}
.sidebar a{
    width: 100%;
}
.menu-button{
    display: none;
}
@media(max-width: 800px){
    .hideOnMobile{
        display: none;
    }
    .menu-button{
        display: block;
    }
}
@media(max-width: 400px){
    .sidebar{
        width: 100%;
    }
}

a {
  text-decoration: none;
}

nav {
	/* font-family: monospace; */
}

ul {
  background: white;
	list-style: none;
	margin: 0;
	padding-left: 0;
}

li {
	color: black;
  background: white;
	display: block;
	float: left;
	padding: .2rem;
	position: relative;
	text-decoration: none;
  transition-duration: 0.5s;
}
  
li a {
  color: black;
}

li:hover {
	/* background: red; */
	cursor: pointer;
}

ul li ul {
	background: orange;
	visibility: hidden;
  opacity: 0;
  min-width: 5rem;
	position: absolute;
  transition: all 0.5s ease;
  margin-top: 1rem;
	left: 0;
  display: none;
}

ul li:hover > ul,
ul li ul:hover {
  visibility: visible;
  opacity: 1;
  display: block;
}

ul li ul li {
	clear: both;
  width: 100%;
}

.hero-img {
    object-fit: cover;
    border-radius: 999px;
    width: 100%;
    min-width: 600px;
    min-height: 600px;
    overflow: hidden;
}
.hero-imgs{
    max-width: 534px;
    /* padding-top: 80px; */
    position: relative;
}
.hero-title-wrap {
    z-index: 2;
    text-align: center;
    max-width: 680px;
    position: relative;
}
.hero-wrap{
grid-column-gap: 80px;
    grid-row-gap: 80px;
    flex-direction: column;
    grid-template-rows: auto;
    grid-template-columns: 1fr 1fr;
    grid-auto-columns: 1fr;
    justify-content: center;
    align-items: center;
    height: 100%;
    padding: 80px;
    display: grid;
    position: relative;
}
h1{
    margin-top: 0;
    margin-bottom: 0;
    font-family: Avenir Black, sans-serif;
    font-size: 53px;
    font-weight: 900;
    line-height: 60px;
}
.span-green {
    color: #04289D;
}
.hero {
    z-index: 2;
    background-color: var(--white);
    background-image: url('assets/a_hero-bg.png');
    background-position: 50% 100%;
    background-repeat: no-repeat;
    background-size: 103.35%;
    min-height: 768px;
    position: relative;
}
.intro {
    background-color: var(--white-smoke);
    margin-bottom: 0;
    padding-top: 0;
    padding-bottom: 0;
    position: relative;
}
.intro-bg {
    z-index: 0;
    position: relative;
    top: 0%;
    bottom: 0%;
    left: 0%;
    right: 0%;
}
.stat-number {
    font-family: Avenir Black, sans-serif;
    font-size: 75px;
    line-height: 75px;
    color:#FF3131;
    /* font-size: 66px; */
    line-height: 86px;
    font-weight:700;
}
.card{
    background-color:#E3DDDC !important;
}
.red-btn{
    background-color:#ff3131;
    color: white;
}
.red-btn:hover {
    color: white;
    background-color: #df2c2c;
    border-color:#df2c2c;
}
/* style='background-color:#ebebeb' */
header {
    position: -webkit-sticky; /* For Safari */
    position: sticky;
    top: 0;
    z-index: 1000; /* Ensures it stays above other content */
    background-color: #fff; /* Optional: add a background color */
    /* box-shadow: 0 2px 5px rgba(0,0,0,0.1); */
}
.active {
            background-color: #df2c2c;
           
            border-radius:50px;

}
.active a{
    color:white !important;
}

</style>
<body class=''  >
<header>
    <nav>
        <ul class="sidebar">
            <li onclick=hideSidebar()><a href="#"><img src="<?= base_url() ?>assets/rkda-logo.png" alt="logo"></a></li>
            <li class=""><a href="#">Home</a></li>
            <li class=""><a href="#">About</a></li>
            <li class=""><a href="#">Mission</a></li>
            
        </ul>
        <div class='d-flex py-2' >
            <div class='col-md-2 m-2 d-flex justify-content-center'>
            <img src="<?= base_url() ?>assets/rkda-f-logo.png" alt="LogoImg" id="logo" width="100" height="40">
            </div>
            <div class="col-md-3"></div>
            <div class='col-md-7'>
            <ul>
                <li class="hideOnMobile active"><a href="#home">Home</a></li>
                    <li class="hideOnMobile"><a href="#about">About</a></li>
                    <li class="hideOnMobile"><a href="#mission">Mission</a></li>
          
            <li class="" onclick=showSidebar()><a href="#"><img src="<?= base_url() ?>assets/rkda-f-ball.png" alt="" class='w-75' ></a></li>
           </ul>
        </div>
        
        </div>
    </nav>
</header>
<section id="home"  >
<div class='row align-items-center'>
    <div class="col-md-6 col-sm-12 d-flex justify-content-center">
    <div class="col-md-8">
      <img src="<?= base_url() ?>assets/landing-left-rkda-forum.png" alt="" width='100%'>
    </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="col-md-10">
        <h1  class='mb-5'>Global Connects 
        Local Communties</h1>
        <a href="#" class='btn red-btn w-50 d-flex justify-content-around align-items-center rounded-pill' ><span>Explore more</span> <img src="<?= base_url() ?>assets/black-arrow.png" style='width:30%;    height: max-content;'  alt=""></a>
        </div>
    </div>
</div>
</section>
<section id="about">
<div class='row align-items-center'>
 <div class="col-md-6 col-sm-12 d-flex justify-content-center">
        <div class="col-md-10">
        <h1  class='mb-4'>About RKDA</h1>
         <p>Welcome to our platform, where we connect clients with subject matter experts to drive success and growth. Our mission is to enhance your capabilities through cutting-edge training and technology platforms, enabling you to serve your clients better and attract new opportunities. As part of our global, value-driven community, you'll gain access to invaluable social and financial capital, empowering you to achieve your goals.</p>
        </div>
    </div>
    <div class="col-md-6 col-sm-12 d-flex justify-content-center">
    <div class="col-md-8">
      <img src="<?= base_url() ?>assets/about-rkda.png" alt="" width='100%'>
    </div>
    </div>
   
</div>

<div class='waves-div'>
 <img src="<?= base_url() ?>assets/waves-rkda.png" alt="" width='100%'>
</div>

<div style='margin-top:-10%'>
    <div class="d-flex flex-wrap justify-content-center">
        <div class="col-md-6 d-flex justify-content-center"><img src="<?= base_url() ?>assets/logoes/Forum1.png" alt="" width='30%'></div>
        <div class="col-md-6  d-flex justify-content-center"><img src="<?= base_url() ?>assets/logoes/Forum2.png" alt="" width='30%'></div>
        <div class="col-md-6  d-flex justify-content-center"><img src="<?= base_url() ?>assets/logoes/Forum3.png" alt="" width='30%'></div>
    </div>
</div>




<div class="container mt-5">
        <div class="row">
            <div class="col-md-3 mb-4 ">
                <div class="card rounded-4 border-0">
                    <div class="card-body">
                        <h5 class="card-title text-center">Present in </h5>
                        <div class="stat-number text-center"><span class="counter animated fadeIn">30</span>+</div>
                        <p href="#" class='text-center'>cities</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card rounded-4 border-0">
                    <div class="card-body">
                        <h5 class="card-title text-center">Clients</h5>
                        <div class="stat-number text-center"><span class="counter animated fadeIn">5000</span>+</div>
                        <p href="#" class='text-center'>Served</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card rounded-4 border-0">
                    <div class="card-body">
                        <h5 class="card-title text-center">Professional</h5>
                        <div class="stat-number text-center"><span class="counter animated fadeIn">50</span>+</div>
                        <p href="#" class='text-center'>Existence</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card rounded-4 border-0">
                    <div class="card-body">
                        <h5 class="card-title text-center">CA's</h5>
                        <div class="stat-number text-center"><span class="counter animated fadeIn">500</span>+</div>
                        <p href="#" class='text-center'>Young Leaders</p>
                    </div>
                </div>
            </div>
          
        </div>
</div>
</section>
<section id="mission">
 <div class='row align-items-center'>
    <div class="col-md-6 col-sm-12 d-flex justify-content-center">
    <div class="col-md-8">
      <img src="<?= base_url() ?>assets/landing-left-rkda-forum.png" alt="" width='100%'>
    </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="col-md-10">
        <h1  class='mb-5'>Mission</h1>
        <p>Our mission is to build a thriving community where clients and experts collaborate seamlessly to create exceptional value. We are committed to providing state-of-the-art training and innovative technology solutions to enhance your professional capabilities. By fostering a supportive and resource-rich environment, we enable you to excel in your field, expand your client base, and contribute to a network that values growth, innovation, and mutual success.</p>
        </div>
    </div>
 </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" ></script>

<script>
    document.addEventListener('scroll', function() {
        const sections = document.querySelectorAll('section');
        const navLi = document.querySelectorAll('header nav ul li a');

        let currentSection = '';

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= (sectionTop - sectionHeight / 3)) {
                currentSection = section.getAttribute('id');
            }
        });

        navLi.forEach(a => {
            a.parentElement.classList.remove('active');
            if (a.getAttribute('href').includes(currentSection)) {
                a.parentElement.classList.add('active');
            }
        });
    });
</script>
</body>
</html>