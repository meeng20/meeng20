<?php
ob_start();
session_start();
error_reporting(0);
//error_reporting (E_ALL ^ E_NOTICE);
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
      <link href="css/view.css" rel="stylesheet" type="text/css" media="all" />


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
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
    $( "#checkin" ).datepicker({ minDate: 0});
	
  } );
  </script>

</head>
<div class="banner two">
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


<!-- //header -->	
<div class="banner-slider">
	<div class="banner-pos">	


						<div class="container" style="width: 100%; height: 20%;">
							<div class="navigation text-center">
								<span class="menu"><img src="images/menu.png" alt=""/></span>
									<ul class="nav1">
									
										<li><a href="index-loggedin.php">HOME</a></li>
										<li><a href="profile.php">PROFILE</a></li>
										<li><a class="active" href="transaction.php">TRANSACTION</a></li>
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
							<br>
<br><br>


<div style="margin: 50px auto; 
    padding: 10px; 
    width: 90%;
    height: 100%;
   box-shadow:1px 1px 25px rgba(0,0,0,0.35);
   border-radius:10px;
border: 6px solid #305a72;
    background-color: white;
; ">
<div class="container">
        <h2 style="font-family:Verdana;font-size:20px;"><b><div style="border:2px ;padding:15px; background-color:#f65a5b; color: white; text-align: center;"> My Transaction </div></b></h2>
<br>
<br><br>		


<div class="table-responsive">
          <table class="table table-bordered table-hover">
            <tr >
              <th class="bg-primary">CLIENT ID</th>
              <th class="bg-primary">STATUS</th>
              <th class="bg-primary">DATE</th>
              <th class="bg-primary">TIME</th>
              <th class="bg-primary">EVENT</th>
			  <th class="bg-primary">TITLE</th>
			  <th class="bg-primary">GUEST NO.</th>
			  <th class="bg-primary">VENUE</th>
			  <th class="bg-primary">MENU</th>
			  <th class="bg-primary">PACKAGE TYPE</th>
			  <th class="bg-primary">BALANCE</th>
            </tr>

			

      <?php
//$sql = "SELECT r*, o* FROM clientsrecord WHERE username LIKE '%$search%' AND type = '$type'";
$sql = "SELECT * FROM clientsorder WHERE IDclient='$id' ORDER BY status";
   $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
       while($row = $result->fetch_assoc()) 
      {
 $clientid = $row['id'];      
$status = $row['status'];    
$date = $row['pref_date'];
$time = $row['pref_time'];
$event = $row['pref_event'];
$title = $row['title'];
$guest = $row['guests_no'];
$venue = $row['pref_venue'];
$food = $row['food_choice'];
$package = $row['packagetype'];
$balance = $row['balance'];

  ?>
    <tr align="center" > 
    	 <td><?php echo $clientid;?></td>
      <td><?php echo $status;?></td>
      <td><?php echo $date;?></td>
      <td><?php echo $time;?></td>
      <td><?php echo $event;?></td>
      <tD><?php echo $title;?></td>
      <td><?php echo $guest;?></td>
      <td><?php echo $venue;?></td>
      <td><?php echo $food;?></td>
      <td><?php echo $package;?></td>
      <td><?php echo $balance;?></td>
    </tr>

<?php
}
}
?>
  </table>
</div>
</div>

</div>

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





</table>



</form>
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
</div>
<!-- footer --></div>
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

</center>
</body>
</html>