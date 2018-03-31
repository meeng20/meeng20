<?php
session_start();
error_reporting (E_ALL ^ E_NOTICE);
//$type = $_SESSION['type'];
//$member = "member";
if (isset($_SESSION['type']))
{
	if ($_SESSION['type']== member){
      $email = $_SESSION['email'];
      $id = $_SESSION['id'];
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
      <link href="css/clientlogin.css" rel="stylesheet" type="text/css" media="all" />

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
<body style="background-image:s background:#FFF8C6;">
<!-- header -->
<div class="header">
	<div class="container">
		<div class="top-header">
				<div class="header-left">
					
				</div>
					<ul class="pull-right">
						<a href="logout.php" style="color:white;">LOGOUT</a> 
		
					</ul>
				</div>				
				<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="banner two"> 
<!-- //header -->	
<div class="banner-slider">
	<div class="banner-pos">	


						<div class="container" style="width: 100%; height: 100%;">
							<div class="navigation text-center">
								<span class="menu"><img src="images/menu.png" alt=""/></span>
									<ul class="nav1">
									
										<li><a href="index-loggedin.php">HOME</a></li>
										<li><a class="active" href="profile.php">PROFILE</a></li>
										<li><a href="transaction.php">TRANSACTION</a></li>
										<li><a href="clientbook.php">BOOK</a></li>
										<li><a href="usersetting.php">SETTING</a></li>
										
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
							<br><br>
<div class="container" style="padding-left:100px; padding-right: 100px; padding-top: 0px; padding-bottom: 5px;">
</br></br>
	<!--<ol class="breadcrumb" style="background-color:#f65a5b">
		           <center>
						<h2><b><font color="white"> <a href="comment.php">LEAVE A COMMENT</a></h2></font></b>
					</center>
		    </ol>-->
 <div class="portlet light" 
 style="border:2px solid black; 
 padding:50px; 
 border: 6px solid #305a72;
	box-shadow:1px 1px 25px rgba(0,0,0,0.35);
	border-radius:10px;
	background-color:#f8f8f8; 
	opacity: .9;filter: alpha(opacity=80);">

        <h2 style="font-family:Verdana;font-size:20px;"><b><div style="border:2px solid black;padding:20px; background-color:#f65a5b; color: white; text-align: center;"> MY PROFILE </div></b></h2>
        </br>
            <p style="font-family:Verdana;"><b> Name: </b> <?php echo $name; ?> </p> 
            <p style="font-family:Verdana;"><b> Address : </b> <?php echo $address; ?> </p> 
            <p style="font-family:Verdana;"><b> Birthday : </b> <?php echo $bday; ?></p>
            <p style="font-family:Verdana;"><b> Gender : </b> <?php echo $gender; ?></p>
            <p style="font-family:Verdana;"><b> Contact : </b> <?php echo $contact; ?></p>
            <p style="font-family:Verdana;"><b> Email : </b> <?php echo $email; ?></p>
          </br>
      <br>
      <u><a href="comment.php">LEAVE A COMMENT</a></u>
      <br>
      </div>

    </div>


</div>

</div>


</div>
</div>

	

<!-- footer --><br><br><br><br>
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
