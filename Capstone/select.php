
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
//select.php  
if(isset($_POST["clientID"]))
{
 $output = '';
 $connect = mysqli_connect("localhost", "root", "", "catering");
 $query = "SELECT * FROM clientsorder WHERE email = '".$_POST["clientID"]."'";
 $result = mysqli_query($connect, $query);
 $output .= '  
      <div class="table-responsive">   
           <table class="table table-bordered">
           <tr>  
            <th width="30%"><label>Name</label></th> 
            <th width="30%"><label>Event</label></th>  
            <th width="30%"><label>Date</label></th>
            <th width="30%"><label>Time</label></th> 
            <th width="30%"><label>Title</label></th> 
            <th width="30%"><label>No. of Guests</label></th>   
            <th width="30%"><label>Venue</label></th>
             <th width="30%"><label>Theme</label></th>
              <th width="30%"><label>Package</label></th>
               <th width="30%"><label>Add ons</label></th>
            <th width="30%"><label>Total</label></th> 
            <th width="30%"><label>Status</label></th> 

      </tr>';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
     
      <tr>
            <td width="40%">'.$row["name"].'</td>  
            <td width="40%">'.$row["pref_event"].'</td>
            <td width="40%">'.$row["pref_date"].'</td>  
            <td width="40%">'.$row["pref_time"].'</td>
            <td width="40%">'.$row["title"].'</td>  
            <td width="40%">'.$row["guests_no"].'</td>
            <td width="40%">'.$row["pref_venue"].'</td>
            <td width="40%">'.$row["theme"].'</td>
            <td width="40%">'.$row["packagetype"].'</td>  
            <td width="40%">'.$row["addons"].'</td>  
            <td width="40%">'.$row["payment_total"].'</td>
            <td width="40%">'.$row["status"].'</td>  
                  </tr>
     ';
    }
    $output .= '</table></div>';
    echo $output;
}


?>
             