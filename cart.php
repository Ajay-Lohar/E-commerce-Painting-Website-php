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
							<a href="#"><img
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
									<li class="menulist home"><a id="home" href="about.php">About</a></li>
									<li class="menulist home"><a id="home" href="ramayasgallery.php">Rammya's Gallary</a></li>
									<li class="menulist home"><a id="home" href="contact.php">Contact Us</a></li>
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

    <div id="checkout-cart" class="container">
      <ul class="breadcrumb">
        <li>
          <a
            href="https://opencart.mahardhi.com/MT04/artiem/index.php?route=common/home"
            >home</a
          >
        </li>
        <li>
          <a
            href="https://opencart.mahardhi.com/MT04/artiem/index.php?route=checkout/cart"
            >Shopping Cart</a
          >
        </li>
      </ul>

      <div class="row">
        <div id="content" class="col-sm-12 checkout">
          <h1>Shopping Cart &nbsp;(0.15kg)</h1>
          <form
            action="cart.php"
            
            enctype="multipart/form-data"
          >
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <td class="text-center">Image</td>
                    <td class="text-left">Product Name</td>
                    <td class="text-left">Quantity</td>
                    <td class="text-right">Unit Price</td>
                    <td class="text-right">Total</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">
                      <a
                        href="#"
                        ><img
                          src="#"
                          alt="img"
                      /></a>
                    </td>
                    <td class="text-left">
                      <a
                        href="#"
                        >paint name</a
                      >
                      <br />
                    </td>
                    
                    <td class="text-left">
                      <div
                        class="cart_input_block input-group btn-block"
                        style="max-width: 200px"
                      >
                        <input
                          type="text"
                          name="quantity"
                          value="1"
                          size="1"
                          class="form-control"
                        />
                        <span class="input-group-btn">
                          <button
                            type="submit"
                            data-toggle="tooltip"
                            title="Update"
                            class="btn btn-primary"
                          >
                            <i class="fa fa-refresh"></i>
                          </button>
                          <!-- for remove from cart -->
                          <button
                            type="button"
                            data-toggle="tooltip"
                            title="Remove"
                            class="btn btn-danger"
                            onclick="cart.remove('name');"
                          >
                            <i class="fa fa-times-circle"></i>
                          </button>
                        </span>
                      </div>
                    </td>
                    <td class="text-right">$---.--</td>
                    <td class="text-right">$---.--</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </form>
       
          <div class="buttons clearfix">
            <div class="pull-left">
              <a
                href="ramayasgallery.php"
                class="btn btn-default"
                >Continue Shopping</a
              >
            </div>
            <div class="pull-right">
              <a
                href="order.php"
                class="btn btn-primary"
                >Checkout</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
 
<!-- footer  -->
<!-- -------------------- -->

<footer class="mt-30" style="background-color: #faf6f3c9">
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
											href="mailto:info@Yourstore.com">admin@colortrailsbyramyareddy.com</a>
									</div>
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
									href="about.php">About
									Us</a></li>
							<li><a
									href="ramayasgallery.php">Rammya's
									Gallery
								</a></li>
							<li><a
									href="#">Privacy
									Policy</a></li>
							<li><a
									href="#">Terms
									&amp; Conditions</a></li>
							<li><a
									href="contact.php">Contact
									Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="footer-content">
						<h5>My Account</h5>
						<ul class="list-unstyled">
							<li><a
									href="#">My
									Account</a></li>
							<li><a
									href="#">Order
									History</a></li>
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
							<div class="footer-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
								sed do
								eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
							<div class="social-media">
								<a href="https://www.instagram.com/p/CiS9xO6vhCS/?igshid=MDJmNzVkMjY%3D">
									<i class="fa-brands fa-instagram"></i></a>
								<a href="https://www.facebook.com/ramyahreddy?mibextid=ZbWKwL">
									<i class="fa-brands fa-facebook"></i></a>
								<a href="https://www.youtube.com/channel/UCxwnPdJvxtiKyiY6YKeUzWg"><i
										class=" fa-brands fa-youtube-play"></i></a>

								<a href="https://api.whatsapp.com/send?phone=14088889948"><i
										class="fa-brands fa-whatsapp"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer_bottom">
		<div class="container">
			<p class="powered">All Rights Reserved © RamyaReddy,Design & Dveloped By<a
					href="https://wolfox.in/"> <span style="color: #2d6cdf;">WOLFOX</span></a> </p>
			<div class="position-footer-bottom">
				<div class="payment-link"> <img src="images/payment.png" alt=""></div>
			</div>
		</div>
	</div>
</footer>

<!-- top scroll -->
<a href="#" class="scrollToTop back-to-top" data-toggle="tooltip" title="Top"> <img src="images/favicon1.png"
		height="60" alt=""></a>

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

</body>

</html>