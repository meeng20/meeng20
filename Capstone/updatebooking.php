<?php
session_start();
include 'dbcon.php';

$errors = array();
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
      <link href="css/bootstrapa.css" rel="stylesheet" type="text/css" media="all" />
      <link href="css/stylea.css" rel="stylesheet" type="text/css" media="all" />
      <link href="css/profile.css" rel="stylesheet" type="text/css" media="all" />
      <link href="css/font-awesome.css" rel="stylesheet"> 
      <link href="css/responsive.css" rel="stylesheet">

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

      <!-- validations -->

     <script language="Javascript" type="text/javascript">

        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
    
          function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

    </script>
  <!-- VAlidations -->

  <!-- datepicker-->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="/resources/demos/style.css">
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
    <script type="text/javascript" src="js/mobile.js"></script>
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
  <!-- datepicker -->


</head>
<body>
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


<!-- //header --> 

<br><br>

<div class="container" style="padding: 0px;">
   <div class="portlet light" style="float: left; border:2px solid black; padding:20px; width: 50%; height: 100%; ">
   <p>ADD NEW CLIENT</p>
  <center>
  <form action="bookwalkinclient.php" method="post">
              <br>
              <table>
                <tr>
                  <td>
					          Name:
                  </td>
                  <td>
			            	<input type="text" name="name" onkeypress="return onlyAlphabets(event,this);" maxlength="25"><br>
                  </td>
                </tr>
                <tr>
                  <td>
                    Email:
                  </td>
                  <td>
                    <input type="email" name="email" maxlength="50">
                  </td>
                </tr>
                <tr>
                  <td>
                    Type of Event:
                  </td>
                  <td>
                    <select name="event">
                      <option value=""></option>
                      <option value="bday">Birthday</option>
                      <option value="wedding" >Wedding</option>
                      <option value="baptism">Baptism</option>
                    </select><br> 
                  </td>
                </tr>
                <tr>
                  <td>
                    Title:
                  </td>
                  <td>
                    <input type="text" name="title">
			            </td>
                </tr>
                <tr>
                  <td>
                  	Preferred Date:<br>
                  </td>
                  <td>
                    <input type="text" id="checkin" name="date"> <br>
			            </td>
                </tr>
                <tr>
                  <td>
                    	Preferred Time:
                  </td>
                
                  <td>
                      FROM:
                  
                    <select name="starttime" required >
                      <option value=""></option>
                      <option value="8:00 AM">8:00 AM</option>
                      <option value="9:00 AM">9:00 AM</option>
                      <option value="10:00 AM">10:00 AM</option>
                      <option value="11:00 AM">11:00 AM</option>
                      <option value="12:00 NN">12:00 NN</option>
                      <option value="1:00 PM">1:00 PM</option>
                      <option value="2:00 PM">2:00 PM</option>
                      <option value="3:00 PM">3:00 PM</option>
                      <option value="4:00 PM">4:00 PM</option>
                      <option value="5:00 PM">5:00 PM</option>
                      <option value="6:00 PM">6:00 PM</option>
                    </select>
                <tr>
                  <td>
                      
                  </td>
                  <td>
                    TO: 
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <select name="endtime" required >
                      <option value=""></option>
                      <option value="9:00 AM">9:00 AM</option>
                      <option value="10:00 AM">10:00 AM</option>
                      <option value="11:00 AM">11:00 AM</option>
                      <option value="12:00 NN">12:00 NN</option>
                      <option value="1:00 PM">1:00 PM</option>
                      <option value="2:00 PM">2:00 PM</option>
                      <option value="3:00 PM">3:00 PM</option>
                      <option value="4:00 PM">4:00 PM</option>
                      <option value="5:00 PM">5:00 PM</option>
                      <option value="6:00 PM">6:00 PM</option>
                      <option value="7:00 PM">7:00 PM</option>
                      <option value="8:00 PM">8:00 PM</option>
                      <option value="9:00 PM">9:00 PM</option>
                      <option value="10:00 PM">10:00 PM</option>
                      <option value="11:00 PM">11:00 PM</option>
                    </select>
                   </td>
                </tr>
                <tr>
                  <td>
                      Number of Guests:
                  </td>
                
                  <td>
                      <select name="guest">
                        <option value=""></option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="150">150</option>
                        <option value="200">200</option>
                        <option value="250">250</option>
                        <option value="300">300</option>
                      </select>
                  </td>
                </tr>
                 <tr>
                  <td>
                      Venue:
                  </td>
              
                  <td>
                      <select name="Venue">
                        <option value=""></option>
                        <option value="Blue Leaf Filipinas">Blue Leaf Filipinas</option>
                        <option value="Casa Feliza">Casa Feliza</option>
                        <option value="Villar Sipag">Villar Sipag</option>
                        <option value="Chateau Elysee">Chateau Elysee</option>
                        <option value="El Paseo De Fortunata">El Paseo De Fortunata</option>
                        <option value="Citadella Clubhouse">Citadella Clubhouse</option>
                        <option value="Sienna Park Residences">Sienna Park Residences</option>
                        <option value="The Village Sports Club">The Village Sports Club</option>
                        <option value="The Pergola">The Pergola</option>
                      </select>
                  </td>
                </tr>
                <tr>
                  <td>
                      Menu:
                   </td>
              
                  <td>
                        <input type="radio" name="food" value="SetA" />Set A
                        <input type="radio" name="food" value="SetB" />Set B 
                        <input type="radio" name="food" value="SetC" />Set C
                   </td>
                </tr>
                <tr>
                  <td>
                    Package Type:
                  </td>
                  <td>
                        <input type="radio" name="packagetype" value="STANDARD" />Standard
                        <input type="radio" name="packagetype" value="SPECIAL" />Special 
                   </td>
                </tr>
                </table>
                <br>
                <br>
                <br>
							      <input type="submit" name="bookwalkin" value="BOOK">
            			</form>
	</center>	
	</div>
	


</br>
</br>
</div>
<br>
	
<?php


if(isset($_POST ['bookwalkin']))
{


$name = $_POST['name'];
$email = $_POST['email'];
$Date=$_POST['date'];
$starttime=$_POST['starttime'];
$endtime=$_POST['endtime'];
$Time = $starttime." to ".$endtime;
$Event=$_POST['event'];
$Title=$_POST['title'];
$Guest=$_POST['guest'];
$venue=$_POST['Venue'];
if(isset($_POST['food']))
{
$food = $_POST['food'];
}
if(isset($_POST['packagetype']))
{
$packagetype = $_POST['packagetype'];
}

$standardprice = 250;
$specialprice = 300;
$tmpstatus = "APPROVED";


if ($packagetype == 'STANDARD')
{
  $total = $standardprice * $Guest;
}
else
{
  $total = $specialprice * $Guest;
}

if(empty($Date && $Time && $Event && $venue && $Guest && $food && $Title))
{
echo "<script>alert('Please complete information')</script>";  
                    exit();  
}

    $sql5 = "SELECT * FROM clientsrecord WHERE name = '$name' AND email = '$email'";
    $result5 = $conn->query($sql5);
    if ($result5 -> num_rows == 0 ) {
            echo "Client is not yet registered";
      }
  else{
    
    $sql2 = "SELECT * FROM clientsorder WHERE title = '$Title'";
    $result2 = $conn->query($sql2);
    if ($result2 -> num_rows == 0 ) {
      
    $sql3 = "SELECT * FROM clientsorder WHERE pref_date = '$Date'";
    $result3 = $conn->query($sql3);

    if($result3 -> num_rows == 0 )


    {
      $sql4 = "UPDATE clientsorder SET pref_date='$Date', pref_time='$Time', pref_event='$Event', title='$Title', guests_no='$, pref_venue, food_choice, payment_total, packagetype, image, status) values ('$name', '$email','$Date', '$Time','$Event', '$Title', '$Guest', '$venue', '$food', '$total', '$packagetype', '', '$tmpstatus')";

    if (!mysqli_query($conn, $sql4))
    {
      echo 'Not inserted';
    }
    else
    {
      
$sql5 = "SELECT * FROM clientsorder WHERE name = '$name' and pref_date = '$Date'";
    $result5 = $conn->query($sql5);

    if ($result5->num_rows > 0)
    {
       while($row5 = $result5->fetch_assoc()) 
      {
        echo "<center>";
        echo "";
        echo "<br>";
        echo "Name: ".$row5['name'];
        echo "<br>";
        echo "Email: ".$row5['email'];
        echo "<br>";
        echo "Event Date:".$row5['pref_date'];
        echo "<br>";
        echo "Event Time:".$row5['pref_time'];
        echo "<br>";
        echo "Event:".$row5['pref_event'];
        echo "<br>";
        echo "Event Title:".$row5['title'];
        echo "<br>";
        echo "No. of Guests:".$row5['guests_no'];
        echo "<br>";
        echo "Venue:".$row5['pref_venue'];
        echo "<br>";
        echo "Food Choice:".$row5['food_choice'];
        echo "<br>";
        echo "Payment total:".$row5['payment_total'];
        echo "<br>";
        echo "</center>";
        }
      }
    }
      //echo "User with username already exist";
    }

else 
{
  echo "<h1>"."Sorry! But the date is already reserved."."<br>";

  //echo "Please click "."<a href=\"viewupdate_reservation.php\">HERE</a>"." to view and update your reservation.";
  echo "<br>";
  
}
}
else 
  echo "Input a new title";
}
}


?>

  

<!-- footer --><br><br>
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


