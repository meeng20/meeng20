<?php
ob_start();
session_start();

include 'dbcon.php';

function logged_in(){
	if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
	return true;
}
else{
	return false;

	}
}

function login_redirect_client(){
	if (isset($_SESSION['email']) && !empty($_SESSION['email']) && ($_SESSION['type']==client)){
		header('Location:login.php');
	}
}

function login_redirect_owner(){
	if (isset($_SESSION['email']) && !empty($_SESSION['email']) && ($_SESSION['type']==owner)){
		header('Location:login.php');
	}
}

function login_redirect_admin(){
	if (isset($_SESSION['email']) && !empty($_SESSION['email']) && ($_SESSION['type']==admin)){
		header('Location:login.php');
	}
}

?>