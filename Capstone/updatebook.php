
<!DOCTYPE html>
<html>
<head>
	<title></title>
   <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>



</body>
</html>
<?php
$connection =	mysqli_connect('localhost' , 'root' ,'' ,'catering');




if(isset($_POST['id'])){
	

			$id = $_POST['id'];
	 		$name = $_POST['name'];
            $pref_date = $_POST['pref_date'];
            $pref_event = $_POST['pref_event'];
            $title = $_POST['title'];
            $pref_time = $_POST['pref_time'];
            $packagetype = $_POST['packagetype'];
            $theme = $_POST['theme'];
            $pref_venue = $_POST['pref_venue'];
            $guests_no = $_POST['guests_no'];
            $addons = $_POST['addons'];
            $payment_total = $_POST['payment_total'];


	//  query to update data 
	 
	$result  = mysqli_query($connection , "UPDATE clientsorder SET name='$name' , pref_date='$pref_date' , pref_event = '$pref_event', title='$title' , pref_time='$pref_time' , packagetype = '$packagetype', theme='$theme' , pref_venue='$pref_venue' , guests_no = '$guests_no', addons='$addons' , payment_total='$payment_total' WHERE id='$id'");
	if($result){
		echo 'data updated';
	}

}
?>