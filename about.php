<!DOCTYPE html>
<html dir="ltr" lang="en"><!--<![endif]-->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Your Store</title>

	<meta name="description" content="My Store">
	<script src="js/jquery-2.1.1.min.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script src="js/bootstrap.min.js"></script>
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Marcellus&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="js/jquery.elevateZoom.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/quickview.js"></script>
	<link href="css/mahardhi-font.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/owl.carousel.min.css" rel="stylesheet">
	<link href="css/owl.theme.default.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

	<script type="text/javascript" src="js/slick.js"></script>
	<link href="css/slick.css" rel="stylesheet">

	<script src="js/mahardhi_search.js"></script>
	<style>
		:root {
			--primary-color: #222222;
			--primary-hover-color: #880015;
			--secondary-color: #ffffff;
			--secondary-light-color: #777777;
			--background-color: #faf6f3;
			--border-color: #e5e5e5
		}


	</style>
	<link href="css/stylesheet.css" rel="stylesheet">
	<link href="css/swiper.min.css" type="text/css" rel="stylesheet" media="screen">
	<link href="css/opencart.css" type="text/css" rel="stylesheet" media="screen">
	<script src="js/swiper.jquery.js"></script>
	<script src="js/tabs.js"></script>
	<script src="js/jquery.cookie.js"></script>
	<script src="js/common.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<script src="js/custom.js"></script>
	<link href="https://opencart.mahardhi.com/MT04/artiem/" rel="canonical">
	<link href="images/cart.png" rel="icon">
	<script async="" type="text/javascript" src="https://app.purechat.com/VisitorWidget/WidgetScript"></script>
</head>

<body>


	<div class="sidebar ">
		
		<div class="social facebook">
		  <a id="gap" href="https://www.facebook.com/ramyahreddy?mibextid=ZbWKwL" target="_blank">
			<p id="link">Like on Facebook <i class="fa-brands fa-facebook "></i> </p>
		  </a>
		</div>
		<div class="social whatsapp">
		  <a id="gap" href="https://api.whatsapp.com/send?phone=14088889948" target="_blank">
			<p id="link">Contact  on whatsapp <i class="fa-brands fa-whatsapp"></i> </p>
		  </a>
		</div>
		
	</div>


	<div class="common-home">

		<div class="loader"></div>
		<header>
			<div class="header-top">
				<div class="container">
					<div class="header-inner">
						<!-- start logo -->
						<div id="logo">
							<a href="https://opencart.mahardhi.com/MT04/artiem/index.php?route=common/home"><img
									src="images/LOGO2.png" title="Your Store" alt="Your Store"
									class="img-responsive"></a>
						</div>

						<!-- start menu -->
						<nav id="menu" class="navbar navbar_menu">
							<div class="navbar-header">
								<button type="button" class="btn btn-navbar navbar-toggle" id="btnMenuBar"><span
										class="addcart-icon"></span></button>
							</div>
							<div id="topCategoryList" class="main-menu menu-navbar clearfix" data-more="Inquire Know">
								<div class="menu-close hidden-lg hidden-md"><span id="category" class="">Menu</span><i
										class="icon-close"></i></div>
								<ul class="nav navbar-nav">
									<li class="menulist home"><a id="home" href="index.php">Home</a></li>
									<li class="menulist home"><a id="home" href="about.html">About</a></li>
									<li class="menulist home"><a id="home" href="ramayasgallery.php">Rammya's Gallary</a></li>
									<li class="menulist home"><a id="home" href="contact.html">Contact Us</a></li>
									<li class=""><a id="home" href="Enqire.php">Enquire Know</a></li>



								</ul>
							</div>
						</nav>

						<div class="header-right header-links">
							<!-- start search -->
							<!-- <div class="btn_search">
								<a class="search-btn">
									<i class="icon-search"></i>
								</a>
								<div class="search-down">
									<div id="mahardhiSearch" class="input-group mahardhi-search">
										<input type="text" name="search" value="" placeholder="Search..."
											class="form-control input-lg ui-autocomplete-input">
										<span class="btn-search input-group-btn">
											<button type="button" class="btn btn-default btn-lg"><i
													class="search-icon icon-search"></i><span
													class="hidden">Search</span></button>
										</span>
									</div>

									<script type="text/javascript">
										$('#mahardhiSearch .btn-search button').bind('click', function () {
											url = 'index.php?route=product/search';

											var search = $('#mahardhiSearch input[name=\'search\']').prop('value');
											if (search) {
												url += '&search=' + encodeURIComponent(search);
											}

											var category_id = $('#mahardhiSearch select[name=\'category_id\']').prop('value');
											if (category_id > 0) {
												url += '&category_id=' + encodeURIComponent(category_id);
												// url += '&sub_category=true';
												// url += '&description=true';
											}

											location = url;
										});

										$('#mahardhiSearch input[name=\'search\']').bind('keydown', function (e) {
											if (e.keyCode == 13) {
												$('#mahardhiSearch .btn-search button').trigger('click');
											}
										});
									</script>

								</div>
							</div> -->

							<!-- start account -->
							<div id="header_ac" class="dropdown">
								<a href="#"
									title="My Account" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-user"></i> </a>
								<ul class="dropdown-menu dropdown-menu-right account-link-toggle">
									<li><a
											href="register.php">Register</a>
									</li>
									<li><a
											href="login.php">Login</a>
									</li>
								</ul>
							</div>

							<!-- start cart -->
							<div class="header_cart">

								<a href="cart.php" target="_blank" rel="noopener noreferrer"><div id="cart" class="btn-group ">
									<button type="button" class="btn btn-inverse  btn-lg "></button>
								</div></a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</header>


		<script>
			$(document).ready(function () {
				var headerfixed = 1;
				if (headerfixed == 1) {
					$(window).scroll(function () {
						if ($(window).width() > 991) {
							if ($(this).scrollTop() > 160) {
								$('header').addClass('header-fixed');
							} else {
								$('header').removeClass('header-fixed');
							}
						}
						else {
							$('header').removeClass('header-fixed');
						}
					});
				}
				else {
					$('header').removeClass('header-fixed');
				}
			});
		</script>
		
<div id="information-information" class="container" style="margin-bottom:20px ;">
  <ul class="breadcrumb">
        <li><a href="index.php?route=common/home">home</a></li>
        <li><a href="about.php">About Us</a></li>
      </ul>
  <div class="row"><aside id="column-left" class="col-sm-3 hidden-xs">
    <div class="account-content">
	<div class="box-content">
		<div class="list-group">
			<h3 class="toggled">Information</h3>
			<ul class="list-unstyled" >
									<li><a href="login.php" class="list-group-item">Login</a></li>
					<li><a href="register.php" class="list-group-item">Register</a></li>
					<li><a href="indexacda.php?route=account/forgotten" class="list-group-item">About Us</a></li>
								<li><a href="contact.php" class="list-group-item">Contact Us</a></li>
								 <li><a href="" class="list-group-item" onclick="address()">Address Book</a></li> 

				<li><a href="Enqire.php" class="list-group-item">Enquiry</a></li>
				 <li><a href="https://www.google.com/maps/place/1212+Burgundy+Ct,+San+Jose,+CA+95132,+USA/@37.398033,-121.842866,16z/data=!4m6!3m5!1s0x808fcdc5b9b8ed91:0xc9ce9976844a9e0c!8m2!3d37.3980329!4d-121.8428661!16s%2Fg%2F11c5mtydj0?hl=en&entry=ttu" class="list-group-item">Site Map</a></li>  			
			
							</ul>
		</div>
	</div>
</div>

    <!-- <div class="sidebar">
	<div class="box-content">
		<h3 class="box-content toggled">Information</h3>
		<ul class="list-unstyled">
							<li><a href="index8816.html?route=information/information&amp;information_id=4">About Us</a></li>
							 <li><a href="index1766.html?route=information/information&amp;information_id=6">Delivery Information</a></li> 
							<li><a href="index1679.html?route=information/information&amp;information_id=3">Enquiry</a></li>
							 <li><a href="index99e4.html?route=information/information&amp;information_id=5">Terms &amp; Conditions</a></li> 
						<li><a href="index2724.html?route=information/contact">Contact Us</a></li>
			<li><a href="index7cb2.html?route=information/sitemap">Site Map</a></li>
		</ul>
	</div>
</div> -->

  </aside>

                <div id="content" class="col-sm-9">
      <h1>About Us</h1>
      <div class="about-us clearfix shop-content">
  <div class="col-sm-6">
    <div class="cms-block">
      <h3 >About us</h3>
      <h4 >Who We Are</h4>
      <p >Being trained under professional classical dancers like, Guru Nirmala Manjunath, Guru Pulikeshi Kasturi, Guru Ranjani Ganesan, Guru Kiran Subramanayam and Guru Vijayanti Kashi, Ramya attained high level proficiency in various forms of dance formats, Bharatanayam, Contemporary, Freestyle and Bollywood Style. July 29th 2006 marked a major milestone in her professional dancing career when Ramya did her Rangaprevesha as a solo recital at ADA Rangamandira - Bangalore, India. Ramya has been actively involved in directing and performing various stage programs in the US.</p>
    </div>
  </div>  
  <div class="col-sm-6">
    <img title="cms-img" src="images/banner/1.jpg" alt="cms-img" class="img-responsive">
  </div>
</div></div>
    </div>
</div>

<!--insta-->
<div class="col-md-12 " style="margin-bottom: 50px;margin-top: 50px;background: url(images/banner/insta-background.jpg) no-repeat; padding-bottom: 40px;padding-top: 20px;">
	
<div class="container" >
	<h3 style="font-family: verdana;">Instagram Gallary</h3>
	<div class="row" >
		<div class="col-md-3">
		<h3>Ramya Reddy</h3>
		<h4 >Artist, San jose, Calfornia</h4>
		<p >Along with dance camps and training, AvtarArts also aims to provide the required costumes and accessories. Please visit Gallery section for more details.</p>
		<a href="https://www.instagram.com/p/CyGzeckx9sG/"><button  class="btn btn-primary btn-lg"><i class="fa fa-instagram" aria-hidden="true"></i>&nbsp; Follow Me</button></a>
	</div>
		<div class="col-md-3">
			<img src="images/banner/insta3.jpg" alt="" width="100%">
		</div>
		<div class="col-md-3">
			<img src="images/banner/insta2.jpg" alt="" width="100%">
		</div>
		<div class="col-md-3">
			<img src="images/banner/insta1.jpg" alt="" width="100%">
		</div>
	</div>
</div>
</div>
<!--insta-->

<footer class="mt-30"  id="footer">
	<div class="container">
		<div class="row">
			<div class="footer-top" >
				<div class="col-sm-4">
					<div class="position-footer-left">
						<h5 class="toggled title">contact info</h5>
						<ul class="list-unstyled">
							<li>
								<div class="site">
									<div class="contact_title">address:</div>
									<div class="contact_site">1212 Burgundy Court San Jose CA 95132

									</div>
								</div>
							</li>
							<li>
								<div class="phone">
									<div class="contact_title">phone:</div>
									<div class="contact_site">408-888-9948

									</div>
								</div>
							</li>
							<!-- <li>
								<div class="fax">
									<div class="contact_title">fax:</div>
									<div class="contact_site">0123-456-789</div>
								</div>
							</li> -->
							<li>
								<div class="email">
									<div class="contact_title">email:</div>
									<div class="contact_site"> <a
											href="mailto:info@Yourstore.com">admin@colortrailsbyramyareddy.com</a> </div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="footer-content">
						<h5>Information</h5>
						<ul class="list-unstyled">
							<li><a
									href="https://opencart.mahardhi.com/MT04/artiem/index.php?route=information/information&amp;information_id=4">About
									Us</a></li>
							<li><a
									href="https://opencart.mahardhi.com/MT04/artiem/index.php?route=information/information&amp;information_id=6">Rammya's Gallery
									</a></li>
							<li><a
									href="https://opencart.mahardhi.com/MT04/artiem/index.php?route=information/information&amp;information_id=3">Privacy
									Policy</a></li>
							<li><a
									href="https://opencart.mahardhi.com/MT04/artiem/index.php?route=information/information&amp;information_id=5">Terms
									&amp; Conditions</a></li>
							<li><a
									href="https://opencart.mahardhi.com/MT04/artiem/index.php?route=information/contact">Contact
									Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="footer-content">
						<h5>My Account</h5>
						<ul class="list-unstyled">
							<li><a href="https://opencart.mahardhi.com/MT04/artiem/index.php?route=account/account">My
									Account</a></li>
							<li><a href="https://opencart.mahardhi.com/MT04/artiem/index.php?route=account/order">Order
									History</a></li>
							<li><a
									href="https://opencart.mahardhi.com/MT04/artiem/index.php?route=account/wishlist">Wish
									List</a></li>
							<li><a
									href="https://opencart.mahardhi.com/MT04/artiem/index.php?route=account/newsletter">Newsletter</a>
							</li>
							<li><a
									href="https://opencart.mahardhi.com/MT04/artiem/index.php?route=account/return/add">Returns</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- <div class="col-sm-2">
					<div class="footer-content">
						<h5>Extras</h5>
						<ul class="list-unstyled">
							<li><a
									href="https://opencart.mahardhi.com/MT04/artiem/index.php?route=product/manufacturer">Brands</a>
							</li>
							<li><a href="https://opencart.mahardhi.com/MT04/artiem/index.php?route=account/voucher">Gift
									Certificates</a></li>
							<li><a
									href="https://opencart.mahardhi.com/MT04/artiem/index.php?route=affiliate/login">Affiliate</a>
							</li>
							<li><a
									href="https://opencart.mahardhi.com/MT04/artiem/index.php?route=product/special">Specials</a>
							</li>
							<li><a
									href="https://opencart.mahardhi.com/MT04/artiem/index.php?route=information/sitemap">Site
									Map</a></li>
						</ul>
					</div>
				</div> -->
				<div class="col-sm-4">
					<div class="position-footer-right">
						<div class="footer_aboutus"> <a href="#"> <img alt="" src="images/LOGO2.png"> </a>
							<div class="footer-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
								eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
							<div class="social-media"> 
								<a href="https://www.instagram.com/p/CiS9xO6vhCS/?igshid=MDJmNzVkMjY%3D">
									<i class="fa-brands fa-instagram"></i></a> 
								<a href="https://www.facebook.com/ramyahreddy?mibextid=ZbWKwL">
									 <i class="fa-brands fa-facebook"></i></a> 
									 <a href="https://www.youtube.com/channel/UCxwnPdJvxtiKyiY6YKeUzWg"><i class=" fa-brands fa-youtube-play"></i></a> 
									
									  <a href="https://api.whatsapp.com/send?phone=14088889948"><i class="fa-brands fa-whatsapp"></i></a>
									 </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer_bottom">
		<div class="container">
			<p class="powered">All Rights Reserved © RamyaReddy,Design & Dveloped By<a href="https://wolfox.in/">  <span style="color: #2d6cdf;">WOLFOX</span></a> </p>
			<div class="position-footer-bottom">
				<div class="payment-link"> <img src="images/payment.png" alt=""></div>
			</div>
		</div>
	</div>
</footer>
<script>
	function address(){
		document.getElementById("footer")
	}
</script>
<!-- top scroll -->
<a href="#" class="scrollToTop back-to-top" data-toggle="tooltip" title="Top"> <img src="images/favicon1.png" height="60" alt=""></a>
</body>

<!-- Mirrored from opencart.mahardhi.com/MT04/artiem/index.php?route=information/information&information_id=4 by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2023 07:39:47 GMT -->

</html>