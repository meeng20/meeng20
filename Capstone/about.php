<?php
include 'dbcon.php';

$sql = "SELECT * FROM aboutupdate";
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
			<link href="css/about9.css" rel="stylesheet" type="text/css" media="all" />

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
				<div class="login-section">
					<ul class="nav navbar-nav navbar-right">
            			<li><a href="javascript:void(0)" data-toggle="modal" data-target="#login-signup-modal">Login/Signup</a></li>
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
							<div>
							<li><a href="index.php">HOME</a></li>
							<li><a class="active" href="about.php">ABOUT US</a></li>
							
							
  
						
							<li><a href="portfolio.php">PORTFOLIO</a></li>
					
							<li><a href="package.php">PACKAGE</a></li>
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
			
			
			<div class="container text-center" style="padding-top:100px;padding-bottom:100px;">
				<div class="transbox" style="text-align:center;">
					
					<p>About Us</p>
					</div>
				</div>	 
			</div>
		
			
		</div>
	</div>
</div>
<!-- good -->
<div class="good">
	<div class="container">
		<div class="good-info">		
		</div>
		<div class="good-grids">
			<div class="col-md-7 good-left">
				<h3>HISTORY</h3>
				<?php while ($row = mysqli_fetch_array($result)):?>      

				<div class="strip"></div>
				<p><?php echo $row['history']; ?></p>
				
	</div>
			<div class="col-md-5 good-right">
			<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="350" width="300"/>'; ?>		
				<div class="desc">
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //good -->

	
<!-- test -->
<div class="testimonial">
	<div class="container">
		<!-- responsiveslides -->
							<script src="js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider4").responsiveSlides({
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
			
					<div class="testm-info" style="margin-left: 50px;">
						<h3>TESTIMONIAL</h3>
<p><?php
include 'dbcon.php';

$getquery = "SELECT  * from comments ORDER BY id DESC LIMIT 5";
$search_result = $conn->query($getquery);

while($rows = mysqli_fetch_array($search_result))
{
	$dbid = $rows['id'];
	$dbname = $rows['name'];
	$dbcomment = $rows['comment'];
	
	echo "<h4>"."<font color='white'>".$dbcomment."</font>"."</h4>".'<br />';
}


?></p>
						
					</div>			

		</div>
	</div>
</div>
<!-- //test -->


</br></br></br></br>


<!--contact-->
<div class="container section2">
  <div class="wrapper">
    <div class="row">
      <div class="col-md-6">
      <h1>Address</h1>
      	<p><?php echo $row['address']; ?></p>
     </div>
    </div>
  </div>
</div>	
	</br>

<div class="container section2">
  <div class="wrapper">
    <div class="row">	
	<div class="col-md-6">
      <h1>Contact Nos.</h1>
      <p><b>Landline:</b><?php echo $row['landline']; ?></p>
      <p><b>Smart:</b><?php echo $row['smart']; ?></p>
	  <p><b>Globe:</b><?php echo $row['globe']; ?></p>   
    </div>
    </div>
   </div>
</div>
	</br>

<div class="container section2">
  <div class="wrapper">
    <div class="row">	
	<div class="col-md-6">
      <h1>Email</h1>
        <p><?php echo $row['email']; ?></p>
    </div>
    </div>
	</div>
</div>
<!--contact-->


</br></br></br>
	<?php endwhile;?>

<!--map-->
<div class="contact">
	<div class="container">
		<div class="contact-info">
			<h3>VIEW ON MAP</h3>
			<div class="strip-line"></div>
			</br>
		</div>
		<div class="contact-map">
			<iframe src="https://maps.google.com/maps?q=Reyes%20Compound%20Fourth%20Estate%2C%20Sucat%2C%20Paranaque%20City&t=&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0"></iframe>
		</div>
</div>
</div>
<!--map-->

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

</body>
</html>

