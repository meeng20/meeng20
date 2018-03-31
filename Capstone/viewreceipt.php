<?php
session_start();
error_reporting (E_ALL ^ E_NOTICE);
//$type = $_SESSION['type'];
//$member = "member";
if (isset($_SESSION['type']))
{
  if ($_SESSION['type']== owner){
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



//FILTER CLIENTS MEMBERS ONLY
$query1 = "SELECT * FROM `clientsrecord` WHERE type='member' ORDER BY name";
$search_result = $conn->query($query1);

//REFRESH
if(empty($_POST['refresh']))
{
  $query1 = "SELECT * FROM `clientsrecord` WHERE type='member' ORDER BY name";
    $search_result = $conn->query($query1);
}



function filterTable($query)
{
  $connect = mysqli_connect("localhost", "root", "", "catering");
  $filter_Result = mysqli_query($connect, $query);
  return $filter_Result;
}

//PENDING
if(isset($_POST['pending']))
{
  $status1 = "PENDING";
  $query2 = "SELECT * FROM clientsorder WHERE status = '$status1'";
    $result = $conn->query($query2);
}

//APPROVED
if(isset($_POST['approved']))
{
  $status2 = "APPROVED";
  $query3 = "SELECT * FROM clientsorder WHERE status = '$status2'";
    $result = $conn->query($query3);
}

//CANCELLED
if(isset($_POST['cancelled']))
{
  $status3 = "CANCELLED";
  $query4 = "SELECT * FROM clientsorder WHERE status = '$status3'";
    $result = $conn->query($query4);
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
		<link href="css/viewrecords9.css" rel="stylesheet" type="text/css" media="all" />


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

<!-- //header -->  <div class="banner two">
<div class="banner-slider">
	<div class="banner-pos">


           <div class="container" style="width: 100%; height: 100%; ">
  <div class="navigation text-center">
    <span class="menu"><img src="images/menu.png" alt=""/></span>
      <ul class="nav1">
        <li><a class="active" href="viewrecords.php">CLIENTS RECORD</a></li>
        <li><a href="walkinclients.php">WALK-IN CLIENTS</a></li>
        <li><a href="paymentrecords.php">PAYMENTS</a></li>
        <li><a href="salesmonitoring.php">SALES MONITORING</a></li>
        <li><a href="ownersetting.php">SETTINGS</a></li>
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

<!-- banner -->


<div class="login">
	<div class="container" style="padding: 100px;">
		<div class="login-grids">
			<div class="col-md-6 log" style="border: 2px solid black; background-color: #edd8a1; padding: 30px;">
					 <center>
					 	<?php
include 'dbcon.php';

$date = $_GET['view'];

$sql = "SELECT * FROM clientsorder WHERE pref_date='$date'";
					$query = mysqli_query($conn, $sql);
					$result = $conn->query($sql);

if ($row = $result->fetch_assoc()) 
					{
						$row = mysqli_fetch_assoc($query);
						$dbname = $row['name'];
						$dbdate = $row['pref_date'];
						$dbevent = $row['pref_event'];				
						$dbtitle = $row['title'];				
						$dbtime = $row['pref_time'];
						$dbstatus = $row['status'];
						$dbimage = $row['image'];

					$sql1 = "SELECT image FROM clientsorder WHERE pref_date='$date'";
					$query1 = mysqli_query($conn, $sql1);
					$result1 = $conn->query($sql1);

					if(empty($row['image']))
					{
						echo "No receipt uploaded";
					}
					else
					{
						echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200"/>';
					}

					}
?>
					 </center>
			</div>

			
			<div class="clearfix"></div>
		</div>
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
</div></div></div>
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

