<?php
ob_start();
session_start();
error_reporting (E_ALL ^ E_NOTICE);
//$type = $_SESSION['type'];
//$member = "member";
if (isset($_SESSION['type']))
{
	if ($_SESSION['type']== owner){
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
$password = $row['password'];

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

<!-- //header -->	<div class="banner two">
<div class="banner-slider">
	<div class="banner-pos">
<div class="container" style="width: 100%; height: 20%;">
	<div class="navigation text-center">
		<span class="menu"><img src="images/menu.png" alt=""/></span>
			<ul class="nav1">
				<li><a href="index-loggedin.php">HOME</a></li>
				<li><a href="profile.php">PROFILE</a></li>
				<li><a href="transaction.php">TRANSACTION</a></li>
				<li><a href="book.php">BOOK</a></li>
				<li><a class="active" href="ownersetting.php">SETTING</a></li>
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
include 'dbcon.php';

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
              
                <li><a class="item green" id="change_password_p" href="emailownerupdate.php">Change Email</a></li>
            </ul>
        </div>    
    </div>
  </nav>
</div>

     </div>


<form action="ownersetting.php" method="post">
      <div class="col-md-5col-sm-">
        <div class="form-group">
                <div class="row">
                  
                   <div class="col-md-6">
                       <label for="password"> Current Password:</label>
                       <input class="form-control" type="password" placeholder="Password" maxlength="70" name="user_password" onkeypress="" required>
                   </div>
                   <div class="col-md-6">
                        <label for="newpassword">New Password:</label>
                        <input class="form-control" type="password" placeholder="New Password" maxlength="70" name="user_newpassword" onkeypress="" required>
                   <div class="row">
                      <div class="col-md-12">
                        <label for="retypepassword">Retype Password:</label>
                        <input class="form-control" type="password" placeholder="Re-type Password" maxlength="70" name="user_retypepassword" onkeypress="" required>

                      </div>
                   </div>
                  </div>
                </div>
          </div>
                
        </div><!-- end of two fields -->
        <center><h3><input name="btnsubmit" class="btn btn-success" type="submit" id="btnsubmit" value="Update"></h3></center>
</form>
      
</div>
  </div>
    </div>              
              
<?php

include 'dbcon.php';

    if(isset($_POST['btnsubmit']))
    {
       // $user_email = $_POST['user_email']; 
        $user_password = $_POST['user_password'];
        $user_newpassword = $_POST['user_newpassword'];
        $user_retypepassword = $_POST['user_retypepassword'];

      
        $sql = "SELECT * FROM clientsrecord WHERE email='$email'";
					$query = mysqli_query($conn, $sql);
					$result = $conn->query($sql);
					//if ($row = $result->fetch_assoc()) {
						$row = mysqli_fetch_assoc($query);
						$dbid = $row['id'];
						$dbname = $row['name'];
						$dbemail = $row['email'];				
						$dbpass = $row['password'];				
						$dbtype = $row['type'];
						
						//echo $dbtype;
						if ($user_password == $dbpass){
							if ($user_newpassword ==  $user_retypepassword){

							$sql = "UPDATE clientsrecord SET password='$user_newpassword' WHERE email ='$email'";
          					$result = $conn->query($sql);
          					$msg = "Successfully Changed!";
                header('Location:ownersetting.php?msg='.$msg.'');    
						}else
						$msg = "Password didn't match, Please try again.";
						header('Location:ownersetting.php?msg='.$msg.'');
						}
						else
						{
							$msg= "Incorrect current password";
                header('Location:ownersetting.php?msg='.$msg.'');
						}
					
		
					//}
					//else
					//{
					//	 $msg= "The email entered does not exist!";
              //  header('Location:usersetting.php?msg='.$msg.'');
					//}
ob_end_flush();
        /*$result = mysql_query("SELECT password FROM clientsrecord WHERE email='$user_email'");

            if(!$result)
            {
                $msg= "The email entered does not exist!";
                header('Location:usersetting.php?msg='.$msg.'');
            }
            else  if($user_password != mysql_result($result, 0))
            {
                $msg= "Entered an incorrect password";
                header('Location:usersetting.php?msg='.$msg.'');
            }

            elseif($user_newpassword != $user_retypepassword)
            {
                $msg = "New password and Re-typepassword must be the same!";
                header('Location:usersetting.php?msg='.$msg.'');  
            }
            else{
                mysql_query("UPDATE add_user SET password = '$user_newpassword' WHERE email = '$user_email'");  
                $msg = "Successfully Changed!";
                header('Location:usersetting.php?msg='.$msg.'');    
            }*/

    }
?>



</div>
<br><br>
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