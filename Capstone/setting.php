<?php
include 'dbcon.php';
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['type']) )
{

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
}
 else 
 header("location: login.php");

?>
<?php
$sql = "SELECT * FROM clientsrecord  WHERE email = '$email'";
$query = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($query)) 
{

    
$id = $row['id'];
$name = $row['name'];
$address = $row['address'];
$bday = $row['bday'];
$gender = $row['gender'];
$contact = $row['contact'];
$email = $row['email'];

}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="setting.php" method="post">


<input type="firstname" class="form-control" placeholder="First Name" name="firstname" onkeypress="return onlyAlphabets(event,this);" maxlength="25">

<input type="firstname" class="form-control" placeholder="First Name" name="firstname" onkeypress="return onlyAlphabets(event,this);" maxlength="25">

<input type="firstname" class="form-control" placeholder="First Name" name="firstname" onkeypress="return onlyAlphabets(event,this);" maxlength="25">

<input type="firstname" class="form-control" placeholder="First Name" name="firstname" onkeypress="return onlyAlphabets(event,this);" maxlength="25">

<input type="firstname" class="form-control" placeholder="First Name" name="firstname" onkeypress="return onlyAlphabets(event,this);" maxlength="25">

 </form>

</body>
</html>