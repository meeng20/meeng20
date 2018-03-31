<?php 
session_start();
include 'dbcon.php';

$errors = array();


?>


<!DOCTYPE html>
<html>
<head>
  <title>Whiteplates Catering Services</title>
 
  <!--//fonts-->
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/register9.css" rel="stylesheet" type="text/css" media="all" />
  <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Favorites Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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


  <!-- datepicker -->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
<script type="text/javascript">
$(function() {
var date = new Date();
var currentMonth = date.getMonth();
var currentDate = date.getDate();
var currentYear = date.getFullYear();
$('#date').datepicker({
dateFormat: "dd/MM/yy",
changeMonth: true,
changeYear: true,
yearRange: "-100:+0", // this is the option you're looking for
numberOfMonths: 1,
maxDate: new Date(currentYear, currentMonth, currentDate)

});
});
</script>

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


  <!--//sweetalert-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<div class="banner two">
<!-- header -->
<div class="header">
  <div class="container">
    <div class="top-header">
        <div class="header-left">
          
        </div>
        <div class="login-section">
          <ul>
            <li><a href="login.php">Book Now</a>  </li> |
            <li><a href="register.php">Register</a> </li>
          </ul>
        </div>        
        <div class="clearfix"></div>
    </div>
  </div>
</div>

<!-- //header -->
<!-- banner -->
<div class="banner-slider">
  <div class="banner-pos">
          
            <div class="container" style="width: 100%; height: 100%;">
              <div class="navigation text-center">
                <span class="menu"><img src="images/menu.png" alt=""/></span>
                  <ul class="nav1">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                    <li><a href="portfolio.php">PORTFOLIO</a></li>
                    <li><a href="package.php">PACKAGE</a></li>
                  
                    
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
          </div>
  </div>




<!-- //banner -->
<center><br>
<?php
  
  $errorfirstname = "";
  $errortypefirstname = "";
  $errorlastname = "";
  $errortypelastname = "";
  $erroraddress = "";
  $errorbday = "";
  $errorgender = "";
  $errorcontact = "";
  $errortypecontact = "";
  $erroremail = "";
  $errortypeusername = "";
  $errorpassword = "";
  $errorconfirmpassword = "";
  $errorquestion = "";
  $erroranswer = "";
  $errormatch = "";

if (isset($_POST['register'])) 
{
  
  $firstname =$_POST['firstname'];
  $lastname = $_POST['lastname'];
  $address = $_POST['address'];
  $bday = $_POST['bday'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirmpassword'];
  $question = $_POST['question'];
  $answer = $_POST['answer'];
  $type = "member";
  $clienttype = "ONLINE";
  $successregister = "Registration Successful! Click to Login!";

  

  if (empty($firstname))
  {
    $errorfirstname = "<font color='red'>"."*Firstname is required"."</font>";
  }
  if (empty($lastname)) 
  {
    $errorlastname =  "<font color='red'>"."*Lastname is required"."</font>";
  }
  if (empty($address)) 
  {
    $erroraddress =  "<font color='red'>"."*Address is required"."</font>";
  }
  if (empty($bday)) 
  {
    $errorbday =  "<font color='red'>"."*Birthdate is required"."</font>";
  }
  if (isset($_POST['gender'])){
        $gender = $_POST['gender'];
    }
    elseif (empty($gender)) 
  {
    $errorgender =  "<font color='red'>"."*Choose your gender"."</font>";
  }
  if (empty($contact)) 
  {
    $errorcontact =  "<font color='red'>"."*Contact is required"."</font>";
  }
  if (empty($email)) 
  {
    $erroremail =  "<font color='red'>"."*Email is required"."</font>";
  }
  if (empty($password))
   {
  $errorpassword =  "<font color='red'>"."*Password is required"."</font>";
  }
  if (empty($confirmpassword))
   {
  $errorconfirmpassword =  "<font color='red'>"."*Please confirm your password"."</font>";
  }
  if (empty($question))
   {
  $errorquestion =  "<font color='red'>"."*Choose question"."</font>";
  }
  if (empty($answer))
   {
  $erroranswer =  "<font color='red'>"."*Answer is required"."</font>";
  }
  if ($password  != $confirmpassword) { 
    $errormatch =  "<font color='red'>"."*Passwords do not match"."</font>";
    
  }
  if (empty($firstname)) 
  {
    array_push($errors, "Firstname is required");
  }
  if (empty($lastname)) 
  {
    array_push($errors, "Lastname is required");
  }
  if (empty($address)) 
  {
    array_push($errors, "Address is required");
  }
  if (empty($bday)) 
  {
    array_push($errors, "Birthdate is required");
  }
  if (empty($gender)) 
  {
    array_push($errors, "Gender is required");
  }
  if (empty($contact)) 
  {
    array_push($errors, "Contact is required");
  }
  if (empty($email)) 
  {
    array_push($errors, "Email is required");
  }
  if (empty($password))
   {
  array_push($errors, "Password is required");
  }
  if (empty($question))
   { 
  array_push($errors, "Question is required");
  }
  if (empty($answer))
   {
  array_push($errors, "Answer is required");
  }
  if (count($errors) >= 1) 
    {
      echo '<script> swal({ title: "ERROR!",
 text: "Please fill up all fields!",
 type: "error"}).then(okay => {
   if (okay) {
    window.location.href = "register.php";
  }
});

</script>';
    }
  else if (count($errors) == 0) 
    {
      $fullname = $firstname." ".$lastname;

      $sql = "SELECT * FROM clientsrecord WHERE email = '$email'";
      $result = $conn->query($sql);
    
      
    
      if($result -> num_rows == 0 )
      {

        
        $sql = "INSERT INTO clientsrecord (name, address, bday, gender, contact, email, password, question, answer, type, clienttype) values ('$fullname', '$address','$bday', '$gender', '$contact', '$email', '$password' , '$question', '$answer', '$type', '$clienttype')";
        mysqli_query($conn, $sql);
       $sql = "SELECT id FROM clientsrecord WHERE email = '$email' LIMIT 1";
       $query = mysqli_query($conn, $sql);
       $result = $conn->query($sql);
       $row = mysqli_fetch_assoc($query);
       $id = $row['id'];
       include_once 'signupemail.php';

       // header("Location: login.php");
      }
 
      else
      {
       // echo "Email already exists.";   
       echo "<script>
alert('Email already exists...');
window.location.href='register.php';
</script>";
      exit(); 
      /* echo '<script>swal({
        title: "Sorry",
        text: "Email already exist",
        icon: "info",
        button: "ok!",
      });
      </script>';*/
      }
    }
    else
    {
      echo "Error!";
    }
}


?>
</center>
<br><br>


<div class="container">
    <div style="margin: 
  0px auto; padding: 30px;
  width: 100%;border:3px solid black;
  filter: alpha(opacity=80);
  border: 6px solid #305a72 ; 
  box-shadow:1px 1px 25px rgba(0,0,0,0.35);
  border-radius:10px; 
  background-color:#f8f8f8;" > 


<form action="register.php" method="post">
		<ol class="breadcrumb" style="background-color:#f65a5b">
            <center>
            <h3><b><font color="white"> Registration</h3></font></b>
			</center>
        </ol>  
<div class="form-group" >
    <div class="row">
        <div class="col-md-6">      
          <label for="firstname">First Name:</label>
          <input type="firstname" class="form-control" placeholder="First Name" name="firstname" onkeypress="return onlyAlphabets(event,this);" maxlength="25" autocomplete="off" required> <?php echo $errorfirstname; ?>
		</div>

		<div class="col-md-6">
            <label for="lastname">Last Name:</label>
            <input class="form-control" type="lname" placeholder="Last Name" name="lastname" onkeypress="return onlyAlphabets(event,this);" maxlength="25" autocomplete="off" required> <?php echo $errorlastname; ?>
        </div>
      
		<div class="col-md-6">
			<label>Gender:</label><br>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="radio" name="gender" value="Female" required />Female 
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="radio" name="gender" value="Male" />Male 
            <?php echo $errorgender; ?>
		</div>

		<div class="col-md-6"> 
			<label for="date">Date of Birth</label>
            <input type="text" class="form-control" id="date" name="bday" autocomplete="off" required> <?php echo $errorbday; ?>
		</div>
    </div>
</div>

<div class="form-group">
    <div class="row">
      <div class="col-md-6">
        <label>Email address:</label>
        <input class="form-control" type="email" placeholder="Email" maxlength="50" name="email" autocomplete="off" required> <?php echo $erroremail; ?>
      </div>


      <div class="col-md-6">
        <label>Phone/Mobile Number:</label>
        <input class="form-control" type="text" placeholder="Phone/Mobile Number" name="contact" onkeypress="return isNumberKey(event)" maxlength="11" autocomplete="off" required> <?php echo $errorcontact; ?>
      </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
      <div class="col-md-6">
        <label>Home Address:</label>
        <input class="form-control" type="text" placeholder="Address"  maxlength="100" name="address" autocomplete="off" required> <?php echo $erroraddress; ?>  
      </div>
	</div>

	
	<div class="form-group">
		<div class="row">
			<div class="col-md-6">
				<label>Password:</label>
				<input class="form-control" type="password" placeholder="Password"  maxlength="30" name="password" autocomplete="off" required><?php echo $errorpassword; ?>
			</div>
			<div class="col-md-6">
				<label>Confirm Password:</label>
				<input class="form-control" type="password" placeholder="Confirm Password"  maxlength="30" name="confirmpassword" autocomplete="off" required> <?php echo $errorconfirmpassword; ?>
			</div>
		</div>
	</div>

  <div class="form-group">
    <div class="row">
     <div class="col-md-6">
        <label>Secret Question 1:</label>
        <p><i> This will be asked when you forget you password </i></p>
        <div class="col-md-13">
        <select type="question" class="form-control" name="question" autocomplete="off" required>
          <option value=></option>
          <option value="Favorite food">What is your favorite food?</option>
          <option value="Favorite color">What is your favorite color?</option>
          <option value="Favorite pet">What is the name  of your favorite pet?</option>
          <option value="Favorite actor">Who is your favorite actor, musician, or artist?</option>
          <option value="First School">What is the name of your first school?</option>
          </select><?php echo $errorquestion; ?>
        </div>
      </div>
      <div class="col-md-6">
        <label>Secret Answer 1:</label>
        <p><i> This should be the answer to your secret question</i></p>
        <input type="answer" class="form-control" name="answer" autocomplete="off" required ><?php echo $erroranswer; ?>
      </div>
    </div>
  </div>


	<center>
		<a href="index.php"><div type="cancel" class="btn btn-default">Cancel</div></a>
		<input name="register" class="btn btn-primary"  type="submit" id="btnLogin" value=" Submit"/>  
	</center>

</form>

</div>
</div>
</div>

<br>
<br><br><br>


<!-- footer -->
<div class="footer">
  <div class="container">
    <div class="footer-right">
        <br><br>
    </div>
    <div class="clearfix"></div>
  </div>
</div>

<!-- //footer -->
</div>
</body>
</html>

