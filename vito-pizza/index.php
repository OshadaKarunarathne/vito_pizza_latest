<?php

require_once("admin/db_con.php");

//INDEX IMAGE------------
$sql = "SELECT * FROM `image_index_page` ORDER BY `image_index_page`.`id` ASC";

$result = $conn->query($sql);

$image_index_data = [];

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$image_index_data[] = [
			'image_id' => $row['image_id'],
			'name' => $row['name'],
			'display_location' => $row['display_location'],
            'version'=> strtotime($row['time_stamp']),
		];
	}
} else {
	echo "No records found.";
}


// MENU IMAGE-------------------
$sql = "SELECT * FROM `image_menu_page` ORDER BY `image_menu_page`.`display_location` ASC";

$result = $conn->query($sql);

$image_menu_data = [];

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$image_menu_data[] = [
			'image_id' => $row['image_id'],
			'name' => $row['name'],
			'display_location' => $row['display_location'],
            'version'=> strtotime($row['time_stamp']),
		];
	}
} else {
	echo "No records found.";
}


//Best View IMAGE-------------------
$sql = "SELECT * FROM `image_bestview_page` ORDER BY `image_bestview_page`.`display_location` ASC";

$result = $conn->query($sql);

$image_bestview_data = [];

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$image_bestview_data[] = [
			'image_id' => $row['image_id'],
			'name' => $row['name'],
			'display_location' => $row['display_location'],
            'version'=> strtotime($row['time_stamp']),
		];
	}
} else {
	echo "No records found.";
}


//GIVEAWAY IMAGE-------------------
$sql = "SELECT * FROM `image_giveaway` ORDER BY `image_giveaway`.`display_location` ASC";

$result = $conn->query($sql);

$image_giveaway_data = [];

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$image_giveaway_data[] = [
			'image_id' => $row['image_id'],
			'name' => $row['name'],
			'display_location' => $row['display_location'],
            'version'=> strtotime($row['time_stamp']),
		];
	}
} else {
	echo "No records found.";
}



//REVIEW IMAGE-------------------
$sql = "SELECT * FROM `image_reviews_page`";

$result = $conn->query($sql);

$image_review_data = [];

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$image_review_data[] = [
			'image_id' => $row['image_id'],
			'name' => $row['name'],
			'display_location' => $row['display_location'],
            'version'=> strtotime($row['time_stamp']),
		];
	}
} else {
	echo "No records found.";
}


//IMAGE GALLERY--------------------
$sql = "SELECT * FROM `image_gallery` ORDER BY `display_order` ASC";

$result = $conn->query($sql);

$image_gallery_data = [];

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$image_gallery_data[] = [
			'image_id' => $row['image_id'],
			'name' => $row['name'],
			// 'display_location' => $row['display_location'],
            'version'=> strtotime($row['time_stamp']),
		];
	}
} else {
	echo "No records found.";
}


//CUSTOMER SNAPS-------------------------
$sql = "SELECT * FROM `customer_snaps` ORDER BY `display_order` ASC";

$result = $conn->query($sql);

$image_cussnap_data = [];

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$image_cussnap_data[] = [
			'image_id' => $row['image_id'],
			'name' => $row['name'],
			// 'display_location' => $row['display_location'],
            'version'=> strtotime($row['time_stamp']),
		];
	}
} else {
	echo "No records found.";
}

?>

<!DOCTYPE html>

<html lang="en-US">


<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="author" content="Jthemes" />
	<meta name="description" content="Indulge in the authentic flavors of wood-fired pizzas at Vito Wood Fired Pizza. Enjoy the best pizza in Kandy with handcrafted ingredients and traditional techniques.">
	<meta name="keywords" content="Vito Wood Fired Pizza, Wood Fired Pizza, Authentic Pizza Caffe, Best Pizza in Kandy, Italian Pizzeria in Kandy, Handcrafted Pizza, Traditional Wood-Fired Oven, Pizza Caffe Menu">
	<meta name="author" content="orise(pvt)ltd">
	<link rel="canonical" href="https://www.vitopizza.lk">

	<!-- SITE TITLE -->
	<title>Vito Wood Fired Pizza | Authentic Wood-Fired Pizzas in Kandy City</title>

	<!-- FAVICON AND TOUCH ICONS -->
	<link rel="shortcut icon" href="images/index/vito-logo.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="icon" href="images/apple-touch-icon.png" type="image/x-icon">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">

	<!-- BOOTSTRAP CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- FONT ICONS -->
	<link href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->

	<link href="css/flaticon.css" rel="stylesheet">

	<!-- PLUGINS STYLESHEET -->
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/flexslider.css" rel="stylesheet">
	<link href="css/owl.carousel.min.css" rel="stylesheet">
	<link href="css/owl.theme.default.min.css" rel="stylesheet">
	<link href="css/jquery.datetimepicker.min.css" rel="stylesheet">

	<!-- TEMPLATE CSS -->
	<?php
	$version = "1.0";
	?>
	<link href="css/style.css?v=<?php echo $version ?>" rel="stylesheet">

	<!-- RESPONSIVE CSS -->
	<link href="css/responsive.css?v=<?php echo $version ?>" rel="stylesheet">

</head>




<body>

	<!-- PRELOADER SPINNER
		============================================= -->
	<div id="loader-wrapper">
		<div id="loader">
			<div class="cssload-spinner">
				<div class="cssload-ball cssload-ball-1"></div>
				<div class="cssload-ball cssload-ball-2"></div>
				<div class="cssload-ball cssload-ball-3"></div>
				<div class="cssload-ball cssload-ball-4"></div>
			</div>
		</div>
	</div>



	<!-- HEADER-1
		============================================= -->
	<header id="header-1" class="header navik-header header-shadow center-menu-1 header-transparent">
		<div class="container">


			<!-- NAVIGATION MENU -->
			<div class="navik-header-container">


				<!-- CALL BUTTON -->
				<div class="callusbtn text-right"><a href="tel:+94 77 454 9000"><i class="fas fa-phone"></i></a></div>


				<!-- LOGO IMAGE -->
				<div class="logo" data-mobile-logo="images/index/vito-logo.png" data-sticky-logo="images/index/vito-logo.png">
					<a href=""><img src="images/index/vito-logo.png" alt="header-logo" style="height: 100px"></a>
				</div>


				<!-- BURGER MENU -->
				<div class="burger-menu">
					<div class="line-menu line-half first-line"></div>
					<div class="line-menu"></div>
					<div class="line-menu line-half last-line"></div>
				</div>


				<!-- MAIN MENU -->
				<nav class="navik-menu menu-caret navik-yellow">
					<ul class="top-list text-right">

						<!-- ABOUT US -->
						<li>
							<a href="about.php">About Us</a>
						</li>

						<!-- GALLERY -->
						<li>
							<a href="gallery.php">Gallery</a>
						</li>
					</ul>
					<ul>

						<!-- MENU -->
						<li>
							<a href="menu.php">Menu</a>
						</li>

						<!-- CONTACTS -->
						<li>
							<a href="contacts.php">Contact Us</a>
						</li>

					</ul>
				</nav> <!-- END MAIN MENU -->


			</div> <!-- END NAVIGATION MENU -->


		</div> <!-- End container -->
	</header> <!-- END HEADER-1 -->




	<!-- PAGE CONTENT
		============================================= -->
	<div id="page" class="page">




		<!-- HERO-5
			============================================= -->
		<section id="hero-5" class="hero-section">
			<div class="bg-fixed bg-inner division">


				<!-- HERO TEXT -->
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="hero-5-txt text-center white-color">

								<!-- Title -->
								<!-- <h2>Pizza</h2> -->

								<!-- Image -->
								<div class="hero-5-img" style="margin-top: 150px;">
									<?php
									echo imageRender($image_index_data, 'header');
									?>
								</div>

							</div>
						</div>
					</div> <!-- End row -->
				</div> <!-- END HERO TEXT -->


				<!-- SECTION OVERLAY -->
				<div class="bg-fixed white-overlay-wave"></div>


			</div> <!-- End Inner Content -->
		</section> <!-- END HERO-5 -->




		<!-- ABOUT-7
			============================================= -->
		<section id="about-7" class="about-section division">
			<div class="container">
				<div class="abox-4-wrapper ico-80">
					<div class="row">


						<!-- ABOUT BOX #1 -->
						<div class="col-md-4 col-lg-4">
							<div class="abox-4 text-center mb-40 coffee-color">

								<!-- Icon -->
								<div class="abox-4-ico"><span class="flaticon-pizza-4"></span></div>

								<!-- Title -->
								<h5 class="h5-lg">Original Recipes</h5>

								<!-- Text -->
								<p>Authentic italian food delicates that we serve are original recipes cooked by our chefs with a twist of traditional Sri Lankan flavors
								</p>

							</div>
						</div>


						<!-- ABOUT BOX #2 -->
						<div class="col-md-4 col-lg-4">
							<div class="abox-4 text-center mb-40 coffee-color">

								<!-- Icon -->
								<div class="abox-4-ico"><span class="flaticon-salad"></span></div>

								<!-- Title -->
								<h5 class="h5-lg">Qualty Foods</h5>

								<!-- Text -->
								<p>Experience the exquisite quality of Pizza that is being cooked in a food fired oven in an open kitchen that cooks many Italian delicacies to please your taste buds.
								</p>

							</div>
						</div>


						<!-- ABOUT BOX #3 -->
						<div class="col-md-4 col-lg-4">
							<div class="abox-4 text-center mb-40 coffee-color">

								<!-- Icon -->
								<div class="abox-4-ico"><span class="flaticon-moped"></span></div>

								<!-- Title -->
								<h5 class="h5-lg">Feel like home</h5>

								<!-- Text -->
								<p>We welcome you into Vito pizza with open hands to dine in under a fresh and friendly atmosphere served by
									our friendliest staff who will make you feel like home
								</p>

							</div>
						</div>


					</div> <!-- End row -->
				</div>
			</div> <!-- End container -->
		</section> <!-- END ABOUT-7 -->



        <!-- PROMOTIONS-7
		============================================= -->
		<section id="promo-13" class="about-section">
			<div class="container">
                <div class="mb-60">
					<div class="row">
						<div class="col-md-12">
                            <?php
								echo imageRender($image_index_data, 'promo');
							?>
						</div>
					</div>
				</div>
			</div> <!-- End container -->
		</section> <!-- END ABOUT-7 -->




		<!-- ABOUT-3
			============================================= -->
		<section id="about-3" class="bg-yellow wide-60 about-section division">
			<div class="container">
				<div class="row d-flex align-items-center">


					<!-- ABOUT IMAGE -->
					<div class="col-md-5 col-lg-6">
						<div class="about-3-img text-center mb-40">

							<?php
							echo imageRender($image_index_data, 'pizza');
							?>

						</div>
					</div>


					<!-- ABOUT TEXT -->
					<div class="col-md-7 col-lg-6 about-3-align">
						<div class="about-3-txt mb-40 coffee-color">

							<!-- Title -->
							<h2 class="h2-sm coffee-color">Wood-fired perfection, straight from our hearts to your plate</h2>

							<!-- Text -->
							<p class="p-md grey-color">Exquisite range of italian thin crust pizzas with a twist of Sri Lankan flavors straight out of our wood fired oven served with delightful lasagnas, pasta, salads and vast range of beverages to choose from to be dine-in in the most friendliest family like atmosphere with the best views of heritage Kandy city.
							</p>

							<!-- Icons List -->
							<div class="abox-2-wrapper ico-70">
								<div class="row text-center">

									<!-- ABOUT BOX #1 -->
									<div class="col-sm-3">
										<div class="abox-2">

											<!-- Icon -->
											<div class="abox-2-ico"><span class="flaticon-pizza-slice"></span></div>

											<!-- Text -->
											<h6 class="h6-lg">Pizza</h6>

										</div>
									</div>

									<!-- ABOUT BOX #2 -->
									<div class="col-sm-3">
										<div class="abox-2">

											<!-- Icon -->
											<div class="abox-2-ico"><span><img src="images/lasagna-1.png" alt="lasagna" style="width:70px;"></span></div>

											<!-- Text -->
											<h6 class="h6-lg">Lasagna</h6>

										</div>
									</div>

									<!-- ABOUT BOX #3 -->
									<div class="col-sm-3">
										<div class="abox-2">

											<!-- Icon -->
											<div class="abox-2-ico"><span class="flaticon-beer-3"></span></div>

											<!-- Text -->
											<h6 class="h6-lg">Beverages</h6>

										</div>
									</div>

									<!-- ABOUT BOX #4 -->
									<div class="col-sm-3">
										<div class="abox-2">

											<!-- Icon -->
											<div class="abox-2-ico"><span class="flaticon-dessert"></span></div>

											<!-- Text -->
											<h6 class="h6-lg">Desserts</h6>

										</div>
									</div>

								</div>
							</div> <!-- End Icons List -->

						</div>
					</div> <!-- END ABOUT TEXT -->


				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END ABOUT-3 -->







		<!-- PROMO-1
			============================================= -->
		<section id="promo-1" class="promo-section division">
			<div class="container-fluid">
				<div class="row d-flex align-items-center">


					<!-- PROMO BOX-1 -->
					<div class="col-md-4 col-lg-3">
						<div id="pb-1-1" class="pbox-1 bg-fixed" style="background-image: url(images/menu_page/<?php echo $image_menu_data[0]['name'] ?>) ">
							<div class="pbox-1-txt white-color">


							</div>
						</div>
					</div>


					<!-- PROMO BOX-2 -->
					<div class="col-md-4 col-lg-6">
						<div id="pb-1-2" class="pbox-1 bg-fixed" style="background-image: url(images/menu_page/<?php echo $image_menu_data[1]['name'] ?>) ">
							<div class="pbox-1-txt white-color">

								<h3 class="h3-sm">Check Menu</h3>
								<a href="menu.php" class="btn btn-red tra-white-hover">Menu</a>

							</div>
						</div>
					</div>


					<!-- PROMO BOX-3 -->
					<div class="col-md-4 col-lg-3">
						<div id="pb-1-3" class="pbox-1 bg-fixed" style="background-image: url(images/menu_page/<?php echo $image_menu_data[2]['name'] ?>) ">
							<div class="pbox-1-txt white-color">


							</div>
						</div>
					</div>


				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END PROMO-1 -->




		<!-- PROMO-5
			============================================= -->
		<section id="promo-5" class="wide-100 promo-section division">
			<div class="container">


				<!-- SECTION TITLE -->
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title mb-60 text-center">

							<!-- Title 	-->
							<h2 class="h2-xl red-color">LOVE COMES IN DIFFERENT SIZES</h2>

							<!-- Text -->
							<p class="p-xl">Satisfy your pizza craving with delightful toppings in different sizes and different halves.
							</p>

						</div>
					</div>
				</div>


				<div class="row d-flex align-items-center">


					<!-- PROMO BOX-1 -->
					<div class="col-lg-6">
						<a>
							<div id="pb-5-1" class="pbox-5 bg-lightgrey">
								<div class="pbox-5-txt">

									<!-- Title -->
									<h4 class="h4-xs coffee-color">XL Pizza</h4>

									<!-- Item Code -->
									<span class="item-code">18 Inches Diameter</span>

									<!-- Image -->
									<div class="pbox-5-img text-center mt-25 rel">

										<!-- Image -->
										<img class="img-fluid" src="images/index/Sizes_XL.png" alt="promo-image" loading="lazy">

									</div>

								</div>
							</div>
						</a>
					</div> <!-- END PROMO BOX-1 -->


					<!-- PROMO BOX-2 -->
					<div class="col-sm-6 col-lg-3">
						<a>
							<div id="pb-5-2" class="pbox-5">
								<div class="pbox-5-txt">

									<!-- Title -->
									<h4 class="h4-xs coffee-color">Large Pizza</h4>

									<!-- Item Code -->
									<span class="item-code">13 Inches Diameter</span>

									<!-- Image -->
									<div class="pbox-5-img text-center mt-25">
										<img class="img-fluid" src="images/index/Sizes_L.png" alt="promo-image" loading="lazy">
									</div>

								</div>
							</div>
						</a>
					</div> <!-- END PROMO BOX-2 -->


					<!-- PROMO BOX-3 -->
					<div class="col-sm-6 col-lg-3">
						<a>
							<div id="pb-5-3" class="pbox-5">
								<div class="pbox-5-txt">

									<!-- Title -->
									<h4 class="h4-xs coffee-color">Medium Pizza</h4>

									<!-- Item Code -->
									<span class="item-code">9 Inches Diameter</span>

									<!-- Image -->
									<div class="pbox-5-img text-center mt-25">
										<img class="img-fluid" src="images/index/Sizes_M.png" alt="promo-image" loading="lazy">
									</div>

								</div>
							</div>
						</a>
					</div> <!-- END PROMO BOX-3 -->


				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END PROMO-5 -->




		<!-- BANNER-3
			============================================= -->
		<section id="banner-3" class="bg-yellow banner-section division">
			<div class="container">
				<div class="row d-flex align-items-center">


					<!-- BANNER TEXT -->
					<div class="col-md-7 col-lg-6">
						<div class="banner-3-txt coffee-color">

							<!-- Title  -->
							<h4 class="h4-xl">get your pizza delivered to your doorstep</h4>
							<h2>Order Now</h2>

							<!-- Text -->
							<p class="p-md">We are now available for deliver in Kandy. Order via,
							</p>

							<!-- Store Badges -->
							<div class="stores-badge">

								<!-- PickMe foods -->
								<a href="#store" class="store" style="margin-left:10px;">
									<img class="pickme" src="images/delivery_page/pickme-foods.png" alt="pickme-foods-logo" loading="lazy">
								</a>

								<!-- Uber Eats -->
								<a href="#store" class="store" style="margin-left: 10px;">
									<img class="uber" src="images/delivery_page/uber-eats.png" alt="uber-eats-logo" loading="lazy">
								</a>


							</div>

						</div>
					</div>


					<!-- BANNER IMAGE -->
					<div class="col-md-5 col-lg-6">
						<div class="banner-3-img">
							<img class="img-fluid del-align" src="images/index/Delivery_image.png" alt="banner-image">
						</div>
					</div>


				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END BANNER-3 -->




		<!-- BLOG-1
			============================================= -->
		<section id="blog-1" class="wide-60 blog-section division">
			<div class="container">


				<!-- SECTION TITLE -->
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title mb-60 text-center">

							<!-- Title 	-->
							<h2 class="h2-xl red-color">Best views and food</h2>

							<!-- Text -->
							<p class="p-xl">Enjoy the delightful pizza right off from our wood fired oven surrounded by the mesmerising views of Kandy all around you.
							</p>

						</div>
					</div>
				</div>


				<!-- BLOG POSTS HOLDER -->
				<div class="row">


					<!-- BLOG POST #1 -->
					<div class="col-md-6 col-lg-4">
						<div class="blog-post">

							<!-- BLOG POST IMAGE -->
							<div class="blog-post-img">
								<div class="hover-overlay">
									<img class="img-fluid" src="images/views_and_foods/<?php echo $image_bestview_data[0]['name'] ?>" alt="view-image">
								</div>
							</div>



						</div>
					</div> <!-- END  BLOG POST #1 -->


					<!-- BLOG POST #2 -->
					<div class="col-md-6 col-lg-4">
						<div class="blog-post">

							<!-- BLOG POST IMAGE -->
							<div class="blog-post-img">
								<div class="hover-overlay">
									<img class="img-fluid" src="images/views_and_foods/<?php echo $image_bestview_data[1]['name'] ?>" alt="view-image" loading="lazy">
								</div>
							</div>



						</div>
					</div> <!-- END  BLOG POST #2 -->


					<!-- BLOG POST #3 -->
					<div class="col-md-6 col-lg-4">
						<div class="blog-post">

							<!-- BLOG POST IMAGE -->
							<div class="blog-post-img">
								<div class="hover-overlay">
									<img class="img-fluid" src="images/views_and_foods/<?php echo $image_bestview_data[2]['name'] ?>" alt="blog-post-image" loading="lazy">
								</div>
							</div>



						</div>
					</div> <!-- END  BLOG POST #3 -->


				</div> <!-- END BLOG POSTS HOLDER -->


			</div> <!-- End container -->
		</section> <!-- END BLOG-1 -->




		<!-- TESTIMONIALS-1
			============================================= -->
		<div id="reviews-1" class="bg-image bg-scroll reviews-section division">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 testimonials ">


						<!-- TRANSPARENT QUOTE ICON -->
						<div class="quote-icon"></div>


						<!-- TESTIMONIALS CONTENT -->
						<div class="flexslider">
							<ul class="slides text-center">


								<!-- TESTIMONIAL-1 -->
								<li class="review-1">
									<div class="review-1-txt">

										<!-- Testimonial Author Avatar -->
										<img src="images/index/review-author-1.png" alt="testimonial-avatar" loading="lazy">

										<!-- Text -->
										<p>" Vito pizza is above Kandy City View in Kandy, Sri Lanka. It is run and managed by a few positive souls who maintain an amazing environment and service. They serve freshly made pizzas and customize for you as needed. In our 12 days journey and being jain vegetarian, we only get the confidence to eat pizza at this place and it meets our expectation. It is on the top floor and there are beautiful paintings and art along the way. :)
										</p>
										<p> Vegetarian options: Has a vegetarian options as well.
										</p>
										<p>
											Dietary restrictions: Helped us adjust our pizza to meet the dietary restriction "
										</p>

										<!-- Rating -->
										<div class="review-rating">
											<div class="stars-rating">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>

										<!-- Testimonial Author -->
										<p class="testimonial-autor">by Disha Jain</p>

									</div>
								</li>


								<!-- TESTIMONIAL-2 -->
								<li class="review-1">
									<div class="review-1-txt">

										<!-- Testimonial Author Avatar -->
										<img src="images/index/review-author-2.png" alt="testimonial-avatar" loading="lazy">

										<!-- Text -->
										<p>" This hidden gem boasts an extensive menu with a wide variety of delectable pizzas at reasonable prices.
											The fast service ensures a pleasant dining experience. While the parking area may be small, the breathtaking view and perfect evening vibe more than compensate.
											Highly recommended for pizza lovers looking for a memorable meal "
										</p>

										<!-- Rating -->
										<div class="review-rating">
											<div class="stars-rating">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>

										<!-- Testimonial Author -->
										<p class="testimonial-autor">by Kanishka M</p>

									</div>

								</li>


								<!-- TESTIMONIAL-3 -->
								<li class="review-1">
									<div class="review-1-txt">

										<!-- Testimonial Author Avatar -->
										<img src="images/index/review-author-3.png" alt="testimonial-avatar" loading="lazy">

										<!-- Text -->
										<p>
											" Arrived at 8:20pm and waited for about 30min for a table. Pizza was excellent ( we had chicken pesto and spicy beef, both highly recommended).
											Cocktails were nice but could be stronger. Staff Chanaka always served with a smile and spent time to check in with us even though the restaurant was super busy.
											One of the must-gos in Kandy ! "
										</p>

										<!-- Rating -->
										<div class="review-rating">
											<div class="stars-rating">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>

										<!-- Testimonial Author -->
										<p class="testimonial-autor">by Jean Y</p>

									</div>

								</li>


								<!-- TESTIMONIAL-4 -->
								<li class="review-1">
									<div class="review-1-txt">

										<!-- Testimonial Author Avatar -->
										<img src="images/index/review-author-4.png" alt="testimonial-avatar" loading="lazy">

										<!-- Text -->
										<p>" Tried four types of pizzas and all were delicious. The chocolate milkshake was also a hit.
											The service of the person who served our table was exceptional.
											The Kandy Lake can be viewed from the top floor while enjoying a cool breeze.
											Highly recommended "
										</p>

										<!-- Rating -->
										<div class="review-rating">
											<div class="stars-rating">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>

										<!-- Testimonial Author -->
										<p class="testimonial-autor">by Piyal Perera</p>

									</div>

								</li>


								<!-- TESTIMONIAL #5 -->
								<li class="review-1">
									<div class="review-1-txt">

										<!-- Testimonial Author Avatar -->
										<img src="images/index/review-author-5.png" alt="testimonial-avatar" loading="lazy">

										<!-- Text -->
										<p>" True Italian Pizza spot in Kandy. We ordered an 18" pizza half of one flavor and other half another flavor.
											It was very tasty "
										</p>

										<!-- Rating -->
										<div class="review-rating">
											<div class="stars-rating">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>

										<!-- Testimonial Author -->
										<p class="testimonial-autor">by Kumara D. Samaranayake</p>

									</div>

								</li>

							</ul>
						</div>


					</div>
				</div> <!-- End row -->
			</div> <!-- End container -->
		</div> <!-- END TESTIMONIALS-1 -->


		<!-- CONTACTS-3
			============================================= -->
			<section id="contacts-3" class="bg-fixed wide-60 contacts-section division">
			<div class="container">


				<!-- SECTION TITLE -->
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title mb-60 text-center">

							<!-- Title 	-->
							<h2 class="h2-xl red-color">This Month Giveaway Winners</h2>
							<h4 class="p-xl coffee-color">Of XL Pizza</h4>


						</div>
					</div>
				</div>


				<div class="row align-center">


					<!-- GIVEAWAY WINNER 1 -->
					<div class="col-md-6 col-lg-4">
						<div class="cbox-3 text-center">

							<!-- Image -->
							<div class="hover-overlay">
								<img class="img-fluid give-img" src="images/giveaway_page/<?php echo $image_giveaway_data[0]['name'] ?>" alt="giveaway-winner" />
							</div>

						</div>
					</div>

					<!-- GIVEAWAY WINNER 2 -->
					<div class="col-md-6 col-lg-4">
						<div class="cbox-3 text-center">

							<!-- Image -->
							<div class="hover-overlay">
								<img class="img-fluid give-img" src="images/giveaway_page/<?php echo $image_giveaway_data[1]['name'] ?>" alt="giveaway-winner" />
							</div>

						</div>
					</div>

				</div> <!-- End row -->


			</div> <!-- End container -->
		</section> <!-- END CONTACTS-3 -->


		<!-- PROMO-12
			============================================= -->
		<section id="promo-12" class="promo-section">
			<div class="bg-scroll bg-inner bg-02 division">
				<div class="container white-color">
					<div class="row d-flex align-items-center">


						<!-- PROMO TEXT -->
						<div class="col-lg-5">
							<div class="promo-12-txt">

								<!-- RATINGS -->
								<div class="container">
									<div class="social-ratings row row-cols-2  g-2 g-lg-3">

										<div class="col p-3"><i class="fab fa-facebook" style="color: #ffffff; font-size: 50px;"></i></div>
										<div class="col p-3 yellow-color">
											<h3 class="h3-sm" style="text-align: left">4.7/5</h3>
										</div>

										<div class="col p-3"><img src="images/index/uber-eats.png" alt="uber eats logo" style="width:50px; height: 50px; border: 3px solid #fff; border-radius: 50%;"></div>
										<div class="col p-3 yellow-color">
											<h3 class="h3-sm" style="text-align: left">4.4/5</h3>
										</div>

										<div class="col p-3"><i class="fab fa-google" style="color: #ffffff; font-size: 50px;"></i></div>
										<div class="col p-3 yellow-color">
											<h3 class="h3-sm" style="text-align: left">4.6/5</h3>
										</div>

										<div class="col p-3"><img src="images/index/trip-advisor.png" alt="trip advisor" style="width:50px; height: 50px; border: 3px solid #fff; border-radius: 50%;"></div>
										<div class="col p-3 yellow-color">
											<h3 class="h3-sm" style="text-align: left">#2 out of 230
Restaurants in Kandy</h3>
										</div>


									</div>
								</div>

							</div>
						</div> <!-- END PROMO TEXT -->


						<!-- PROMO IMAGE -->
						<div class="col-lg-7">
							<div class="promo-12-img text-center">

								<!-- Image -->
								<img class="img-fluid" src="images/index/Ratings_image.png" alt="promo-image" loading="lazy">

							</div>
						</div>


					</div> <!-- End row -->
				</div> <!-- End container -->
			</div> <!-- End Inner Background -->
		</section> <!-- END PROMO-12 -->



		<!-- GALLERY-2
			============================================= -->
		<section id="gallery-2" class="gallery-section division">
			<div class="container">


				<!-- SECTION TITLE -->
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title mb-60 text-center">

							<!-- Title 	-->
							<h2 class="h2-xl red-color">Gallery</h2>


							<ul class="nav nav-pills nav-justified">
								<li class="nav-item">
									<a class="nav-link">
										<h5 class="h4-xs img-title coffee-color">Food Images</h5>
									</a>

									<!-- FOOD IMAGES HOLDER -->
									<div class="row" style="margin: 30px 10px 0 0;">


										<!-- IMAGE #1 -->
										<div class="col-lg-6" style="margin-top: 20px;">
											<div class="gallery-img">
												<a href="images/gallery/<?php echo $image_gallery_data[0]['name'] ?>" class="image-link">
													<div class="hover-overlay">
														<img class="img-fluid" src="images/gallery/<?php echo $image_gallery_data[0]['name'] ?>" alt="gallery-image" loading="lazy">
														<div class="item-overlay"></div>
													</div>
												</a>
											</div>
										</div>


										<!-- IMAGE #2 -->
										<div class="col-lg-6" style="margin-top: 20px;">
											<div class="gallery-img">
												<a href="images/gallery/<?php echo $image_gallery_data[1]['name'] ?>" class="image-link">
													<div class="hover-overlay">
														<img class="img-fluid" src="images/gallery/<?php echo $image_gallery_data[1]['name'] ?>" alt="gallery-image" loading="lazy">
														<div class="item-overlay"></div>
													</div>
												</a>
											</div>
										</div>
									</div>


									<div class="row" style="margin: 0 10px 0 0;">


										<!-- IMAGE #3 -->
										<div class="col-lg-6" style="margin-top: 20px;">
											<div class="gallery-img">
												<a href="images/gallery/<?php echo $image_gallery_data[2]['name'] ?>" class="image-link">
													<div class="hover-overlay">
														<img class="img-fluid" src="images/gallery/<?php echo $image_gallery_data[2]['name'] ?>" alt="gallery-image" loading="lazy">
														<div class="item-overlay"></div>
													</div>
												</a>
											</div>
										</div>


										<!-- IMAGE #4 -->
										<div class="col-lg-6" style="margin-top: 20px;">
											<div class="gallery-img">
												<a href="images/gallery/<?php echo $image_gallery_data[3]['name'] ?>" class="image-link">
													<div class="hover-overlay">
														<img class="img-fluid" src="images/gallery/<?php echo $image_gallery_data[3]['name'] ?>" alt="gallery-image" loading="lazy">
														<div class="item-overlay"></div>
													</div>
												</a>
											</div>
										</div>


									</div> <!-- END FOOD IMAGES HOLDER -->

								</li>
								<li class="nav-item">
									<a class="nav-link">
										<h5 class="h4-xs coffee-color">Customer Snaps</h5>
									</a>

									<!-- CUSTOMER SNAPS IMAGES HOLDER -->
									<div class="row" style="margin: 30px 0 0 10px;">

										<!-- IMAGE #1 -->
										<div class="col-lg-6" style="margin-top: 20px;">
											<div class="gallery-img">
												<a href="images/customer_snaps/<?php echo $image_cussnap_data[0]['name'] ?>" class="image-link">
													<div class="hover-overlay">
														<img class="img-fluid" src="images/customer_snaps/<?php echo $image_cussnap_data[0]['name'] ?>" alt="gallery-image" loading="lazy">
														<div class="item-overlay"></div>



													</div>
												</a>
											</div>
										</div>


										<!-- IMAGE #2 -->
										<div class="col-lg-6" style="margin-top: 20px;">
											<div class="gallery-img">
												<a href="images/customer_snaps/<?php echo $image_cussnap_data[1]['name'] ?>" class="image-link">
													<div class="hover-overlay">
														<img class="img-fluid" src="images/customer_snaps/<?php echo $image_cussnap_data[1]['name'] ?>" alt="gallery-image" loading="lazy">
														<div class="item-overlay"></div>



													</div>
												</a>
											</div>
										</div>
									</div>


									<div class="row" style="margin: 0 0 0 10px;">

										<!-- IMAGE #3 -->
										<div class="col-lg-6" style="margin-top: 20px;">
											<div class="gallery-img">
												<a href="images/customer_snaps/<?php echo $image_cussnap_data[2]['name'] ?>" class="image-link">
													<div class="hover-overlay">
														<img class="img-fluid" src="images/customer_snaps/<?php echo $image_cussnap_data[2]['name'] ?>" alt="gallery-image" loading="lazy">
														<div class="item-overlay"></div>
													</div>
												</a>
											</div>
										</div>


										<!-- IMAGE #4 -->
										<div class="col-lg-6" style="margin-top: 20px;">
											<div class="gallery-img">
												<a href="images/customer_snaps/<?php echo $image_cussnap_data[3]['name'] ?>" class="image-link">
													<div class="hover-overlay">
														<img class="img-fluid" src="images/customer_snaps/<?php echo $image_cussnap_data[3]['name'] ?>" alt="gallery-image" loading="lazy">
														<div class="item-overlay"></div>
													</div>
												</a>
											</div>
										</div>
									</div><!-- END CUSTOMER SNAPS IMAGES HOLDER -->
								</li>
							</ul>

							<!-- ========================================================================================= -->
							<a href="gallery.php" class="gallery-btn btn btn-lg btn-red tra-red-hover" style="margin: 30px 0 0 10px;">Gallery</a>
						</div>
					</div>
				</div>
			</div> <!-- End container -->
		</section> <!-- END GALLERY-2 -->




		<!-- CONTACTS-3
			============================================= -->
		<section id="contacts-3" class="bg-fixed wide-60 contacts-section division">
			<div class="container">


				<!-- SECTION TITLE -->
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title mb-60 text-center">

							<!-- Title 	-->
							<h2 class="h2-xl red-color">Our Locations</h2>



						</div>
					</div>
				</div>


				<div class="row align-center">


					<!-- LOCATION-2 -->
					<div class="col-md-6 col-lg-4">
						<div class="cbox-3 text-center">

							<!-- Image -->
							<div class="hover-overlay">
								<img class="img-fluid" src="images/index/Location-01.jpg" alt="location-image" />
							</div>

							<!-- Text -->
							<div class="cbox-3-txt">

								<!-- Location -->
								<h5 class="h5-xl red-color">Kandy Town</h5>

								<!-- Phone -->
								<h6 class="h6-xl coffee-color">Phone: <span><a href="tel:+94 77 454 9000">+94 77 454 9000</a></span></h6>

								<!-- Address -->
								<h6 class="h6-lg coffee-color mt-20">Address</h6>
								<p class="grey-color">56, Saranankara Rd,</p>
								<p class="grey-color">Kandy 20000</p>

								<!-- Working Hours -->
								<p class="grey-color">Daily 12.00PM - 9.30PM</p>

							</div>

						</div>
					</div>

				</div> <!-- End row -->


			</div> <!-- End container -->
		</section> <!-- END CONTACTS-3 -->




		<!-- BANNER-4
			============================================= -->
		<section id="banner-4" class="bg-fixed wide-100 banner-section division">
			<div class="container">
				<div class="row">


					<!-- BANNER TEXT -->
					<div class="col-lg-10 col-xl-8 ms-auto me-auto">
						<div class="banner-4-txt text-center">

							<!-- Title  -->
							<h4 class="h4-xl">Call Us</h4>

							<!-- Title  -->
							<h2>To get your takeaway ready</h2>



							<!-- Call Button -->
							<a href="tel:+94 77 454 9000" class="btn btn-lg btn-red tra-red-hover">Call: +94 77 454 9000</a>

						</div>
					</div>


				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END BANNER-4 -->




		<!-- FOOTER-3
			============================================= -->
		<footer id="footer-3" class="footer division">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">


						<!-- FOOTER LOGO -->
						<div class="footer-logo"><img src="images/index/vito-logo.png" alt="footer-logo"></div>

						<!-- FOOTER SOCIAL LINKS -->
						<div class="footer-socials-links">

							<!-- List -->
							<ul class="foo-socials text-center clearfix">
								<li><a href="https://www.facebook.com/vitowoodfiredpizza?mibextid=LQQJ4d" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="https://instagram.com/vitowoodfiredpizza?igshid=MzRlODBiNWFlZA==" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>
								<li><a href="https://www.threads.net/@vitowoodfiredpizza?igshid=MzRlODBiNWFlZA=="><img src="images/threads-logo.png" alt="meta thread icon" style="display: block; width: 40px; height: 20px;"></a></li>
								<li><a href=" https://www.tiktok.com/@vitowoodfiredpizza?_t=8eHVyBDSQAU&_r=1"><img src="images/tiktok.png" alt="tiktok icon" style="display: block; width: 20px; height: 20px;"></a></li>

								<!--
									<li><a href="#" class="ico-dribbble"><i class="fab fa-dribbble"></i></a></li>		
									<li><a href="#" class="ico-behance"><i class="fab fa-behance"></i></a></li>										
									<li><a href="#" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
									<li><a href="#" class="ico-tumblr"><i class="fab fa-tumblr"></i></a></li>	
									<li><a href="#" class="ico-google-plus"><i class="fab fa-google-plus-g"></i></a></li>							
									<li><a href="#" class="ico-vk"><i class="fab fa-vk"></i></a></li>-->
							</ul>

						</div>


						<!-- FOOTER LINKS -->
						<div class="footer-links">
							<ul class="bottom-footer-list clearfix">
								<li>
									<p><a href="./about.php">About Us</a></p>
								</li>
								<li>
									<p><a href="./gallery.php">Gallery</a></p>
								</li>
								<li>
									<p><a href="./menu.php">Menu</a></p>
								</li>
								<li>
									<p class="last-li"><a href="./contacts.php">Contact Us</a></p>
								</li>
							</ul>
						</div>


						<!-- FOOTER COPYRIGHT -->
						<div class="footer-copyright">
							<p>&copy; 2023 Vito. All Rights Reserved</p>
							<p>Powered By Orise (Pvt) Ltd.</p>
						</div>


					</div>
				</div> <!-- End row -->
			</div> <!-- End container -->
		</footer> <!-- END FOOTER-3 -->




	</div> <!-- END PAGE CONTENT -->

	<?php

	function imageRender($image_data, $path)
	{

		$image = '';

		for ($i = 0; $i < count($image_data); $i++) {

			$image_name = $image_data[$i]['name'];
			$display_location = $image_data[$i]['display_location'];
            $version =  $image_data[$i]['version'];

			if ($path == 'header' && $display_location == 'header') {
				$image .= '<img class="img-fluid" src="images/index_page/' . $image_name . '?v='. $version.'" alt="hero-image" loading="lazy">';
			} else if ($path == 'pizza' && $display_location == 'pizza') {
				$image .= '<img class="img-fluid" src="images/index_page/' . $image_name . '?v='. $version.'" alt="about-image" loading="lazy">';
			} else if($path == 'promo' && $display_location == 'promo'){
                $image .= '<img class="img-fluid img-align" src="images/index_page/' . $image_name . '?v='. $version.'" alt="about-image" loading="lazy">';
            }

		}

		return $image;
	}



	?>
    
	<!-- EXTERNAL SCRIPTS
		============================================= -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.easing.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/jquery.scrollto.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/contact-form.js"></script>
	<script src="js/comment-form.js"></script>
	<script src="js/booking-form.js"></script>
	<script src="js/jquery.datetimepicker.full.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/custom.js"></script>
	<script defer src="js/changer.js"></script>
</body>

</html>