<html>
<head>
    <title>allwon only alphabets in textbox using JavaScript</title>
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
</head>
<body>

<form action="" method="post">
First Name
<input type="text" name="firstname" onkeypress="return onlyAlphabets(event,this);" maxlength="25" required ><br>
Last Name
<input type="text" name="lastname"  onkeypress="return onlyAlphabets(event,this);" maxlength="15" required ><br>
Contact Number
<input type="tel" name="contact"  onkeypress="return isNumberKey(event)" maxlength="11"required><br>
Gender
<input type="radio" name="gender" value="male"> Male &nbsp;&nbsp;
  <input type="radio" name="gender" value="female"> Female<br>
 Email Address
<input type="email" name="email"  maxlength="30" required ><br>
Username
<input type="text" name="username" maxlength="15" required ><br>
Password
<input type="password" name="password"  maxlength="20" required><br>
Repeat Password
<input type="password" name="cpassword" required>
 <a href="index.html"><button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" name="btnsignup" class="signupbtn">Sign Up</button>

	  <?php
	  if(isset($_POST['btnsignup'])){
		$pass = $_POST['password'];
	    $cpass = $_POST['cpassword'];

					if ($cpass != $pass )
			{
				echo'<script>alert("password dont match")</script>';
				echo'<script>window.location="Signup.php"</script>';
			}
			else
			{
				echo'<script>window.location="login.php"</script>';
			}
}
 ?>
</body>
</html>