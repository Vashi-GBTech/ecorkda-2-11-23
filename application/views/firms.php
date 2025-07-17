<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKDA - Ecovis India</title>
    <link rel="icon" href="<?= base_url() ?>assets/images/ecovis_logoes/Ecovis_rkda_logo_ball.png"
        type="image/icon type">
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
        /* transform: rotate(45deg) skew(10deg, 10deg); */
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
        /* transform: skew(-10deg, -10deg) rotate(-45deg); */
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
    .membersDiv .card{
      min-height: 100px;
      height: 100%;
    }
</style>


<body onload="onLoadPage()">
    <!-- header  -->
    <?php include_once "header.php" ?> 
    <!-- banner  -->
    <div class="ecovis_insia_banner">
        <div class="align-items-center ecovisIndiaBanner d-flex justify-content-around pageBanner">
            <div >
                <h1 style="font-family: 'Libre Baskerville', serif; font-size:3.4rem; color: white;"
                    class="text-center  cssanimation fadeInBottom">Initiator Of Change</h1>

                <p class="text-center cssanimation fadeInBottom"
                    style="color: white; font-size:1.4rem;font-family:cursive">The people who inspire better business
                </p>
            </div>
        </div>
        <!-- <div class="row" style="margin-top: -110px ;flex-wrap: initial;margin-right: 0px;">
            <div class="red-info-div-1 col-md-6 col-sm-1 " style="border-radius: 0px 78px 0px 0px;">
            </div>
            <div class="red-info-div-2 col-md-6 col-sm-1" style="border-radius: 76px 0px 0px 0px;">
            </div>
        </div> -->
        <div class="red-info col-md-12">
            <p>RKDA and Affiliates ( ICAI Approved Network ) that integrates technology and common values to enhance the
                capabilities of its members is driven by the sense of calling or duty as professionals having belief in
                Panch Vrat of Amrit Kal, where as a Nation we all aspire to be a Complete Developed Economy, without any
                trace of Colonial Mindset having pride in the roots and ethos of civilization which Exhibit prowess of
                One India.
           
                In Endeavour to Contribute towards the same our mission is to be recognized Professional, Accounting,
                Financial and Legal Powerhouse on a Global Stage.
            </p>
        </div>
        <div class="d-flex">
          <div class="col-md-2"></div>
            <div class="col-md-8 ourTeamDropDowndiv">
                <!-- <div class='' style='display: flex;justify-content: end;' id='clear-filter-div'>
                    <button class='btn btn-outline-danger' id='reset-button' title='No Filters Applied' type="button"
                        style='font-size:10px' disabled=true>Clear All Filters <i
                            class='far fa-times-circle'></i></button>
                </div> -->
                <div class="d-flex justify-content-evenly align-items-center" style="flex-wrap: inherit;">
                    <div class="dropdown col-md-4 py-2">
                        <input type="text"  id="team-search" class="team-search" placeholder="-- Firm Name --"
                            onkeyup="onSearch()">
                    </div>
                    <div class="dropdown col-md-4 py-2">
                        <select class="form-select" aria-label="Default select example" id="form-select-post"
                            onchange="onSelectPost(searchArray)">
                            <option selected value="OurServices">-- Firm Capabilities --</option>
                            <option class="options" value="Strategy & Performance Consulting">Strategy & Performance
                                Consulting</option>
                            <option class="options" value="Business Support & Financial Reporting">Business Support &
                                Financial Reporting</option>
                            <option class="options" value="Litigation & Legal Services">Litigation & Legal Services
                            </option>
                            <option class="options" value="Financial & Capital Services">Financial & Capital Services
                            </option>
                            <option class="options" value="Digital Transformation">Digital Transformation</option>
                        </select>
                    </div>
                    <div class="dropdown col-md-4 py-2">
                        <select class="form-select" aria-label="Default select example" id='form-select-location'
                            onchange="onSelectLocation(searchArray)">
                            <option selected value="location">-- Firm Location --</option>
                            <option value="Kolkata">Kolkata</option>
                            <option value="Bhubaneswar">Bhubaneswar</option>
                            <option value="Patna">Patna</option>
                            <option value="Ranchi">Ranchi</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Ahmedabad">Ahmedabad</option>
                            <option value="Pune">Pune</option>
                            <option value="Vadodara">Vadodara</option>
                            <option value="Nagpur">Nagpur</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Jaipur">Jaipur</option>
                            <option value="Lucknow">Lucknow</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Agra">Agra</option>
                            <option value="Bangalore">Bangalore</option>
                            <option value="Chennai">Chennai</option>
                            <option value="Kochi">Kochi</option>
                            <option value="Hyderabad">Hyderabad</option>
                            <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                        </select>
                    </div>

                </div>

            </div>
            <div class="col-md-2"></div>
        </div>

    </div>

    <div class=" w-100 arrow">

        <div class="our_team my-5">

            <div class="teamMets ">
                <div class='d-flex ' style='flex-wrap:wrap;' id="membersDiv" >
                  
                </div>


            </div>

        </div>
    </div>
    <!-- footer  -->
    <?php include_once "footer.php" ?>

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <!-- <script src="<?= base_url() ?>assets/js/jqvmap/dist/jquery.vmap.min.js"></script> -->
    <!-- <script type="text/javascript" src="<?= base_url() ?>assets/js/jqvmap/dist/maps/jquery-jvectormap-in-merc.js" -->
    <!-- charset="utf-8"></script> -->
    <!-- <script src="<?= base_url() ?>assets/js/javascript.js"></script> -->
    <!-- <script src="https://www.youtube.com/iframe_api"></script> -->



    <script>


    let mainData = [];


    let Members = [
  {
    keyname: 'B_M_Gattani_&_Co',
    name: 'B M Gattani & Co',
    post:'Strategy & Performance Consulting',
    location:'kolkata',
  },
  {
    keyname: 'RK_patni_&_Co',
    name: 'RK Patni & Co',
    post:'Legal And GRC Services',
    location:'pune',
  },
  {
    keyname: 'B_L_Chordia_&_Co_Jaipur',
    name: 'B L Chordia & Co, Jaipur',
    post:'Strategy & Performance Consulting',
    location:'delhi',
  },
  {
    keyname: 'Atul_Somani_&_associates_Bhilwara',
    name: 'Atul Somani & associates, Bhilwara',
    post:'Business Support & Financial Reporting',
    location:'patna',
  },
  {
    keyname: 'CA_Saurabh_Sahu_Raipur',
    name: 'CA Saurabh Sahu, Raipur',
    post:'Digital Transformation',
    location:'jaipur',
  },
  {
    keyname: 'CA_Rajiv_Gadre',
    name: 'CA Rajiv Gadre',
    post:'Financial & Capital Services',
    location:'mumbai',
  }
];

// console.log(data,'datatatat');

    let searchArray = [];
    var selectValue = [];
    var searchValue = '';
    var postFlag = 0;
    var locationFlag = 0;


    function commomMapfunction(array) {
        let mappedCards = [];
        array.map((member, index) => {
            mappedCards += `<div class="col-md-3 h-100">
                    <a href="" style='text-decoration:none;color:black !important'>
                    <div class="card p-3 my-2 bg-gray-ipm" style='height:80px;border:none'>
                     <h5 class="text-center" >${member.name}</h5> 
                    </div>
                    </a>
                 </div>`
        })
        $("#membersDiv").html(mappedCards);
    }
    
        function onLoadPage(){
        if (searchValue.length == 0) {
            commomMapfunction(Members)
        } else {
        onSearch();
        }   
        }
  let historyFilters=[]
        function onSearch(){
            let filteredData = []; 
            let mappedCards=[];
            let mapArray= postFlag == 0 && locationFlag == 0 ?  Members : searchArray
            if(event.target.value !== undefined){
            searchValue = event.target.value.toLowerCase();
            for (var i = 0; i < mapArray.length; i++) {
            var obj = mapArray[i];
            if (obj.name.toLowerCase().includes(searchValue) || obj.post.toLowerCase().includes(searchValue)) {
            
                filteredData.push(obj);
                
            }
           
            }
            }
            if (event.target.value.length === 0) {
                console.log(historyFilters,'historyFilters');
                commomMapfunction(historyFilters);
            }
            else{
                searchArray=filteredData;
               commomMapfunction(filteredData);
            }
        //    console.log(filteredData,'filter data');
       
        }
        function onSelectPost(){
            let mappedCards=[];
            let filteredData=[];
            let filterArray= searchValue  == 0 && locationFlag == 0 ? Members : searchArray;
            let count=0;
            console.log('visited' , count );
        console.log(searchArray,"###");
            if(event.target.value == 'OurServices'){
                postFlag=0;
                filteredData = filterArray;
                console.log(filteredData);
                defaultSelectPost=event.target.value;
                commomMapfunction(historyFilters);
            }
            else{
                postFlag=1;
            filteredData = filterArray.filter(function(obj) {
            return obj.post === event.target.value;
            });
            selectValue=filteredData
            searchArray=filteredData;
            commomMapfunction(filteredData);
            }
           
            historyFilters=filteredData
        }

        function onSelectLocation(){
            console.log(event.target.value.toLowerCase(),'locationnnn');
            let mapArrayLocation= searchValue.length == 0 && postFlag == 0  ? Members : searchArray;
            console.log(mapArrayLocation,'mapArrayLocation');
            if(event.target.value.toLowerCase() == 'location'){
                locationFlag=0;
                return commomMapfunction(mapArrayLocation)
            }
            else{
                console.log('inisdee ');
                locationFlag=1;
                var nameObject=mapArrayLocation.filter((object) => {
                return  object.location.includes(event.target.value.toLowerCase())
                })
                console.log(nameObject);
                searchArray=nameObject;
                commomMapfunction(nameObject)
                historyFilters=nameObject;
            }
        }




        // Get references to the input and select element
        function onLoadPage() {
            var filterInput = document.getElementById("team-search");
            var dropdown1 = document.getElementById("form-select-post");
            var dropdown2 = document.getElementById("form-select-location");
            commomMapfunction(Members)
            // var clearFilterButton = document.getElementById("reset-button");

            // clearFilterButton.addEventListener("click", function () {
            //     filterInput.value = "";
               
            //     dropdown1.selectedIndex = 0;
            //     dropdown2.selectedIndex = 0;
            //     commomMapfunction(Members);
            //     clearFilterButton.disabled = true;
            //     clearFilterButton.title = 'No Filters Applied';
            // });
        }

    </script>
</body>

</html>