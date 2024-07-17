<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
</head>
<style>
 .hero-section {
    padding: 3rem 20px;
    display: flex; /* Use flexbox to arrange images in a row */
    justify-content: space-around; /* Space out images evenly */
    align-items: center; /* Align items vertically center */
    /* height: 50vh; Full height of the viewport */
}

.hero-section img {
    width: 230px; /* Set a fixed width for the images */
    height: 250px; /* Set a fixed height for the images */
    object-fit: cover; /* Cover the image without stretching */
    border-radius: 10px; /* Optional: Add some border-radius for styling */
    opacity: 0.5; /* Set the opacity of the images */
    transition: opacity 0.3s ease; /* Add a smooth transition for hover effect */
    border: 4px solid darkgray;
}

.slick-carousel img:hover {
    opacity: 1; /* Full opacity on hover */
}





.search-container {
    display: flex;
    gap: 20px;
    justify-content:center;
}

.search-box {
    border: 1.3px solid darkgray;
    border-radius: 25px;
    padding: 10px 20px;
    display: flex;
    align-items: center;
    width: 200px;
    position: relative;
    background-color:white;
}

.search-box i {
    position: absolute;
    left: 15px;
    color: #666;
}

.search-box input, .search-box select {
    border: none;
    outline: none;
    width: 100%;
    padding-left: 15px; /* Adjust padding to make room for the icon */
    font-size: 15px;
    background-color: transparent;
}

.search-box input::placeholder, .search-box select {
    color: #666;
    text-align: left;
}
</style>

<style>

#cards-container.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    gap: 20px;
    width: 80%;
}

#cards-container .card {
    display: flex;
    align-items: center;
    flex-direction: row;
    width: 300px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: white;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

#cards-container .card img {
    border-radius: 50%;
    width: 60px;
    height: 60px;
    margin-right: 15px;
}

#cards-container .card .info {
    display: flex;
    flex-direction: column;
}

#cards-container .card .info h4 {
    margin: 0;
    font-size: 1em;
}

#cards-container .card .info p {
    margin: 5px 0 0;
    color: #666;
}
#experts {
  margin: 0;
  padding: 0;


}
/* $c1: #E64C66;
$c2: #2D3E50; */
.slick-carousel {
  /* width: auto; */
  /* margin: 60px 50px 50px; */
}
.slick-carousel img{
    width: 230px; /* Set a fixed width for the images */
    height: 275px; /* Set a fixed height for the images */
    object-fit: cover; /* Cover the image without stretching */
    border-radius: 10px; /* Optional: Add some border-radius for styling */
    opacity: 0.5; /* Set the opacity of the images */
    transition: opacity 0.3s ease; /* Add a smooth transition for hover effect */
    border: 4px solid darkgray;
}

.slick-slide {
  /* background: $c1; */
  color: white;
  padding: 40px 0;
  font-size: 30px;
  font-family: "Arial", "Helvetica";
  text-align: center;
}

.slick-prev:before,
.slick-next:before {
  color: black;
}

.slick-dots {
  bottom: -30px;
}

/* .slick-slide:nth-child(odd) {
  background: $c2;
} */
.heading h1{
    font-weight:630;
    font-size:3.5rem !important;
}
</style>
<body>
<section id='experts' >
<?php include_once "navbar.php" ?>
         
        <div class="">
                <section class="slick-carousel">
                    <div> <img src="<?= base_url() ?>assets/OurTeam/01_Pankaj_Bhargava.jpg" alt="Image 1"></div>
                    <div> <img src="<?= base_url() ?>assets/OurTeam/02_Dheeraj_rathi.jpg" alt="Image 1"></div>
                    <div><img src="<?= base_url() ?>assets/rkda/deepa.png" alt="Image 1"></div>
                    <div><img src="<?= base_url() ?>assets/rkda/deepak.png" alt="Image 1"></div>
                    <div><img src="<?= base_url() ?>assets/rkda/rkabra.png" alt="Image 1"></div>
                  
                </section>
                
        </div>
         <div class='heading'> <h1 class='text-center'  >Partners & Associates</h1></div>


        <div class="search-container mt-5">
            <div class="search-box">
                <i class="fas fa-user"></i>
                <input id="search-name" type="text" placeholder="Search By Name">
            </div>
            <div class="search-box">
                <i class="fas fa-map-marker-alt"></i>
                <select id="search-location">
                    <option value=""  selected>Location</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Hyderabad">Hyderabad</option>
                </select>
            </div>
            <div class="search-box">
                <i class="fas fa-briefcase"></i>
                <select id="search-expertise">
                    <option value=""  selected>Expertise</option>
                    <option value="Partner">Partner</option>
                    <option value="Network Partner">Network Partner</option>
                    <option value="Paid assistant">Paid Assistant</option>
                </select>
            </div>
        </div>


    <div class="container mt-5" id="cards-container"></div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Slick Carousel JS -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
         const experts=
         [
            { "SrNo": 1, "Name": "Mr. Rameshwar Lal Kabra", "RelationWithFirm": "Partner" },
            { "SrNo": 2, "Name": "Mr. Ram Swaroop Verma", "RelationWithFirm": "Partner" },
            { "SrNo": 3, "Name": "Mr. Hemant Vastani", "RelationWithFirm": "Partner" },
            { "SrNo": 4, "Name": "Mr. Sanjay Kumar Surana", "RelationWithFirm": "Partner" },
            { "SrNo": 5, "Name": "Mr. Pradip Das", "RelationWithFirm": "Partner" },
            { "SrNo": 6, "Name": "Mrs. Deepa Rathi", "RelationWithFirm": "Partner" },
            { "SrNo": 7, "Name": "Mrs. Manju Latha Boob", "RelationWithFirm": "Partner" },
            { "SrNo": 8, "Name": "Mr. Jai Govind Boob", "RelationWithFirm": "Partner" },
            { "SrNo": 9, "Name": "Mr. Rahul N Nagar", "RelationWithFirm": "Partner" },
            { "SrNo": 10, "Name": "Mr. Siddharth Baghmar", "RelationWithFirm": "Partner" },
            { "SrNo": 11, "Name": "Mrs. Shradha Heda", "RelationWithFirm": "Partner" },
            { "SrNo": 12, "Name": "Mr. Keerthi Raju", "RelationWithFirm": "Partner" },
            { "SrNo": 13, "Name": "Ms. Nidhi Nilay Shah", "RelationWithFirm": "Paid assistant" },
            { "SrNo": 14, "Name": "Ms. Vidhi Satish Shah", "RelationWithFirm": "Paid assistant" },
            { "SrNo": 15, "Name": "Ms. Minal Kasavkar", "RelationWithFirm": "Paid assistant" },
            { "SrNo": 16, "Name": "Ms. Rinky Dwivedi", "RelationWithFirm": "Paid assistant" },
            { "SrNo": 17, "Name": "Mrs. Swadi Modani", "RelationWithFirm": "Paid assistant" },
            { "SrNo": 18, "Name": "Mrs. Pooja Bang", "RelationWithFirm": "Paid assistant" },
            { "SrNo": 19, "Name": "Mr. Kamlesh Jain", "RelationWithFirm": "Network Partner" },
            { "SrNo": 20, "Name": "Mr. Deepak Heda", "RelationWithFirm": "Network Partner" },
            { "SrNo": 21, "Name": "Mr. Ashish Kanodia", "RelationWithFirm": "Network Partner" },
            { "SrNo": 22, "Name": "Mr. Brij Kalla", "RelationWithFirm": "Network Partner" },
            { "SrNo": 23, "Name": "Mr. Jay Jayant Dedhia", "RelationWithFirm": "Network Partner" },
            { "SrNo": 24, "Name": "Mr. Nilesh Mundada", "RelationWithFirm": "Network Partner" },
            { "SrNo": 25, "Name": "Mr. Mukesh Mittal", "RelationWithFirm": "Network Partner" },
            { "SrNo": 26, "Name": "Mr. Piyush Agarwal", "RelationWithFirm": "Network Partner" },
            { "SrNo": 27, "Name": "Mr. Arpit Bansal", "RelationWithFirm": "Network Partner" },
            { "SrNo": 28, "Name": "Mr. Deepesh Mittal", "RelationWithFirm": "Network Partner" }
         ];
         const container = document.getElementById('cards-container');

         experts.forEach(person => {
                const card = document.createElement('div');
                card.className = 'card';

                const img = document.createElement('img');
                img.src = './assets/rkda/vector-img.png'; // Replace with actual image path or URL
                img.alt = person.Name;

                const info = document.createElement('div');
                info.className = 'info';

                const name = document.createElement('h4');
                name.textContent = person.Name;

                const relation = document.createElement('p');
                relation.textContent = person.RelationWithFirm;

                info.appendChild(name);
                info.appendChild(relation);
                card.appendChild(img);
                card.appendChild(info);

                container.appendChild(card);
            });

        const carousel = document.querySelector('.slick-carousel');

        carousel.addEventListener('mouseenter', function() {
                    if (isAutoplay) {
                        $('.slick-carousel').slick('slickPause'); // Pause the carousel
                        isAutoplay = false;
                    }
                });

                carousel.addEventListener('mouseleave', function() {
                    if (!isAutoplay) {
                        $('.slick-carousel').slick('slickPlay'); // Resume the carousel
                        isAutoplay = true;
                    }
                });

</script>






<script>
   $(document).ready(function() {
        // Initialize Slick Carousel
        $(".slick-carousel").slick({
            speed: 10000,
            autoplay: true,
            autoplaySpeed: 0,
            cssEase: 'linear',
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            swipeToSlide: true,
            centerMode: true,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 750,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                    }
                }
            ]
        });

        const carousel = document.querySelector('.slick-carousel');

        carousel.addEventListener('mouseenter', function() {
                    if (isAutoplay) {
                        $('.slick-carousel').slick('slickPause'); // Pause the carousel
                        isAutoplay = false;
                    }
                });

                carousel.addEventListener('mouseleave', function() {
                    if (!isAutoplay) {
                        $('.slick-carousel').slick('slickPlay'); // Resume the carousel
                        isAutoplay = true;
                    }
                });
      });
</script>
</body>
</html>