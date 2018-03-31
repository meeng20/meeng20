<?php
session_start();
error_reporting(0);
include 'dbcon.php';
if(isset($_SESSION['username']) && isset($_SESSION['type']) )
{

    $user = $_SESSION['username'];
}
 else 
 header("location: login.php");

?>
<?php
if(isset($_POST ['standardbtn']))
{
   $_session['success'] = "logged in";
      header('location: standard.php');
}
if(isset($_POST ['specialbtn']))
{
   $_session['success'] = "logged in";
      header('location: special.php');
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
         <link href="css/booking.css" rel="stylesheet" type="text/css" media="all" />
         
         
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
         <link rel="stylesheet" href="/resources/demos/style.css">
         <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
         <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

         <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

         
         
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

<div class="bg">


  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: '2017:2023',
    });
  } );
  </script>

   <style>
    h2 {
      margin: 30px 0 0 0;
    }
    fieldset {
      border: 0;
    }
    label {
      display: block;
    }
 

  </style>

<!-- header -->
<div class="header">
   <div class="container">
      <div class="top-header">
            <div class="header-left">
               
            </div>
            <div class="login-section">
            <a href='logout.php'>LOGOUT</a>
               <!--<form method="GET">
               <input type="submit" name="Logout" value="LOGOUT">
               </form>
               <?php 
               //if(isset($_GET['Logout'])){
               //session_destroy();
            // header("Location:login.php");
                  //    }
               ?>-->
            </div>            
            <div class="clearfix"></div>
      </div>
   </div>
</div>

<!-- //header -->

<!-- banner -->
<div class="banner-slider">
   <div class="banner-pos">
            
                  <div class="container">
                     <div class="navigation text-center">
                        <span class="menu"><img src="images/menu.png" alt=""/></span>
                           <ul class="nav1">
                              <li><a href="index.php">HOME</a></li>
                              <li><a href="about.php">ABOUT US</a></li>
                              <li><a href="portfolio.php">PORTFOLIO</a></li>
                              <li><a href="venue.php">VENUE</a></li>
                              <li><a href="promo.php">PROMO</a></li>
                              <li><a href="book.php">PACKAGES</a></li>
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
</div>
<div class="good">
<!-- //banner -->



<!-- booking -->
<div class="login">
   <div class="container">
      <div class="login-grids">
         <div class="col-md-6 log">
                <center><h3>CHOOSE PACKAGE YOU WANT</h3></center><br>
               <?php
               echo "<center>";
                echo "<h3>"."Welcome ".$_SESSION['firstname']."</h3>"; 
                echo "</center>";
                ?>
                <div class="strip"></div>
                <center>
               <form name="form1" action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td>Select File</td>
<td><input type="file" name="f1"></td>
</tr>
<tr>
<td><input type="submit" name="submit1" value="upload"></td>
<td><input type="submit" name="submit2" value="display"></td>
<td>  <select name = 'eventdate'>
  <option> SELECT DATE </option>
<?php
      $query2 = "SELECT pref_date FROM `clientsorder` WHERE username='$user'";
      $filter = $conn->query($query2);
      while($row1 = mysqli_fetch_array($filter))
      {
?>
      
      <option> <?php echo $row1["pref_date"]; ?> </option>

<?php
      
      }

    
?>
</select></td>
</tr>
</table>
</form>

<?php
$conn = mysqli_connect("localhost", "root", "", "catering");

if(isset($_POST["submit1"]))
{
$image = addslashes(file_get_contents($_FILES['f1']['tmp_name']));

$date = $_POST['eventdate'];

     if(empty($image || $date))
            {
               echo "select image";
            }

  // $sql = "INSERT INTO transactionreceipt (name,image) values('$user', '$image')";
   $sql = "UPDATE clientsorder SET image='$image' WHERE username ='$user' AND pref_date ='$date'";
             $result = $conn->query($sql);

       

//mysql_query("insert into transactionreceipt (image) values('','$image')"); 
}


if(isset($_POST["submit2"]))
{

  $date = $_POST['eventdate'];

   $sql = "SELECT image FROM clientsorder WHERE username='$user' AND pref_date ='$date'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0)
      {
          while($row = $result->fetch_assoc()) 
      {

 /*  $res=mysql_query("SELECT * from transactionreceipt");
   echo "<table>";
   echo "<tr>";
   
   while($row=mysql_fetch_array($res))
   {*/
   //echo "<td>"; 
   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200"/>';
   //echo "<br>";
   ?>
   <!--<a href="deletereceipt.php?id=<?php echo $row["id"]; ?>">Delete</a>--> <?php
   //echo "</td>";
   
   
   }
   }
   else
   {
      echo "Choose Date of event";
   }
   echo "</tr>";
   
   echo "</table>";
  

}





?>



                </center>
         </div>

         
         <div class="clearfix"></div>
      </div>
   </div>
</div>
<!-- //booking -->



<!-- footer -->
<div class="footer">
   <div class="container">
      
      <div class="footer-right">
         <ul>
            <li><a href="https://www.facebook.com/WhitePlateCateringServices/" class="facebook"> </a></li>
            
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
/*session_start();
include 'dbcon.php';
 

if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
   
    $user = $_SESSION['username'];
}
 else 
 header("location: login.php");
*/

?>
<!--
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">html>
<head>

<<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td>Select File</td>
<td><input type="file" name="f1"></td>
</tr>
<tr>
<td><input type="submit" name="submit1" value="upload"></td>
<td><input type="submit" name="submit2" value="display"></td>
</tr>
</table>
</form>

<?php
/*
$conn = mysqli_connect("localhost", "root", "", "catering");

if(isset($_POST["submit1"]))
{
$image = addslashes(file_get_contents($_FILES['f1']['tmp_name']));

$sql1= "SELECT image FROM transactionreceipt WHERE name='$user'";
$result = $conn->query($sql1);
if ($result->num_rows > 0)
{
   echo "you already uploaded you receipt.Thankyou!";

}
else
{
   $sql = "INSERT INTO transactionreceipt (name,image) values('$user', '$image')";
             $result = $conn->query($sql);

            if(empty($image))
            {
               echo "select image";
            }
}
//mysql_query("insert into transactionreceipt (image) values('','$image')"); 
}


if(isset($_POST["submit2"]))
{

   $sql = "SELECT image FROM transactionreceipt WHERE name='$user'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0)
      {
          while($row = $result->fetch_assoc()) 
      {

   $res=mysql_query("SELECT * from transactionreceipt");
   echo "<table>";
   echo "<tr>";
   
   while($row=mysql_fetch_array($res))
   {
   //echo "<td>"; 
   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200"/>';
   //echo "<br>";
   ?>
   <!--<a href="deletereceipt.php?id=<?php echo $row["id"]; ?>">Delete</a>--> <?php
   //echo "</td>";
   
   
   }
   }
   else
   {
      echo "Choose File";
   }
   echo "</tr>";
   
   echo "</table>";
  

}



*/

?>




</body>
</html>
-->


