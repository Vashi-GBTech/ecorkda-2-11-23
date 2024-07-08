<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
</head>
<style>
    body{
        background: linear-gradient(187deg, #C61431, #600A18);
    }
    .plan-desc{
        padding:5px 10px;
        border:none;
        border-top:2px solid lightgray  !important;
        width: -webkit-fill-available;
    }

    #pricing .card{
      border-radius:1.7rem;
    }
    .fa-circle-check-active{
      color:#216AD9 !important;
    }
    #pricing .fa-circle-check{
      color:#b1caf1;
    }
    .plan-desc span{
      color:crimson;
      font-weight:500;
    }
    .poppins-medium {
  font-family: "Poppins", sans-serif;
  font-weight: 700;
  font-style: normal;
}
.card:hover {
      transform: scale(1.10);
      box-shadow: 0 1px 20px 3px #ffa1a1;
    }
    .card{
      transition: transform 0.3s, box-shadow 0.3s;
    }
</style>
<body>

<?php include_once "navbar.php" ?>

  <section id='pricing' class='py-5'>

    <h2 class='text-center text-white' >Plans And Pricing</h2>
    <p class='text-center text-white' >CHOOSE    THE   PLANBEST PLAN   BEST   SUITED   FOR   YOUR    
    NEEDS</p>

    <div class="container mt-5 ">
    <div class="row">
      <div class="d-flex justify-content-around w-100">
        <div class="card col-md-3">
          <div class="card-body">
            <!-- <h5 class="card-title">Card 1</h5> -->
            <p class="card-text text-center text-danger mb-0">BASIC</p>
            <h1 class='text-center text-danger mb-2 poppins-medium'>25K</h1>
            <div class='d-flex pb-2 align-items-center' >
                <i class="fa-regular fa-circle-check fa-circle-check-active p-2"></i>
                <div class='plan-desc' >
                    <span  >All limited links</span>
                </div>
            </div>
            <div class='d-flex pb-2 align-items-center' >
                <i class="fa-regular fa-circle-check p-2"></i>
                <div class='plan-desc' >
                    <span>Chat Support</span>
                </div>
            </div>
            <div class='d-flex pb-2 align-items-center' >
                <i class="fa-regular fa-circle-check p-2"></i>
                <div class='plan-desc'>
                    <span>24/7 Support</span>
                </div>
            </div>
            <div class='d-flex pb-2 align-items-center' >
                <i class="fa-regular fa-circle-check p-2"></i>
                <div class='plan-desc'>
                    <span>Unlimited Bandwidth</span>
                </div>
            </div>
          </div>
        </div>
        <div class="card col-md-3">
          <div class="card-body">
            <!-- <h5 class="card-title">Card 1</h5> -->
            <p class="card-text text-center text-danger mb-0">PREMIUM</p>
            <h1 class='text-center text-danger mb-2 poppins-medium'>50K</h1>
            <div class='d-flex pb-2 align-items-center' >
                <i class="fa-regular fa-circle-check fa-circle-check-active p-2"></i>
                <div class='plan-desc' >
                    <span  >All limited links</span>
                </div>
            </div>
            <div class='d-flex pb-2 align-items-center' >
                <i class="fa-regular fa-circle-check p-2 fa-circle-check-active"></i>
                <div class='plan-desc' >
                    <span>Chat Support</span>
                </div>
            </div>
            <div class='d-flex pb-2 align-items-center' >
                <i class="fa-regular fa-circle-check p-2"></i>
                <div class='plan-desc'>
                    <span>24/7 Support</span>
                </div>
            </div>
            <div class='d-flex pb-2 align-items-center' >
                <i class="fa-regular fa-circle-check p-2"></i>
                <div class='plan-desc'>
                    <span>Unlimited Bandwidth</span>
                </div>
            </div>
          </div>
        </div>
        <div class="card col-md-3">
          <div class="card-body">
            <!-- <h5 class="card-title">Card 1</h5> -->
            <p class="card-text text-center text-danger mb-0">STANDARD</p>
            <h1 class='text-center text-danger mb-2 poppins-medium'>75K</h1>
            <div class='d-flex pb-2 align-items-center' >
                <i class="fa-regular fa-circle-check fa-circle-check-active p-2"></i>
                <div class='plan-desc' >
                    <span  >All limited links</span>
                </div>
            </div>
            <div class='d-flex pb-2 align-items-center' >
                <i class="fa-regular fa-circle-check p-2 fa-circle-check-active"></i>
                <div class='plan-desc' >
                    <span>Chat Support</span>
                </div>
            </div>
            <div class='d-flex pb-2 align-items-center' >
                <i class="fa-regular fa-circle-check p-2 fa-circle-check-active"></i>
                <div class='plan-desc'>
                    <span>24/7 Support</span>
                </div>
            </div>
            <div class='d-flex pb-2 align-items-center' >
                <i class="fa-regular fa-circle-check p-2 fa-circle-check-active"></i>
                <div class='plan-desc'>
                    <span>Unlimited Bandwidth</span>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
    
</body>
</html>