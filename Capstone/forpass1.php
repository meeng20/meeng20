<?php
error_reporting (E_ALL ^ E_NOTICE);
session_start();
include 'dbcon.php';
if($_SESSION['question']){
	$question = $_SESSION['question']; 
	$email = $_SESSION['email'];
	$answer = $_SESSION['answer'];
  
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
			<link href="css/login9.css" rel="stylesheet" type="text/css" media="all" />
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
<div class="banner two">
<!-- header -->
<div class="header">
	<div class="container">
		<div class="top-header">
				<div class="header-left">
					
				</div>
				<div class="login-section">
					<ul>
						<li><a href="login.php">Book Now</a>  </li> |
						<li><a href="register.php">Register</a> </li>
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
				
						<div class="container" style="width: 100%; height: 100%;">
							<div class="navigation text-center">
								<span class="menu"><img src="images/menu.png" alt=""/></span>
									<ul class="nav1">
										<li><a href="index.php">HOME</a></li>
										<li><a href="about.php">ABOUT US</a></li>
										<li><a href="portfolio.php">PORTFOLIO</a></li>
										<li><a href="venue.php">VENUE</a></li>
										
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
							<!-- point burst circle -->
							
							<!-- //point burst circle -->
							
						</div>
					</div>
	</div>
	
<br><br>
<!-- //banner -->
<!-- login-page -->
<div class="login">
	<div class="container" style="padding: 0px;">
			<div class="login-grids">
			<fieldset style = " width:60% ; 
			margin:auto ; 
			border: 6px solid #305a72 ; 
			box-shadow:1px 1px 25px rgba(0,0,0,0.35);
			border-radius:10px; 
			padding:20px ; 
			background-color:#f8f8f8; ">
			
			
			<ol class="breadcrumb" style="background-color:#f65a5b">
		           <center>
						<h3><b><font color="white"> Reset Password</h3></font></b>
					</center>
		    </ol>



			<div class="col-md-6 log">
		
					 <p>Enter your correct answer.</p>		
					 
					 <!-- FORM FOR THE USERNAME -->
					 <?php
$form = "<form action='forpass1.php' method='post'>
						 <input type='text' name='answer1'/>
						 <input type='submit' name='submitbtn' value='SUBMIT'/>
						 </form>";


				if (!empty($_POST['submitbtn'])){
					$answer1 = $_POST['answer1'];
				
					if($answer1) {
					 if ($answer1 == $answer) {
					 	
					 	header("location:forpass2.php");
					 }
					 else
					  	    echo "Your answer doesn't match <br>$question<br>$form";
					}
					else
						echo "Please Input your answer <br>$question<br>$form";
				}
				else
						echo $question.$form;
				
					
?>



						 
					 </form>
				</div>	























<!--				<?php
			if(isset($_POST['forgot']) && !empty($_POST['forgot']))
		{ 	
			
			$uname = $_POST['Uname'];
			

			$sql = "SELECT * FROM usertbl WHERE username='$uname'";
			
			$result = $conn->query($sql);
	 		
          	

			
			if ($row = $result->fetch_assoc()) {
				
				$_SESSION['user'] = "$uname";
				echo "Welcome ".$_SESSION['user']; 

					echo "
					<form>
					<h5>Enter Your Answer:</h5>	
						

					</form>";

				}	
			elseif (!$row = $result->fetch_assoc()){
	
				echo "<br><span style=color:#A52A2A;text-align:center;><b>Inalid Username</span>";		
				}
	    }
	   
	
        	?>-->
			</div>
			</div>
		</div>
	</div>
</div>
<!-- //login-page -->

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



<?php
/*error_reporting (E_ALL ^ E_NOTICE);
session_start();
include 'dbcon.php';
if($_SESSION['question']){
	$question = $_SESSION['question']; 
	$username = $_SESSION['username'];
	$answer = $_SESSION['answer'];
  
}
 else 
 header("location: homepage.php");

?>
<!DOCTYPE html>
<html>
<body>

<?php
$form = "<form action='forpass1.php' method='post'>
						 <input type='text' name='answer1'/>
						 <input type='submit' name='submitbtn' value='SUBMIT'/>
						 </form>";


				if (!empty($_POST['submitbtn'])){
					$answer1 = $_POST['answer1'];
				
					if($answer1) {
					 if ($answer1 == $answer) {
					 	
					 	header("location:forpass2.php");
					 }
					 else
					  	    echo "Your answer doesn't match <br>$question<br>$form";
					}
					else
						echo "Please Input your answer <br>$question<br>$form";
				}
				else
						echo $question.$form;
				
					
?>

<form method="GET">
<input type="submit" name="Logout" value="LOGOUT">
					</form>
					<?php 
					if(isset($_GET['Logout'])){
					session_destroy();
        			//header("Location:homepage.php");
        						}
        						?>
					
</body>
</html>
*/
?>