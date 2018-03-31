<?php
session_start();
include 'dbcon.php';
 
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

<!-- //header -->	<div class="banner two">
<div class="banner-slider">
	<div class="banner-pos">


						<div class="container" style="width: 100%; height: 20%;">
							<div class="navigation text-center">
								<span class="menu"><img src="images/menu.png" alt=""/></span>
									<ul class="nav1">
									
										<li><a href="index-loggedin.php">HOME</a></li>
										<li><a class="active" href="profile.php">PROFILE</a></li>
										<li><a href="transaction.php">TRANSACTION</a></li>
										<li><a href="book.php">BOOK</a></li>
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
							<br>

<!-- banner -->


<div class="login">

<div class="container">
  <div style="margin: 0px auto; padding: 30px;
  width: 60%;border:3px solid black;


  margin:auto ; 
  border: 6px solid #305a72 ; 
  box-shadow:1px 1px 25px rgba(0,0,0,0.35); 
  border-radius:10px; 
 
  background-color:#f8f8f8;" > 	












	
		

					 	<?php

if (isset($_POST['submit']))
{

	$name = $_SESSION['name'];
	$comment = $_POST['comment'];

	if(empty($comment))
	{
		echo  "Fill up field";

	}
	else
	{
        $sql = "INSERT INTO comments (name, comment) values ('$name', '$comment')";
        mysqli_query($conn, $sql);
        echo "Comment sent!";


$getquery = "SELECT  * from comments ORDER BY id DESC LIMIT 5";
$search_result = $conn->query($getquery);
	}

}

?>
          <form action="comment.php" method="POST"> 
<div class="row">
    <div class="col-sm-10 col-sm-offset-1 hid">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3 text-center">
				<h3><b>Comment:</b></h3>
			</div>
	   </div>
	</div>
 </div>

<div class="form-group"> 
<div class="row">
    <div class="col-sm-10 col-sm-offset-1 hid">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3 text-center">
			<textarea name="comment" cols ="50" rows="3"></textarea>
		
			</div>
	   </div>
	</div>
 </div>
       
<br>
<div class="row">
    <div class="col-sm-10 col-sm-offset-1 hid">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3 text-center">
				<input type="submit" name="submit" value="SUBMIT ">
			</div>
		</div>
	 </div>	
 </div>		
			
		 </div>	
			</form>
					 </center>
			</div> </div>
</center>
			
			<div class="clearfix"></div>
		</div>
	</div>

<!-- //banner -->




     <!-- Bootstrap core JavaScript
    ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
<script src="js/html5shiv.js"></script>
<script src="js/respond.js"></script>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>'
<script src="js/respond.min.js"></script>

<script src="js/html5shiv-printshiv.min.js"></script>


  






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
</div></div>


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

</body>
</html>

