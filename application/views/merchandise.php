
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet"> -->
  <style>
  @media (max-width: 767px) {
		.carousel-inner .carousel-item > div {
			display: none;
		}
		.carousel-inner .carousel-item > div:first-child {
			display: block;
		}
	}

	.carousel-inner .carousel-item.active,
	.carousel-inner .carousel-item-next,
	.carousel-inner .carousel-item-prev {
		display: flex;
	}

	/* medium and up screens */
	@media (min-width: 768px) {

		.carousel-inner .carousel-item-end.active,
		.carousel-inner .carousel-item-next {
			transform: translateX(25%);
		}

		.carousel-inner .carousel-item-start.active, 
		.carousel-inner .carousel-item-prev {
			transform: translateX(-25%);
		}
	}

	.carousel-inner .carousel-item-end,
	.carousel-inner .carousel-item-start { 
		transform: translateX(0);
	}
    .carousel-control-prev,.carousel-control-next{
        filter: invert(1);
    }
    .carousel-control-next, .carousel-control-prev{
        width: auto !important;
    }
    .carousel h4 {
	font-size: 18px !important;
	margin: 10px 0 !important;
    width:70%
}
.carousel .item-price {
	font-size: 13px;
	padding: 2px 0;
}
.carousel .item-price strike {
	color: #999;
	margin-right: 5px;
}
  </style>
</head>
<body>
<div class='merchandise-div d-flex align-items-center justify-content-center mt-5' >
	<!-- <div class='  '> -->
	<div>
	<h1 class='text-center' style='font-size: xxx-large;'>Essential Favourites</h1>
	<p class='text-center '>Shop Most Popular Item</p>
	<h6 class='text-center text-bold' style='font-weight: 700;'>Explore Items <i class="fa-solid fa-arrow-down"></i> </h6>
	<!-- </div> -->

	</div>
	
	

</div>
<div class="container text-center my-5">
		<div class="row mx-auto my-auto justify-content-center">
			<div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
                    <div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://www.gonoise.com/cdn/shop/products/1.5_71c7caf1-568a-4519-b8ae-589f6832e181.png?v=1681610912" width='100' class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
								<div class='d-flex justify-content-center' >	<h4>Noise Watch</h4></div>
									<p class="item-price"><strike>$899.00</strike> <span>$649.00</span></p>
									
								</div>						
							</div>
						</div>
					</div>
					<div class="carousel-item">
                    <div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://m.media-amazon.com/images/I/51jxzqwan3L._SX679_.jpg" width='100' class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
                                <div class='d-flex justify-content-center' ><h4>Peach Bottle</h4></div>
									<p class="item-price"><strike>$899.00</strike> <span>$649.00</span></p>
									
								</div>						
							</div>
						</div>
					</div>
					<div class="carousel-item">
                    <div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://m.media-amazon.com/images/I/61u34Z9CCqL._SX679_.jpg" width='100' class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
                                <div class='d-flex justify-content-center' ><h4>Diary, Metal Pen & Water Bottle</h4></div>
									<p class="item-price"><strike>$899.00</strike> <span>$649.00</span></p>
									
								</div>						
							</div>
						</div>
					</div>
					<div class="carousel-item">
                    <div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://m.media-amazon.com/images/I/61egMfcDWlL._SX679_.jpg" width='100' class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
								<div class='d-flex justify-content-center' ><h4>FUR JADEN Backpack</h4></div>
									<p class="item-price"><strike>$899.00</strike> <span>$649.00</span></p>
									
								</div>						
							</div>
						</div>
					</div>
					<div class="carousel-item">
                    <div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://m.media-amazon.com/images/I/41VG4cW9U1L._SX300_SY300_QL70_FMwebp_.jpg" width='100' class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
                                <div class='d-flex justify-content-center' ><h4>Milton Pro Lunch Tiffin</h4></div>
									<p class="item-price"><strike>$899.00</strike> <span>$649.00</span></p>
									
								</div>						
							</div>
						</div>
					</div>
					<div class="carousel-item">
                    <div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://m.media-amazon.com/images/I/31sqYCOSqcL._SX300_SY300_QL70_FMwebp_.jpg" width='100' class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
                                <div class='d-flex justify-content-center' ><h4>Boat wired earphones</h4></div>
									<p class="item-price"><strike>$899.00</strike> <span>$649.00</span></p>
									
								</div>						
							</div>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				</a>
				<a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
				</a>
			</div>
		</div>		
	</div>

    <script>
        let items = document.querySelectorAll('.carousel .carousel-item')

items.forEach((el) => {
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
    // wrap carousel by using first child
    next = items[0]
}
let cloneChild = next.cloneNode(true)
el.appendChild(cloneChild.children[0])
next = next.nextElementSibling
}
})
    </script>
</body>
</html>