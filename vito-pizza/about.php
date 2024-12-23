<?php

require_once("admin/db_con.php");

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
		$image_bestview_data [] = [
			'image_id' => $row['image_id'],
			'name' => $row['name'],
			'display_location' => $row['display_location'],
            'version'=> strtotime($row['time_stamp']),
		];
	}
} else {
	echo "No records found.";
}


?>




<!DOCTYPE html>

<html lang="en">

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
	$time = "1.0";
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


	<!-- HEADER-3
		============================================= -->
	<header id="header-3" class="header navik-header header-transparent header-shadow">
		<div class="container">


			<!-- NAVIGATION MENU -->
			<div class="navik-header-container">


				<!-- CALL BUTTON -->
				<div class="callusbtn text-right"><a href="tel:+94 77 454 9000"><i class="fas fa-phone"></i></a></div>


				<!-- LOGO IMAGE -->
				<div class="logo" data-mobile-logo="images/index/vito-logo.png" data-sticky-logo="images/index/vito-logo.png">
					<a href="index.php"><img src="images/index/vito-logo.png" alt="header-logo" style=" height: 100px;"></a>
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

						<!-- HOME -->
						<li>
							<a href="index.php">Home</a>
						</li>

						<!-- GALLERY -->
						<li>
							<a href="gallery.php">Gallery</a>
						</li>

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
	</header> <!-- END HEADER-3 -->




	<!-- PAGE CONTENT
		============================================= -->
	<div id="page" class="page">




		<!-- PAGE HERO
			============================================= -->
		<div id="about-page" class="page-hero-section division">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="hero-txt text-center white-color">

							<!-- Breadcrumb -->
							<div id="breadcrumb">
								<div class="row">
									<div class="col">
										<div class="breadcrumb-nav">
											<nav aria-label="breadcrumb">
												<ol class="breadcrumb">
													<li class="breadcrumb-item"><a href="index.php">Home</a></li>
													<li class="breadcrumb-item active" aria-current="page">About Us</li>
												</ol>
											</nav>
										</div>
									</div>
								</div>
							</div>

							<!-- Title -->
							<h2 class="h2-xl">About Vito</h2>

						</div>
					</div>
				</div> <!-- End row -->
			</div> <!-- End container -->
		</div> <!-- END PAGE HERO -->




		<!-- ABOUT-3
			============================================= -->
		<section id="about-3" class="wide-60 about-section division">
			<div class="container">
				<div class="row d-flex align-items-center">


					<!-- ABOUT IMAGE -->
					<div class="col-md-5 col-lg-6 res-width">
						<div class="about-3-img text-center mb-40">
							<img class="img-fluid" src="images/about-us/About_us_photo.png" alt="about-image">
						</div>
					</div>


					<!-- ABOUT TEXT -->
					<div class="col-md-7 col-lg-6 txt-width">
						<div class="about-3-txt mb-40">

							<!-- Title -->
							<h2 class="h2-sm">Wood-fired perfection, straight from our hearts to your plate.</h2>

							<!-- Text -->
							<p class="p-md">We started our journey by creating the first wood fired oven pizza place for Kandy in 2017 with 5 employees in our restaurant serving the best dishes for our customers. Our team has been giving their best even under the pandemic period and crysis period by delivering and serving the best wood fired pizzas right into our customer’s doorsteps.
								Our unique taste of italian pizza fused with Sri Lankan flavors served with many other delicacies like lasagna, salads and many varieties of beverages under the utmost friendliest atmosphere of our staff and restaurant with the best view of prestigious Kandy city has paved the way to become one of the best and most recognized restaurants in the country.
								The continuous loyalty, love and appreciations given by our everyday growing customer base has been developing us into a much bigger pizzeria every day. Currently we are serving at our own restaurant place which we moved in October 2022 at Saranankara Road, Kandy which is being fueled by a 11 member energetic staff who are waiting to give the best, friendliest and most efficient service to all of our customers.

							</p>



						</div>
					</div> <!-- END ABOUT TEXT -->


				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END ABOUT-3 -->




		<!-- ABOUT-1
			============================================= -->
		<section id="about-1" class="bg-fixed wide-100 about-section division">
			<div class="container">
				<div class="row">


					<!-- ABOUT TEXT -->
					<div class="col-xl-10 ms-auto me-auto">
						<div class="about-1-txt text-center">

							<!-- Title -->
							<h2><span class="yellow-color">Pizza…</span> what else?</h2>

							<!-- Text -->
							<p class="p-xl grey-color">We are serving various food items starting with our main Wood fired oven pizza along with authentic italian diving lasagna
								with a Sri Lankan twist and many beverages that you choose to go along with them and exquisite desserts to conclude your dine-in experience.
							</p>

							<!-- Icons List -->
							<div class="abox-1-wrapper ico-75">
								<div class="row">

									<!-- ABOUT BOX #1 -->
									<div class="col-sm-4 col-md-2">
										<div class="abox-1 mb-40">

											<!-- Icon -->
											<div class="abox-1-ico grey-color"><span><img src="images/lasagna.png" alt="lasagna" style="width: 77px;"></span></div>

											<!-- Text -->
											<h6 class="h6-xl">Lasagna
											</h6>
										</div>
									</div>

									<!-- ABOUT BOX #2 -->
									<div class="col-sm-4 col-md-2">
										<div class="abox-1 mb-40">

											<!-- Icon -->
											<div class="abox-1-ico grey-color"><span><img src="images/calzone.png" alt="calzone" style="width: 77px;"></span></div>

											<!-- Text -->
											<h6 class="h6-xl">Calzone</h6>

										</div>
									</div>

									<!-- ABOUT BOX #3 -->
									<div class="col-sm-4 col-md-2">
										<div class="abox-1 mb-40">

											<!-- Icon -->
											<div class="abox-1-ico grey-color"><span class="flaticon-salad"></span></div>

											<!-- Text -->
											<h6 class="h6-xl">Salads</h6>

										</div>
									</div>

									<!-- ABOUT BOX #4 -->
									<div class="col-sm-4 col-md-2">
										<div class="abox-1 mb-40">

											<!-- Icon -->
											<div class="abox-1-ico grey-color"><span class="flaticon-drink-2"></span></div>

											<!-- Text -->
											<h6 class="h6-xl">Milshakes</h6>

										</div>
									</div>

									<!-- ABOUT BOX #5 -->
									<div class="col-sm-4 col-md-2">
										<div class="abox-1 mb-40">

											<!-- Icon -->
											<div class="abox-1-ico grey-color"><span class="flaticon-cocktail"></span></div>

											<!-- Text -->
											<h6 class="h6-xl">Cocktails</h6>

										</div>
									</div>

									<!-- ABOUT BOX #6 -->
									<div class="col-sm-4 col-md-2">
										<div class="abox-1 mb-40">

											<!-- Icon -->
											<div class="abox-1-ico grey-color"><span class="flaticon-dessert"></span></div>

											<!-- Text -->
											<h6 class="h6-xl">Desserts</h6>

										</div>
									</div>

								</div>
							</div> <!-- End Icons List -->

							<!-- Button -->
							<a href="menu.php" class="btn btn-md btn-red tra-red-hover">Explore Full Menu</a>

						</div>
					</div> <!-- END ABOUT TEXT -->


				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END ABOUT-1 -->




		<!-- ABOUT-4
			============================================= -->
		<section id="about-4" class="wide-60 about-section division">
			<div class="container">
				<div class="row">


					<!-- ABOUT TEXT -->
					<div class="col-md-7 col-lg-6 txt-width">
						<div class="about-4-txt mb-40">

							<!-- <h1>DISCOVER THE NEW TASTE OF THE BURGER</h1> -->
							<!-- Text -->
							<h4 class="h4-xs coffee-color item-align">XL Pizza</h4>
							<p class="p-md grey-color item-align">We have introduced a XL pizza for the first time in Sri Lanka
								which has a diameter of 18” which is served with various range of toppings that you can select from.
							</p>

							<!-- Image -->
							<img class="img-fluid" src="images/about-us/XL_Pizza.jpg" alt="about-image">

						</div>
					</div> <!-- END ABOUT TEXT -->


					<!-- ABOUT IMAGE -->
					<div class="col-md-5 col-lg-6 txt-width">
						<div class="about-4-img mb-40">

							<!-- Image -->
							<img class="img-fluid about4-img-size" src="images/about-us/Lasagna.jpg" alt="about-image">

							<!-- Text -->
							<h4 class="h4-xs coffee-color item-align">Lasagna</h4>
							<p class="p-md grey-color item-align">The combination of Sri Lankan ingredients and Italian lasagna offers a symphony of flavors and textures with every bite,
								combining the best of both worlds. It's a fusion dish that honors the history of each cuisine while offering adventurous food lovers a completely fresh and thrilling gastronomic experience.
							</p>

						</div>
					</div>
					<!-- ABOUT TEXT -->
					<div class="col-md-7 col-lg-6 txt-width">
						<div class="about-4-txt mb-40">

							<!-- Text -->
							<h4 class="h4-xs coffee-color item-align">Calzone</h4>
							<p class="p-md grey-color item-align">Italian calzone, a folded 9 inch Pizza with Sri Lankan tastes offers a perfect fusion of two different culinary realms with each mouthwatering fold.
								In addition to presenting them to a delicious and surprising taste excursion, it allows diners to set out on a culinary journey that highlights the greatest aspects of both cuisines
							</p>

							<!-- Image -->
							<img class="img-fluid img-size" src="images/about-us/Calzone.jpg" alt="about-image">

						</div>
					</div> <!-- END ABOUT TEXT -->

					<!-- ABOUT IMAGE -->
					<div class="col-md-5 col-lg-6 txt-width">
						<div class="about-4-img mb-40">

							<!-- Image -->
							<img class="img-fluid about4-img-size" src="images/about-us/Salads.jpg" alt="about-image">

							<!-- Text -->
							<h4 class="h4-xs coffee-color item-align">Salads</h4>
							<p class="p-md grey-color item-align">A delicious blend of fresh Italian ingredients with the robust and aromatic tastes of Sri Lanka may be found in salads with a twist of Sri Lankan spices
								that include tomato, mozzarella, and pesto sauce. This unusual mix produces a colorful and alluring salad that tempts the palate.
							</p>

						</div>
					</div>

					<!-- ABOUT IMAGE -->
					<div class="col-md-7 col-lg-6 txt-width">
						<div class="about-4-txt mb-40">

							<!-- Text -->
							<h4 class="h4-xs coffee-color item-align">Pasta</h4>
							<p class="p-md grey-color item-align">Our original Italian pasta with a Sri Lankan twist offers a fascinating mix of culinary traditions. 
								Our creative dishes incorporate Sri Lanka's robust and aromatic tastes while paying homage to the time-honored Italian pasta tradition.
								A symphony of flavors that awaken the senses is created in each pasta dish by the harmonic blending of precisely cooked Italian pasta and a creative assortment of Sri Lankan spices and seasonings.
							</p>

							<!-- Image -->
							<img class="img-fluid about4-img-size" src="images/about-us/Pasta.jpg" alt="about-image">

						</div>
					</div>

					<!-- ABOUT TEXT -->
					<div class="col-md-5 col-lg-6 txt-width">
						<div class="about-4-img mb-40">

							<!-- Image -->
							<img class="img-fluid img-size img-mil" src="images/about-us/Milkshakes.jpg" alt="about-image">

							<!-- Text -->
							<h4 class="h4-xs coffee-color item-align">Milkshakes</h4>
							<p class="p-md grey-color item-align">you may enjoy milkshake perfection where each sip will transport you on a pure enjoyment journey. 
								Our milkshakes are an homage to traditional flavors with a dash of innovation, lovingly crafted with care and imagination.
								Flavored with Decadent Chocolate Delight, Velvety Vanilla Dream, Luscious Strawberry Sensation & Tropical Mango Temptation
							</p>

						</div>
					</div> <!-- END ABOUT TEXT -->


					
					<!-- ABOUT TEXT -->
					<div class="col-md-7 col-lg-6 txt-width">
						<div class="about-4-txt mb-40">

							<!-- Text -->
							<h4 class="h4-xs coffee-color item-align">Beverages</h4>
							<p class="p-md grey-color item-align">We take great satisfaction in providing a wide variety of refreshing drinks that may satisfy any palate.
								Our beverage menu guarantees a great assortment to slake your thirst and enhance your eating experience, ranging from decadent milkshakes to energizing mojitos,
								calming iced teas to traditional soft drinks like CocaCola, Sprite, RedBull and many more.
							</p>

							<!-- Image -->
							<img class="img-fluid" src="images/about-us/Beverages.jpg" alt="about-image">

						</div>
					</div> <!-- END ABOUT TEXT -->


					<!-- ABOUT IMAGE -->
					<div class="col-md-5 col-lg-6 txt-width">
						<div class="about-4-img mb-40">

							<!-- Image -->
							<img class="img-fluid about4-img-size" src="images/about-us/Cocktails.jpg" alt="about-image" style="width: 700px;">

							<!-- Text -->
							<h4 class="h4-xs coffee-color item-align">Cocktails</h4>
							<p class="p-md grey-color item-align">We pride ourselves on creating a wide variety of cocktails that satisfy a wide range of tastes and preferences.
								Our three cocktail versions are certain to tickle your taste buds and lift your spirits, whether you want fruity indulgence, prefer a dash of refinement, or are looking for a refreshing twist.
							</p>

						</div>
					</div>
					<!-- ABOUT TEXT -->
					<div class="col-md-7 col-lg-6 txt-width">
						<div class="about-4-txt mb-40">

							<!-- Text -->
							<h4 class="h4-xs coffee-color item-align">Desserts</h4>
							<p class="p-md grey-color item-align">Our dessert menu offers a delectable assortment that will leave you wanting more whether you're celebrating a special occasion or just indulging your sweet tooth.
								With our decadent ice creams and comforting handcrafted treats, you may treat yourself to a divine experience where every taste is a moment of unadulterated happiness.
								Come along with us on a delicious dessert adventure that will unquestionably be the ideal way to end any dinner.
							</p>

							<!-- Image -->
							<img class="img-fluid" src="images/about-us/Desserts.jpg" alt="about-image">

						</div>
					</div> <!-- END ABOUT TEXT -->

					<!-- ABOUT IMAGE -->
					<div class="col-md-5 col-lg-6 txt-width">
						<div class="about-4-img mb-40">

							<!-- Image -->
							<img class="img-fluid about4-img-size" src="images/about-us/Vito’S_Sauce_Trio.jpg" alt="about-image">

							<!-- Text -->
							<h4 class="h4-xs coffee-color item-align">vito’S sauce trio</h4>
							<p class="p-md grey-color item-align">Our trio of excellent homemade sauces, which have been painstakingly created to infuse your favorite foods with extraordinary flavors, 
								will enrich your dining experience. Each sauce is evidence of our dedication to the culinary arts of flavor augmentation and excellence. The elegant trio consist with, <br>
								Tomato Elegance : A celebration of the colorful, sun-kissed goodness of ripe tomatoes. <br>
								Garlic Symphony : Powerful flavor thanks to the generous amount of fresh garlic revealing a wonderful dance of garlic notes that linger in the mouth
								Nai Miris Fusion : Made with the hot Nai Miris, or bird's eye chili, gives our classic meals a blast of heat and a flavor explosion
							</p>

						</div>
					</div>





				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END ABOUT-4 -->




		<!-- PROMO-1
			============================================= -->
		<section id="promo-1" class="promo-section division">
			<div class="container-fluid">
				<div class="row d-flex align-items-center">


					<!-- PROMO BOX-1 -->
					<div class="col-md-4 col-lg-3">
						<div id="pb-1-1" class="pbox-1 bg-fixed" style="background-image: url(images/menu_page/<?php echo $image_menu_data[0]['name'] ?>?v=<?php echo $image_menu_data[0]['version'] ?>)">
							<div class="pbox-1-txt white-color">



							</div>
						</div>
					</div>


					<!-- PROMO BOX-2 -->
					<div class="col-md-4 col-lg-6">
						<div id="pb-1-2" class="pbox-1 bg-fixed" style="background-image: url(images/menu_page/<?php echo $image_menu_data[1]['name'] ?>?v=<?php echo $image_menu_data[1]['version'] ?>)">
							<div class="pbox-1-txt white-color">

								<h3 class="h3-sm">Check Menu</h3>
								<a href="menu.php" class="btn btn-red tra-white-hover">Menu</a>

							</div>
						</div>
					</div>


					<!-- PROMO BOX-3 -->
					<div class="col-md-4 col-lg-3">
						<div id="pb-1-3" class="pbox-1 bg-fixed" style="background-image: url(images/menu_page/<?php echo $image_menu_data[2]['name'] ?>?v=<?php echo $image_menu_data[2]['version'] ?>)">
							<div class="pbox-1-txt white-color">



							</div>
						</div>
					</div>


				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END PROMO-1 -->




		<!-- BLOG-1
			============================================= -->
		<section id="blog-1" class="wide-60 blog-section division">
			<div class="container">


				<!-- SECTION TITLE -->
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title mb-60 text-center">

							<!-- Title 	-->
							<h2 class="h2-xl">Best views and food</h2>

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
								<img class="img-fluid" src="images/views_and_foods/<?php echo $image_bestview_data[0]['name'] ?>?v=<?php echo $image_bestview_data[0]['version'] ?>" alt="view-image">
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
								<img class="img-fluid" src="images/views_and_foods/<?php echo $image_bestview_data[1]['name'] ?>?v=<?php echo $image_bestview_data[1]['version'] ?>" alt="view-image">
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
								<img class="img-fluid" src="images/views_and_foods/<?php echo $image_bestview_data[2]['name'] ?>?v=<?php echo $image_bestview_data[2]['version'] ?>" alt="view-image">
								</div>
							</div>



						</div>
					</div> <!-- END  BLOG POST #3 -->


				</div> <!-- END BLOG POSTS HOLDER -->


			</div> <!-- End container -->
		</section> <!-- END BLOG-1 -->









		<!-- FOOTER-4
			============================================= -->
		<footer id="footer-4" class="footer division">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">


						<!-- FOOTER LOGO -->
						<div class="footer-logo"><img src="images/index/vito-logo.png" alt="footer-logo" /></div>

						<!-- FOOTER SOCIAL LINKS -->
						<div class="footer-socials-links">

							<!-- List -->
							<ul class="foo-socials text-center clearfix">
								<li><a href="https://www.facebook.com/vitowoodfiredpizza?mibextid=LQQJ4d" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="https://instagram.com/vitowoodfiredpizza?igshid=MzRlODBiNWFlZA==" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>
								<li><a href="https://www.threads.net/@vitowoodfiredpizza?igshid=MzRlODBiNWFlZA=="><img src="images/threads-logo.png" alt="meta thread icon" style="display: block; width: 40px; height: 20px;"></a></li>
								<li><a href=" https://www.tiktok.com/@vitowoodfiredpizza?_t=8eHVyBDSQAU&_r=1"><img src="images/tiktok.png" alt="tiktok icon" style="display: block; width: 20px; height: 20px;"></a></li>

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
		</footer> <!-- END FOOTER-4 -->




	</div> <!-- END PAGE CONTENT -->




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
	<script src="js/jquery.ajaxchimp.min.js"></script>

	<!-- Custom Script -->
	<script src="js/custom.js"></script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!-- [if lt IE 9]>
			<script src="js/html5shiv.js" type="text/javascript"></script>
			<script src="js/respond.min.js" type="text/javascript"></script>
		<![endif] -->

	<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
	<!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->



	<script defer src="js/changer.js"></script>



</body>



</html>