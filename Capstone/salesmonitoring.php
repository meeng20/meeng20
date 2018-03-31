<?php
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
<div class="banner two">
<div class="banner-slider">
	<div class="banner-pos">

           <div class="container" style="width: 100%; height: 100%; ">
  <div class="navigation text-center">
    <span class="menu"><img src="images/menu.png" alt=""/></span>
      <ul class="nav1">
        <li><a href="viewrecords.php">CLIENTS RECORD</a></li>
        <li><a href="paymentrecord.php">PAYMENTS</a></li>
        <li><a class="active"  href="salesmonitoring.php">SALES MONITORING</a></li>
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


  <script>
function populate(s1,s2){
  var s1 = document.getElementById(s1);
  var s2 = document.getElementById(s2);
  s2.innerHTML = "";
  if(s1.value == "Month"){
    var optionArray = ["|","JANUARY|JANUARY","FEBRUARY|FEBRUARY","MARCH|MARCH","APRIL|APRIL","MAY|MAY","JUNE|JUNE","JULY|JULY","AUGUST|AUGUST","SEPTEMBER|SEPTEMBER","OCTOBER|OCTOBER","NOVEMBER|NOVEMBER","DECEMBER|DECEMBER"];
  } else if(s1.value == "Year"){
    var optionArray = ["|","2017|2017","2018|2018","2019|2019"];
  }
  for(var option in optionArray){
    var pair = optionArray[option].split("|");
    var newOption = document.createElement("option");
    newOption.value = pair[0];
    newOption.innerHTML = pair[1];
    s2.options.add(newOption);
  }
}
</script>



<div style="margin: 50px auto; 
    padding: 10px; 
    width: 90%;
    border:5px solid black;
    background-color: white;
    opacity: .8;
    filter: alpha(opacity=90); ">


<center>
<form method="post" action=""><br>
<select id="slct1" name="slct1" onchange="populate(this.id,'slct2')" style="width: 30%;">
  <option value=""></option>
  <option value="Month">Month</option>
  <option value="Year">Year</option>
</select>


<select id="slct2" name="slct2" style="width: 30%;"></select>
<input type="submit" name="btnsearch" value="search">
</form>

<br><br><br>

<div style="overflow:auto; height: 400px; width: 100%">

<table style='background-color:#FBF6D9;' class='col-sm-12' border='2px solid black;' >
<tr align='center' >
    <th scope="col" style='text-align:center; padding:10px 10px 10px 10px;'> ID </th>
    <th scope="col" style='text-align:center; padding:10px 10px 10px 10px;'> Name </th>
    <th scope="col" style='text-align:center; padding:10px 10px 10px 10px;'> Email </th>
    <th scope="col" style='text-align:center; padding:10px 10px 10px 10px;'> Month </th>
    <th scope="col" style='text-align:center; padding:10px 10px 10px 10px;'> Year </th>
    <th scope="col" style='text-align:center; padding:10px 10px 10px 10px;'> Date </th>
    <th scope="col" style='text-align:center; padding:10px 10px 10px 10px;'> Total Payment </th>
 
    
    <!--<th scope="col" style='text-align:center; padding:10px 10px 10px 10px;' colspan="2"> Approve/Cancel </th>-->




<?php
  include 'dbcon.php';
  //$con = mysql_connect("localhost", "root", "") or die(mysql_error());
  //$database = mysql_select_db("catering", $con) or die(mysql_error());
$totalsales = 0;
      
  $sql = "SELECT * from clientsorder where totalpayment != 0";
  $result = mysqli_query($conn, $sql);
  echo "<table border = 2>";
  echo "<tr>";
  echo "<td>ID</td>";
  echo "<td>Name</td>";
  echo "<td>Email</td>";
  echo "<td>Month</td>";
  echo "<td>Year</td>";
  echo "<td>Date</td>";
  echo "<td>Total Payment</td>";
  
  echo "</tr>";
  
  
  //while($data = mysql_fetch_array($result)
    while($data = $result->fetch_array())
  {
    if ($data['totalpayment'] == $data['payment_total'])
    {
          echo "<tr>";
    echo "<td>".$data['id']."<br> </td>";
    echo "<td>".$data['name']."<br> </td>";
    echo "<td>".$data['email']."<br> </td>";
    echo "<td>".$data['month']."<br> </td>";
    echo "<td>".$data['year']."<br> </td>";
    echo "<td>".$data['pref_date']."<br> </td>";
    echo "<td>".$data['totalpayment']."<br> </td>";
    echo "</tr>";
    }

  }   
  
echo "</table>";
?>  
<p style="float: right; padding-right: 15%;">
<?php
  $sql2 ="SELECT SUM(totalpayment) as value_sum FROM clientsorder where totalpayment=payment_total";
  $result2 = mysqli_query($conn, $sql2);
  //$row = mysql_fetch_array($result);
  while($row = $result2->fetch_array())
  {
  $sum= $row['value_sum'];
  }
  
  echo "P"."$sum".".00";
?>
</p>
<br>
  <?php
  
if(isset($_POST['btnsearch']))
{
 // $con = mysql_connect("localhost", "root", "") or die(mysql_error());
  //$database = mysql_select_db("catering", $con) or die(mysql_error());
  include 'dbcon.php';

  $slct1 = $_POST['slct1'];
  $slct2 = $_POST['slct2'];
  if($slct1 == "Month")
  {

      $sql = ("SELECT * from clientsorder where month = '$slct2' AND totalpayment!='0'");
  $result = mysqli_query($conn, $sql);
  
  
  
  echo "<table border = 2>";
  echo "<tr>";
  echo "<td>ID</td>";
  echo "<td>Name</td>";
  echo "<td>Email</td>";
  echo "<td>Month</td>";
  echo "<td>Year</td>";
  echo "<td>Date</td>";
  echo "<td>Total Payment</td>";
  
  echo "</tr>";
  
  
  while($data = $result->fetch_array()) 
  {
    echo "<tr>";
    echo "<td>".$data['id']."<br> </td>";
    echo "<td>".$data['name']."<br> </td>";
    echo "<td>".$data['email']."<br> </td>";
    echo "<td>".$data['month']."<br> </td>";
    echo "<td>".$data['year']."<br> </td>";
    echo "<td>".$data['pref_date']."<br> </td>";
    echo "<td>".$data['totalpayment']."<br> </td>";
    $totalsales = $data['totalpayment']+$totalsales;
    
    echo "</tr>";
    
  }

  }
  elseif ($slct1 == "Year")
  {
    $sql1 = ("SELECT * from clientsorder where year = '$slct2' AND totalpayment!='0'");
  $result1 = mysqli_query($conn, $sql1);
  
  
  
  echo "<table border = 2>";
  echo "<tr>";
  echo "<td>ID</td>";
  echo "<td>Name</td>";
  echo "<td>Email</td>";
  echo "<td>Month</td>";
  echo "<td>Year</td>";
  echo "<td>Date</td>";
  echo "<td>Total Payment</td>";
  
  echo "</tr>";
  
  
  while($data1 = $result1->mysql_fetch_assoc())
  {
    echo "<tr>";
    echo "<td>".$data1['id']."<br> </td>";
    echo "<td>".$data1['name']."<br> </td>";
    echo "<td>".$data1['email']."<br> </td>";
    echo "<td>".$data1['month']."<br> </td>";
    echo "<td>".$data1['year']."<br> </td>";
    echo "<td>".$data1['pref_date']."<br> </td>";
    echo "<td>".$data1['totalpayment']."<br> </td>";
    $totalsales = $data1['totalpayment']+$totalsales;
    
    echo "</tr>";
    
  }
  }
  


echo "</table>";
?>  
<p style="float: right; padding-right: 15%;">
<?php
  $sql2 ="SELECT SUM(totalpayment) as value_sum FROM clientsorder where totalpayment=payment_total";
  $result2 = mysqli_query($conn, $sql2);
  //$row = mysql_fetch_array($result);
  while($row = $result2->fetch_array())
  {
  $sum= $row['value_sum'];
  }
  
  echo "P"."$totalsales".".00";
?>
</p>
<br>
  <?php


  }

//  mysql_close($con);

?>
    <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <tr class="table-active">
              <th class="bg-primary">DATE</th>
              <th class="bg-primary">RESERVATION PAYMENT</th>
              <th class="bg-primary">PARTIAL PAYMENT</th>
              <th class="bg-primary">FULL PAYMENT</th>
              <th class="bg-primary">TOTAL</th>
            </tr>
          </table>
</div>

</div>
</div>





<br><br><br><br><br><br><br><br><br>


<br><br>












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
</center>
</body>
</html>