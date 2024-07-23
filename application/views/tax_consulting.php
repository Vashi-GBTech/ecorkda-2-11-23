<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical Standards</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
</style>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            /* max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
        }
        .header {
            background-color: crimson;
            color: #fff;
            padding: 5px 10px;
            text-align: center;
            font-size: 25px;
            border-radius:10px;
        }
        .section {
            margin-top: 20px;
        }
        .section-title {
            color: crimson;
            font-size: 20px;
            margin-bottom: 10px;
        }
        .button {
            background-color: crimson;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px 0;
        }
        .list {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .list-item {
            margin: 5px 0;
        }
        .list-item a {
            text-decoration: none;
            color: crimson;
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
    </style>

<style>
    .active {
        color: crimson;
    }

    .wl-link-color:hover {
        color: #cd2653;
    }
    .poppins-medium {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-style: normal;
}
.work-list-ul li{
  padding: 5px 0px;
}
.fa-book-bookmark{
  transform: rotate(90deg);
  margin-right: 1rem;
}
.list-item:hover{
   color:black ;
}
.list-item i{
  color:crimson;
}
.list-item a:hover,.list-item i:hover{
  color:black !important;
}
.accordion-button {
            /* background-color: crimson !important; */
            color: black !important;
        }
        .accordion-button:focus {
            box-shadow: none !important;
        }
        .accordion-button:not(.collapsed) {
            color: black !important;
            /* background-color: darkred !important; */
        }
        .accordion-button:not(.collapsed)::after{
            filter: grayscale(2);
        }

        .accordion-button{
            background:#d1d1d1 !important;
            text-decoration: none !important;
        }
        .card-header{
            border:none !important;
            background:white !important;
        }
        .accordion .card{
            border:none !important;
        }

</style>

</head>
<body>
<?php include_once "navbar.php" ?>

<section id='membership' >
    <div class="container mt-5">
       <div class='d-flex justify-content-center ' ><div class="header w-75">Tax / Consulting</div></div> 

        <div class="d-flex h-100 mt-5">
          <div class="col-md-8  d-flex justify-content-strat">
         
<div class="container ">
    <div class="accordion" id="accordionExample">
        <!-- TAX Consultancy Contracts -->
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link accordion-button" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        TAX Consultancy Contracts
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Direct Debit Clearance</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Amendment Tax Accountancy contract</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Authorisation to represent</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Contract on inter-company exchange of message by email</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Fee Agreement</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Standard Assignment Terms RKDA AuditAG (Status as of 01.02.2002)</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Tax Accountancy Assignment (Package)</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Tax Accountancy Assignment</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Tax Accountancy Contract (Package)</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Tax Accountancy Contract (Long)</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Tax Accountancy Contract (Short)</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Financial Accounting -->
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Financial Accounting
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Data Sheet for corporate clients (Corporations)</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Standard chart of Accounts (SKR 04)</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Standard chart of Accounts (SKR 03)</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Text Modules for Corporations</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Annual Accounts / Tax returns -->
        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Annual Accounts / Tax returns
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Accounting and evaluations Options</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Audit of tax assessment notices (with objection)</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Audit of tax assessment notices</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>General representation Letter for the 2011 Income tax return</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>General representation Letter for the Annual financial Accounts for the year ending</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>General representation Letter for the Annual financial Accounts for the year ending (Short)</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Preparation of the annual financial accounts for the year ending</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Release Statement Business Tax returns</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Release Statement Capital Gains Tax</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Release Statement Income Tax</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Submission Business Tax returns_EST</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Submission Business Tax returns_Festst</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Submission Business Tax returns</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Submission Income Tax return</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Client News Letter -->
        <div class="card">
            <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                    <button class="btn btn-link accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Client News Letter
                    </button>
                </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Checklist BilMoG Corporates</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Client Newsletter Accounting Low Modernisation Act (Bilanzrechtsmodernisierungsgesetzes)</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Client Newsletter Investment grant 2010</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Confirmation of a foreign value-added tax identification number (VAT ID no) for deliveries to EU Countries</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Disclosure of Annual Accounts</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Electronic invoices after 1 July 2011</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Heavy restrictions on tax exemption in intra-community deliveries</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Practical ramification of access to data by fiscal authorities</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Principles on proper cash book accounting</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Recapitulation of accounting regulations from a VAT Perspective</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Retention period for Accounting records</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Shift of tax liability to the customer in the construction industry</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Survey of Accounting obligations (Commercial law and tax law)</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Tax Free or Non taxable employer benefits as of 2012</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Taxable employer benefits in 2012</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>The proper way to handle electronic invoices</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Sample Letter -->
        <div class="card">
            <div class="card-header" id="headingFive">
                <h2 class="mb-0">
                    <button class="btn btn-link accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Sample Letter
                    </button>
                </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Annual Accounts for the year ending</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Template request documents annual accounts - GmbH</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Invoice correction through client</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Submission financial accounting</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Template request documents for the preparation of the annual accounts</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Template request documents file_Corporation</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Template request documents financial accounting</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Template request documents tax returns</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Termination client relationship</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Checklist for checking completeness of documents for generating an annual account - GmbH</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Checklist for financial Accounting (Balance) 2004</a></li>
                        <li class="list-item"><a  href="<?= base_url() ?>onlyForMembers"><i class="fa-solid fa-book-bookmark mr-2"></i>Checklist documenting completion of standard file</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
          </div>
          <div class='col-md-4' >
               <?php include_once "membership_list.php" ?>
          </div>
      
       
        
    </div>
    <div class="email">
          <p>  If you want to reach all members of the Audit Task Force, please mailto: <a href="mailto:audit@rkda.com">audit@rkda.com</a></p>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
