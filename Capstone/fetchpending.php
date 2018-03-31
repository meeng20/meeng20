      <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<?php
$connect = mysqli_connect("localhost", "root", "", "catering");
$status1 = "PENDING";
$query1 = "SELECT * FROM clientsorder WHERE status ='$status1'";
$output = '';

if(isset($_POST["query1"]))
{
	$search = $_POST["query1"];
	$query1 = "SELECT * FROM clientsorder WHERE status='$status1' AND name LIKE '%$search%'";
}
else
{
	
	$query1 = "SELECT * FROM clientsorder WHERE status ='$status1' ORDER BY name";
}



$result1 = mysqli_query($connect, $query1);
if(mysqli_num_rows($result1) > 0)
{
  $output .= '<div class="table-responsive">
          <table class="table table-bordered table-hover">
            <tr>
              <th class="bg-primary">Name</th>
              <th class="bg-primary">Date</th>
              <th class="bg-primary">Event</th>
              <th class="bg-primary">Title</th>
              <th class="bg-primary">Time</th>
              <th  class="bg-primary" colspan="2" scope="col" style="padding:10px 10px 10px 10px;"> Details </th>
            </tr>';
          
  while($row = mysqli_fetch_assoc($result1))
  {
    $output .= '
      <tr>
        <td>'.$row["name"].'</td>
        <td>'.$row["pref_date"].'</td>
        <td>'.$row["pref_event"].'</td>
        <td>'.$row["title"].'</td>
        <td>'.$row["pref_time"].'</td>
        <td value="$id">
		
			<a class="btn btn-primary" href="approve.php?view='.$row["pref_date"].'">APPROVE</a>
<a class="btn btn-primary" href="cancel.php?view='.$row["pref_date"].'">CANCEL</a>
			
	   </td>
      </tr>
    ';
  }
  echo $output;
}
else
{
  echo 'Data Not Found';
}