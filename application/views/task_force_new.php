<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Force</title>
</head>
<style>
      .header {
            background-color: crimson;
            color: #fff;
            padding: 5px 10px;
            text-align: center;
            font-size: 25px;
            border-radius:10px;
        }

        .card {
    perspective: 1000px;
    border-radius:1rem;
    border:none !important;
}

.card-inner {
    position: relative;
    width: 100%;
    height: 340px;
    transition: transform 0.6s;
    transform-style: preserve-3d;
    cursor: pointer;
    border-radius:1rem !important;
}

.card:hover .card-inner {
    transform: rotateY(180deg);
}

.card-front, .card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    flex-direction: column;
    font-size: 1.5em;
    color: white;
    border-radius:1rem !important;
}

.card-front {
    background-color: #007bff;
    flex-direction: column;
    justify-content: flex-start;
    border-radius:1rem;
}

.card-front img {
    width: 100%;
    height: auto;
    border-radius: 1rem 1rem 0px 0rem;
    border: 3px solid crimson;

}

.crimson-div {
    background-color: crimson;
    width: 100%;
    text-align: center;
    padding: 10px 0;
    border-radius: 0px 0rem 1rem 1rem;
}

.crimson-div h4 {
    margin: 0;
}

.card-back {
    border-radius:1rem;
    background: linear-gradient(187deg, #C61431, #600A18);
    transform: rotateY(180deg);
}
.email p{
            margin-top: 20px;
            text-align: center;
            font-size: 1rem;
        }
        .email a {
            color: #e60000;
            text-decoration: none;
            font-size:1.2rem;
        }
        .bg-back-card-btn{
            background-color:#f4e4e6 !important;
            width:75%;
           
        }
        .bg-back-card-btn:focus{
            box-shadow:0 0 0 .25rem rgb(255 226 232 / 25%) !important;
        }
</style>
<body>

<?php include_once "navbar.php" ?>
<section id='task_force_new' >
    <div class="container mt-5">
       <div class='d-flex justify-content-center ' ><div class="header w-75">Task Force</div></div> 
       <p class='text-center my-3' >Meet our dedicated team of industry experts, professionals, and thought leaders who drive excellence and innovation. Our task force is committed to providing unparalleled support, guidance, and expertise to help you navigate challenges and achieve your professional goals. With diverse backgrounds and extensive experience, our team is here to empower you every step of the way.</p>
 
       <div class="container my-5">
        <div class="row justify-content-around">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <img src="<?= base_url() ?>assets/rkda/conventional_Practice.png" alt="Image 1" class="img-fluid">
                            <div class="crimson-div">
                                <h6>CORE</h6>
                            </div>
                        </div>
                        <div class="card-back">

                           <a  href='<?= base_url() ?>task_force_sub/#Accounting' class='btn btn-lg bg-back-card-btn' >Accounting</a >
                           <a  href='<?= base_url() ?>task_force_sub/#Audit' class='btn btn-lg bg-back-card-btn' >Audit</a >
                           <a  href='<?= base_url() ?>task_force_sub/#Tax' class='btn btn-lg bg-back-card-btn' >Tax</a >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <img src="<?= base_url() ?>assets/rkda/specialized-n.jpg" alt="Image 2" class="img-fluid">
                            <div class="crimson-div">
                                <h6>FUNCTIONAL</h6>
                            </div>
                        </div>
                        <div class="card-back h-100">
                           <a  href='<?= base_url() ?>task_force_sub/#Legal' class='btn btn-lg bg-back-card-btn' >Legal</a >
                           <a  href='<?= base_url() ?>task_force_sub/#Governance' class='btn btn-lg bg-back-card-btn' >Governance</a >
                           <a  href='<?= base_url() ?>task_force_sub/#Compliance' class='btn btn-lg bg-back-card-btn' >Compliance</a >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <img src="<?= base_url() ?>assets/rkda/new_age.jpg" alt="Image 3" class="img-fluid">
                            <div class="crimson-div">
                                <h6>SPECIALIZED</h6>
                            </div>
                        </div>
                        <div class="card-back">
                           <a  href='<?= base_url() ?>task_force_sub/#M_&_A' class='btn btn-lg bg-back-card-btn' >M & A</a >
                           <a  href='<?= base_url() ?>task_force_sub/#Technology' class='btn btn-lg bg-back-card-btn' >Technology</a >
                           <a  href='<?= base_url() ?>task_force_sub/#Non_Profit' class='btn btn-lg bg-back-card-btn' >Non Profit</a >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="email">
          <p>  If you want to reach all members of the Audit Task Force, please mailto: <a href="mailto:audit@rkda.com">audit@rkda.com</a></p>
        </div>
    </div> 
</section>

</body>
</html>