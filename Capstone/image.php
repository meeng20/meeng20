<?php

include 'dbcon.php';

	$date = $_GET['view'];
	$sql = "SELECT image FROM clientsorder WHERE pref_date='$date'";
	$result = $conn->query($sql);

        while($rows = mysqli_fetch_array($result))
      {
       echo '<img src="data:image/jpeg;base64,'.base64_encode($rows['image'] ).'" height="200" width="200"/>';
      }

?>