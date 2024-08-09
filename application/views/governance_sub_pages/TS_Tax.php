<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .clip{
            background-clip: text !important;
            -webkit-background-clip: text !important;
            background-clip: text !important;
            -webkit-text-fill-color: transparent !important;
            text-fill-color: transparent !important;
        }

        .sect {
            padding: 0rem;
            display: flex;
            flex-direction: column;
            gap: .5rem;
        }

        .sect .title {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            font-size: 25px;
            width: fit-content;
            background: linear-gradient(90deg, #CD1432 0%, #670A19 100%);
            background-clip: text;
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

        .list-item {
            margin: 5px 0;
            list-style: none;
            color: crimson;
        }
        .list-item a {
            margin-left: .5rem;
            text-decoration: none;
            color: crimson;
        }

    </style>
</head>
<!-- Warning: Do no write script here -->
<!-- This page is rendered inside governance_sub.php -->
<!-- Writing the script breaks the page -->
<body>
    <div class="sect">
        <div class="accordion" id="accordionExample">
            <!-- TAX Consultancy Contracts -->
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="display: flex; justify-content: space-between;">
                            TAX Consultancy Contracts
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
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
                        <button class="btn btn-link accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="display: flex; justify-content: space-between;">
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
                        <button class="btn btn-link accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="display: flex; justify-content: space-between;">
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
                        <button class="btn btn-link accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="display: flex; justify-content: space-between;">
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
                        <button class="btn btn-link accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="display: flex; justify-content: space-between;">
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
<!-- Warning: Do no write script here -->
<!-- This page is rendered inside governance_sub.php -->
<!-- Writing the script breaks the page -->
</body>
</html>