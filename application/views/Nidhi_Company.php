<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKDA - Nidhi Company</title>
    <link rel="icon" href="<?=base_url()?>assets/images/ecovis_logoes/Ecovis_rkda_logo_ball.png" type="image/icon type">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <style>
        .sessions {
            margin-top: 2rem;
            border-radius: 12px;
            position: relative;
        }

        .sessions li:last-child {
            border: 0px;
            padding-bottom: 0;
        }

        .sessions li:before {
            content: '\2713';
            color: white;
            /* padding: 5px; */
            font-weight: 600;
            display: flex;
            padding: 0px 0px 0px 0px;
            width: 25px;
            height: 25px;
            background: #dc3545;
            /* border: 1px solid white; */
            box-shadow: 2px 2px 0px #bab5f8;
            /* box-shadow: 2px 2px 0px #bab5f8; */
            border-radius: 50%;
            position: absolute;
            left: -15px;
            top: -1px;
            justify-content: center;
            align-items: center;
            margin-bottom: 0;
        }

        .sessions li {
            padding-bottom: 1.5rem;
            border-left: 3px dashed #dc3545;
            position: relative;
            padding-left: 20px;
            margin-left: 10px;


        }
    </style>
</head>

<body>
    <!-- header  -->
    <?php include_once "header.php" ?>
    <!-- banner image  -->

    <div class="align-items-center Private_Limited_CompanyBanner d-flex justify-content-around pageBanner">
        <div class="">
            <p class="mainHeading text-center text-light">Nidhi Company</p>
        </div>
        <!-- <img src="" alt=""> -->
    </div>
    <div class="" id="Business_in_India"></div>

    <!-- <div class="bannerDD box_shadow bg-danger pb-4 pt-3">
        <h3 class="text-center text-light mt-3">
            Your Business need
        </h3>
        <div class="row" id="Your_Business_needs">
            <div class="col-md-6 col-sm-12 d-md-flex justify-content-end text-center pr-5">
                <div class="btn-group py-3" style="width: 16%; min-width:285px;">
                    <button type="button" class="align-items-center btn d-flex dropdown-toggle font-weight-bold justify-content-between px-3 text-dark w-100" id="servicebtn" data-toggle="dropdown" aria-expanded="false">
                        Select service
                    </button>
                    <div class="dropdown-menu FIRSTserviceDD w-100">
                        <button class="dropdown-item services" id="" onclick="showDD('FormationCompanies', 'Formation')" type="button">Formation</button>
                        <button class="dropdown-item services" id="" onclick="showDD('RegistrationCompanies','Registration')" type="button">Registration</button>
                        <button class="dropdown-item services" id="" onclick="showDD('Closure_of_ConcernCompanies','Closure of Concern')" type="button">Closure of Concern</button>
                        <a href="./Business_Restructuring.php" style="text-decoration: none;" ><button class="dropdown-item services" type="button">Business Restructuring</button></a>
                        <a href="./Succession_Planning.php" style="text-decoration: none;"><button class="dropdown-item services" type="button">Succession Planning</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 d-md-flex text-center pl-5">
                <div class="btn-group py-3" style="width: 16%; min-width:285px;">
                    <button type="button" class="align-items-center btn d-flex dropdown-toggle font-weight-bold justify-content-between px-3 text-dark w-100" onclick="showchildDD('servicebtn')" data-toggle="dropdown" aria-expanded="false">
                        Select category
                    </button>
                    <div class="dropdown-menu w-100 baseofselectedService" id="FormationCompanies">
                        <a href="./Private_Limited_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Private Limited Company</button></a>
                        <a href="./Limited_Liability_Partnerships.php"  style="text-decoration: none;"><button class="dropdown-item" type="button">Limited Liability Partnerships</button></a>
                        <a href="./One_Person_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">One Person Company (OPC)</button></a>
                        <a href="./Proprietorship.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Proprietorship</button></a>
                        <a href="./Partnership.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Partnership</button></a>
                        <a href="./Nidhi_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Nidhi Company</button></a>
                        <a href="./NGO_regestration.php" style="text-decoration: none;"><button class="dropdown-item" type="button">NGO Registration</button></a>
                        <a href="./Society_Registration.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Society Registration</button></a>

                    </div>
                    <div class="dropdown-menu w-100 baseofselectedService" id="RegistrationCompanies">
                        <button class="dropdown-item" type="button">Professional Tax Registration</button>
                    <button class="dropdown-item" type="button">Goods and Services Tax Registration</button>
                    <button class="dropdown-item" type="button">Employee Provident Fund (EPF) Registration</button>
                    <button class="dropdown-item" type="button">Employees’ State Insurance (ESI) Registration</button>
                    <button class="dropdown-item" type="button">Permanent Account Number (PAN) Application</button>
                    <button class="dropdown-item" type="button">Digital Signature Registration</button>
                    <button class="dropdown-item" type="button">Tax Deduction and Collection Account Number – TAN</button>

                        <a href="./Professional_Tax_Registration.php" style="text-decoration: none;"><button class="dropdown-item" type="button">PTR</button></a>
                        <a href="./GST.php" style="text-decoration: none;"><button class="dropdown-item" type="button">GST Registration</button></a>
                        <a href="./epf_registration.php" style="text-decoration: none;"><button class="dropdown-item" type="button">EPF Registration</button></a>
                        <a href="./ESI.php" style="text-decoration: none;"><button class="dropdown-item" type="button">ESI Registration</button></a>
                        <a href="./PAN.php" style="text-decoration: none;"><button class="dropdown-item" type="button">PAN Application</button></a>
                        <a href="./Digital_Signature_Registration.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Digital Signature Registration</button></a>
                        <a href="./TAN.php" style="text-decoration: none;"><button class="dropdown-item" type="button">TAN</button></a>
                        
                    </div>
                    <div class="dropdown-menu w-100 baseofselectedService" id="Closure_of_ConcernCompanies">
                        <a href="./Close_Your_Public_Limited_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Close Your Public Limited Company</button></a>
                        <a href="./Closing_a_One_Person_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a One Person Company</button></a>
                        <a href="./Closing_a_Partnership.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a Partnership</button></a>
                        <a href="./Closing_a_Proprietorship.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a Proprietorship</button></a>
                        <a href="./Closing_a_Nidhi_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a Nidhi Company</button></a>
                        <a href="./Closing_a_Private_Limited_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a Private Limited Company</button></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="row justify-content-center ">
        <div class="col-lg-8 col-md-10 border-bottom border-danger">
            <h1 class="mb-3 mt-5 primaryHeading text-danger">What is a Nidhi Company?</h1>
            <p class="">A nidhi company is a company that operates within the non-banking Indian finance sector recognized under section 406 of the Companies Act, 2013. The main business of a Nidhi Company is borrowing and lending money between their members. They are regulated by the Ministry of Corporate Affairs. The RBI has the power to direct Nidhi Companies about their deposit acceptances.</p>
            <p class="">All financial dealings and the registration process of a Nidhi company fall under the Ministry of Corporate Affairs.</p>
            <p class="">A Nidhi company is registered as a Public Limited Company. Hence, the requirements for incorporation of a Nidhi company covers a minimum of three Directors and Seven Shareholders.</p>
            <p class="">The deposit acceptance activities conducted by the Nidhi Company also come under the scanner of Reserve Bank of India and the latter has the right to look into the financial dealings.</p>
            <p class="">A Nidhi Company must accumulate 200 members within a year of its formation.If it fails to do so, it needs to apply for permission to extend the time limit to acquire more members. Three of its members will be appointed as directors and there must be seven stockholders on inception.</p>
            <p class="">A Nidhi Company must have a paid up equity share capital of Rs. 5 lakh on inception. Moreover, 10% of the total deposit collected from members must be in a fixed deposit in a nationalised bank.</p>

            <h1 class="mb-3 mt-5 primaryHeading text-danger">Why should I register a Nidhi Company</h1>

            <ul class="pl-2">
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>No External Involvement in Management</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Helpful for Lower and Middle Classes</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Low Rates of Interest</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Secured Investments</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Minimum Documentation and Formalities</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="row justify-content-center ">
        <div class="col-lg-8 col-md-10 ">
            <h1 class="mb-3 mt-5 primaryHeading text-danger">How to register a Nidhi Company?</h1>
            <ul class="mb-4 pb-1 pl-3 sessions">
                <li>
                    <p><span class="font-weight-bold">Application of DSC & DPIN -</span> First of all, the partners have to apply for Digital Signature and DPIN for Nidhi company if they do not already have it.</p>
                </li>
                <li>
                    <p><span class="font-weight-bold">Name approval -</span> Three different name options for the Nidhi Company have to be provided to MCA of which one will be selected. As the rules go for all kinds of companies, the name should not match any existing names and/or trademarks. This can be checked by checking the availability of the name on the MCA database.</p>
                </li>
                <li>
                    <p><span class="font-weight-bold">Submitting the MOA & AOA -</span> Post name approval, the Memorandum of Association and Articles of Association need to be drafted. But the object of the Nidhi Company must always be a charitable object. The MOA and AOA need to be filed along with the subscription statement to the MCA.</p>
                </li>
                <li>
                    <p><span class="font-weight-bold">Getting the incorporation certificate -</span>It generally takes 15- 25 days to form a Nidhi Company, and receive the Certificate of Incorporation. It also includes your CIN number.</p>
                </li>
                <li>
                    <p><span class="font-weight-bold">Apply for PAN, TAN and Bank account -</span> PAN and TAN are given in 7 working days. Post this, the above documents can be submitted with the bank to open the bank account.</p>
                </li>               
            </ul>
         

            <h1 class="mb-3 mt-5 primaryHeading text-danger ">Proofs required for Nidhi Company registration</h1>
            <p class="normalText">To be submitted by all directors :</p>


            <ul class="pl-2">
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Self-attested copy of PAN Card</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Self-attested copy of Driver’s License/ Voter ID/ Aadhaar Card/Passport</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Self-attested copy of Bank Statement/ Telephone Bill/Mobile Bill/ Electricity Bill</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Passport-size Photograph</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Specimen Signature Certificate</p>
                    </div>
                </li>
            </ul>
        </div>

    </div>
  
        <div class="lets_connect px-0 text-center">
       <a href="<?=base_url()?>welcome/contact_us"> <button type="submit" class="lets_connect_button" style="box-shadow: 0px 1px 4px 1px grey;cursor: pointer;">LET'S CONNECT</button></a>
        <h4 style="text-align:center;color:white;" class="mt-4 font-weight-normal">Didn’t find what you’re looking for? Write to us about your specific business needs!</h4>
    </div>

        <?php include_once "footer.php" ?>
        <script src="<?=base_url()?>assets/bootstrap/js/javascript.js"></script>
        <script>
            $("#servicebtn").click(function() {
                $(".FIRSTserviceDD").slideDown();
            });

            function showDD(id, name) {
                $("#servicebtn").attr("attr-selected", id);
                $(".baseofselectedService").slideUp();
                $("#servicebtn").text('').text(name);

            }

            function showchildDD(id) {
                $(".baseofselectedService").hide();
                var childId = $("#" + id).attr('attr-selected');
                $("#" + childId).slideDown();
            }

            $(document).mouseup(function(e) {
                if ($(e.target).closest(".baseofselectedService").length === 0) {
                    $(".baseofselectedService").slideUp();
                    $(".FIRSTserviceDD").slideUp();
                }
            });
        </script>
</body>

</html>