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
								<li class="menulist home"><a id="home" href="">Home</a></li>
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
<div id="account-login" class="container">
  <ul class="breadcrumb">
        <li><a href="index.php">home</a></li>
        <li><a href="#">Account</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
      <div class="row"><aside id="column-left" class="col-sm-3 hidden-xs">
    <div class="account-content">
	<div class="box-content">
		<div class="list-group">
			<h3 class="toggled">Information</h3>
			<ul class="list-unstyled">
				<li><a href="login.php" class="list-group-item">Login</a></li>
				<li><a href="register.php" class="list-group-item">Register</a></li>
				<li><a href="about.php" class="list-group-item">About Us</a></li>
							<li><a href="contact1.php" class="list-group-item">Contact Us</a></li>
							<li><a href="#" class="list-group-item">Address Book</a></li>
			<!-- <li><a href="indexe223.html?route=account/wishlist" class="list-group-item">Wish List</a></li> -->
			<li><a href="Enqire.php" class="list-group-item">Enquiry</a></li>
			<!-- <li><a href="indexe223.html?route=account/order" class="list-group-item">Delivery Information</a></li> -->
			<li><a href="https://www.google.com/maps/place/1212+Burgundy+Ct,+San+Jose,+CA+95132,+USA/@37.398033,-121.842866,16z/data=!4m6!3m5!1s0x808fcdc5b9b8ed91:0xc9ce9976844a9e0c!8m2!3d37.3980329!4d-121.8428661!16s%2Fg%2F11c5mtydj0?hl=en&entry=ttu" class="list-group-item">Site Map</a></li>
		
			<!-- <li><a href="indexe223.html?route=account/download" class="list-group-item">Downloads</a></li>
			<li><a href="indexe223.html?route=account/recurring" class="list-group-item">Recurring payments</a></li>
			<li><a href="indexe223.html?route=account/reward" class="list-group-item">Reward Points</a></li -->
							</ul>
		</div>
	</div>
</div>

    <div class="sidebar">
	<div class="box-content">
		<!-- <h3 class="box-content toggled">Information</h3>
		<ul class="list-unstyled">
							<li><a href="index8816.html?route=information/information&amp;information_id=4">About Us</a></li>
							<li><a href="index1766.html?route=information/information&amp;information_id=6">Delivery Information</a></li>
							<li><a href="index1679.html?route=information/information&amp;information_id=3">Privacy Policy</a></li>
							<li><a href="index99e4.html?route=information/information&amp;information_id=5">Terms &amp; Conditions</a></li>
						<li><a href="index2724.html?route=information/contact">Contact Us</a></li>
			<li><a href="index7cb2.html?route=information/sitemap">Site Map</a></li>
		</ul> -->
	</div>
</div>

  </aside>

                <div id="content" class="col-sm-9">
      <div class="row">
        <div class="col-sm-6" >
          <div class="well" style="border: 1px black solid;">
            <h2 style="font-size: 17px; ">New Customer</h2>
            <p><strong style="font-size: 16px; ">Register Account</strong></p>
            <p style="font-size: 15px; ">By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
            <a href="register.html" class="btn btn-primary">Continue</a></div>
        </div>
        <div class="col-sm-6" >
          <div class="well" style="border: 1px black solid;">
            <h2 style="font-size: 17px; ">Returning Customer</h2>
            <p><strong style="font-size: 16px; ">I am a returning customer</strong></p>
            <form action="https://opencart.mahardhi.com/MT04/artiem/index.php?route=account/login" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="control-label" for="input-email" style="font-size: 16px; ">E-Mail </label>
                <input type="text" name="Email" value="" placeholder="E-Mail " id="Email" class="form-control" style="border: 1px black solid;" oninput="YourEmail()" required/>
              </div>
              <div class="form-group">
                <label class="control-label" for="input-password" style="font-size: 16px; ">Password</label>
                <input type="password" name="Password" value="" placeholder="Password" id="Password" class="form-control" style="border: 1px black solid;"oninput="YourPassword()" required/>
                <a href="indexacda.html?route=account/forgotten" style="font-size: 16px; ">Forgotten Password</a></div>
              <input type="submit" value="Login" class="btn btn-primary" />
                            <input type="hidden" name="redirect" value="https://opencart.mahardhi.com/MT04/artiem/index.php?route=account/account" />
                          </form>
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
				<div class="col-sm-3">
					<div class="position-footer-left">
  <h5 class="toggled title">contact info</h5><ul class="list-unstyled">   <li>      <div class="site">         <div class="contact_title">address:</div>         <div class="contact_site">71 Pennington Lane Vernon Rockville, CT 06066</div>      </div>   </li>   <li>      <div class="phone">         <div class="contact_title">phone:</div>         <div class="contact_site">+91 123 456 789</div>      </div>   </li>   <li>      <div class="fax">         <div class="contact_title">fax:</div>         <div class="contact_site">0123-456-789</div>      </div>   </li>   <li>      <div class="email">         <div class="contact_title">email:</div>         <div class="contact_site">            <a href="mailto:info@Yourstore.com">demo@Yourstore.com</a>         </div>      </div>   </li></ul>
</div>
				</div>
						      	<div class="col-sm-2">
		      		<div class="footer-content">
						<h5>Information</h5>			        
				        <ul class="list-unstyled">
				         					          	<li><a href="index8816.html?route=information/information&amp;information_id=4">About Us</a></li>
				          					          	<li><a href="index1766.html?route=information/information&amp;information_id=6">Delivery Information</a></li>
				          					          	<li><a href="index1679.html?route=information/information&amp;information_id=3">Privacy Policy</a></li>
				          					          	<li><a href="index99e4.html?route=information/information&amp;information_id=5">Terms &amp; Conditions</a></li>
				          					          	<li><a href="index2724.html?route=information/contact">Contact Us</a></li>
				        </ul>
			        </div>
		      	</div>
		      			      	<div class="col-sm-2">	
			      	<div class="footer-content">	      		
			      		<h5>My Account</h5>		      		
				        <ul class="list-unstyled">
				          <li><a href="indexe223.html?route=account/account">My Account</a></li>
				          <li><a href="indexe223.html?route=account/order">Order History</a></li>
				          <li><a href="indexe223.html?route=account/wishlist">Wish List</a></li>
				          <li><a href="indexe223.html?route=account/newsletter">Newsletter</a></li>
				           <li><a href="index71ba.html?route=account/return/add">Returns</a></li>
				        </ul>
			        </div>
		      	</div>
		      	<div class="col-sm-2">
		      		<div class="footer-content">
			      		<h5>Extras</h5>
				        <ul class="list-unstyled">
				          <li><a href="indexd773.html?route=product/manufacturer">Brands</a></li>
				          <li><a href="index4dd2.html?route=account/voucher">Gift Certificates</a></li>
				          <li><a href="index3d18.html?route=affiliate/login">Affiliate</a></li>
				          <li><a href="indexf110.html?route=product/special">Specials</a></li>
				          <li><a href="index7cb2.html?route=information/sitemap">Site Map</a></li>
				        </ul>
				    </div>	
		      	</div>
		      	<div class="col-sm-3">
					<div class="position-footer-right">
  <div class="footer_aboutus">    <a href="#">   <img alt="" src="image/catalog/footer-logo.png">    </a>      <div class="footer-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>    <div class="social-media">    <a href="#"><i class="fa fa-facebook"></i></a>    <a href="#"><i class="fa fa-twitter"></i></a>    <a href="#"><i class="fa fa-youtube-play"></i></a>    <a href="#"><i class="fa fa-google-plus"></i></a>    <a href="#"> <i class="fa fa-pinterest-p"></i></a>    </div></div>
</div>
				</div>
			</div>
		</div>
	</div>	
	<div class="footer_bottom">
		<div class="container">			
			<p class="powered">Powered By <a href="http://www.opencart.com/">OpenCart</a> Your Store &copy; 2023</p>
			<div class="position-footer-bottom">
  <div class="payment-link">  <img src="image/catalog/payment.png" alt=""></div>
</div>
		</div>
	</div>		
	</footer>
	<script>
			 
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
			document.getElementById('text_Pan').innerHTML="Email ✓ ";
		}else{
			//alert('false');
			document.getElementById('Email').style="border:2px solid red;";
			
		}
	}
	
	function YourPassword(){
	  // alert("validpan working..");
		 var YourPassword = document.getElementById('Password').value;
		//alert(pan);
		//var reg = new RegExp("[A-Z]{5}[0-9]{4}[A-z]{1}");
		var reg=/^(?=.*\d)(?=.*[a-z A-Z])(?=.*[a-z A-Z]).{6,20}$/;
		if(reg.test(YourPassword))
		{
			//alert('true');s
			document.getElementById('Password').style="border:2px solid green;"
			// document.getElementById('text_Pan').innerHTML="Your Password ✓ ";
		}else{
			//alert('false');
			document.getElementById('Password').style="border:2px solid red;";
			
		}
	}
	</script>
<!-- top scroll -->
	<a href="#" class="scrollToTop back-to-top" data-toggle="tooltip" title="Top"><i class="icon-paint-brush"></i></a>
</body>

<!-- Mirrored from opencart.mahardhi.com/MT04/artiem/index.php?route=account/login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2023 07:38:53 GMT -->
</html>