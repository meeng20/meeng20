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
		<link href="css/about9.css" rel="stylesheet" type="text/css" media="all" />
			
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link href="css/responsive.css" rel="stylesheet">

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
										<li><a class="active" href="portfolio-loggedin.php">PORTFOLIO</a></li>
										<li><a href="package-loggedin.php">PACKAGE</a></li>
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
						</div>


<div class="container" style="padding-top:100px;padding-bottom:100px;padding-left:90px;padding-right:90px;">

<div class="transbox" style="text-align:center;"> <p>Portfolio</p> </div>
	  
</div>
</div>
</div>


</br>
</br>
	<div class="about-info">
			<h3>Browse Portfolio</h3>
			<div class="strip-line st-border"></div>
		</div>	
				<div class="browse">
					<center>
					<h3><a href="themes.php">Themes</a></h3>
					</center>
				</div>		

</br></br>

	<div class="about-info">
			<h3>Browse Menu</h3>
			<div class="strip-line st-border"></div>
		</div>	
				<div class="browse">
					<center>
					<h3><a href="standardpackage.php">Standard Package</a> | 
					<a href="specialpackage.php">Special Package</a></h3>
					</center>
				</div>						
	</br></br>

<!-- maine video -->
<div class="maine">
			<div class="strip-line st-border"></div>
		</div><div class="clearfix"></div>

<video class="bga" src="video/maine.mp4" autoplay="true" loop="true" muted="true"></video>
</div>	
<!-- miane video -->






<!-- gallery-page -->
<div class="gallery">
	<div class="container">
		<div class="gallery-info">
			<h3>DEBUT CATERING SERVICES</h3>
			<p>A debut party is a milestone of a girl’s life—an official introduction and a step into womanhood. An event like this is one that she will remember all through her lifetime.</p>
		</div>
		</br></br>
		<div class="gallery-grids">
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/ndebut4.jpg" class="swipebox"><img src="images/ndebut4.jpg" class="img-responsive" alt="/">
							<div class="textbox">
							</div>
					</div></a>
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/ndebut2.jpg" class="swipebox"><img src="images/ndebut2.jpg" class="img-responsive" alt="/">
							<div class="textbox">
							</div>
					</div></a>
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/ndebut9.jpg" class="swipebox"><img src="images/ndebut9.jpg" class="img-responsive" alt="/">
							<div class="textbox">
							</div>
					</div></a>
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/ndebut13.jpg" class="swipebox"><img src="images/ndebut13.jpg" class="img-responsive" alt="/">
							<div class="textbox">
							</div>
					</div></a>
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/ndebut5.jpg" class="swipebox"><img src="images/ndebut5.jpg" class="img-responsive" alt="/">
							<div class="textbox">							</div>
					</div></a>
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/kiddie2.jpg" class="swipebox"><img src="images/kiddie2.jpg" class="img-responsive" alt="/">
							<div class="textbox">
							</div>
					</div></a>
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/ndebut7.jpg" class="swipebox"><img src="images/ndebut7.jpg" class="img-responsive" alt="/">
							<div class="textbox">
							</div>
					</div></a>
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/ndebut16.jpg" class="swipebox"><img src="images/ndebut16.jpg" class="img-responsive" alt="/">
							<div class="textbox">
							</div>
					</div></a>
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/ndebut17.jpg" class="swipebox"><img src="images/ndebut17.jpg" class="img-responsive" alt="/">
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

<!-- //gallery-page -->
<!-- gallery-page -->
<div class="gallery">
	<div class="container">
		<div class="gallery-info">
			<h3>WEDDING CATERING SERVICES</h3>
			<p>Your wedding is an event of a lifetime—a day full of hearts, promises, and visions for
what’s ahead. Whether you choose to celebrate it in a grand or a simple way, it’s
important to make sure that every detail is close to perfection.</p>
			</br></br>
		</div>
		<div class="gallery-grids">
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/nwedding12.jpg" class="swipebox"><img src="images/nwedding12.jpg" class="img-responsive" alt="/">
							<div class="textbox">
							</div>
					</div></a>
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/ndebut12.jpg" class="swipebox"><img src="images/ndebut12.jpg" class="img-responsive" alt="/">
							<div class="textbox">
							</div>
					</div></a>
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/nkiddie12.jpg" class="swipebox"><img src="images/nkiddie12.jpg" class="img-responsive" alt="/">
							<div class="textbox">
							</div>
					</div></a>
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/nwedding10.jpg" class="swipebox"><img src="images/nwedding10.jpg" class="img-responsive" alt="/">
							<div class="textbox">
							</div>
					</div></a>
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/nwedding2.jpg" class="swipebox"><img src="images/nwedding2.jpg" class="img-responsive" alt="/">
							<div class="textbox">							</div>
					</div></a>
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/nwedding3.jpg" class="swipebox"><img src="images/nwedding3.jpg" class="img-responsive" alt="/">
							<div class="textbox">
							</div>
					</div></a>
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/nwedding4.jpg" class="swipebox"><img src="images/nwedding4.jpg" class="img-responsive" alt="/">
							<div class="textbox">
							</div>
					</div></a>
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/nwedding5.jpg" class="swipebox"><img src="images/nwedding5.jpg" class="img-responsive" alt="/">
							<div class="textbox">
							</div>
					</div></a>
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/nwedding6.jpg" class="swipebox"><img src="images/nwedding6.jpg" class="img-responsive" alt="/">
							<div class="textbox">
							</div>
					</div></a>
					<div class="clearfix"> </div>
					

		</div>
		
	</div>

<!-- //gallery-page -->

<!-- gallery-page -->
<div class="gallery">
	<div class="container">
		<div class="gallery-info">
			<h3>KIDDIE CATERING SERVICES</h3>
			<p>Each birthday is like taking a step to another level in life—a step in growing up and therefore, a milestone worth remembering. For younger kids, birthday celebrations could make them feel more important and loved.
Whether you’re having your kid’s 1 st , 5 th , or 7 th birthday party, we’ll be there to help you from the planning, preparation, up until the big day full of fun.</p>
			</br></br>
			</div>
		<div class="gallery-grids">
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/kiddie8.jpg" class="swipebox"><img src="images/kiddie8.jpg" class="img-responsive" alt="/">
							<div class="textbox">
							</div>
					</div></a>
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/ndebut14.jpg" class="swipebox"><img src="images/ndebut14.jpg" class="img-responsive" alt="/">
							<div class="textbox">
							</div>
					</div></a>
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/nkiddie13.jpg" class="swipebox"><img src="images/nkiddie13.jpg" class="img-responsive" alt="/">
							<div class="textbox">
							</div>
					</div></a>
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/kiddie5.jpg" class="swipebox"><img src="images/kiddie5.jpg" class="img-responsive" alt="/">
							<div class="textbox">
							</div>
					</div></a>
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/nkiddie15.jpg" class="swipebox"><img src="images/nkiddie15.jpg" class="img-responsive" alt="/">
							<div class="textbox">							</div>
					</div></a>
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/nkiddie19.jpg" class="swipebox"><img src="images/nkiddie19.jpg" class="img-responsive" alt="/">
							<div class="textbox">
							</div>
					</div></a>
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/nkiddie17.jpg" class="swipebox"><img src="images/nkiddie17.jpg" class="img-responsive" alt="/">
							<div class="textbox">
							</div>
					</div></a>
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/debut12.jpg" class="swipebox"><img src="images/debut12.jpg" class="img-responsive" alt="/">
							<div class="textbox">
							</div>
					</div></a>
					<div class="col-md-4 gallery-grid gallery1">
						<a href="images/nkiddie16.jpg" class="swipebox"><img src="images/nkiddie16.jpg" class="img-responsive" alt="/">
							<div class="textbox">
							</div>
					</div></a>
					<div class="clearfix"> </div>
					

		</div>
		
	</div>
</div>
<!-- //gallery-page -->
</div>

</div>







<!-- footer -->
<div class="footer">
	<div class="container">
		
		<div class="footer-right">
			<ul>
				<li><a href="https://www.facebook.com/WhitePlateCateringServices/" class="facebook"> </a></li>
				
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

	  

