<?php
if (isset($_GET['id']) && isset($_GET['email']) && isset($_GET['password'])) {
	// Connect to database and sanitize incoming $_GET variables
    include_once 'dbcon.php';
    $id =  $_GET['id'];
	$email = mysqli_real_escape_string($conn, $_GET['email']);
	$password = mysqli_real_escape_string($conn, $_GET['password']);

	// Evaluate the lengths of the incoming $_GET variable
		if($id == "" || strlen($email) < 5 || $password ==""){
		// Log this issue into a text file and email details to yourself
		header("location: message.php?msg=activation_string_length_issues");
    	exit(); 
	}
	// Check their credentials against the database
	$sql = "SELECT * FROM clientsrecord WHERE id='$id' AND email='$email' AND password='$password' LIMIT 1";
    $query = mysqli_query($conn, $sql);
	$numrows = mysqli_num_rows($query);
	// Evaluate for a match in the system (0 = no match, 1 = match)
	if($numrows == 0){
		// Log this potential hack attempt to text file and email details to yourself
		header("location: message.php?msg=Your credentials are not matching anything in our system");
    	exit();
	}
	// Match was found, you can activate them
	$sql = "UPDATE clientsrecord SET activated='1' WHERE id='$id' LIMIT 1";
    $query = mysqli_query($conn, $sql);
	// Optional double check to see if activated in fact now = 1
	$sql = "SELECT * FROM clientsrecord WHERE id='$id' AND activated='1' LIMIT 1";
    $query = mysqli_query($conn, $sql);
	$numrows = mysqli_num_rows($query);
	// Evaluate the double check
    if($numrows == 0){
		// Log this issue of no switch of activation field to 1
        header("location: message.php?msg=activation_failure");
    	exit();
    } else if($numrows == 1) {
		// Great everything went fine with activation!
        header("location: message.php?msg=activation_success");
    	exit();
    }
} else {
	// Log this issue of missing initial $_GET variables
	header("location: message.php?msg=missing_GET_variables");
    exit(); 
}
?>