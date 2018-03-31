<?php
ob_start();
session_start();
error_reporting (E_ALL ^ E_NOTICE);
//$type = $_SESSION['type'];
//$member = "member";
if (isset($_SESSION['type']))
{
	if ($_SESSION['type']== member || admin || owner){
      $id = $_SESSION['id'];
      $email1 = $_SESSION['email'];
	}else
	 header("location: login.php");
}
 else 
 header("location: login.php");

include 'dbcon.php';
$sql = "SELECT * FROM clientsrecord WHERE id='$id' ";
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
$email2 = $row['email'];
$password = $row['password'];

}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Whiteplates Catering Services</title>
	  <!--//sweetalert-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	 
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
<body style="background-image: url('images/glass2.jpg'); background-repeat: no-repeat; background-size: cover;">
<div class="bg">
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

<!-- //header -->	
<div class="container" style="width: 100%; height: 20%;">
	<div class="navigation text-center">
		<span class="menu"><img src="images/menu.png" alt=""/></span>
			<ul class="nav1">
				<li><a href="index-loggedin.php">HOME</a></li>
				<li><a href="profile.php">PROFILE</a></li>
				<li><a href="transaction.php">TRANSACTION</a></li>
				<li><a href="book.php">BOOK</a></li>
				<li><a class="active" href="usersetting.php">SETTING</a></li>
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

 <div class="container">
    <div style="margin: 70px auto; 
    padding: 30px; 
    width: 90%;
    background-color:white;
    border:6px solid black;
    opacity: .8;
    filter: alpha(opacity=90); ">

<div style="color:red;">
<center>

     <?php
//include 'dbcon.php';

if (isset($_GET['msg'])){
  echo $_GET['msg'];
}
?>

</center>
</div>
<p style="text-align:center;"><h3><b>Setting</b></h3></p>
</br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-sm-4">
        </br>

<div class="hidden-large visible-phone">
  <nav class="dropnav navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
            
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a class="item green" id="change_password_p" href="usersetting.php">Change Password</a></li>
   
            </ul>
        </div>    
    </div>
  </nav>
</div>

     </div>

<?php
echo "You are about to change your Email:". $email1;;
?>
<form action="Emailupdate.php" method="post">
      <div class="col-md-5col-sm-">
        <div class="form-group">
                <div class="row">
              	    <div class="col-md-6">
                       <label for="password"> Enter Password:</label>
                       <input class="form-control" type="password" placeholder="Password" maxlength="70" name="user_password" onkeypress="" required>
                   </div>
                   <div class="col-md-6">
                       <label for="password"> New Email:</label>
                       <input class="form-control" type="text" placeholder="Desired Email" maxlength="70" name="new_email" onkeypress="" required>
                   </div>
                   <div class="col-md-6">
                        <label for="newpassword">Retype New Email:</label>
                        <input class="form-control" type="text" placeholder="Retype Email" maxlength="70" name="retypeemail" onkeypress="" required>
                  </div>
                </div>
          </div>
                
        </div><!-- end of two fields -->
        <center><h3><input name="btnsubmit" class="btn btn-success" type="submit" id="btnsubmit" value="Update Email"></h3></center>
</form>
      
</div>
  </div>
    </div>              
              
<?php
if (isset($_POST['btnsubmit'])){
	$password1 = $_POST['user_password'];
	$email = $_POST['new_email'];
	$retype = $_POST['retypeemail'];

	 if ($password1 == $password){
	 	if ($email != ""){
	 		// EMAIL FORMAT CHECKER
	 		if (filter_var($email, FILTER_VALIDATE_EMAIL) == true){
	 			if ($retype == $email){
	 				$sql = "UPDATE clientsrecord SET email ='$email' , activated = '0' , clienttype = 'ONLINE' WHERE id = '$id'";
	 				$update = $conn->query($sql);

	 				if (mysqli_affected_rows($conn)>0) {
					include_once 'editemail.php';

					
					} else 
					$msg= "Error updating email, Please try again";
                header('Location:Emailupdate.php?msg='.$msg.'');
				
	 			}
	 			else
				$msg= "Email does not match";
                header('Location:Emailupdate.php?msg='.$msg.'');

	 		}
	 		else
	 		$msg= "Invalid Email format";
                header('Location:Emailupdate.php?msg='.$msg.'');

	 	}
	 	else
	 	$msg= "Please input your desired Email";
                header('Location:Emailupdate.php?msg='.$msg.'');
	 }
	 else 
	 	$msg= "Incorrect password";
                header('Location:Emailupdate.php?msg='.$msg.'');

}
//include 'dbcon.php';
ob_end_flush();
       
    
?>



</div>

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