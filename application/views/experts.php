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
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Optional: Adds a shadow to the text for better readability */
}




.search-container {
    display: flex;
    gap: 20px;
}

.search-box {
    border: 1px solid #000;
    border-radius: 25px;
    padding: 10px 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 200px;
}

.search-box input, .search-box select {
    border: none;
    outline: none;
    width: 100%;
    font-size: 16px;
    background-color: transparent;
}

.search-box input::placeholder, .search-box select {
    color: #666;
    text-align: center;
}
</style>
<body>
<section id='experts' >
<?php include_once "navbar.php" ?>
  
        <div class="hero-section">
            <h1>Experts and Advisors</h1>
        </div>


        <div class="search-container">
        <div class="search-box">
            <input type="text" placeholder="Search By Name">
        </div>
        <div class="search-box">
            <select>
                <option value="" disabled selected>Location</option>
                <!-- Add options here -->
            </select>
        </div>
        <div class="search-box">
            <select>
                <option value="" disabled selected>Expertise</option>
                <!-- Add options here -->
            </select>
        </div>
    </div>
    </section>
</body>
</html>