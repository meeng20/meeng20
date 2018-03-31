



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
					 
					 <!-- FORM FOR THE USERNAME -->
					 <?php
$form1 = "<form action='forpass2.php' method='post'>
						<h5>Enter your desired new password</h5>
						 <input type='password' name='pass1'/>
						<h5>Confirm Password</h5>
						 <input type='password' name='pass2'/>
						 <input type='submit' name='resetbtn' value='RESET'/>
						 </form>";
	 $login = "Password Successfully reset <a href='login.php'>LOGIN NOW ?</a>";
if (!empty($_POST['resetbtn'])) {
					 		$pass1 = $_POST['pass1'];
					 		$pass2 = $_POST['pass2'];

					 		if (empty($pass1 && $pass2)){
					 			echo "Please input new password. $form1";
					 		}
					 		else{
					 					if ($pass1 == $pass2) {
					 			$update_query= "UPDATE clientsrecord SET password = '$pass1' WHERE email = '$email'";
								//$query = mysqli_query($conn, $sql);
								$changepass = $conn->query($update_query);
								if ($changepass){
									if (mysqli_affected_rows($conn)>0) {
										session_destroy();
									echo $login;
									
									
									//header("location: login.php");
									
									} else {
									echo "Please try another password. $form1";
									}
								}
					 		}
					 		else {
					 			echo "Password doesn't match. $form1";
					 		}
					 		}
					 
					 	}
					 	else{
					 		echo $form1;
					 	}
					 	
?>



						 
					 </form>
				</div>	
				</br></br></br></br></br></br></br>























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
	</div></div></div></div>
</div>
<!-- //login-page -->

<!-- footer -->
<div class="footer">
	<div class="container">
		
		<div class="footer-right">
			<ul>
<br>	<br>				
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
/*
$form1 = "<form action='forpass2.php' method='post'>
						<h5>Enter your desired new password</h5>
						 <input type='text' name='pass1'/>
						<h5>Confirm Password</h5>
						 <input type='text' name='pass2'/>
						 <input type='submit' name='resetbtn' value='RESET'/>
						 </form>";
	 $homepage = "Password Successfully reset <a href='homepage.php'>LOGIN NOW ?</a>";
if (!empty($_POST['resetbtn'])) {
					 		$pass1 = $_POST['pass1'];
					 		$pass2 = $_POST['pass2'];
					 		if ($pass1 == $pass2) {
					 			$update_query= "UPDATE clientsrecord SET password = '$pass1' WHERE username = '$username'";
								//$query = mysqli_query($conn, $sql);
								$changepass = $conn->query($update_query);
								if ($changepass){
									if (mysqli_affected_rows($conn)>0) {
										session_destroy();
									echo $homepage;
									
									
									//header("location: homepage.php");
									
									} else 
									echo "Please try another password. $form1";
									
								}
					 		}
					 		else 
					 			echo "Password doesn't match. $form1";
					 	}
					 	else
					 		echo $form1;*/
					 	
?>