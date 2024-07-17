<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>superCa</title>
</head>
<style>
    /* body {
  width: 100vw;
  height: 100vh;
  display: grid;
  padding: 60px 0;
  grid: 1fr min-content min-content 1fr / 1fr;
  align-items: center;
  justify-items: center;
} */

header {
  font-size: 42px;
  font-weight: bold;
  text-align: center;
}

#superca {
  width: 100vw;
  overflow: hidden;
  position: relative;
  --v-offset: 60px;
  --curve-height: 120px;
}
#superca::before,
#superca::after {
  content: "";
  display: block;
  background: white;
  width: calc(100vw + 2 * var(--v-offset));
  height: var(--curve-height);
  position: absolute;
  border-radius: 50%;
  left: calc(-1 * var(--v-offset));
  right: calc(-1 * var(--v-offset));
}

#superca::before {
  top: calc(-0.6 * var(--curve-height));
}
#superca::after {
  bottom: calc(-0.6 * var(--curve-height));
}

.wrapper {
  display: grid;
  grid-template-rows: 300px;
  grid-auto-flow: column;
  grid-gap: 24px;
  overflow: auto;
  scroll-snap-type: x mandatory;
}

.wrapper img {
  scroll-snap-align: center;
}
.km{
  color:crimson;
  font-weight:500;

}
.km:hover{
  color:black;

  
}
</style>
<body>
<?php include_once "navbar.php" ?>
<section id='superca_page'>


   <div class="d-flex justify-content-center">
      <div class='col-md-8'>
        <h1 class='text-center my-3'>Super CA</h1>
         <p class='text-center' >SuperCA empowers Chartered Accountants through specialized tools, resources, and community support. It enables CAs to explore niches like investment banking, forensic auditing, and entrepreneurship. Key features include state-of-the-art tools, comprehensive training, vibrant community engagement, and opportunities for mentorship and networking</p>
         <div class="d-flex justify-content-center">
           <a href="https://forum.iitcouncil.org/superca/" class='km btn btn-danger rounded-pill' >Know more</a>
         </div>
      </div>
      </div>
<section  id='superca'>
     

        <div class="wrapper">
            <img src="https://picsum.photos/seed/picsum1/300/300" alt="Image 1">
            <img src="https://picsum.photos/seed/picsum2/300/300" alt="Image 2">
            <img src="https://picsum.photos/seed/picsum3/300/300" alt="Image 3">
            <img src="https://picsum.photos/seed/picsum4/300/300" alt="Image 4">
            <img src="https://picsum.photos/seed/picsum5/300/300" alt="Image 5">
            <img src="https://picsum.photos/seed/picsum6/300/300" alt="Image 6">
            <img src="https://picsum.photos/seed/picsum7/300/300" alt="Image 7">
            <img src="https://picsum.photos/seed/picsum8/300/300" alt="Image 8">
            <img src="https://picsum.photos/seed/picsum9/300/300" alt="Image 9">
            <img src="https://picsum.photos/seed/picsum10/300/300" alt="Image 10">
            <img src="https://picsum.photos/seed/picsum11/300/300" alt="Image 11">
            <img src="https://picsum.photos/seed/picsum12/300/300" alt="Image 12">
            <img src="https://picsum.photos/seed/picsum13/300/300" alt="Image 13">
            <img src="https://picsum.photos/seed/picsum14/300/300" alt="Image 14">
            <img src="https://picsum.photos/seed/picsum15/300/300" alt="Image 15">
            <img src="https://picsum.photos/seed/picsum16/300/300" alt="Image 16">
        </div>

        
    </section>
    <div class='d-flex justify-content-center' >
            <div class="col-md-7">
            <ul>
                <li><strong>Specialized Support:</strong> Tailored tools and resources for niche areas within accounting.</li>
                <li><strong>Community Engagement:</strong> Vibrant professional network fostering collaboration and learning.</li>
                <li><strong>Professional Growth:</strong> Opportunities for mentorship, networking, and advanced training.</li>
                <li><strong>Career Advancement:</strong> Empowering CAs to optimize practices and achieve career success.</li>
            </ul>

            </div>
        </div>



        </section>
</body>
</html>