<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experts</title>
</head>
<style>
    .hero-section {
    background-image: url('./assets/rkda/experts_img.jpg'); /* Replace with the path to your image */
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 40vh; 
    display: flex;
    justify-content: center;
    align-items: center;
}

.hero-section h1 {
    color: black; /* Adjust text color as needed */
    font-size: 5rem; /* Adjust font size as needed */
    /* text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); Optional: Adds a shadow to the text for better readability */
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
</style>
<body>
<section id='experts' >
<?php include_once "navbar.php" ?>
  
        <div class="hero-section">
            <h1>Experts and Advisors</h1>
        </div>


        <div class="search-container my-3">
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


    <div class="container my-5" id="cards-container"></div>
    </section>


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


            // Function to filter and display cards based on user input
            function filterCards() {
                const searchName = document.getElementById('search-name').value.toLowerCase();
                const searchLocation = document.getElementById('search-location').value;
                const searchExpertise = document.getElementById('search-expertise').value;

                const filteredExperts = experts.filter(person => {
                    const matchesName = person.Name.toLowerCase().includes(searchName);
                    const matchesLocation = !searchLocation || person.RelationWithFirm.includes(searchLocation);
                    const matchesExpertise = !searchExpertise || person.RelationWithFirm === searchExpertise;

                    return matchesName && matchesLocation && matchesExpertise;
                });

                renderCards(filteredExperts);
            }

            // Function to render filtered cards
            function renderCards(filteredExperts) {
                const container = document.getElementById('cards-container');
                container.innerHTML = ''; // Clear previous cards

                filteredExperts.forEach(person => {
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
            }

            // Initial rendering of all cards
            renderCards(experts);

            // Event listeners for input changes
            document.getElementById('search-name').addEventListener('input', filterCards);
            document.getElementById('search-location').addEventListener('change', filterCards);
            document.getElementById('search-expertise').addEventListener('change', filterCards);

    </script>
</body>
</html>