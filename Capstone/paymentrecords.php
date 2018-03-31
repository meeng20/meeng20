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


$query1 = "SELECT * FROM `clientsorder` WHERE status='APPROVED' OR status='PAID'";
$search_result = $conn->query($query1);

if(empty($_POST['refresh']))
{
 $query1 = "SELECT * FROM `clientsorder` WHERE status='APPROVED' OR status='PAID'";
$search_result = $conn->query($query1);
}

if(isset($_POST['tosearch']))
{
  $search = $_POST['tosearch'];
  $query = "SELECT * FROM `clientsorder` WHERE status='APPROVED' OR status='PAID' AND CONCAT(`name`)LIKE '%".$search."%'";
      $search_result = filterTable($query);
}

function filterTable($query)
{
  $connect = mysqli_connect("localhost", "root", "", "catering");
  $filter_Result = mysqli_query($connect, $query);
  return $filter_Result;
}


?>

<!DOCTYPE html>
<html>
<head>
  <title>Whiteplates Catering Services</title>
  <!--//sweetalert-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 
  <!-- search ganun hahahah -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="jsa/bootstrap.min.js"></script>
 <!-- search ganun hahahah -->

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



<script>
$(document).ready(function(){
  load_data();
  function load_data(query2)
  {
    $.ajax({
      url:"fetchpayment.php",
      method:"post",
      data:{query2:query2},
      success:function(data)
      {
        $('#result2').html(data);
      }
    });
  }
  

  $('#search_text').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
      load_data(search);
    }
    else
    {
      load_data();      
    }
  });


});
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

           <div class="container" style="width: 100%; height: 100%; ">
  <div class="navigation text-center">
    <span class="menu"><img src="images/menu.png" alt=""/></span>
      <ul class="nav1">
        <li><a href="viewrecords.php">CLIENTS RECORD</a></li>
        <li><a href="walkinclients.php">WALK-IN CLIENTS</a></li>
        <li><a class="active" href="paymentrecords.php">PAYMENTS</a></li>
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




<div style="margin: 0px auto; 
    padding: 0px; 
    width: 90%;
    height: 100%;
   box-shadow:1px 1px 15px rgba(0,0,0,0.35);
   border-radius:10px;
border: 6px solid #305a72;
    background-color: white;

   ">
  
  
<br>
<br>

            <form method="post">
<!-- search bar -->
<div class="container">
<div class="form-group">
        <div class="input-group">
          <span class="input-group-addon">Search</span>
          <input type="text" name="search_text" id="search_text" placeholder="Search by Client Name" class="form-control" style="width: 100%;" />
        </div>
      </div>

      <br />
</div></form>
<center>
          <br>
            <form method ="post">
            <select name = 'eventdate'>
            <option> SELECT DATE TRANSACTION </option>
            <?php
            
           
             
            $date = $_POST['eventdate'];
            $query2 = "SELECT pref_date FROM `clientsorder` WHERE status='APPROVED'";
            $filter = $conn->query($query2);
            while($row1 = mysqli_fetch_array($filter))
            {
            ?>
            <option value="<?php echo $row1["pref_date"]; ?>"> <?php echo $row1["pref_date"]; ?> </option>
            <?php
            }
       
            ?>
?>
            </select>
            <input type="text" name="amount" placeholder="AMOUNT"><br>
           <label>Date:</label>
      <input id="datepicker" type="text" name="datepicker">
  

            <select name = "transac">
              <option value="reserve">RESERVATION FEE</option>
              <option value="partial">PARTIAL PAYMENT</option>
              <option value="full">FULL PAYMENT</option>
            </select>
            <input type="submit" name="update" value="update"/>
            <br><br><br>
             </form>
             <?php 

             if (isset($_POST['update'])){
                $date=$_POST['eventdate'];
                $amount=$_POST['amount'];
                
                $paymentdate=$_POST['datepicker'];
                $transaction=$_POST['transac'];

                if(empty($date && $amount && $paymentdate))     
                {
                  echo "INCOMPLETE DETAILS!!!!!!!!!!";
                }
                   else {
                        
                        if ($transaction == "reserve"){
                            $sql = "SELECT * FROM clientsorder WHERE pref_date='$date'";
                            $query = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($query);
                            $balance = $row['balance'];
                            $total = $row['totalpayment'];
                           // $reservation = $row['reservationamount'];
                            #LEFT BALANCE
                            $leftbalance = $balance - $amount;
                            #TOTAL PAYMENT
                            $totalpayment = $total + $amount;

                             $sql2 = "UPDATE clientsorder SET reservationamount='$amount',  reservationdate='$paymentdate',balance ='$leftbalance', totalpayment='$totalpayment'  WHERE pref_date = '$date' ";

                              $query1 = "SELECT * FROM `clientsorder` WHERE status='APPROVED'";
                              $search_result = $conn->query($query1);

                             mysqli_query($conn, $sql2);
                             echo '<script> swal({  title: "SUCCESSFUL!",
    text: "",
    icon: "success",
    button: "OK"}).then(okay => {
   if (okay) {
    window.location.href = "paymentrecord.php";
  }
});

</script>';

                        }
                        elseif ($transaction == "partial"){
                           $sql = "SELECT * FROM clientsorder WHERE pref_date='$date'";
                            $query = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($query);
                            $balance = $row['balance'];
                            $total = $row['totalpayment'];
                           // $reservation = $row['reservationamount'];
                            #LEFT BALANCE
                            $leftbalance = $balance - $amount;
                            #TOTAL PAYMENT
                            $totalpayment = $total + $amount;

                             $sql2 = "UPDATE clientsorder SET partialamount='$amount',  partialdate='$paymentdate',balance ='$leftbalance', totalpayment='$totalpayment'  WHERE pref_date = '$date' ";
                             mysqli_query($conn, $sql2);
                             echo '<script> swal({  title: "SUCCESSFUL!",
    text: "",
    icon: "success",
    button: "OK"}).then(okay => {
   if (okay) {
    window.location.href = "paymentrecord.php";
  }
});

</script>';
                        }
                        elseif ($transaction =="full"){
                            $sql = "SELECT * FROM clientsorder WHERE pref_date='$date'";
                            $query = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($query);
                            $payment_total = $row['payment_total'];
                            $balance = $row['balance'];
                            $total = $row['totalpayment'];
                           // $reservation = $row['reservationamount'];
                            #LEFT BALANCE
                            $leftbalance = $balance - $amount;
                            #TOTAL PAYMENT
                            $totalpayment = $total + $amount;
                            

                            if ($amount == $balance){
                              $status1 = "PAID";
                              $sql2 = "UPDATE clientsorder SET fullamount='$amount',  fulldate='$paymentdate',balance ='$leftbalance', totalpayment='$totalpayment', status='$status1'  WHERE pref_date = '$date' ";
                             mysqli_query($conn, $sql2);
                              echo '<script> swal({  title: "SUCCESSFUL!",
    text: "",
    icon: "success",
    button: "OK"}).then(okay => {
   if (okay) {
    window.location.href = "paymentrecord.php";
  }
});

</script>';
                            }
                                else{
                                  $status = "APPROVED";
                              $sql2 = "UPDATE clientsorder SET fullamount='$amount',  fulldate='$paymentdate',balance ='$leftbalance', totalpayment='$totalpayment', status='$status'  WHERE pref_date = '$date' ";
                             mysqli_query($conn, $sql2);
                              echo "Successful! PAYMENT IS NOT YET DONE!";
                              echo '<script> swal({  title: "SUCCESSFUL!",
    text: "Approval message sent!",
    icon: "success",
    button: "OK"}).then(okay => {
   if (okay) {
    window.location.href = "viewrecords.php";
  }
});

</script>';
                             
                                   }
                            }

                     }

               }

             ?>
     <div style="overflow:auto; height: 600px; width: 100%"/>
      <div id="result2"></div>

    </div>
    <div style="clear:both"></div>
    <br />
</div>



             </form>



</div>
</div>
</div>


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


</body>
</html>
