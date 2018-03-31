<?php

session_start();
error_reporting (E_ALL ^ E_NOTICE);
//$type = $_SESSION['type'];
//$member = "member";
$date = $_GET['view'];
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
$sql = "SELECT * FROM clientsorder WHERE pref_date='$date' ";
   $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
       while($row = $result->fetch_assoc()) 
      {
    
$id = $row['id'];
$name = $row['name'];
$email = $row['email'];
$prefdate = $row['pref_date'];
$month = $row['month'];
$day = $row['day'];
$year = $row['year'];
$preftime = $row['pref_time'];
$prefevent = $row['pref_event'];
$title = $row['title'];
$guestno = $row['guests_no'];
$prefvenue = $row['pref_venue'];
$foodchoice = $row['food_choice'];
$package = $row['packagetype'];




}
}



 

?>


<!DOCTYPE html>
<html>
<head>
  <title>Whiteplates Catering Services</title>
    <!-- calendar -->
  <link href="jquery/jquery-ui.css" rel="stylesheet">
  <script src="jquery/jquery.js"> </script>
  <script src="jquery/jquery-ui.js"> </script>
  <script>
  $(document).ready(function()
  {
    $("#datepicker").datepicker();
  });
  </script>
  <!-- calendar -->
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

<div class="banner-slider">
	<div class="banner-pos">

           <div class="container" style="width: 100%; height: 100%;">
  <div class="navigation text-center">
    <span class="menu"><img src="images/menu.png" alt=""/></span>
      <ul class="nav1">
        <li><a href="viewrecords.php">CLIENTS RECORD</a></li>
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
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 32)
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

  <!-- calendar -->
  <link href="jqueryui/jquery-ui.css" rel="stylesheet">
  <script src="jqueryui/jquery.js"> </script>
  <script src="jqueryui/jquery-ui.js"> </script>
  <script>
  $(document).ready(function(){
     
    $("#datepicker").datepicker(
      {
        
        minDate: +15,
        changeMonth: true,
            changeYear: true,
            dateFormat: 'M-dd-yy',
            numberOfMonths: 3
      });

  });
  
  </script>
  <!-- calendar -->


<div class="container" style="padding-top: 50px; ">
  <center>
    <?php
include 'dbcon.php';



if (isset($_POST['updateall'])) {

if ($_POST['starttime'] == $preftime){
  $first = $_GET['email'];
  $date = $_GET['view'];
$Event=$_POST['event'];
$Title1=$_POST['title'];
$month = $_POST['month'];
$day =$_POST['day'];
$year = $_POST['year'];
$Date=$month."/".$day."/".$year;
$time=$preftime;
$Guest=$_POST['Guest'];
$venue=$_POST['Venue']; 
$food = $_POST['sets'];
$packagetype = $_POST['package'];

$standardprice = 250;
$specialprice = 300;
$tmpstatus = "APPROVED";
}
else
$date = $_GET['view'];
$Event=$_POST['event'];
$Title1=$_POST['title'];
$month = $_POST['month'];
$day =$_POST['day'];
$year = $_POST['year'];
$Date=$_POST['datepicker'];
$starttime=$_POST['starttime'];
$endtime=$_POST['endtime'];
$Time = $starttime." to ".$endtime;
$Guest=$_POST['Guest'];
$venue=$_POST['Venue'];
$food = $_POST['sets'];
$packagetype = $_POST['package'];

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


  
  $sql = "SELECT * FROM clientsorder WHERE pref_date='$date'";
          $query = mysqli_query($conn, $sql);
          $result = $conn->query($sql);



if ($row = $result->fetch_assoc()) 
          {
            $row = mysqli_fetch_assoc($query);
           
            $dbdate = $row['pref_date']; 
            $dbtime = $row['pref_time'];    
            $dbevent = $row['pref_event'];        
            $dbtitle = $row['title'];                    
            $dbguests = $row['guests_no'];
            $dbvenue = $row['pref_venue'];
            $dbpackage = $row['packagetype'];
            $dbtotal = $row['payment_total'];
            $dbstatus = $row['status'];
            

          $sql4 = "UPDATE clientsorder SET pref_date='$Date', pref_time='$Time', pref_event='$Event', title='$Title1', guests_no='$Guest', pref_venue='$venue', packagetype='$packagetype', payment_total='$total' WHERE pref_date='$date' ";
          $query1 = mysqli_query($conn, $sql4);
          $result1 = $conn->query($sql4);

         if (!mysqli_query($conn, $sql4))
    {
      echo 'Not inserted';
    }
    else
    {
      
$sql5 = "SELECT * FROM clientsorder WHERE email = '$email' and pref_date = '$Date'";
    $result5 = $conn->query($sql5);

    if ($result5->num_rows > 0)
    {
       while($row5 = $result5->fetch_assoc()) 
      {

        ?>
        <center>
        <br>
        <div class="portlet" style="padding-left: 250px; padding-right: 250px;padding-top: 50px;border: 3px solid black; padding: 10px; background-color: #FBF6D9; opacity: .9; width: 400px;">

        <?php
        echo "<center>";

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
        echo "<th>"."Event Title:"."</th>";
        echo "<td>".$row5['title']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>"."No. of Guests:"."</th>";
        echo "<td>".$row5['guests_no']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>"."Venue:"."</th>";
        echo "<td>".$row5['pref_venue']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>"."Food Choice:"."</th>";
        echo "<td>".$row5['food_choice']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>"."Payment Total:"."</th>";
        echo "<td>".$row5['payment_total']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>"."Package Type:"."</th>";
        echo "<td>".$row5['packagetype']."</td>";
        echo "</tr>";
        echo "</table>";
        echo "</center>";
  }
}
else
{
  echo "Error2";
}
}
}
else
{
  Echo "Error1";
}
}
        ?>
  <br>
  <br>
  
  
  <div class="container">
  <div style="margin: 0px auto; padding: 30px;
  width: 60%;border:3px solid black;


  margin:auto ; 
  border: 6px solid #305a72 ; 
  box-shadow:1px 1px 25px rgba(0,0,0,0.35); 
  border-radius:10px; 
 
  background-color:#f8f8f8;" > 	
  
  
  <h3><b>UPDATE ALL</b></h3>
  
  
  

  <form action="" method="post">
              <br>
              <table>
              <tr>
              <td>
                <b>
                ID No:
                </b>
              </td>
              <td>
              <input type="text" name="id" value="<?php echo $id;?>" disabled style="width: 10%;"><br>
              </td>
              </tr>
                <tr>
                  <td>
                    <b>
                    Name:
                    </b>
                  </td>
                  <td>
                    <input type="text" name="name" value="<?php echo $name;?>" disabled onkeypress="return onlyAlphabets(event,this);" maxlength="25" style="width: 80%; "><br>
                  </td>
                </tr>
                <tr>
                  <td>
                    <b>
                    Email:
                    </b>
                  </td>
                  <td>
                    <input type="email" name="email" value="<?php echo $email;?>" disabled maxlength="50" style="width: 80%;">
                  </td>
                </tr>
                <tr>
                  <td>
                    <b>
                    Type of Event:
                    </b>
                  </td>
                  <td>
                    <select name="event" style="width: 80%;">
                      <option value="<?php echo $prefevent;?>"><?php echo $prefevent;?></option>
                      <option value="bday">Birthday</option>
                      <option value="wedding" >Wedding</option>
                      <option value="baptism">Baptism</option>
                    </select><br> 
                  </td>
                </tr>
                <tr>
                  <td>
                    <b>
                    Title:
                    </b>
                  </td>
                  <td>
                    <input type="text" name="title" value="<?php echo $title;?>" style="width: 80%;">
                  </td>
                </tr>
                <tr>
                  <td>
                    <b>
                    Preferred Date: </b><br>

                  </td>
                  <td>
                  <label>Preferred Event Date:</label>
      <input id="datepicker" class="form-control " type="text" name="datepicker">
               <!--<select name="month" required style="width: 80%;">
        <option value="<?php echo $month;?>"><?php echo $month;?></option>
        <option value="JANUARY">JANUARY</option>
        <option value="FEBRUARY">FEBRUARY</option>
        <option value="MARCH">MARCH</option>
        <option value="APRIL">APRIL</option>
        <option value="MAY">MAY</option>
        <option value="JUNE">JUNE</option>
        <option value="JULY">JULY</option>
        <option value="AUGUST">AUGUST</option>
        <option value="SEPTEMBER">SEPTEMBER</option>
        <option value="OCTOBER">OCTOBER</option>
        <option value="NOVEMBER">NOVEMBER</option>
        <option value="DECEMBER">DECEMBER</option>
      </select>
      <select name="day" required style="width: 80%;">
        <option value="<?php echo $day;?>"><?php echo $day;?></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
      </select>
      <select name="year" required style="width: 80%;">
        <option value="<?php echo $year;?>"><?php echo $year;?></option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
      </select>-->
                  </td>
                </tr>


                <tr>
                  <td>
                    <b>
                      Preferred Time:
                    </b>

                  </td>
                  <td>
                  
                    <select name="starttime" required style="width: 80%;">
                      <option value="<?php echo $preftime;?>"><?php echo $preftime;?></option>
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
                    </td>
                    </tr>
                    <tr>
                    <td>
                    </td>

                  <td>
                
                    <select name="endtime" required style="width: 80%;">
                      <option value="">TO</option>
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
                  <b>
                      Number of Guests:
                  </b>
                  </td>
                
                  <td>
                  <input type="text" name="Guest" value="<?php echo $guestno;?>" style="width: 80%;">
                      <!--<select name="guest" style="width: 80%;">
                        <option value=""></option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="150">150</option>
                        <option value="200">200</option>
                        <option value="250">250</option>
                        <option value="300">300</option>
                      </select>-->
                  </td>
                </tr>
                 <tr>
                  <td>
                    <b>
                      Venue:
                    </b>
                  </td>
              
                  <td>
                      <select name="Venue" style="width: 80%;">
                        <option value="<?php echo $prefvenue;?>"><?php echo $prefvenue;?></option>
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
                </tr>
                 <tr>
                  <td>
                    <b>
                      Menu
                    </b>
                  </td>
              
                  <td>
                      <select name="sets" style="width: 80%;">
                        <option value="<?php echo $foodchoice;?>"><?php echo $foodchoice;?></option>
                        <option value="Set A">Set A</option>
                        <option value="Set B">Set B</option>
                        <option value="Set C">Set C</option>
                        
                      </select>
                  </td>
                </tr>
                </tr>
                 <tr>
                  <td>
                    <b>
                      Package type:
                    </b>
                  </td>
              
                  <td>
                      <select name="package" style="width: 80%;">
                        <option value="<?php echo $package;?>"><?php echo $package;?></option>
                        <option value="STANDARD">STANDARD</option>
                        <option value="SPECIAL">SPECIAL</option>
                        
                        
                      </select>
                  </td>
                </tr>
                </table>
                <br>
                <br>
                <br>
                    <input type="submit" name="updateall" value="UPDATE">
                  </form>
                  <br>
  </center>
  </div>
  <center>
  <br>
  <br>
  <h3><b></b></h3>
  <br>

  <br>
  <br>
  <br>

  <br>
  <br> 

  </center>
  </div>
</div>

  <br>
  <br>
  <br>
  <br>
  <br>


<!-- footer --><br><br>
<div class="footer">
  <div class="container">
    <div class="footer-right">
      <ul>
<br><     </ul>
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


<?php
/*
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



  $sql = "SELECT * FROM homeupdate";
   $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
       while($row = $result->fetch_assoc()) 
      {
    
$id = $row['id'];
$missiondescription = $row['missiondescription'];
$missionimage = $row['missionimage'];
$visiondescription = $row['visiondescription'];
$visionimage = $row['visionimage'];
$purposedescription = $row['purposedescription'];
$purposeimage = $row['purposeimage'];

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
      <link href="css/bootstrapa.css" rel="stylesheet" type="text/css" media="all" />
      <link href="css/stylea.css" rel="stylesheet" type="text/css" media="all" />
      <link href="css/profile1.css" rel="stylesheet" type="text/css" media="all" />
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



           <div class="container" style="width: 100%; height: 100%; padding: 0px;">
  <div class="navigation text-center">
    <span class="menu"><img src="images/menu.png" alt=""/></span>
      <ul class="nav1">
        <li><a href="viewrecords.php">CLIENTS RECORD</a></li>
        <li><a class="active" href="walkinclients.php">WALK-IN CLIENTS</a></li>
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
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 32)
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


<div class="container" style="padding-top: 50px; ">
  <div class="portlet light" style="border: 5px solid black; background-color: #FBF6D9; opacity: .9; width: 50%; height: 100%; float: left;">
  <center>
    <?php
include 'dbcon.php';



if (isset($_POST['updateall'])) {


$date = $_GET['view'];
$first=$_POST['email'];
$name = $_POST['name'];
$month = $_POST['month'];
$day =$_POST['day'];
$year = $_POST['year'];
$Date=$month."/".$day."/".$year;
$starttime=$_POST['starttime'];
$endtime=$_POST['endtime'];
$Time = $starttime." to ".$endtime;
$Event=$_POST['event'];
$Title=$_POST['title'];
$Guest=$_POST['Guest'];
$venue=$_POST['Venue'];
if(isset($_POST['food']))
{
$food = $_POST['food'];
}//$a = implode(",",$food);

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


  
  $sql = "SELECT * FROM clientsorder WHERE pref_date='$date'";
          $query = mysqli_query($conn, $sql);
          $result = $conn->query($sql);



if ($row = $result->fetch_assoc()) 
          {
            $row = mysqli_fetch_assoc($query);
           
            $dbdate = $row['pref_date'];
            $dbevent = $row['pref_event'];        
            $dbtitle = $row['title'];       
            $dbtime = $row['pref_time'];
            $dbstatus = $row['status'];
            $dbguests = $row['guests_no'];
            $dbvenue = $row['pref_venue'];
            $dbfood = $row['food_choice'];
            $dbpackage = $row['packagetype'];
            

          $sql4 = "UPDATE clientsorder SET pref_event='$Event', title='$Title', title='$Title', pref_date='$Date', pref_time='$Time', guests_no='Guest', pref_venue='$venue', food_choice='$food', packagetype='$packagetype' WHERE pref_date='$date' ";
          $query1 = mysqli_query($conn, $sql4);
          $result1 = $conn->query($sql4);

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

        ?>
        <center>
        <br>
        <div class="portlet" style="padding-left: 250px; padding-right: 250px;padding-top: 50px;border: 3px solid black; padding: 10px; background-color: #FBF6D9; opacity: .9; width: 400px;">

        <?php
        echo "<center>";

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
        echo "<th>"."Event Title:"."</th>";
        echo "<td>".$row5['title']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>"."No. of Guests:"."</th>";
        echo "<td>".$row5['guests_no']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>"."Venue:"."</th>";
        echo "<td>".$row5['pref_venue']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>"."Food Choice:"."</th>";
        echo "<td>".$row5['food_choice']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>"."Payment Total:"."</th>";
        echo "<td>".$row5['payment_total']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>"."Package Type:"."</th>";
        echo "<td>".$row5['packagetype']."</td>";
        echo "</tr>";
        echo "</table>";
        echo "</center>";
  }
}
else
{
  echo "Error2";
}
}
}
else
{
  Echo "Error1";
}
}
        ?>
  <br>
  <br>
  <h3><b>UPDATE ALL</b></h3>

  <form action="" method="post">
              <br>
              <table>
                <tr>
                  <td>
                    <b>
                    Name:
                    </b>
                  </td>
                  <td>
                    <input type="text" name="name" onkeypress="return onlyAlphabets(event,this);" maxlength="25" style="width: 80%;"><br>
                  </td>
                </tr>
                <tr>
                  <td>
                    <b>
                    Email:
                    </b>
                  </td>
                  <td>
                    <input type="email" name="email" maxlength="50" style="width: 80%;">
                  </td>
                </tr>
                <tr>
                  <td>
                    <b>
                    Type of Event:
                    </b>
                  </td>
                  <td>
                    <select name="event" style="width: 80%;">
                      <option value=""></option>
                      <option value="bday">Birthday</option>
                      <option value="wedding" >Wedding</option>
                      <option value="baptism">Baptism</option>
                    </select><br> 
                  </td>
                </tr>
                <tr>
                  <td>
                    <b>
                    Title:
                    </b>
                  </td>
                  <td>
                    <input type="text" name="title" style="width: 80%;">
                  </td>
                </tr>
                <tr>
                  <td>
                    <b>
                    Preferred Date: </b><br>

                  </td>
                  <td>
                    <select name="month" required style="width: 80%;">
        <option value="">Month</option>
        <option value="JANUARY">JANUARY</option>
        <option value="FEBRUARY">FEBRUARY</option>
        <option value="MARCH">MARCH</option>
        <option value="APRIL">APRIL</option>
        <option value="MAY">MAY</option>
        <option value="JUNE">JUNE</option>
        <option value="JULY">JULY</option>
        <option value="AUGUST">AUGUST</option>
        <option value="SEPTEMBER">SEPTEMBER</option>
        <option value="OCTOBER">OCTOBER</option>
        <option value="NOVEMBER">NOVEMBER</option>
        <option value="DECEMBER">DECEMBER</option>
      </select>
      <select name="day" required style="width: 80%;">
        <option value="">Day</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
      </select>
      <select name="year" required style="width: 80%;">
        <option value="">Year</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
      </select>
                  </td>
                </tr>


                <tr>
                  <td>
                    <b>
                      Preferred Time:
                    </b>

                  </td>
                  <td>
                  
                    <select name="starttime" required style="width: 80%;">
                      <option value="">FROM</option>
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
                    </td>
                    </tr>
                    <tr>
                    <td>
                    </td>

                  <td>
                
                    <select name="endtime" required style="width: 80%;">
                      <option value="">TO</option>
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
                  <b>
                      Number of Guests:
                  </b>
                  </td>
                
                  <td>
                  <input type="text" name="Guest" style="width: 80%;">
                      <!--<select name="guest" style="width: 80%;">
                        <option value=""></option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="150">150</option>
                        <option value="200">200</option>
                        <option value="250">250</option>
                        <option value="300">300</option>
                      </select>-->
                  </td>
                </tr>
                 <tr>
                  <td>
                    <b>
                      Venue:
                    </b>
                  </td>
              
                  <td>
                      <select name="Venue" style="width: 80%;">
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
                  <b>
                      Menu:
                  </b>
                   </td>
              
                  <td>
                        <input type="radio" name="food" value="SetA" />Set A
                        <input type="radio" name="food" value="SetB" />Set B 
                        <input type="radio" name="food" value="SetC" />Set C
                   </td>
                </tr>
                <tr>
                  <td>
                  <b>
                    Package Type:
                  </b>
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
                    <input type="submit" name="updateall" value="UPDATE">
                  </form>
                  <br>
  </center>
  </div>
  <div class="portlet light" style="border: 5px solid black; background-color: #FBF6D9; opacity: .9; width: 50%; height: 100%; float: right;">
  <center>
  <br>
  <br>
  <h3><b></b></h3>
  <br>

  <br>
  <br>
  <br>

  <br>
  <br> 
  <?php
  if(isset($_POST['update']))
{
  $date = $_GET['view'];
  $select = $_POST['book'];
  $description = $_POST['updatebook'];


  $sql = "SELECT * FROM clientsorder WHERE pref_date='$date'";
          $query = mysqli_query($conn, $sql);
          $result = $conn->query($sql);



if ($row = $result->fetch_assoc()) 
          {
            $row = mysqli_fetch_assoc($query);
           
            $dbdate = $row['pref_date'];
            $dbevent = $row['pref_event'];        
            $dbtitle = $row['title'];       
            $dbtime = $row['pref_time'];
            $dbstatus = $row['status'];
            $dbguests = $row['guests_no'];
            $dbvenue = $row['pref_venue'];
            $dbfood = $row['food_choice'];
            $dbpackage = $row['packagetype'];

    if($select == 'Event')
    {
      
      $sql2 = "UPDATE clientsorder SET pref_event='$description' WHERE pref_date='$date'";
      $result2 = $conn->query($sql2);

        if ($result2)
        {
        }
        if (mysqli_affected_rows($conn)>0) 
        {
          echo "Update successful!";
        }
        else
        {
          echo "Error updating!";
        }
    }
    elseif ($select == 'Title') 
    {
      $sql3 = "UPDATE clientsorder SET title='$description' WHERE pref_date='$date'";
      $result3 = $conn->query($sql3);

        if ($result3)
        {
        }
        if (mysqli_affected_rows($conn)>0) 
        {
          echo "Update successful!";
        }
        else
        {
          echo "Error updating!";
        }
    }
    elseif ($select == 'Date') 
    {
      $sql4 = "UPDATE clientsorder SET pref_date='$description' WHERE pref_date='$date'";
      $result4 = $conn->query($sql4);

        if ($result4)
        {
        }
        if (mysqli_affected_rows($conn)>0) 
        {
          echo "Update successful!";
        }
        else
        {
          echo "Error updating!";
        }
    }
        elseif ($select == 'Time') 
    {
      $sql4 = "UPDATE clientsorder SET pref_time='$description' WHERE pref_date='$date'";
      $result4 = $conn->query($sql4);

        if ($result4)
        {
        }
        if (mysqli_affected_rows($conn)>0) 
        {
          echo "Update successful!";
        }
        else
        {
          echo "Error updating!";
        }
    }

    elseif ($select == 'Guest') 
    {

          if(isset($_POST['packagetype']))
{
$packagetype = $_POST['packagetype'];
}

$standardprice = 250;
$specialprice = 300;
$tmpstatus = "APPROVED";


if ($packagetype == 'STANDARD')
{
  $total = $standardprice * $description;
}
else
{
  $total = $specialprice * $description;
}

      $sql4 = "UPDATE clientsorder SET guests_no='$description', payment_total='$total', packagetype='$packagetype' WHERE pref_date='$date'";
      $result4 = $conn->query($sql4);

        if ($result4)
        {
        }
        if (mysqli_affected_rows($conn)>0) 
        {
          echo "Update successful!";
        }
        else
        {
          echo "Error updating!";
        }
    }

    elseif ($select == 'Venue') 
    {
      $sql4 = "UPDATE clientsorder SET pref_venue='$description' WHERE pref_date='$date'";
      $result4 = $conn->query($sql4);

        if ($result4)
        {
        }
        if (mysqli_affected_rows($conn)>0) 
        {
          echo "Update successful!";
        }
        else
        {
          echo "Error updating!";
        }
    }

    elseif ($select == 'Menu') 
    {
      $sql4 = "UPDATE clientsorder SET food_choice='$description' WHERE pref_date='$date'";
      $result4 = $conn->query($sql4);

        if ($result4)
        {
        }
        if (mysqli_affected_rows($conn)>0) 
        {
          echo "Update successful!";
        }
        else
        {
          echo "Error updating!";
        }
    }

    elseif ($select == 'Package') 
    {
      $sql4 = "UPDATE clientsorder SET packagetype='$description' WHERE pref_date='$date'";
      $result4 = $conn->query($sql4);

        if ($result4)
        {
        }
        if (mysqli_affected_rows($conn)>0) 
        {
          echo "Update successful!";
        }
        else
        {
          echo "Error updating!";
        }
    }




}
}
?>
  <form method="post" action="" ">
  <select name="book" style="width: 40%;">
      <option value="">--SELECT--</option>
      <option value="Event" >Event</option>
      <option value="Title" >Title</option>
      <option value="Date">Date</option>
      <option value="Time" >Time</option>
      <option value="Guest" >Guest</option>
      <option value="Venue" >Venue</option>
      <option value="Menu" >Menu</option>
      <option value="Package" >Package</option>
      
  </select><br>
   Package Type:
   
                        <input type="radio" name="packagetype" value="STANDARD" />Standard
                        <input type="radio" name="packagetype" value="SPECIAL" />Special 


  <br>
  <br>
  <textarea name="updatebook" cols ="50" rows="3"></textarea>
  <br>
   <br>
  <input type="submit" name="update" value="UPDATE ">
  <br>
  <br>
    <br>
  <br>
  <br>
    <br>
  <br>
  <br>
    <br>

  <br>
  </form>

  </center>
  </div>
</div>

  <br>
  <br>
  <br>
  <br>
  <br>


<!-- footer --><br><br>
<div class="footer">
  <div class="container">
    <div class="footer-right">
      <ul>
<br><     </ul>
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
                   
    $().UItoTop({ easingType: 'easeOutQuart' });
    });
  </script>
  <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

</div>

</body>
</html>

*/