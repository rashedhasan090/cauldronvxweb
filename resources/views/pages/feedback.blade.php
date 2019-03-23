
@extends('layout.app')
@section('content')


<h1>{{$title}} </h1>

<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="codepixer">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta charset="UTF-8">
	
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		
    <link rel="stylesheet" href="web/css/linearicons.css">
			<link rel="stylesheet" href="web/css/font-awesome.min.css">
			<link rel="stylesheet" href="web/css/bootstrap.css">
			<link rel="stylesheet" href="web/css/magnific-popup.css">
			<link rel="stylesheet" href="web/css/nice-select.css">	
			<link rel="stylesheet" href="web/css/hexagons.min.css">							
			<link rel="stylesheet" href="web/css/animate.min.css">
			<link rel="stylesheet" href="web/css/owl.carousel.css">
			<link rel="stylesheet" href="web/css/main.css">
		</head>
		<body>	
			  <header id="header" id="home">
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				     	    		
			    	</div>
			    </div>
			  </header><!-- #header -->

					  

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
		
					<div class="row">
						<div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5>Dhaka, Bangladesh</h5>
									<p></p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>00 (880) 984555 562</h5>
									<p>Mon to Fri 9am to 6 pm</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>support@cauldronvx.com</h5>
									<p>Send us your query anytime!</p>
								</div>
							</div>														
						</div>
						<div class="col-lg-8">
							<form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
								<div class="row">	
									<div class="col-lg-6 form-group">
										<input name="name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
									
										<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

										<input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>						
									</div>
									<div class="col-lg-12 d-flex justify-content-between">
										<div class="alert-msg" style="text-align: left;"></div>
										<button class="genric-btn primary circle" style="float: right;">Send Message</button>		
									</div>
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

		<!-- start footer Area -->		
    <footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-12">
							<div class="single-footer-widget">
								<h6>Navigate</h6>
								<ul class="footer-nav">
									<li><a href="/lsapp/public/about">About</a></li>
									<li><a href="/lsapp/public/posts">Discussion</a></li>
									<li><a href="/lsapp/public/developers">Developers</a></li>
									<li><a href="/lsapp/public/feedback">Feedback</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6  col-md-12">
							<div class="single-footer-widget newsletter">
								<h6>Newsletter</h6>
								<p>You can trust us. we only send promo offers, not a single spam.</p>
								<div id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

										<div class="form-group row" style="width: 100%">
											<div class="col-lg-8 col-md-12">
												<input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
												<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
											</div> 
										
											<div class="col-lg-4 col-md-12">
												<button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
											</div> 
										</div>		
										<div class="info"></div>
									</form>
								</div>		
							</div>
						</div>
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">Cauldron VX Active Users</h6>
								<ul class="instafeed d-flex flex-wrap">
									<li><img src="web/img/i1.jpg" alt=""></li>
									<li><img src="web/img/i2.jpg" alt=""></li>
									<li><img src="web/img/i3.jpg" alt=""></li>
									<li><img src="web/img/i4.jpg" alt=""></li>
									<li><img src="web/img/i5.jpg" alt=""></li>
									<li><img src="web/img/i6.jpg" alt=""></li>
									<li><img src="web/img/i7.jpg" alt=""></li>
									<li><img src="web/img/i8.jpg" alt=""></li>
								</ul>
							</div>
						</div>						
					</div>

					<div class="row footer-bottom d-flex justify-content-between">
						<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
						<div class="col-lg-4 col-sm-12 footer-social">
						
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	

			<script src="web/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="web/js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="web/js/easing.min.js"></script>			
			<script src="web/js/hoverIntent.js"></script>
			<script src="web/js/superfish.min.js"></script>	
			<script src="web/js/jquery.ajaxchimp.min.js"></script>
			<script src="web/js/jquery.magnific-popup.min.js"></script>	
			<script src="web/js/owl.carousel.min.js"></script>	
			<script src="web/js/hexagons.min.js"></script>							
			<script src="web/js/jquery.nice-select.min.js"></script>	
			<script src="web/js/jquery.counterup.min.js"></script>
			<script src="web/js/waypoints.min.js"></script>							
			<script src="web/js/mail-script.js"></script>	
			<script src="web/js/main.js"></script>	
		</body>
	</html>




  @endsection