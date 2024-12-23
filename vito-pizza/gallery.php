<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

require_once("admin/db_con.php");

$sql = "SELECT * FROM `image_gallery` ORDER BY `image_gallery`.`display_order` ASC";

$result = $conn->query($sql);

$image_gallery_data = [];

if ($result->num_rows > 0) {

	while ($row = $result->fetch_assoc()) {
		$image_gallery_data[] = [
			'id' => $row['id'],
			'image_id' => $row['image_id'],
			'name' => $row['name'],
            'version'=> strtotime($row['time_stamp']),
			// 'resolution' => $row['resolution'],
		];
	}
} else {
	echo "No records found.";
}


$sql = "SELECT * FROM `customer_snaps` ORDER BY `customer_snaps`.`display_order` ASC";

$result = $conn->query($sql);

$image_customer_data = [];

if ($result->num_rows > 0) {

	while ($row = $result->fetch_assoc()) {
		$image_customer_data[] = [
			'id' => $row['id'],
			'image_id' => $row['image_id'],
			'name' => $row['name'],
            'version'=>strtotime($row['time_stamp']),
			// 'resolution' => $row['resolution'],
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
	$time = time();
	?>
	<link href="css/style.css?v=<?php echo $time ?>" rel="stylesheet">

	<!-- RESPONSIVE CSS -->
	<link href="css/responsive.css" rel="stylesheet">

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
					<a href="index.php"><img src="images/index/vito-logo.png" alt="header-logo" style="height: 100px;"></a>
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

						<!-- ABOUT US -->
						<li>
							<a href="about.php">About Us</a>
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
		<div id="gallery-page" class="page-hero-section division gallery-hero">
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
													<li class="breadcrumb-item active" aria-current="page">Gallery</li>
												</ol>
											</nav>
										</div>
									</div>
								</div>
							</div>

							<!-- Title -->
							<h2 class="h2-xl">Images Gallery</h2>

						</div>
					</div>
				</div> <!-- End row -->
			</div> <!-- End container -->
		</div> <!-- END PAGE HERO -->



		<!-- GALLERY-2
			============================================= -->
		<section id="gallery-2" class="gallery-section division">
			<div class="container">
				<div class="row">

					<nav>
						<div class="nav nav-tabs nav-fill nav-gallery" role="tablist">
							<button class="nav-link nav-gal-3 active navactive" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true" onclick="myFunction(this)" style="border: none;">FOOD &amp VIEWS</button>
							<button class="nav-link nav-gal-3" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" onclick="myFunction(this)" style="border: none;">CUSTOMER SNAPS</button>

						</div>
					</nav>

					<div class="tab-content" id="nav-tabContent" style="display:block !important;">
						<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							<div class="row">

								<?php
								echo imageRender($image_gallery_data, 'gallery');
								?>

							</div>
						</div>

						<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							<div class="row">

								<?php
								echo imageRender($image_customer_data, 'customer_snaps');
								?>

							</div>
						</div>
					</div>



				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END GALLERY-2 -->


		<!-- FOOTER-2
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
		</footer> <!-- END FOOTER-2 -->

	</div> <!-- END PAGE CONTENT -->



	<?php

	function imageRender($image_data, $path)
	{

		$image = '';

		for ($i = 0; $i < count($image_data); $i++) {

			$image_name = $image_data[$i]['name'];
            $version = $image_data[$i]['version'];

			$image .= '<div class="col-sm-6 col-lg-3">
							<div class="gallery-img">
								<a href="images/' . $path . '/' . $image_name . '" class="image-link">
									<div class="hover-overlay">
										<img class="img-fluid" src="images/' . $path . '/' . $image_name . '?v='.$version.'" alt="gallery-image" loading="lazy"/>
										<div class="item-overlay"></div>
									</div>
								</a>
							</div>
						</div>';
		}

		return $image;
	}

	?>


	<script>
		function myFunction(clicked) {

			const activeButton = document.querySelector(".navactive");

			if (clicked.classList.contains("navactive")) {
				return;
			}

			if (activeButton) {
				activeButton.classList.remove("navactive");
			}

			clicked.classList.add("navactive");

		}
	</script>

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