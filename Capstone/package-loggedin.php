<?php
session_start();
error_reporting(0);
include 'dbcon.php';
$type = $_SESSION['type'];
$member = "member";
if(isset($_SESSION['email']) && $type == $member )
{
    $email = $_SESSION['email'];
    $name = $_SESSION['name'];
}
 else 
 header("location: login.php");



?>
<!DOCTYPE html>
<html>
<head>
	<title>Whiteplates Catering Services</title>
	<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
		
	<!--//fonts-->
			<link href="css/bootstrap.css" rel="stylesheet">
			<link href="css/stylea.css" rel="stylesheet" type="text/css" media="all" />
			<link href="css/venue.css" rel="stylesheet" type="text/css" media="all" />


	<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Favorites Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->	
	<!-- js -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- js -->
	<!-- cart -->
		<script src="js/simpleCart.min.js"> </script>
	<!-- cart -->
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->

</head>
<body>
<div class="bg">
<!-- header -->
<div class="header">
	<div class="container">
		<div class="top-header">
				<div class="header-left">
					
				</div>
				<div class="login-section">
					<ul>
						<li><a href="profile.php"><?php echo $name; ?> </a>  </li> |
						<li><a href="logout.php">Log out</a> </li>	
					</ul>
				</div>				
				<div class="clearfix"></div>
		</div>
	</div>
</div>

<!-- //header -->	


<!-- banner -->
<div class="banner-slider">
	<div class="banner-pos">
						<div class="banner four page-head">

						<div class="container" style="width: 100%; height: 100%;">
							<div class="navigation text-center">
								<span class="menu"><img src="images/menu.png" alt=""/></span>
									<ul class="nav1">
										<li><a href="index-loggedin.php">HOME</a></li>
										<li><a href="about-loggedin.php">ABOUT US</a></li>
										<li><a href="portfolio-loggedin.php">PORTFOLIO</a></li>
										<li><a class="active" href="package-loggedin.php">VENUE</a></li>
										<div class="clearfix"></div>
									</ul>
									<!-- script for menu -->
										<script> 
											$( "span.menu" ).click(function() {
											$( "ul.nav1" ).slideToggle( 300, function() {
											 // Animation complete.
											});
											});
										</script>
									<!-- //script for menu -->
							</div>


<div class="container" style="padding-top:100px;padding-bottom:100px;padding-left:90px;padding-right:90px;">

	<div class="transbox" style="text-align:center;"> <p>Venue</p> </div>
	  
</div>
</div>
</div>



<!-- gallery-page -->

	<div class="container">
		<div class="gallery-grids">
		
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/v1.jpg" class="swipebox"><img src="images/v1.jpg" class="img-responsive" alt="/">
						<h1>Blue Leaf Filipinas</h1>
						<h3>Location:</h3>
						<p>Belle Avenue, Aseana City, Parañaque</p>						
						</br>
						<h3>Venue type:</h3>
						<p>Air-Conditioned Function Hall</p>

							<div class="textbox">
							</div>
					</div></a>

					
					
					
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/v4.jpg" class="swipebox"><img src="images/v4.jpg" class="img-responsive" alt="/">
						<h1>Casa Feliza</h1>
						<h3>Location:</h3>
						<p>44 Filipinas Ave, Parañaque, Metro Manila</p>						
						</br>
						<h3>Venue type:</h3>
						<p>Air-Conditioned Function Hall</p>

							<div class="textbox">
							</div>
					</div></a>
					
					
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/v5.jpg" class="swipebox"><img src="images/v5.jpg" class="img-responsive" alt="/">
						<h1>Villar Sipag</h1>
						<h3>Location:</h3>
						<p>C5 Extension Road, Brgy Pulanglupa Uno, 1742, Las Pinas, Metro Manila</p>						
						</br>
						<h3>Venue type:</h3>
						<p>Air-Conditioned Function Hall</p>

							<div class="textbox">
							</div>
					</div></a>
					
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/v7.jpg" class="swipebox"><img src="images/v7.jpg" class="img-responsive" alt="/">
						<h1>Chateau Elysee </h1>
						<h3>Location:</h3>
						<p>Doña Soledad Avenue, Parañaque City</p>						
						</br>
						<h3>Venue type:</h3>
						<p>Clubhouse<p>

							<div class="textbox">
							</div>
					</div></a>
					
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/v6.jpg" class="swipebox"><img src="images/v6.jpg" class="img-responsive" alt="/">
						<h1>El Paseo De Fortunata</h1>
						<h3>Location:</h3>
						<p>Paranaque, Manila, Metro Manila</p>						
						</br>
						<h3>Venue type:</h3>
						<p>Clubhouse</p>

							<div class="textbox">
							</div>
					</div></a>
					
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/v10.jpg" class="swipebox"><img src="images/v10.jpg" class="img-responsive" alt="/">
						<h1>Citadella Clubhouse</h1>
						<h3>Location:</h3>
						<p>CCP Compound, Gil Puyat Ave. cor Roxas Blvd</p>						
						</br>
						<h3>Venue type:</h3>
						<p>Clubhouse</p>

							<div class="textbox">
							</div>
					</div></a>
					
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/v8.png" class="swipebox"><img src="images/v8.png" class="img-responsive" alt="/">
						<h1>Sienna Park Residences</h1>
						<h3>Location:</h3>
						<p>West Service Road, Brgy. Sun Valley, Bicutan, Parañaque</p>						
						</br>
						<h3>Venue type:</h3>
						<p>Air-Conditioned Function Hall</p>

							<div class="textbox">
							</div>
					</div></a>
					
					
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/v9.jpg" class="swipebox"><img src="images/v9.jpg" class="img-responsive" alt="/">
						<h1>The Village Sports Club</h1>
						<h3>Location:</h3>
						<p>El Grande Corner Tropical Avenue, BF Homes, Parañaque</p>						
						</br>
						<h3>Venue type:</h3>
						<p>Clubhouse</p>

							<div class="textbox">
							</div>
					</div></a>
					
					
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/v2.jpg" class="swipebox"><img src="images/v2.jpg" class="img-responsive" alt="/">
						<h1>The Pergola</h1>
						<h3>Location:</h3>
						<p>CCP Compound, Gil Puyat Ave. cor Roxas Blvd</p>						
						</br>
						<h3>Venue type:</h3>
						<p>Air-Conditioned Function Hall</p>

							<div class="textbox">
							</div>
					</div></a>
					
					
					
					<div class="clearfix"> </div>
					

		</div>
		<link rel="stylesheet" href="css/swipebox.css">
					<script src="js/jquery.swipebox.min.js"></script> 
						<script type="text/javascript">
							jQuery(function($) {
								$(".swipebox").swipebox();
							});
						</script>
	</div>
</div>
<!-- //gallery-page -->



</br>
</br>
</br>
</br>

<!-- footer -->
<div class="footer">
	<div class="container">
		
		<div class="footer-right">
			<ul>
				<br><br>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //footer -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
</div>
</body>
</html>
