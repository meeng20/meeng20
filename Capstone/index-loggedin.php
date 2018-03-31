<?php
session_start();
error_reporting(0);
//error_reporting (E_ALL ^ E_NOTICE);
//$type = $_SESSION['type'];
//$member = "member";
if (isset($_SESSION['type']))
{
	if ($_SESSION['type']== member){
      $email = $_SESSION['email'];
	}else
	 header("location: login.php");
}
 else 
 header("location: login.php");

include 'dbcon.php';
$sql = "SELECT * FROM clientsrecord WHERE email='$email' ";
   $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
       while($row = $result->fetch_assoc()) 
      {
    
$id = $row['id'];
$name = $row['name'];
$address = $row['address'];
$bday = $row['bday'];
$gender = $row['gender'];
$contact = $row['contact'];
$email = $row['email'];

}
}

?><?php
include 'dbcon.php';

$sql = "SELECT * FROM homeupdate";
   $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
       
}
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
		<link href="css/index9.css" rel="stylesheet" type="text/css" media="all" />
			
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link href="css/responsive.css" rel="stylesheet">

												
	<!-- for-mobile-apps -->
		<!--
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Favorites Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script -->

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

<!-- banner -->
<div class="banner-slider">
	<div class="banner-pos">
		<!-- responsiveslides -->
							<script src="js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: false,
										nav: false,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
								</script>
		<!-- responsiveslides -->
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li>
					<div class="banner two"> 
						<div class="container" style="width: 100%; height: 100%;">
							<div class="navigation text-center">
								<span class="menu"><img src="images/menu.png" alt=""/></span>
									<ul class="nav1">
										<li><a class="active" href="index-loggedin.php">HOME</a></li>
										<li><a href="about-loggedin.php">ABOUT US</a></li>
										<li><a href="portfolio-loggedin.php">PORTFOLIO</a></li>
										<li><a href="package-loggedin.php">PACKAGE</a></li>
								
										<div class="clearfix"></div>
									</ul>
									
									<script> 
											$( "span.menu" ).click(function() {
											$( "ul.nav1" ).slideToggle( 300, function() {
											 // Animation complete.
											});
											});
									</script>
							</div>
						</div>



<div class="container" style="padding-top:200px;padding-bottom:100px;padding-left:90px;padding-right:90px;">

  <div class="transbox" style="text-align:center;">
<!-- //point burst circle -->
  <p>Whiteplates <br>Catering Services</p>
  
  

 </div>
	
</div>
</div>
</li>
	        <li>	
			  <div class="banner one">
					<div class="container" style="width: 100%; height: 100%;">
						<div class="navigation text-center">
							<span class="menu"><img src="images/menu.png" alt=""/></span>
								<ul class="nav1">
									<li><a class="active" href="index.php">HOME</a></li>
									<li><a href="about.php">ABOUT US</a></li>
									<li><a href="portfolio.php">PORTFOLIO</a></li>
									<li><a href="package.php">PACKAGE</a></li>
																			
									<div class="clearfix"></div>
								</ul>
									<script> 
											$( "span.menu" ).click(function() {
											$( "ul.nav1" ).slideToggle( 300, function() {
											 // Animation complete.
											});
											});
									</script>
						</div>
					</div>		


<div class="container" style="padding-top:200px;padding-bottom:100px;padding-left:90px;padding-right:90px;">

  <div class="transbox" style="text-align:center;">
<!-- //point burst circle -->
  <p>Whiteplates <br>Catering Services</p>
  

 </div>

</div>
</div>
</li>

		<li>
				<div class="banner three">
					<div class="container" style="width: 100%; height: 100%;">
						<div class="navigation text-center">
							<span class="menu"><img src="images/menu.png" alt=""/></span>							
								<ul class="nav1">
									<li><a class="active" nam ="index.php">HOME</a></li>
									<li><a href="about.php">ABOUT US</a></li>
									<li><a href="portfolio.php">PORTFOLIO</a></li>
									<li><a href="package.php">PACKAGE</a></li>
								
									<div class="clearfix"></div>
								</ul>	
									
									<script> 
											$( "span.menu" ).click(function() {
											$( "ul.nav1" ).slideToggle( 300, function() {
											 // Animation complete.
											});
											});
									</script>
						</div>
					</div>


<div class="container" style="padding-top:200px;padding-bottom:100px;padding-left:90px;padding-right:90px;">

  <div class="transbox" style="text-align:center;">
<!-- //point burst circle -->
  <p>Whiteplates <br>Catering Services</p>
  

 </div>
 
</div>
</div>
</li>

		
</div>
</div>

<div class="clearfix"></div>
	
</div>

<!-- //banner -->

<!-- welcome -->
<div class="welcome">
	<div class="container">
		<div class="wel-info">
			<h3>Welcome</h3>
			<div class="strip-line"></div>
			<p>Let Whiteplates Catering take care of all your event needs with easy booking and set-up at an affordable price.</p>
		</div>
	</div>
</div>




<!-- good -->
<div class="good">
	<div class="container">
		<div class="good-info">
			
			
		</div>
		<div class="good-grids">
			<div class="col-md-5 good-right">
			<?php while ($row = mysqli_fetch_array($result)):?>      
			<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['missionimage'] ).'" height="350" width="300"/>'; ?>		
			</div>
			<div class="col-md-7 good-left">
				<h3>MISSION</h3>
				<div class="strip"></div>				
  				<p><?php echo $row['missiondescription']; ?></p>
			</div>
			
			<div class="clearfix"></div>
		</div>
		
		<div class="good-grids">
			
			<div class="col-md-7 good-left">
				<h3>VISION</h3>
				<div class="strip"></div>
  				<p><?php echo $row['visiondescription']; ?></p>
			</div>
			<div class="col-md-5 good-right">
			<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['visionimage'] ).'" height="350" width="300"/>'; ?>		
				<div class="desc">
		
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		
		<div class="good-grids">
			<div class="col-md-5 good-right">
			<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['purposeimage'] ).'" height="350" width="300"/>'; ?>		
				<div class="desc">
		
				</div>
			</div>
			<div class="col-md-7 good-left">
				<h3>PURPOSE</h3>
				<div class="strip"></div>
  				<p><?php echo $row['purposedescription']; ?></p>
				
			</div>
			<?php endwhile;?>





			<div class="clearfix"></div>
	
<br><br>
</div>

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
							


  </div>
</div>

				
</body>



</html>