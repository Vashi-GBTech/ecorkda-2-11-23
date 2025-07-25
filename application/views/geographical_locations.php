<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <!-- oul carousel link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jqv link  -->
    <link href="<?= base_url() ?>assets/js/jqvmap/dist/jqvmap.min.css">
</head>
<style>
    .insideArrow {
        width: 0;
        height: 0;
        border-left: 75px solid transparent;
        border-right: 75px solid transparent;
        border-top: 100px solid;
        background-image: url(./ecovis-images/our_team_banner.png);
    }


    .kwadrat2 {
        width: 232px;
        height: 120px;
        border-top: 1px solid #fff;
        overflow: hidden;
        margin-top: 5px;
    }

    .trojkat2 {
        position: relative;
        overflow: hidden;
        transform: rotate(45deg) skew(10deg, 10deg);
        /*   border-bottom: 1px solid #000; */
        /*   border-right: 1px solid #000; */
        width: 200px;
        height: 200px;
        margin: -190px 0 0 16px;
    }

    .trojkat_bg2 {
        position: absolute;
        width: 200%;
        height: 200%;
        top: -50%;
        left: -50%;
        z-index: -1;
        background: url(./ecovis-images/our_team_banner.png);
        background-size: 100%;
        /*   background-position: center top; */
        transform: skew(-10deg, -10deg) rotate(-45deg);
        /*   transition: .3s; */
    }

    .office_state_img {
        width: 95px !important;
        height: 95px !important;
    }

    .india_team_point {
        width: 150px;
        height: 150px;
        position: absolute;
        box-shadow: 0px 2px 3px 1px lightgray;
        background-color: whitesmoke;
    }

    .ourTeamDropDowndiv {
        width: 100%;
        justify-content: center;
        background: lightgray;
        padding: 27px;
        margin-top: 20px;
        box-shadow: 0px 12px 18px -6px rgba(29, 37, 45, 0.2);
        z-index: 5 !important;
        position: relative;
        ,
        border-radius: 10px !important;
    }

    .ourTeamDropDowndiv ::placeholder {
        color: black;
        font-size: 13px;
    }
</style>

<body>
    <?php include_once "header.php" ?>
    <!-- 
<div style="width: 100%;  display: flex; justify-content: center;padding:20px 0px;background-color: #f2f2f2;">
                <img src="<?= base_url() ?>assets/images/map_image/Picture500.png" class=" " style='width:60%'  alt=""></div>

  </div> -->
    <!-- <div class="d-flex" >
                <div class="col-md-2"></div>     
                <div class="col-md-8 d-flex justify-content-evenly ourTeamDropDowndiv" style="flex-wrap: inherit;justify-content:center;border-radius:10px;">
                <div class="dropdown col-md-4  py-2"> 
                <select class="form-select bg-color" aria-label="Default select example" id="form-select-location" onchange="selectLocation()">
                <option selected value="Our Services">-- Location --</option>
                <option class="options" value="india">India</option>
                <option class="options" value="international">International</option>
                </select>
                </div>
                <div class="dropdown col-md-4 py-2"> 
                <select class="form-select bg-color" aria-label="Default select example" id="form-select-branch" >
                <option selected  value="all" >-- Branch --</option>

                
                </select>
                </div>
                </div>
                <div class="col-md-2"></div>
                </div> -->

    <!-- </div> -->

    <!-- <div class="office_Address row mb-5 mx-0 justify-content-around">
            <div class="col-12 mb-5">
            </div>
            <div id="main-region-card"></div>
            <div class='col-md-9' style='display:flex;flex-wrap:wrap' id='region-cards'></div>

        </div> -->
    <div class="container mb-5">
        <div>
            <div class="mt-3">
                <p style='font-style:oblique'>
                    "We're fortunate to collaborate with trusted professional colleagues specializing in the field of
                    audits. These collaborations extend beyond joint projects, they embody personal connections with
                    esteemed accounting and legal firms. This interconnected network allows us to synergize our
                    strengths, ensuring comprehensive and effective outcomes for our shared endeavors."</p>
                <h1 class='text-danger'>Locations</h1>

            </div>
            <div class="mt-5">
                <div class="pole-name-div align-items-baseline">
                    <h2 class=''>Asia-Pacific</h2>
                    <div class='teams-underline-div'>
                        <div class="teams-underline"></div>
                    </div>

                </div>

                <div class="d-flex " style="flex-wrap:wrap;">
                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img
                                src="<?= base_url() ?>assets/countries/asia_pacific/australia.jpg" class="country-icons"
                                alt="Australia" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Australia</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img
                                src="<?= base_url() ?>assets/countries/asia_pacific/cambodia.jpg" class="country-icons"
                                alt="Cambodia" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Cambodia</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img
                                src="<?= base_url() ?>assets/countries/asia_pacific/china-1.jpg" class="country-icons"
                                alt="China" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>China</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img
                                src="<?= base_url() ?>assets/countries/asia_pacific/hongkong.jpg" class="country-icons"
                                alt="Hong Kong" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Hong Kong</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img
                                src="<?= base_url() ?>assets/countries/asia_pacific/indonesia.jpg" class="country-icons"
                                alt="Indonesia" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Indonesia</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img
                                src="<?= base_url() ?>assets/countries/asia_pacific/japan-1.jpg" class="country-icons"
                                alt="Japan" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Japan</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img
                                src="<?= base_url() ?>assets/countries/asia_pacific/southkorea.jpg"
                                class="country-icons" alt="Korea (Republic)" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Korea (Republic)</h6>
                        </div>
                    </div>
                    <div class="d-flex col-md-3 h-100">
                        <!-- Malaysia -->
                        <div class='city-img-div-new'><img
                                src="<?= base_url() ?>assets/countries/asia_pacific/malaysia.jpg" class="country-icons"
                                alt="Malaysia" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Malaysia</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <!-- Myanmar -->
                        <div class='city-img-div-new'><img
                                src="<?= base_url() ?>assets/countries/asia_pacific/myanmar.jpg" class="country-icons"
                                alt="Myanmar" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Myanmar</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <!-- New Zealand -->
                        <div class='city-img-div-new'><img
                                src="<?= base_url() ?>assets/countries/asia_pacific/new-zealand.jpg"
                                class="country-icons" alt="New Zealand" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>New Zealand</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <!-- Philippines -->
                        <div class='city-img-div-new'><img
                                src="<?= base_url() ?>assets/countries/asia_pacific/philippines.jpg"
                                class="country-icons" alt="Philippines" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Philippines</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <!-- Singapore -->
                        <div class='city-img-div-new'><img
                                src="<?= base_url() ?>assets/countries/asia_pacific/singapore.jpg" class="country-icons"
                                alt="Singapore" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Singapore</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <!-- Taiwan -->
                        <div class='city-img-div-new'><img
                                src="<?= base_url() ?>assets/countries/asia_pacific/taiwan.jpg" class="country-icons"
                                alt="Taiwan" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Taiwan</h6>
                        </div>
                    </div>
                    <div class="d-flex col-md-3 h-100">
                        <!-- Taiwan -->
                        <div class='city-img-div-new'><img
                                src="<?= base_url() ?>assets/countries/asia_pacific/thailand.jpg" class="country-icons"
                                alt="Taiwan" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Thailand</h6>
                        </div>
                    </div>
                    <div class="d-flex col-md-3 h-100">
                        <!-- Taiwan -->
                        <div class='city-img-div-new'><img
                                src="<?= base_url() ?>assets/countries/asia_pacific/vietnam.jpg" class="country-icons"
                                alt="Taiwan" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Vietnam</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div>

            <div class="mt-5">
                <div class="pole-name-div align-items-baseline">
                    <h2 class=''>Central and South Asia</h2>
                    <div class='teams-underline-div'>
                        <div class="teams-underline"></div>
                    </div>

                </div>

                <div class="d-flex " style="flex-wrap:wrap;">


                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img
                                src="<?= base_url() ?>assets/countries/central_south_asia/bangladesh-1.jpg"
                                class="country-icons" alt="Bangladesh" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Bangladesh</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img
                                src="<?= base_url() ?>assets/countries/central_south_asia/india.jpg"
                                class="country-icons" alt="India" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>India</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img
                                src="<?= base_url() ?>assets/countries/central_south_asia/nepal.jpg"
                                class="country-icons" alt="Nepal" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Nepal</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img
                                src="<?= base_url() ?>assets/countries/central_south_asia/pakistan.jpg"
                                class="country-icons" alt="Pakistan" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Pakistan</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img
                                src="<?= base_url() ?>assets/countries/central_south_asia/tajikistan.jpg"
                                class="country-icons" alt="Tajikistan" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Tajikistan</h6>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div>

            <div class="mt-5">
                <div class="pole-name-div align-items-baseline">
                    <h2 class=''>Europe</h2>
                    <div class='teams-underline-div'>
                        <div class="teams-underline"></div>
                    </div>

                </div>

                <div class="d-flex " style="flex-wrap:wrap;">
                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img src="<?= base_url() ?>assets/countries/europe/austria.jpg"
                                class="country-icons" alt="Austria" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Austria</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img src="<?= base_url() ?>assets/countries/europe/azerbaijan.jpg"
                                class="country-icons" alt="Azerbaijan" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Azerbaijan</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img src="<?= base_url() ?>assets/countries/europe/belgium.jpg"
                                class="country-icons" alt="Belgium" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Belgium</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img
                                src="<?= base_url() ?>assets/countries/europe/bosnia-and-herzegovina.jpg"
                                class="country-icons" alt="Bosnia and Herzegovina" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Bosnia and Herzegovina</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img src="<?= base_url() ?>assets/countries/europe/bulgaria.jpg"
                                class="country-icons" alt="Bulgaria" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Bulgaria</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img src="<?= base_url() ?>assets/countries/europe/croatia.jpg"
                                class="country-icons" alt="Croatia" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Croatia</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img src="<?= base_url() ?>assets/countries/europe/cyprus.jpg"
                                class="country-icons" alt="Cyprus" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Cyprus</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img src="<?= base_url() ?>assets/countries/europe/czech.jpg"
                                class="country-icons" alt="Czech Republic" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Czech Republic</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img src="<?= base_url() ?>assets/countries/europe/denmark.jpg"
                                class="country-icons" alt="Denmark" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Denmark</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img src="<?= base_url() ?>assets/countries/europe/estonia.jpg"
                                class="country-icons" alt="Estonia" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Estonia</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img src="<?= base_url() ?>assets/countries/europe/finland.jpg"
                                class="country-icons" alt="Finland" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Finland</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img src="<?= base_url() ?>assets/countries/europe/france.jpg"
                                class="country-icons" alt="France" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>France</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img src="<?= base_url() ?>assets/countries/europe/georgia-1.jpg"
                                class="country-icons" alt="Georgia" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Georgia</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img src="<?= base_url() ?>assets/countries/europe/germany.jpg"
                                class="country-icons" alt="Germany" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Germany</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img src="<?= base_url() ?>assets/countries/europe/greece.jpg"
                                class="country-icons" alt="Greece" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Greece</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img src="<?= base_url() ?>assets/countries/europe/hungary.jpg"
                                class="country-icons" alt="Hungary" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Hungary</h6>
                        </div>
                    </div>


                </div>

            </div>
        </div>
        <div>

            <div class="mt-5">
                <div class="pole-name-div align-items-baseline">
                    <h2 class=''>The Americas</h2>
                    <div class='teams-underline-div'>
                        <div class="teams-underline"></div>
                    </div>

                </div>

                <div class="d-flex " style="flex-wrap:wrap;">
                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img src="<?= base_url() ?>assets/countries/america/argentina.jpg"
                                class="country-icons" alt="Argentina" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Argentina</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img
                                src="<?= base_url() ?>assets/countries/america/bolivia_flag.jpg" class="country-icons"
                                alt="Bolivia" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Bolivia</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img src="<?= base_url() ?>assets/countries/america/brazil.jpg"
                                class="country-icons" alt="Brazil" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Brazil</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img src="<?= base_url() ?>assets/countries/america/canada.jpg"
                                class="country-icons" alt="Canada" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Canada</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img src="<?= base_url() ?>assets/countries/america/chile.jpg"
                                class="country-icons" alt="Chile" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Chile</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img src="<?= base_url() ?>assets/countries/america/colombia.jpg"
                                class="country-icons" alt="Colombia" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Colombia</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img src="<?= base_url() ?>assets/countries/america/costarica.jpg"
                                class="country-icons" alt="Costa Rica" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Costa Rica</h6>
                        </div>
                    </div>

                    <div class="d-flex col-md-3 h-100">
                        <div class='city-img-div-new'><img
                                src="<?= base_url() ?>assets/countries/america/domrep-flag.jpg" class="country-icons"
                                alt="Dominican Republic" srcset=""></div>
                        <div class='city-name-div-new'>
                            <h6>Dominican Republic</h6>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>



    <?php include_once "footer.php" ?>


    <script>

        const regions = [
            {
                image: "http://ecorkda.ecovisrkca.com/ecovis_icons/mumbai.png",
                city: "Corporate Office,Mumbai",
                central_city: 'mumbai',
                post: "Mentor",
                name: "SC Kabra",
                address: "515, Tulsiani chambers, Nariman Point, Mumbai 400021",
            },
            {
                image: "http://ecorkda.ecovisrkca.com/assets/ecovis_icons/ahmedabad.png",
                city: "Ahemdabad",
                central_city: "ahemdabad",
                post: "Mentor",
                name: "MD Kabra",
                address: "Naharraj Leela, 1 Ganga Soc, Shahibaug",
            },
            {
                image: "http://ecorkda.ecovisrkca.com/assets/ecovis_icons/chennai.png",
                city: "Chennai",
                central_city: "chennai",
                post: "Mentor",
                name: "Rahul Nagar",
                address: "17/39, Krishnappa Tank St, Konditope, Chennai–600 079",
            },
            {

                image: "http://ecorkda.ecovisrkca.com/assets/ecovis_icons/delhi.png",
                city: "Delhi",
                central_city: "delhi",
                post: "Mentor",
                name: "Bharat Gupta",
                address: "A 531, Shastri Nagar, New Delhi – 110052",
            },
            {
                image: "http://ecorkda.ecovisrkca.com/assets/ecovis_icons/hyderabad.png",
                city: "Hyderabad",
                central_city: "hyderabad",
                post: "Mentor",
                name: "Jai Govind",
                address: "1st Flr, Ramky House, Raj Bhavan Road, Hyderabad – 500082",
            },
            {
                image: "http://ecorkda.ecovisrkca.com/assets/ecovis_icons/indore.png",
                city: "Indore",
                central_city: "indore",
                post: "Mentor",
                name: "Siddharth Baghmar",
                address: "401, Fortune Ambience Business Spaces Indore (M.P) – 452001",
            },
            {
                image: "http://ecorkda.ecovisrkca.com/assets/ecovis_icons/hyderabad.png",
                city: "Jaipur",
                central_city: "jaipur",
                post: "Mentor",
                name: "Sushil Kumar",
                address: "1st Flr, Ramky House, Raj Bhavan Road, Hyderabad – 500082",
            },
            {
                image: "http://ecorkda.ecovisrkca.com/assets/ecovis_icons/kolkata.png",
                city: "Kolkata",
                central_city: "kolkata",
                post: "Mentor",
                name: "Pradip Das",
                address: "4A/2, Anandam Apt, 7 Mall Road, Kolkata – 700 080",
            },
            {
                image: "http://ecorkda.ecovisrkca.com/assets/ecovis_icons/mumbai.png",
                city: "Mumbai",
                central_city: "mumbai",
                post: "Mentor",
                name: "Hemant Vastani",
                address: "1902 C, Kailas Business Park, Vikhroli – W, Mumbai – 400 079",
            },
            {
                image: "http://ecorkda.ecovisrkca.com/assets/ecovis_icons/mumbai.png",
                city: "Nagpur",
                central_city: "nagpur",
                post: "Mentor",
                name: "Deepak Heda",
                address: "2nd Floor, Bhiwapurkar Chambers, Dhantoli, Nagpur, Maharashtra 440012",
            },
            {
                image: "http://ecorkda.ecovisrkca.com/assets/ecovis_icons/mumbai.png",
                city: "Vashi,Mumbai",
                central_city: "mumbai",
                post: "Mentor",
                name: "Ram Varma",
                address: "513, Arenja Corner, Vashi, Navi Mumbai – 400 703",
            },
            {
                image: "http://ecorkda.ecovisrkca.com/assets/ecovis_icons/kolk.png",
                city: "Pune",
                central_city: "pune",
                post: "Mentor",
                name: "Vishwanath Lele",
                address: "4A/2, Anandam Apartment, 7 Mall Road, Dum Dum, Kolkata 700 080",
            }
        ]


        const optionMap = {
            india: ['--Branch--', 'Mumbai', 'Delhi', 'Chennai', 'Hyderabad', 'Ahemdabad', 'Indore', 'Pune', 'Nagpur', 'Kolkata', 'Jaipur'],
            international: ['--Branch--', 'USA', 'Germany', 'China', 'Japan', 'Australia']
        }
        const selectLocationdd = document.getElementById('form-select-location')
        const selectBranchdd = document.getElementById('form-select-branch')
        function selectLocation() {
            const selectedOption = selectLocationdd.value;
            selectBranchdd.innerHTML = ''; // Clear previous options

            optionMap[selectedOption].forEach((subOption) => {
                const option = document.createElement("option");
                option.value = subOption.toLowerCase();
                option.text = subOption;
                selectBranchdd.appendChild(option);
            });
        }


        $(document).ready(function () {
            function updateCards(selectedCity) {
                const containerElement = $('#region-cards');
                containerElement.empty();

                const filteredCity = regions.filter((region) => selectedCity === region.central_city);
                const mainData = selectedCity === 'all' ? regions : filteredCity;

                mainData.forEach((region) => {
                    const divClass = 'col-md-4 pb-2 pt-4 px-3 text-center team-person-div';

                    const cardHTML = `
            <div class="${divClass}">
                <div class="mx-auto pb-2 pt-4 px-3 text-center" style="border-radius: 9px; box-shadow: 0px 2px 5px 1px #cac8c8; background-color: #f7f7f7;">
                    <div class="mb-4">
                        <img src="${region.image}" class="office_state_img" alt="${region.city}">
                        <h6 class="text-danger">${region.city}</h6>
                    </div>
                    <div class="">
                        <p class="small text-muted mb-0">${region.post}</p>
                        <h6 class="text-danger">${region.name}</h6>
                        <p>${region.address}</p>
                    </div>
                </div>
            </div>
            `;

                    containerElement.append(cardHTML); // Append to the main container
                });
            }

            updateCards('all');

            function selectBranch() {
                const selectedCity = $('#form-select-branch').val();
                updateCards(selectedCity);
            }

            $('#form-select-branch').change(selectBranch);
        });




    </script>


    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jqvmap/dist/jquery.vmap.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jqvmap/dist/maps/jquery-jvectormap-in-merc.js"
        charset="utf-8"></script>
    <script src="<?= base_url() ?>assets/js/javascript.js"></script>
</body>

</html>