<?php
ob_start();
error_reporting (E_ALL ^ E_NOTICE);
session_start();
?>

<?php 
if(isset($_SESSION['type'])) {
   
   if ($_SESSION['type'] == member) {
    	header("Location: profile.php");
    }
    
    elseif ($_SESSION['type'] == owner){
    	header("Location: viewrecords.php");	 
    }
    elseif ($_SESSION['type'] == admin){
    	header("Location: adminhomepage.php");	 
    }
 }
 else{
 	echo $form;
 }
 ?>		

<!DOCTYPE html>
<html>
<head>
	<title>Whiteplates Catering Services</title>
	  <!--//sweetalert-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/register9.css" rel="stylesheet" type="text/css" media="all" />
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
					</div>



<br><br><br>
<!-- //banner -->
<!-- login-page -->
<!-- //banner -->
<!-- login-page -->

<div class="signin" style="text-align:center;"> 
<font color="red">
<?php	
	include 'dbcon.php';
	
		if ($_POST['loginbtn']){
			$email = $_POST['email'];
			$password = $_POST['password'];

			if($email){
				if ($password) {
					require_once'dbcon.php';

					//$password = md5(md5("sadasda".$password."kljlj"));
					//echo "$password";
					//$act="1";
					$sql = "SELECT * FROM clientsrecord WHERE email='$email'";
					$query = mysqli_query($conn, $sql);
					$result = $conn->query($sql);
					if ($row = $result->fetch_assoc()) {
						$row = mysqli_fetch_assoc($query);
						$dbid = $row['id'];
						$dbname = $row['name'];
						$dbemail = $row['email'];				
						$dbpass = $row['password'];				
						$dbtype = $row['type'];
						$dbactivate = $row['activated'];
						//$act= "1";
						//echo $dbtype;
						if ($dbactivate == 1){
						if ($password == $dbpass){

							if ($dbtype == admin){
								$_SESSION['id'] = "$dbid";
								$_SESSION['name'] = "$dbname";
								$_SESSION['email'] = "$dbemail";
								$_SESSION['type'] = "$dbtype";
								header("location: adminhomepage.php");
						}
							elseif ($dbtype == member){
								$_SESSION['id'] = "$dbid";
								$_SESSION['name'] = "$dbname";
								$_SESSION['email'] = "$dbemail";
								$_SESSION['type'] = "$dbtype";
								header("location: profile.php");
						}
							elseif ($dbtype == owner){
								$_SESSION['id'] = "$dbid";
								$_SESSION['name'] = "$dbname";
								$_SESSION['email'] = "$dbemail";
								$_SESSION['type'] = "$dbtype";
								header("location: viewrecords.php");
						}
						}
						
						else {
					echo '<script> swal({ title: "ERROR!",
 text: "Incorrect password!",
 type: "error"}).then(okay => {
   if (okay) {
    window.location.href = "login.php";
  }
});

</script>';
							}
						}
						else{
							echo '<script> swal({ title: "ERROR!",
 text: "Email is not yet verified!",
 type: "error"}).then(okay => {
   if (okay) {
    window.location.href = "register.php";
  }
});

</script>';
						}
					}
					else{
						echo '<script> swal({ title: "ERROR!",
 text: "The email you entered does not exist!",
 type: "error"}).then(okay => {
   if (okay) {
    window.location.href = "login.php";
  }
});

</script>';
					}
				
				}
				else {
					echo "You must enter your password. ";
				}
			}
			else {
				echo "You must enter your email. ";
			}
		}

ob_end_flush();
	?>
	</font>	  
	
	
	
<div class="container">
  <div style="margin: 0px auto; padding: 30px;
  width: 70%;border:3px solid black;



  border: 6px solid #305a72 ; 
  box-shadow:1px 1px 25px rgba(0,0,0,0.35); 
  border-radius:10px; 
 
  background-color:#f8f8f8;" > 	
	
	
	
<form class="form-signin" action="login.php" method="post">
	

	<ol class="breadcrumb" style="background-color:#f65a5b">
            <center>
			
			
          <h3><b><font color="white">Login Form</h3></font></b>

		  
			</center>
        </ol>
<div class="form-group"> 
		<div class="row">  
			 <div class="col-sm-6 col-sm-offset-3">
				<label><label for="email">Email:</label></label>         
			<input type="text" class="form-control" name="email" placeholder="Enter email" maxlength="50" style="text-align:center;" autocomplete="off" required></input>
			</div>
	   </div>
    </br>
    <div class="form-group"> 
		<div class="row">  
			  <div class="col-sm-6 col-sm-offset-3">
				<label><label for="password">Password:</label></label>
          
		  <input type="password" class="form-control" name="password" placeholder="Enter password" maxlength="50" style="text-align:center;" autocomplete="off" required> </input>
			</div>
			</div>
		</div>
		
	<br><br>
        <input type="submit" name="loginbtn" value="Login" class="btn btn-primary" style="clear: both;"></input>
		


<br><br><br>
		  <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
				<b><label><p style="float: left;"> No Account?<u><a href="register.php"> Register Now!</a></u></p><br>
		
		
		

				<p style="float: left;">Forgot Password?<u><a href="forpass.php">  Click Here!</a></u></p></b></font>   
				</div>
		</div>
        
   </div>
 </div>
 </div>
 </div>
 </div><br><br>
 </div>
</form>
			



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

