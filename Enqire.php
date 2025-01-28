<!DOCTYPE html>
<html dir="ltr" lang="en"><!--<![endif]-->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Your Store</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<meta name="description" content="My Store">
	<script src="js/jquery-2.1.1.min.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script src="js/bootstrap.min.js"></script>
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Marcellus&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" rel="stylesheet">

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
</head>

<body class="common-home">
	<div class="loader"></div>
	<header>
		<div class="header-top">
			<div class="container">
				<div class="header-inner">
					<!-- start logo -->
					<div id="logo">
						<a href="https://opencart.mahardhi.com/MT04/artiem/index.php?route=common/home"><img
								src="images/LOGO2.png" title="Your Store" alt="Your Store" class="img-responsive"></a>
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
								<li class="menulist home"><a id="home" href="about.php">About</a></li>
								<li class="menulist home"><a id="home" href="ramayasgallery.php">Rammya's Gallary</a></li>
								<li class="menulist home"><a id="home" href="contact1.php">Contact Us</a></li>
								<li class=""><a id="home" href="Enqire.php">Enquire now</a></li>



							</ul>
						</div>
					</nav>

					<div class="header-right header-links">
						<!-- start search -->
						<div class="btn_search">
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
						</div>

						<!-- start account -->
						<div id="header_ac" class="dropdown">
							<a href="https://opencart.mahardhi.com/MT04/artiem/index.php?route=account/account"
								title="My Account" class="dropdown-toggle" data-toggle="dropdown">
								<i class="icon-user"></i> </a>
							<ul class="dropdown-menu dropdown-menu-right account-link-toggle">
								<li><a
									href="register.php">Register</a>
							</li>
							<li><a
									href="login.php">Login</a>
							</li>

								<li class="wishlist-header"><a
										href="https://opencart.mahardhi.com/MT04/artiem/index.php?route=account/wishlist"
										id="wishlist-total" title="WishList (0)">WishList (0)</a></li>
								<li class="currency">
									<div class="currency-box">
										<form
											action="https://opencart.mahardhi.com/MT04/artiem/index.php?route=common/currency/currency"
											method="post" enctype="multipart/form-data" id="form-currency">
											<button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
												<span class="drop-text">Currency</span>
											</button>
											<ul class="currency-dropdown curr">
												<li>
													<button class="currency-select btn btn-link btn-block" type="button"
														name="EUR">€ Euro</button>
												</li>
												<li>
													<button class="currency-select btn btn-link btn-block" type="button"
														name="GBP">£ Pound Sterling</button>
												</li>
												<li>
													<button class="currency-select btn btn-link btn-block" type="button"
														name="USD">$ US Dollar</button>
												</li>
											</ul>
											<input type="hidden" name="code" value="">
											<input type="hidden" name="redirect"
												value="https://opencart.mahardhi.com/MT04/artiem/index.php?route=common/home">
										</form>
									</div>
								</li>
								<li class="language">
									<div class="language-box">
										<form
											action="https://opencart.mahardhi.com/MT04/artiem/index.php?route=common/language/language"
											method="post" enctype="multipart/form-data" id="form-language">
											<button class="btn btn-link dropdown-toggle" data-toggle="dropdown">

												<span class="drop-text">Language</span> </button>
											<ul class="language-dropdown lang">
												<li>
													<button class="btn btn-link btn-block language-select" type="button"
														name="en-gb"><img src="images/en-gb.png" alt="English"
															title="English"> English</button>
												</li>
												<li>
													<button class="btn btn-link btn-block language-select" type="button"
														name="ar"><img src="images/ar.png" alt="Arbic" title="Arbic">
														Arbic</button>
												</li>
											</ul>
											<input type="hidden" name="code" value="">
											<input type="hidden" name="redirect"
												value="https://opencart.mahardhi.com/MT04/artiem/index.php?route=common/home">
										</form>
									</div>
								</li>
							</ul>
						</div>

						<!-- start cart -->
						<div class="header_cart">
							<div id="cart" class="btn-group btn-block">
								<button type="button" data-toggle="dropdown" data-loading-text="Loading..."
									class="btn btn-inverse btn-block btn-lg dropdown-toggle">
									<span id="cart-total"><span class="cart-item">0</span><span
											class="hidden-sm hidden-xs">-$0.00</span></span>
								</button>
								<ul class="dropdown-menu header-cart-toggle pull-right ">
									<li>
										<p class="text-center product-cart-empty">Your shopping cart is empty!</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>


	<script>
  $(document).ready(function(){
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
        else{
          $('header').removeClass('header-fixed');
        }
      });
    }
    else{   
      $('header').removeClass('header-fixed');
    }
  });
	</script>
<div id="information-contact" class="container">
	<ul class="breadcrumb">
		  <li><a href="index.php">home</a></li>
		  <li><a href="Enqire.php">Enqire</a></li>
		</ul>
	<div class="row">
	  <div id="content" class="col-sm-12">
		<h1>Enqire</h1>     
		<div class="shop-content row">
		   <div class="col-sm-12">
			<!-- <h3 class="contact-title">Our Location</h3> -->
		  </div>
	 
			  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 contact-right">
				<form action="html/ltr/EnqireBackEnd.php" method="post" enctype="" class="form-horizontal">
					<fieldset>
					  <h3 style="text-align: center;">Enqire Form <legend></legend></h3>
					  <div class="form-group required">
						<label class="col-sm-2 control-label" for="input-name" style="font-size: 18px; ">Your Name:</label>
						<div class="col-sm-10">
						  <input type="text" name="YourName" value="" id="YourName" class="form-control" style="border: 1px black solid;" placeholder="Name" required oninput="Name()"/><br>
						  <span id="text_Pan"></span>
						  </div>
					  </div>
					  <div class="form-group required">
						<label class="col-sm-2 control-label" for="input-email" style="font-size: 18px; ">E-Mail Address:</label>
						<div class="col-sm-10">
						  <input type="text" name="Email" value="" id="Email" class="form-control" style="border: 1px black solid;" placeholder="Email" required oninput="YourEmail()"/><br>
						  <span id="text_Pan2"></span>
						  </div>
					  </div>
					  <div class="form-group required">
						  <label class="col-sm-2 control-label" for="input-PhoneNumber" style="font-size: 18px; ">Phone Number:</label>
						  <div class="col-sm-10">
							<input type="tel" name="PhoneNumber" value="" id="PhoneNumber" class="form-control" style="border: 1px black solid;" placeholder="Phone number" oninput="Phone()" required/><br>
							<span id="text_Pan1"></span>
						  </div>
						</div>
						<div class="form-group required">
						<label class="col-sm-2 control-label" for="input-name" style="font-size: 18px; ">Enquire for which painting</label>
						<div class="col-sm-10">
						  <input type="text" name="Enquire" value="" id="Enquire" class="form-control" style="border: 1px black solid;" placeholder="Name" required oninput="Name()"/><br>
						  <span id="text_Pan"></span>
						  </div>
					  </div>
					  <div class="form-group required">
						<label class="col-sm-2 control-label" for="input-Messege" style="font-size: 18px; ">Messege:</label>
						<div class="col-sm-10">
						  <textarea name="Messege" rows="10" id="Messege" class="form-control" style="border: 1px black solid;" placeholder="Messege" required></textarea>
										</div>
					  </div>
					  
					</fieldset>
					<div class="buttons clearfix">
					  <div class="pull-right">
						<input class="btn btn-primary" type="submit" value="Submit" />
					  </div>
					</div>
				  </form>
		</div>        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 contact-left">
		  <h3 style="text-align: center;">Our Location <legend></legend></h3>
		  <!-- <legend style="text-align: center;"></legend> -->
		  <div class="content-details" style="border: 1px black solid;">
			  <div class="location-info" >
				  <div class="lead"><i class="fa fa-home" ></i>&nbsp;Your Store</div>
				  <div class="text-muted"> 1212 Burgundy Court San Jose CA 95132</div><br>
					  <a href="https://www.google.com/maps/place/1212+Burgundy+Ct,+San+Jose,+CA+95132,+USA/@37.398033,-121.842866,16z/data=!4m6!3m5!1s0x808fcdc5b9b8ed91:0xc9ce9976844a9e0c!8m2!3d37.3980329!4d-121.8428661!16s%2Fg%2F11c5mtydj0?hl=en&entry=ttu" target="_blank" class="btn btn-info"><i class="fa fa-map-marker"></i> View Google Map</a>
				  </div>            
			  <div class="phone-info">
				  <div class="lead"><i class="fa fa-phone" aria-hidden="true"></i>Telephone</div>
				  <div class="text-muted"> 408-888-9948</div>
			  </div>
			  <div class="fax-info">
									  <div class="lead"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;Email</div>
				  <div class="text-muted">admin@colortrailsbyramyareddy.com</div>
								  </div>
			  <!-- <div class="openstore-info">
									  <div class="open-title title"><i class="fa fa-clock-o"></i>Opening Times</div>
				  <div class="openstore-detail">11:00 AM - 7:00 PM</div>
								  </div> -->
			  <div class="comment-info"> 
									  <div class="lead"><i class="fa fa-commenting-o" aria-hidden="true"></i>&nbsp;Comments</div>
				  <div class="text-muted">Demo Comment Description from Store Owner </div>
								  </div>                    
		  </div>
	  </div> 
		
		  </div>
		</div>
	  </div>
  </div>
<footer class="mt-30" style="background-color: #faf6f3;">
	<div class="container">
		<div class="row">
			<div class="footer-top">
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
	function Phone(){
  // alert("validpan working..");
	 var phone = document.getElementById('PhoneNumber').value;
	//alert(pan);
	//var reg = new RegExp("[A-Z]{5}[0-9]{4}[A-z]{1}");
	var reg=/^[+]{1}[1]{1}[0-9]{10}/;
	if(reg.test(phone))
	{
		//alert('true');
		document.getElementById('PhoneNumber').style="border:2px solid green;"
		document.getElementById('text_Pan1').innerHTML="PHONE NO ✓ ";
	}else{
		//alert('false');
		document.getElementById('PhoneNumber').style="border:2px solid red;";
		
	}
}
 
function YourEmail(){
  // alert("validpan working..");
	 var E_mail = document.getElementById('Email').value;
	//alert(pan);
	//var reg = new RegExp("[A-Z]{5}[0-9]{4}[A-z]{1}");
	var reg=/^[a-z0-9]+@[a-z]+\.[a-z]{2,3}$/;
	if(reg.test(E_mail))
	{
		//alert('true');
		document.getElementById('Email').style="border:2px solid green;"
		document.getElementById('text_Pan2').innerHTML="Email ✓ ";
	}else{
		//alert('false');
		document.getElementById('Email').style="border:2px solid red;";
		
	}
}
// /^[a-zA-Z0-9]+$/;


		 
function Name(){
  // alert("validpan working..");
	 var Name = document.getElementById('YourName').value;
	//alert(pan);
	//var reg = new RegExp("[A-Z]{5}[0-9]{4}[A-z]{1}");
	var reg=/^[a-zA-Z]+ [a-zA-Z]+$/;
	if(reg.test(Name))
	{
		//alert('true');s
		document.getElementById('YourName').style="border:2px solid green;"
		document.getElementById('text_Pan').innerHTML="Your Name ✓ ";
	}else{
		//alert('false');
		document.getElementById('YourName').style="border:2px solid red;";
		
	}
}

</script>

<!-- top scroll -->
<a href="#" class="scrollToTop back-to-top" data-toggle="tooltip" title="Top"> <img src="images/favicon1.png" height="60" alt=""></a>
</body>

<!-- Mirrored from opencart.mahardhi.com/MT04/artiem/index.php?route=information/contact by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2023 07:39:51 GMT -->
</html>