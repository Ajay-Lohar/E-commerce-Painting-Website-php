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
<div id="product-page" class="container">	
	<ul class="breadcrumb">
					<li><a href="index.php">home</a></li>
					<li><a href="ramayasgallery.php">Rammya's Gallary</a></li>
					<li><a href="indetails.php">Drawing</a></li>
			</ul>
	<div class="row">
					<div id="content" class="col-sm-12">
		
		<h2 class="page_title">Charcoal Drawing</h2>
		
			<div class="pro-deatil">
			<div class="row">
																	<div class="col-sm-6 product-img"> 
											<div class="thumbnails">
							<div class="product-additional">
																	<div class="pro-image">
										<a href="images/uploads/Categorie/1/catimg.jpg" title="Charcoal Drawing" class="thumbnail">
											<img src="images/uploads/Categorie/1/catimg.jpg" title="Charcoal Drawing" id="imgdetails" name="imgdetails" alt="Charcoal Drawing" data-zoom-image=""/>
										</a>
									</div>
									

																	<div id="additional-carousel" class="owl-carousel owl-theme clearfix">
										<div class="image-additional">
											<a href="images/uploads/Categorie/2/catimg.jpg" title="Charcoal Drawing" class="elevatezoom-gallery" data-image="https://opencart.mahardhi.com/MT04/artiem/image/cache/catalog/products/14-710x888.jpg" data-zoom-image="https://opencart.mahardhi.com/MT04/artiem/image/cache/catalog/products/14-800x1000.jpg" >
												<img src="images/uploads/Categorie/2/catimg.jpg"  title="Charcoal Drawing" alt="Charcoal Drawing" width="80" height="100"/>
											</a>
										</div>
																					<div class="image-additional">
												<a href="images/uploads/Categorie/3/catimg.jpg" title="Charcoal Drawing" class="elevatezoom-gallery" data-image="https://opencart.mahardhi.com/MT04/artiem/image/cache/catalog/products/9-710x888.jpg" data-zoom-image="https://opencart.mahardhi.com/MT04/artiem/image/cache/catalog/products/9-800x1000.jpg">
													<img src="images/uploads/Categorie/3/catimg.jpg"  title="Charcoal Drawing" alt="Charcoal Drawing" width="80" height="100" />
												</a>
											</div>
																					<div class="image-additional">
												<a href="images/uploads/Categorie/4/catimg.jpg" title="Charcoal Drawing" class="elevatezoom-gallery" data-image="https://opencart.mahardhi.com/MT04/artiem/image/cache/catalog/products/8-710x888.jpg" data-zoom-image="https://opencart.mahardhi.com/MT04/artiem/image/cache/catalog/products/8-800x1000.jpg">
													<img src="images/uploads/Categorie/4/catimg.jpg"  title="Charcoal Drawing" alt="Charcoal Drawing" width="80" height="100" />
												</a>
											</div>
																					<div class="image-additional">
												<a href="images/uploads/Paintings/1/painting.jpg" title="Charcoal Drawing" class="elevatezoom-gallery" data-image="https://opencart.mahardhi.com/MT04/artiem/image/cache/catalog/products/4-710x888.jpg" data-zoom-image="https://opencart.mahardhi.com/MT04/artiem/image/cache/catalog/products/4-800x1000.jpg">
													<img src="images/uploads/Paintings/1/painting.jpg"  title="Charcoal Drawing" alt="Charcoal Drawing" width="80" height="100" />
												</a>
											</div>
																					<div class="image-additional">
												<a href="images/uploads/Paintings/1/painting.jpg" title="Charcoal Drawing" class="elevatezoom-gallery" data-image="https://opencart.mahardhi.com/MT04/artiem/image/cache/catalog/products/2-710x888.jpg" data-zoom-image="https://opencart.mahardhi.com/MT04/artiem/image/cache/catalog/products/2-800x1000.jpg">
													<img src="images/uploads/Paintings/3/painting.jpg"  title="Charcoal Drawing" alt="Charcoal Drawing" width="80" height="100" />
												</a>
											</div>
																					<div class="image-additional">
												<a href="images/uploads/Paintings/1/painting.jpg" title="Charcoal Drawing" class="elevatezoom-gallery" data-image="https://opencart.mahardhi.com/MT04/artiem/image/cache/catalog/products/10-710x888.jpg" data-zoom-image="https://opencart.mahardhi.com/MT04/artiem/image/cache/catalog/products/10-800x1000.jpg">
													<img src="images/uploads/Paintings/4/painting.jpg"  title="Charcoal Drawing" alt="Charcoal Drawing" width="80" height="100" />
												</a>
											</div>
																					<div class="image-additional">
												<a href="images/uploads/Paintings/5/painting.jpg" title="Charcoal Drawing" class="elevatezoom-gallery" data-image="https://opencart.mahardhi.com/MT04/artiem/image/cache/catalog/products/1-710x888.jpg" data-zoom-image="https://opencart.mahardhi.com/MT04/artiem/image/cache/catalog/products/1-800x1000.jpg">
													<img src="images/uploads/Paintings/5/painting.jpg"  title="Charcoal Drawing" alt="Charcoal Drawing" width="80" height="100" />
												</a>
											</div>
																			</div>
																
							</div>
						</div>
									</div>
																	<div class="col-sm-6 right_info">
					<div class="right-info-inner">
					<h1 class="" id="imgheading" name="imgheading">Charcoal Drawing</h1>
											<!-- <div class="rating clearfix">
							<div class="product-rating">
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>																	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>																	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>								 
							</div>
							<a href="#" class="reviews" onclick="$('a[href=\'#tab-review\']').trigger('click'); $('body,html').animate({scrollTop: $('.nav-tabs').offset().top}, 800); return false;">1 reviews</a> 
							<a href="#" class="write-review" onclick="$('a[href=\'#tab-review\']').trigger('click'); $('body,html').animate({scrollTop: $('.nav-tabs').offset().top}, 800); return false;"><i class="fa fa-pencil" aria-hidden="true"></i>Write a review</a>						
						</div>
										<hr> -->
					<ul class="list-unstyled">					
												<li><span class="disc" id="Size" name="Size">Size:</span><span class="disc1"> 1024 x 1024</span></li>
												<li><span class="disc" id="Availability" name="Availability">Availability:</span><span class="disc1"> In Stock</span></li>
					</ul>
											<hr>
						<ul class="list-unstyled">
															<li>
									<span class="pro_price" id="price" name="price">$230.00</span>
								</li>
																						
																											</ul>
						<hr>
										<div id="product" class="product-options">
																		<div class="form-group">
							<div class="product-btn-quantity">
								<label class="control-label qty" for="input-quantity">Qty</label>
	                            <div class="minus-plus">
	                            	<button class="minus"><i class="fa fa-minus"></i></button>
	                            	<input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />
	                            	<button class="plus"><i class="fa fa-plus"></i></button>	                            	
	                            </div>
	                            <button type="button" id="button-cart" data-loading-text="Loading..." class="btn btn-primary btn-lg btn-block">Add to Cart</button>
	                            <input type="hidden" name="product_id" value="33" />
	                        </div>
						</div>
						<!-- <div class="btn-group">
							<button type="button" class="pro_wish" title="Add To WishList" onclick="wishlist.add('33');"><i class="icon-heart"></i>Add To WishList</button>
							<button type="button" class="pro_comper" title="Add To Compare" onclick="compare.add('33');"><i class="icon-change"></i>Add To Compare</button>
						</div> -->
						
											</div>
											<hr>
						<div class="pro_description">
							<h3>Description</h3>
							<p id="Description" name="Description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia atque optio laboriosam natus repudiandae inventore, corporis unde beatae magni ipsum! Sapiente ducimus officiis ab minima ipsa labore, facilis eius dolore!</p>
						</div>
						<hr>
						<!-- AddThis Button BEGIN -->
	<div class="addthis_toolbox addthis_default_style"
		data-url="index6a4d.html?route=product/product&amp;product_id=33">
		<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
		<a class="addthis_button_tweet"></a>
		<a class="addthis_button_pinterest_pinit"></a>
		<a class="addthis_counter addthis_pill_style"></a>
	</div>
	<script type="text/javascript"
		src="../../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>
	<!-- AddThis Button END -->
	</div>
	</div>
	</div>
	</div>




	</div>

	</div>
	</div>
	<script>
$('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){
	$.ajax({
		url: 'index.php?route=product/product/getRecurringDescription',
		type: 'post',
		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
		dataType: 'json',
		beforeSend: function() {
			$('#recurring-description').html('');
		},
		success: function(json) {
			$('.alert-dismissible, .text-danger').remove();

			if (json['success']) {
				$('#recurring-description').html(json['success']);
			}
		}
	});
});
//--></script>
	<script>
$('#button-cart').on('click', function() {
   $.ajax({
	   url: 'index.php?route=checkout/cart/add',
	   type: 'post',
	   data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
	   dataType: 'json',
	   beforeSend: function() {
		   $('#button-cart').button('loading');
	   },
	   complete: function() {
		   $('#button-cart').button('reset');
	   },
	   success: function(json) {
		   $('.alert-dismissible, .text-danger').remove();
		   $('.form-group').removeClass('has-error');

		   if (json['error']) {
			   if (json['error']['option']) {
				   for (i in json['error']['option']) {
					   var element = $('#input-option' + i.replace('_', '-'));

					   if (element.parent().hasClass('input-group')) {
						   element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
					   } else {
						   element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
					   }
				   }
			   }

			   if (json['error']['recurring']) {
				   $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
			   }

			   // Highlight any found errors
			   $('.text-danger').parent().addClass('has-error');
		   }

		   if (json['success']) {
			   $('#content').parent().before('<div class="alert alert-success alert-dismissible">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');

			   $('#cart > button').html('<span id="cart-total">' + json['total'] + '</span>');

			   $('html, body').animate({ scrollTop: 0 }, 'slow');

			   $('#cart > ul').load('index1e1c.html?route=common/cart/info%20ul%20li');
		   }
	   },
	   error: function(xhr, ajaxOptions, thrownError) {
			   alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
	   }
   });
});
//--></script>
	<script>
$('.date').datetimepicker({
   language: 'en-gb',
   pickTime: false
});

$('.datetime').datetimepicker({
   language: 'en-gb',
   pickDate: true,
   pickTime: true
});

$('.time').datetimepicker({
   language: 'en-gb',
   pickDate: false
});

$('button[id^=\'button-upload\']').on('click', function() {
   var node = this;

   $('#form-upload').remove();

   $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

   $('#form-upload input[name=\'file\']').trigger('click');

   if (typeof timer != 'undefined') {
		   clearInterval(timer);
   }

   timer = setInterval(function() {
	   if ($('#form-upload input[name=\'file\']').val() != '') {
		   clearInterval(timer);

		   $.ajax({
			   url: 'index.php?route=tool/upload',
			   type: 'post',
			   dataType: 'json',
			   data: new FormData($('#form-upload')[0]),
			   cache: false,
			   contentType: false,
			   processData: false,
			   beforeSend: function() {
				   $(node).button('loading');
			   },
			   complete: function() {
				   $(node).button('reset');
			   },
			   success: function(json) {
				   $('.text-danger').remove();

				   if (json['error']) {
					   $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
				   }

				   if (json['success']) {
					   alert(json['success']);

					   $(node).parent().find('input').val(json['code']);
				   }
			   },
			   error: function(xhr, ajaxOptions, thrownError) {
				   alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			   }
		   });
	   }
   }, 500);
});
//--></script>
	<script>
$('#review').delegate('.pagination a', 'click', function(e) {
	   e.preventDefault();

	   $('#review').fadeOut('slow');

	   $('#review').load(this.href);

	   $('#review').fadeIn('slow');
});

$('#review').load('index3356.html?route=product/product/review&amp;product_id=33');

$('#button-review').on('click', function() {
   $.ajax({
	   url: 'index.php?route=product/product/write&product_id=33',
	   type: 'post',
	   dataType: 'json',
	   data: $("#form-review").serialize(),
	   beforeSend: function() {
		   $('#button-review').button('loading');
	   },
	   complete: function() {
		   $('#button-review').button('reset');
	   },
	   success: function(json) {
		   $('.alert-dismissible').remove();

		   if (json['error']) {
			   $('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
		   }

		   if (json['success']) {
			   $('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');

			   $('input[name=\'name\']').val('');
			   $('textarea[name=\'text\']').val('');
			   $('input[name=\'rating\']:checked').prop('checked', false);
		   }
	   }
   });
});
//--></script>

	<!-- M-Custom script -->
	<script>

   // Additional images
   const direction = $('html').attr('dir');

   $('#additional-carousel').each(function () {
	   if ($(this).closest('#column-left').length == 0 && $(this).closest('#column-right').length == 0) {
		   $(this).addClass('owl-carousel owl-theme');
		   const items = $(this).data('items') || 4;
		   const sliderOptions = {
			   loop: false,
			   nav: true,
			   navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
			   dots: false,
			   items: items,
			   mouseDrag: false,
			   touchDrag: false,
			   pullDrag: false,
			   rewind: false,
			   autoplay: true,
			   responsiveRefreshRate: 200,
			   responsive: {
				   0: { items: 1 },
				   300: { items: ((items - 2) > 1) ? (items - 2) : 1 },
				   376: { items: ((items - 1) > 1) ? (items - 1) : 1 },
				   481: { items: items },
				   768: { items: ((items - 1) > 1) ? (items - 1) : 1 },
				   1200: { items: items }
			   }
		   };
		   if (direction == 'rtl') sliderOptions['rtl'] = true;
		   $(this).owlCarousel(sliderOptions);
	   }
   });

   $(document).ready(function() {
	   if($(window).width() > 991) {
		   $("#zoom").elevateZoom({
			   zoomType: "inner",
			   cursor: "crosshair",
			   gallery:'additional-carousel',
			   galleryActiveClass: 'active'
		   });

		   var image_index = 0;
		   $(document).on('click', '.thumbnail', function () {
			   $('.thumbnails').magnificPopup('open', image_index);
			   return false;
		   });

		   $('#additional-carousel a').click(function() {
			   var smallImage = $(this).attr('data-image');
			   var largeImage = $(this).attr('data-zoom-image');
			   var ez = $('#zoom').data('elevateZoom');
			   $('.thumbnail').attr('href', largeImage);
			   ez.swaptheimage(smallImage, largeImage);
			   image_index = $(this).index('#additional-carousel a');
			   return false;
		   });
	   } else {
		   $(document).on('click', '.thumbnail', function () {
			   $('.thumbnails').magnificPopup('open', 0);
			   return false;
		   });
	   }
   });

   $(document).ready(function() {
	   $('.thumbnails').magnificPopup({
		   type:'image',
		   delegate: 'a.elevatezoom-gallery', // Mahardhi Edit
		   gallery: {
			   enabled: true
		   }
	   });
   });

//--></script>


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