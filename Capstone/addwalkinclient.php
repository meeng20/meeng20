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

<!-- //header --> <div class="banner two">
<div class="banner-slider">
	<div class="banner-pos">

           <div class="container" style="width: 100%; height: 100%; ">
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


   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
     $( "#datepicker" ).datepicker({
            dateFormat : 'mm/dd/yy',
            changeMonth : true,
            changeYear : true,
            yearRange: '-100y:c+nn',
            
        });
    });
  </script>





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
  $clienttype = "WALKIN";
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
      echo "<h3>"."<font color = 'red'>"."Please fill up all informations!!!"."</font>"."</h3>";
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
        echo "Email already exists.";   
      }
    }
    else
    {
      echo "Error!";
    }
}


?>
</center>
<br>


<div class="container">
    <div style="margin: 
  0px auto; padding: 30px;
  width: 100%;border:3px solid black;
  opacity: .9;
  filter: alpha(opacity=80);
  border: 6px solid #305a72 ; 
  box-shadow:1px 1px 25px rgba(0,0,0,0.35);
  border-radius:10px; 
  background-color:#f8f8f8;" > 


<form action="addwalkinclient.php" method="post">

<ol class="breadcrumb" style="background-color:#f65a5b">
               <center>
            <h3><b><font color="white"> Registration</h3></font></b>
          </center>
        </ol>  <div class="form-group" >
      <div class="row">

          

        <div class="col-md-6">
      
          <label for="firstname">First Name:</label>
          <input type="firstname" class="form-control" placeholder="First Name" name="firstname" onkeypress="return onlyAlphabets(event,this);" maxlength="25"> <?php echo $errorfirstname; ?>
      </div>

      <div class="col-md-6">
              <label for="lastname">Last Name:</label>
                   <input class="form-control" type="lname" placeholder="Last Name" name="lastname" onkeypress="return onlyAlphabets(event,this);" maxlength="25"> <?php echo $errorlastname; ?>
          </div>
      
     <div class="col-md-6">
        <label>Gender:</label><br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="radio" name="gender" value="Female" />Female 
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="radio" name="gender" value="Male" />Male 
              <?php echo $errorgender; ?>
      </div>


      <div class="col-md-6  "> 
        <label for="date">Date of Birth</label>
            <input type="text" class="form-control" id="datepicker" name="bday"> <?php echo $errorbday; ?>

      </div>
    </div>
</div>

  <div class="form-group">
    <div class="row">
      <div class="col-md-6">
        <label>Email address:</label>
        <input class="form-control" type="email" placeholder="Email" maxlength="50" name="email"> <?php echo $erroremail; ?>
      </div>


      <div class="col-md-6">
        <label>Phone/Mobile Number:</label>
        <input class="form-control" type="text" placeholder="Phone/Mobile Number" name="contact" onkeypress="return isNumberKey(event)" maxlength="11"> <?php echo $errorcontact; ?>
      </div>
    </div>
  </div>

<div class="form-group">
    <div class="row">
      <div class="col-md-6">
        <label>Home Address:</label>
        <input class="form-control" type="text" placeholder="Address"  maxlength="100" name="address"> <?php echo $erroraddress; ?>  
      </div>
 </div>

<div class="form-group">
    <div class="row">
      <div class="col-md-6">
        <label>Password:</label>
        <input class="form-control" type="password" placeholder="Password"  maxlength="30" name="password"><?php echo $errorpassword; ?>
      </div>
      <div class="col-md-6">
        <label>Confirm Password:</label>
        <input class="form-control" type="password" placeholder="Confirm Password"  maxlength="30" name="confirmpassword" > <?php echo $errorconfirmpassword; ?>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
     <div class="col-md-6">
        <label>Secret Question 1:</label>
        <p><i> This will be asked when you forget you password </i></p>
        <div class="col-md-13">
        <select type="question" class="form-control" name="question">
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
        <input type="answer" class="form-control" name="answer" ><?php echo $erroranswer; ?>
      </div>
    </div>
  </div>


<center>
<a href="index.php"><div type="cancel" class="btn btn-default">Cancel</div></a>
<input name="register" class="btn btn-success"  type="submit" id="btnLogin" value=" Submit"/>  
</center>

</form>
  </div>  </div>  </div>  </div>  </div>  </div>



<!-- footer -->
<div class="footer">
  <div class="container">
    
    <div class="footer-right">
      <ul>
        <br>
        
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
      <link href="css/register.css" rel="stylesheet" type="text/css" media="all" />
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

</head>
<body>
<div class="bg">

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
          
            <div class="container">
              <div class="navigation text-center">
                <span class="menu"><img src="images/menu.png" alt=""/></span>
                  <ul class="nav1">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                    <li><a href="portfolio.php">PORTFOLIO</a></li>
                    <li><a href="venue.php">VENUE</a></li>
                    <li><a href="promo.php">PROMO</a></li>
                    
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
</div>
<div class="good">
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
  $errorusername = "";
  $errortypeusername = "";
  $errorpassword = "";
  $errorconfirmpassword = "";
  $errorques = "";
  $errorans = "";
  $errormatch = "";

if (isset($_POST['register'])) 
{
  
  $firstname = mysql_real_escape_string($_POST['firstname']);
  $lastname = mysql_real_escape_string($_POST['lastname']);
  $address = mysql_real_escape_string($_POST['address']);
  $bday = mysql_real_escape_string($_POST['bday']);
  $contact = mysql_real_escape_string($_POST['contact']);
  $email = mysql_real_escape_string($_POST['email']);
  $username = mysql_real_escape_string($_POST['username']);
  $password = mysql_real_escape_string($_POST['password']);
  $ques = mysql_real_escape_string($_POST['question']);
  $ans = mysql_real_escape_string($_POST['answer']);
  $confirmpassword = mysql_real_escape_string($_POST['confirmpassword']);
  $type = "member";

  

  if (empty($firstname))
  {
    $errorfirstname = "*Firstname is required";
  }
  if (empty($lastname)) 
  {
    $errorlastname =  "*Lastname is required";
  }
  if (empty($address)) 
  {
    $erroraddress =  "*Address is required";
  }
  if (empty($bday)) 
  {
    $errorbday =  "*Birthdate is required";
  }
  if (isset($_POST['gender'])){
        $gender = $_POST['gender'];
    }

  /*if (isset($_POST['gender'])) 
  {
    $gender = $_POST['gender'];
  }
  else{
    $gender = NULL;
  }
  if($gender = NULL)
  {
    $errorgender =  "*Select gender";
  }
  if (empty($contact)) 
  {
    $errorcontact =  "*Contact is required";
  }
  if (empty($email)) 
  {
    $erroremail =  "*Email is required";
  }
  if (empty($username)) 
  {
    $errorusername =  "*Username is required";
  }
  if (empty($password))
   {
  $errorpassword =  "*Password is required";
  }
  if (empty($confirmpassword))
   {
  $errorconfirmpassword =  "*Please confirm your password";
  }
  if (empty($ques))
   {
  $errorques =  "*Choose question";
  }
  if (empty($ans))
   {
  $errorans =  "*Answer is required";
  }
  if ($password  != $confirmpassword) { 
    $errormatch =  "*Passwords do not match";
    
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
    array_push($errors, "Firstname is required");
  }
  if (empty($username)) 
  {
    array_push($errors, "Username is required");
  }
  if (empty($password))
   {
  array_push($errors, "Firstname is required");
  }
  if (empty($ques))
   {
  array_push($errors, "Firstname is required");
  }
  if (empty($ans))
   {
  array_push($errors, "Firstname is required");
  }
  if ($password  != $confirmpassword) { 
    array_push($errors, "Passwords do not match");
    
  }

  if (count($errors) >= 1) 
    {
      echo "Please fill up all informations";
    }
  
  else if (count($errors) == 0) 
    {
      $sql = "SELECT * FROM clientsrecord WHERE username = '$username'";
      $result = $conn->query($sql);
    
      if($result -> num_rows == 0 )
      {
        $sql = "INSERT INTO clientsrecord (firstname, lastname, address, bday, gender, contact, email, username, password, question, answer, type) values ('$firstname','$lastname', '$address','$bday', '$gender', '$contact', '$email', '$username', '$password' , '$ques', '$ans', '$type')";
        mysqli_query($conn, $sql);
        $_session['username'] = $username;
        $_session['success'] = "logged in";
        header("Location:login.php");
      }
      else
      {
        echo "username already exists";
        
      }
    }
    else
    {
      echo "mali";
    }
}
?>
</center>
<!-- registration-form -->
<div class="registration-form">
  <div class="container">
    <h3>Registration</h3>
    <div class="strip"></div>
    <div class="registration-grids">
      <div class="reg-form">
        <div class="reg">
           <p>Welcome, please enter the following details to continue.</p>
           <form method="post" action="register.php">
             <ul>
               <li class="text-info">First Name: </li>
               <li><input type="text" name="firstname" maxlength="25" onkeypress="return onlyAlphabets(event,this);" required > <?php echo $errorfirstname; ?><?php echo $errortypefirstname; ?></li>
             </ul>
             <ul>
               <li class="text-info">Last Name: </li>
               <li><input type="text" name="lastname" onkeypress="return onlyAlphabets(event,this);" maxlength="25" required  > <?php echo $errorlastname; ?> <?php echo $errortypelastname; ?></li>
             </ul>
             <ul>
               <li class="text-info">Address: </li>
               <li><input type="text" name="address" maxlength="50"><?php echo $erroraddress; ?></li>
             </ul>  
             <ul>
               <li class="text-info">Birthdate: </li>
               <li><input type="text" name="bday" maxlength="20" placeholder="MM/DD/YEAR"><?php echo $errorbday; ?></li>
             </ul>  
             <ul>
               <li class="text-info">Gender: </li>
               <!--<li><input type="text" name="gender" ><?php echo $errorgender; ?></li>-->

                <li><input type="radio" name="gender" value="Female" />Female
                <input type="radio" name="gender" value="Male" />Male
              </li>
            </ul>
            <ul>
               <li class="text-info">Contact Number: </li>
               <li><input type="text" name="contact" onkeypress="return isNumberKey(event)" maxlength="11" required><?php echo $errorcontact; ?> <?php echo $errortypecontact; ?></li>
             </ul>
             <ul>
               <li class="text-info">Email: </li>
               <li><input type="email" name="email" maxlength="50" required><?php echo $erroremail; ?></li>
             </ul>
             <ul>
               <li class="text-info">Username: </li>
               <li><input type="text" name="username" maxlength="50" required ><?php echo $errorusername; ?><?php echo $errortypeusername; ?></li>
             </ul>       
             <ul>
               <li class="text-info">Password: </li>
               <li><input type="password" name="password" maxlength="8" placeholder="********" required><?php echo $errorpassword; ?></li>
             </ul>
             <ul>
               <li class="text-info">Re-enter Password:</li>
               <li><input type="password" name="confirmpassword"  maxlength="8" placeholder="********" required><?php echo $errorconfirmpassword; ?></li>
             </ul>
             <ul>
              <li class="text-info">Question: </li>
              <li><select class="text" name="question">
                <option></option>
                <option>What is the name  of your favorite pet?</option>
                <option>Who is your favorite actor, musician, or artist?</option>
                <option>What is the name of your first school?</option>
                <option>Who is your favorite teacher?</option>
                <option>What is your mother's maiden name?</option>
                <option>What street did you grow up on?</option>
                <option>What is your favorite place?</option>
                </select><?php echo $errorques; ?></li>
             </ul>
             <ul>
               <li class="text-info">Answer: </li>
               <li><input type="text" name="answer" maxlength="50"><?php echo $errorans; ?></li>
             </ul>
            
                                
             <input type="submit" value="REGISTER NOW" name="register">
             <p class="click">By clicking this button, you are agree to my  <a href="#">Policy Terms and Conditions.</a></p> 
           </form>
         </div>
      </div>
      
      <div class="clearfix"></div>
    </div> 
  </div>
</div>
<!-- registration-form -->


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
      <link href="css/register.css" rel="stylesheet" type="text/css" media="all" />
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
          
            <div class="container">
              <div class="navigation text-center">
                <span class="menu"><img src="images/menu.png" alt=""/></span>
                  <ul class="nav1">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                    <li><a href="portfolio.php">PORTFOLIO</a></li>
                    <li><a href="venue.php">VENUE</a></li>
                    <li><a href="promo.php">PROMO</a></li>
                    
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
</div>
<div class="good">
<!-- //banner -->
<center><br>
<?php
  
  $errorfirstname = "";
  $errorlastname = "";
  $erroraddress = "";
  $errorbday = "";
  $errorgender = "";
  $errorcontact = "";
  $erroremail = "";
  $errorusername = "";
  $errorpassword = "";
  $errorconfirmpassword = "";
  $errorques = "";
  $errorans = "";
  $errormatch = "";



if (isset($_POST['register'])) 
{
  
  $firstname = mysql_real_escape_string($_POST['firstname']);
  $lastname = mysql_real_escape_string($_POST['lastname']);
  $address = mysql_real_escape_string($_POST['address']);
  $bday = mysql_real_escape_string($_POST['bday']);
  //$gender = mysql_real_escape_string(isset($_POST['gender']));
  $contact = mysql_real_escape_string($_POST['contact']);
  $email = mysql_real_escape_string($_POST['email']);
  $username = mysql_real_escape_string($_POST['username']);
  $password = mysql_real_escape_string($_POST['password']);
  $ques = mysql_real_escape_string($_POST['question']);
  $ans = mysql_real_escape_string($_POST['answer']);
  $confirmpassword = mysql_real_escape_string($_POST['confirmpassword']);
  $member = "member";

  
  


  if (empty($firstname))
  {
    $errorfirstname = "*Firstname is required";
  }
  if (empty($lastname)) 
  {
    $errorlastname =  "*Lastname is required";
  }
  if (empty($address)) 
  {
    $erroraddress =  "*Address is required";
  }
  if (empty($bday)) 
  {
    $errorbday =  "*Birthdate is required";
  }

  if (isset($_POST['gender'])) 
  {
    $gender = $_POST['gender'];
  }
  else{
    $gender = NULL;
  }
  if($gender = NULL)
  {
    $errorgender =  "*Select gender";
  }
  if (empty($contact)) 
  {
    $errorcontact =  "*Contact is required";
  }
  if (empty($email)) 
  {
    $erroremail =  "*Firstname is required";
  }
  if (empty($username)) 
  {
    $errorusername =  "*Username is required";
  }
  if (empty($password))
   {
  $errorpassword =  "*Password is required";
  }
  if (empty($confirmpassword))
   {
  $errorconfirmpassword =  "*Please confirm your password";
  }
  if (empty($ques))
   {
  $errorques =  "*Choose question";
  }
  if (empty($ans))
   {
  $errorans =  "*Answer is required";
  }
  if ($password  != $confirmpassword) { 
    $errormatch =  "*Passwords do not match";
    
  }

  else
  {
    echo $firstname;
    echo $lastname;
    echo $address;
    echo $bday;
    echo $gender;
    echo $contact;
    echo $email;

  }

  /*if (count($errors) >= 1) 
    {
      echo "Please fill up all informations";
    }
  
  else if (count($errors) == 0) 
    {
  

    $sql = "INSERT INTO clientsrecord (firstname, lastname, address, bday, gender, contact, email, username, password, question, answer, type) values ('$firstname','$lastname', '$address','$bday', '$gender', '$contact', '$email', '$username', '$password' , '$ques', '$ans', '$member')";
    mysqli_query($conn, $sql);
    $_session['username'] = $username;
    $_session['success'] = "logged in";
    header('location: login.php');
    }




    $result = mysqli_query("SELECT * FROM clientsrecord WHERE username='$username'");

    if($result -> num_rows > 0)


    {
      echo "User with username already exist";
    }
    else
    {
        $sql = "INSERT INTO clientsrecord (firstname, lastname, address, bday, gender, contact, email, username, password, question, answer, type) values ('$firstname','$lastname', '$address','$bday', '$gender', '$contact', '$email', '$username', '$password' , '$ques', '$ans', '$member')";
    mysqli_query($conn, $sql);
    $_session['username'] = $username;
    $_session['success'] = "logged in";
    header('location: login.php');
    }
}
?>
</center>
<!-- registration-form -->
<div class="registration-form">
  <div class="container">
    <h3>Registration</h3>
    <div class="strip"></div>
    <div class="registration-grids">
      <div class="reg-form">
        <div class="reg">
           <p>Welcome, please enter the following details to continue.</p>
           <form method="post" action="register.php">
             <ul>
               <li class="text-info">First Name: </li>
               <li><input type="text" name="firstname" maxlength="20" ><?php echo $errorfirstname; ?></li>

             </ul>
             <ul>
               <li class="text-info">Last Name: </li>
               <li><input type="text" name="lastname" maxlength="25"><?php echo $errorlastname; ?></li>
             </ul>
             <ul>
               <li class="text-info">Address: </li>
               <li><input type="text" name="address" maxlength="50"><?php echo $erroraddress; ?></li>
             </ul>  
             <ul>
               <li class="text-info">Birthdate: </li>
               <li><input type="text" name="bday" maxlength="20" placeholder="MM/DD/YEAR"> <?php echo $errorbday; ?></li>
             </ul>  
             <ul>
               <li class="text-info">Gender: </li>
               <li><input type="radio" name="gender" value="female" <?php if (isset($gender) && $gender == "FemaleMALE") echo "checked"; ?>>  Female  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
               <input type="radio" name="gender" value="male" <?php if (isset($gender) && $gender == "MALE") echo "checked"; ?> >   Male
               </li><?php echo $errorgender; ?>
             </ul>
             
             <ul>
               <li class="text-info">Contact Number: </li>
               <li><input type="text" name="contact" maxlength="11"><?php echo $errorcontact; ?></li>
             </ul>
             <ul>
               <li class="text-info">Email: </li>
               <li><input type="email" name="email" maxlength="50"><?php echo $erroremail; ?></li>
             </ul>
             <ul>
               <li class="text-info">Username: </li>
               <li><input type="text" name="username" maxlength="50"><?php echo $errorusername; ?></li>
             </ul>       
             <ul>
               <li class="text-info">Password: </li>
               <li><input type="password" name="password" maxlength="8" placeholder="********"><?php echo $errorpassword; ?></li>
             </ul>
             <ul>
               <li class="text-info">Re-enter Password:</li>
               <li><input type="password" name="confirmpassword"  maxlength="8" placeholder="********"><?php echo $errorconfirmpassword; ?></li>
             </ul>
             <ul>
              <li class="text-info">Question: </li>
              <li><select class="text" name="question">
                <option></option>
                <option>What is the name  of your favorite pet?</option>
                <option>Who is your favorite actor, musician, or artist?</option>
                <option>What is the name of your first school?</option>
                <option>Who is your favorite teacher?</option>
                <option>What is your mother's maiden name?</option>
                <option>What street did you grow up on?</option>
                <option>What is your favorite place?</option>
                </select><?php echo $errorques; ?></li>
             </ul>
             <ul>
               <li class="text-info">Answer: </li>
               <li><input type="text" name="answer" maxlength="50"><?php echo $errorans; ?></li>
             </ul>                      
             <input type="submit" value="REGISTER NOW" name="register">
             <p class="click">By clicking this button, you are agree to my  <a href="#">Policy Terms and Conditions.</a></p> 
           </form>
         </div>
      </div>
      
      <div class="clearfix"></div>
    </div> 
  </div>
</div>
<!-- registration-form -->


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
                
    $().UItoTop({ easingType: 'easeOutQuart' });
    });
  </script>
  <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

</body>
</html>
*/    


