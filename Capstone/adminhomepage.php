<?php
session_start();
error_reporting (E_ALL ^ E_NOTICE);
//$type = $_SESSION['type'];
//$member = "member";
if (isset($_SESSION['type']))
{
  if ($_SESSION['type']== admin){
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
?>
<?php
session_start();
include 'dbcon.php';
if(isset($_SESSION['email']) && isset($_SESSION['type']) )
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
		<link href="css/adminhomepage.css" rel="stylesheet" type="text/css" media="all" />
			
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
					<a href="usersetting.php" style="color:white;">SETTINGS</a> |
						<a href="logout.php" style="color:white;">LOGOUT</a> 
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
	<br><br><br>
<center>	<h1><b> UPDATE INTERFACE </b> </h1>  </center>
				
<!DOCTYPE html>
<html>
<head>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button2 {background-color: #555555;} /* Blue */
.button3 {background-color: #555555;} /* Red */ 
.button4 {background-color: #555555;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>
</head>
<body>

<div class="container">

	<div class="navbar" style="padding-top: 130px; padding-bottom: 150px; ">
		<ul class="well" style="padding:5px; background-color: lightgrey; opacity: .8; width: 100%;">
		<button class="button button2"  onclick="location.href='/meng5/updatehome.php';"> HOME INTERFACE</button>
<button class="button button3"  onclick="location.href='/meng5/updateabout.php';">ABOUT US INTERFACE</button>
<button class="button button5" style="width: 18%;"  onclick="location.href='/meng5/owneradmin_register.php';">ADD OWNER</button>
    	</ul>   </div>

</div>

<!-- footer --><br><br>
<div class="footer">
	<div class="container">
		
		<div class="footer-right">
			<ul>
<br>				
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