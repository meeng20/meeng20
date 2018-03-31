<!DOCTYPE html>
<html>
<head>
	<title>Whiteplates Catering Services</title>
	<!--//sweetalert-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/view.css" rel="stylesheet" type="text/css" media="all" />
 <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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
										<li><a class="active" href="clientbook.php">BOOK</a></li>
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

<!-- //booking -->


<?php

$errorvenue = "";
$message = "<font color='black'>"."Thank You for booking with us! Please wait for the email confirmation of your request and for the payment informations within 12 to 24 hours."."</font>";

if(isset($_POST ['bookbtn']))
{

$id=$_SESSION['id'];
$name = $_SESSION['name'];
$first=$_SESSION['email'];
$Date= date('Y-m-d', strtotime($_POST['datepicker']));
$starttime=$_POST['starttime'];
$endtime=$_POST['endtime'];
$Time = $starttime." to ".$endtime;
if(isset($_POST['event_radio']))
{
$Event = $_POST['event_radio'];
}
$Title=$_POST['title'];
$Guest=$_POST['guest'];
$Theme=$_POST['theme'];
$venue=$_POST['Venue'];

$Alladdons=$_POST['alladdons'];

if(isset($_POST['package_radio']))
{
$package_radio = $_POST['package_radio'];
}
$total = $_POST['total']; 
$tmpstatus = "PENDING";
$balance = $total;
$IDclient = $_POST['id'];

if (!ctype_alpha($venue))
{
	$errorvenue = "Please input letters only";
}

if(empty($Date && $Time && $Event && $venue && $Guest && $Theme && $package_radio && $Title))
{
echo '<script> swal({ title: "ERROR!",
 text: "Please complete informations!",
 type: "error"}).then(okay => {
   if (okay) {
    window.location.href = "clientbook.php";
  }
});

</script>';
}
		
		$sql2 = "SELECT * FROM clientsorder WHERE title = '$Title'";
		$result2 = $conn->query($sql2);
		if ($result2 -> num_rows == 0 ) {
			
		$sql3 = "SELECT * FROM clientsorder WHERE pref_date = '$Date'";
		$result3 = $conn->query($sql3);
		//$result = mysqli_query("SELECT * FROM clientsorder WHERE name='$first'");

		if($result3 -> num_rows == 0 )


		{
			$sql4 = "INSERT INTO clientsorder (name, email, pref_date, pref_time, pref_event, title, guests_no, theme, pref_venue, addons, payment_total, packagetype, image, status, reservationamount, reservationdate, partialamount, partialdate, fullamount, fulldate, balance, totalpayment, IDclient) values ('$name', '$first','$Date', '$Time','$Event', '$Title', '$Guest', '$Theme', '$venue', '$Alladdons', '$total', '$package_radio', '', '$tmpstatus', '', '', '', '', '', '', '$balance', '', '$IDclient')";

		if (!mysqli_query($conn, $sql4))
		{
			echo 'Not inserted';
		}
		else
		{
			
$sql5 = "SELECT * FROM clientsorder WHERE email = '$first' and pref_date = '$Date'";
		$result5 = $conn->query($sql5);

		if ($result5->num_rows > 0)
		{
   		 while($row5 = $result5->fetch_assoc()) 
    	{
    		echo "<center>";
    		echo "</center>";
    		?>
    		<center>
    		<br>
        <div class="portlet" style="padding-left: 250px; padding-right: 250px;padding-top: 50px;border: 3px solid black; padding: 10px; background-color: #FBF6D9; opacity: .9; width: 400px;">
        <?php
        echo "<center>";
    		echo "<b>"."<h3>".$message."</h3>"."</b>";



        echo "<table>";
        echo "<tr>";
        echo "<th>"."Name:"."</th>";
        echo "<td>".$row5['name']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>"."Email:"."</th>";
        echo "<td>".$row5['email']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>"."Event Title:"."</th>";
        echo "<td>".$row5['title']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>"."Event Date:"."</th>";
        echo "<td>".$row5['pref_date']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>"."Event Time:"."</th>";
        echo "<td>".$row5['pref_time']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>"."Event:"."</th>";
        echo "<td>".$row5['pref_event']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>"."Package Type:"."</th>";
        echo "<td>".$row5['packagetype']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>"."No. of Guests:"."</th>";
        echo "<td>".$row5['guests_no']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>"."Theme:"."</th>";
        echo "<td>".$row5['theme']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>"."Venue:"."</th>";
        echo "<td>".$row5['pref_venue']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>"."Add ons:"."</th>";
        echo "<td>".$row5['addons']."</td>";
        echo "</tr>";        
        echo "<tr>";
        echo "<th>"."Payment Total:"."</th>";
        echo "<td>".$row5['payment_total']."</td>";
        echo "</tr>";        
        echo "</table>";
        echo "</center>";
        ?>
        </div>
        <br>
        <script>
        $(document).ready(function(){
        	var mode = 'iframe';
        	var close = mode == "popup";
        	var options = { mode : mode, popClose : close};
        	$("div.portlet").printArea( options );
        });
        </script>
        <?php
        echo '<a class="btn btn-primary" href="print.php?view='.$Date.'">PRINT</a>';
        }
        ?>
        </center>
        <?php

    	}
		}
			//echo "User with username already exist";
		}

else 
{
	//echo "<h1>"."Sorry ".$_SESSION['name']." ! But the date you've choose is already reserved."."<br>".
	//"Please feel free to choose other dates. Thank you!"."</h1>";

	//echo "Please click "."<a href=\"viewupdate_reservation.php\">HERE</a>"." to view and update your reservation.";
	echo "<br>";
	  echo '<script> swal({  title: "SORRY!",
    text: "But the date you choose is already reserved. Please feel free to choose other dates. Thank you!!",
    icon: "error",
    button: "OK"}).then(okay => {
   if (okay) {
    window.location.href = "clientbbook.php";
  }
});

</script>';
	
}
}
else 
	echo "Input a new title";
}

?>

	

<!-- footer --><br><br>
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
