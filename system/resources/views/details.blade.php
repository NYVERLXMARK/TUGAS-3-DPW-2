<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{url('public')}}/img/icon.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>NyverL</title>
	<!--
			CSS
			============================================= -->
        <link rel="stylesheet" href="{{url('public')}}/css/linearicons.css">
        <link rel="stylesheet" href="{{url('public')}}/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{url('public')}}/css/themify-icons.css">
        <link rel="stylesheet" href="{{url('public')}}/css/bootstrap.css">
        <link rel="stylesheet" href="{{url('public')}}/css/owl.carousel.css">
        <link rel="stylesheet" href="{{url('public')}}/css/nice-select.css">
        <link rel="stylesheet" href="{{url('public')}}/css/nouislider.min.css">
        <link rel="stylesheet" href="{{url('public')}}/css/ion.rangeSlider.css" />
        <link rel="stylesheet" href="{{url('public')}}/css/ion.rangeSlider.skinFlat.css" />
        <link rel="stylesheet" href="{{url('public')}}/css/magnific-popup.css">
        <link rel="stylesheet" href="{{url('public')}}/css/main.css">
</head>
<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="/"><img src="{{url('public')}}/img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="/products">Products</a></li>
                            <li class="nav-item active"><a class="nav-link" href="/details">Details</a></li>
                            <li class="nav-item"><a class="nav-link" href="/masuk">Login</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Product Details Page</h1>
					<nav class="d-flex align-items-center">
						<a href="/">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="/products">Products<span class="lnr lnr-arrow-right"></span></a>
						<a href="/details">Product Details</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="{{url('public')}}/img/m1.png" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="{{url('public')}}/img/m2.png" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="{{url('public')}}/img/m3.png" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3>MSI Raider GE77Hx 17.3" QHD 240Hz Gaming Laptop: Intel Core i7-12800HX RTX 3070 Ti 16GB DDR5 1TB NVMe SSD, Thunderbolt 4, USB-Type C, Cooler Boost 5, Win11 Pro: Dark Grey 12UHS-004</h3>
						<h2>$2,499</h2>
						<ul class="list">
							<li><a class="active" href="#"><span>Category</span> : Laptop Gaming</a></li>
							<li><a href="#"><span>Availibility</span> : In Stock</a></li>
						</ul>
						<p>Travel through time and space with ultimate performance and the irresistible design. The Raider GE77 HX comes with up to the latest Intel® Core™ i9-12900HX processor and NVIDIA® GeForce RTX™ 30 series graphics for the best gaming experience you can imagine.</p>
						<div class="product_count">
							<label for="qty">Quantity:</label>
							<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
							 class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
							 class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
						</div>
						<div class="card_area d-flex align-items-center">
							<a class="primary-btn" href="#">Add to Cart</a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
					 aria-selected="false">Specification</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
					 aria-selected="false">Comments</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
					 aria-selected="false">Reviews</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
					<p>
                        > RAIDER GE77 HX <br>
                        Up to latest Intel® Core™ i9-12900HX processor <br>
                        Windows 11 Home / Windows 11 Pro <br>
                        (MSI recommends Windows 11 Pro for business.) <br>
                        Up to latest GeForce RTX™ 3080 Ti Laptop GPU 16GB GDDR6 <br>
                        Mystic Light with panoramic aurora lighting design <br>
                        MSI exclusive phase change thermal pad cooling solution <br>
                        17.3" UHD (3840x2160), 120 Hz Refresh Rate, 100% DCI-P3(Typical), IPS-Level panel (Optional) <br>
                        17.3" QHD (2560x1440), 240 Hz Refresh Rate, 100% DCI-P3(Typical), IPS-Level panel (Optional) <br>
                        99.9Whr Battery Capacity <br>
                        Cooler Boost 5 with 2 fans and 7 heat pipes <br>
                        MSI Center provides exclusive Gaming Mode, brand new SmartAuto, and Ambient Silent AI for best user experience. <br>
                        Per-Key RGB gaming keyboard by SteelSeries <br>
                        Duo Wave Speaker design by Dynaudio system</p>
					<p>It is often frustrating to attempt to plan meals that are designed for one. Despite this fact, we are seeing
						more and more recipe books and Internet websites that are dedicated to the act of cooking for one. Divorce and
						the death of spouses or grown children leaving for college are all reasons that someone accustomed to cooking for
						more than one would suddenly need to learn how to adjust all the cooking practices utilized before into a
						streamlined plan of cooking that is more efficient for one person creating less</p>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<h5>CPU</h5>
									</td>
									<td>
										<h5>Up to 12th Gen Intel® Core™ i9-12900HX Processor</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>OS</h5>
									</td>
									<td>
										<h5>Windows 11 Home (MSI recommends Windows 11 Pro for business.)
                                            Windows 11 Pro</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Display</h5>
									</td>
									<td>
										<h5>17.3" QHD (2560x1440), 240Hz, IPS-Level</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Chipset</h5>
									</td>
									<td>
										<h5>Intel® HM670</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Graphic</h5>
									</td>
									<td>
										<h5>NVIDIA® GeForce RTX™ 3070 Ti Laptop GPU 8GB GDDR6
                                            Up to 1535MHz Boost Clock, 150W Maximum Graphics Power with Dynamic Boost.</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Memory</h5>
									</td>
									<td>
										<h5>DDR5-4800
                                            2 Slots
                                            16 GB</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Storage</h5>
									</td>
									<td>
										<h5>1 TB M.2 SSD  (NVMe PCIe Gen4)</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Webcam</h5>
									</td>
									<td>
										<h5>FHD type (30fps@1080p)</h5>
									</td>
								</tr>
                                <tr>
									<td>
										<h5>Keyboard</h5>
									</td>
									<td>
										<h5>Per-Key RGB Backlight Keyboard</h5>
									</td>
								</tr>
                                <tr>
									<td>
										<h5>Communication</h5>
									</td>
									<td>
										<h5>Killer Gb LAN (Up to 2.5G)
                                            Intel® Killer™ AX Wi-Fi 6E + Bluetooth 5.2</h5>
									</td>
								</tr>
                                <tr>
									<td>
										<h5>Audio</h5>
									</td>
									<td>
										<h5>2x 1W Speaker
                                            2x 2W Woofer</h5>
									</td>
								</tr>
                                <tr>
									<td>
										<h5>Audio Jack</h5>
									</td>
									<td>
										<h5>1x Mic-in/Headphone-out Combo Jack</h5>
									</td>
								</tr>
                                <tr>
									<td>
										<h5>I/O Ports</h5>
									</td>
									<td>
										<h5>1x Type-C (USB3.2 Gen2 / DP)
                                            1x Type-C (USB / DP / Thunderbolt™ 4)
                                            2x Type-A USB3.2 Gen1
                                            1x Type-A USB3.2 Gen2
                                            1x RJ45
                                            1x SD Express Card Reader
                                            1x (8K @ 60Hz / 4K @ 120Hz) HDMI</h5>
									</td>
								</tr>
                                <tr>
									<td>
										<h5>Battery</h5>
									</td>
									<td>
										<h5>4-Cell
                                            99.9 Battery (Whr)</h5>
									</td>
								</tr>
                                <tr>
									<td>
										<h5>AC Adapter</h5>
									</td>
									<td>
										<h5>330W adapter</h5>
									</td>
								</tr>
                                <tr>
									<td>
										<h5>Dimension (WXDXH)</h5>
									</td>
									<td>
										<h5>397 x 284 x 25.9 mm</h5>
									</td>
								</tr>
                                <tr>
									<td>
										<h5>Weight (W/ Battery)</h5>
									</td>
									<td>
										<h5>2.9 kg</h5>
									</td>
								</tr>
                                <tr>
									<td>
										<h5>Color</h5>
									</td>
									<td>
										<h5>Titanium Dark Gray</h5>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="comment_list">
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="{{url('public')}}/img/product/review-1.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<h5>12th Feb, 2018 at 05:56 pm</h5>
											<a class="reply_btn" href="#">Reply</a>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item reply">
									<div class="media">
										<div class="d-flex">
											<img src="{{url('public')}}/img/product/review-2.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<h5>12th Feb, 2018 at 05:56 pm</h5>
											<a class="reply_btn" href="#">Reply</a>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="{{url('public')}}/img/product/review-3.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<h5>12th Feb, 2018 at 05:56 pm</h5>
											<a class="reply_btn" href="#">Reply</a>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="review_box">
								<h4>Post a comment</h4>
								<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Your Full name">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="number" name="number" placeholder="Phone Number">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" value="submit" class="btn primary-btn">Submit Now</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="row total_rate">
								<div class="col-6">
									<div class="box_total">
										<h5>Overall</h5>
										<h4>4.0</h4>
										<h6>(03 Reviews)</h6>
									</div>
								</div>
								<div class="col-6">
									<div class="rating_list">
										<h3>Based on 3 Reviews</h3>
										<ul class="list">
											<li><a href="#">5 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">4 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">3 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">2 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">1 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="review_list">
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="{{url('public')}}/img/product/review-1.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="{{url('public')}}/img/product/review-2.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="{{url('public')}}/img/product/review-3.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="review_box">
								<h4>Add a Review</h4>
								<p>Your Rating:</p>
								<ul class="list">
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
								</ul>
								<p>Outstanding</p>
								<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Your Full name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Full name'">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="number" name="number" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="message" id="message" rows="1" placeholder="Review" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Review'"></textarea></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" value="submit" class="primary-btn">Submit Now</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Product Description Area =================-->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
							magna aliqua.
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
            <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0">
                    <strong>Copyright &copy; 2022 @if(date("Y") > '2022') - {{date("Y")}} @endif by <a href="https://www.instagram.com/nyverl/" target="_blank"> Nur Rahman</a></strong>
                </p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="{{url('public')}}/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{url('public')}}/js/vendor/bootstrap.min.js"></script>
	<script src="{{url('public')}}/js/jquery.ajaxchimp.min.js"></script>
	<script src="{{url('public')}}/js/jquery.nice-select.min.js"></script>
	<script src="{{url('public')}}/js/jquery.sticky.js"></script>
	<script src="{{url('public')}}/js/nouislider.min.js"></script>
	<script src="{{url('public')}}/js/jquery.magnific-popup.min.js"></script>
	<script src="{{url('public')}}/js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{url('public')}}/js/gmaps.min.js"></script>
	<script src="{{url('public')}}/js/main.js"></script>

</body>

</html>
