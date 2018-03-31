<?php

$conn = mysqli_connect("localhost", "root", "", "catering");
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
?>
