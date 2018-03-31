  <?php
$connect = mysqli_connect("localhost", "root", "", "catering");
$status3 = "CANCELLED";
$query3 = "SELECT * FROM clientsorder WHERE status ='$status3'";
$output = '';

if(isset($_POST["query3"]))
{
  $search = $_POST["query3"];
  $query3 = "SELECT * FROM clientsorder WHERE status='$status3' AND name LIKE '%$search%'";
}
else
{
  
  $query3 = "SELECT * FROM clientsorder WHERE status ='$status3' ORDER BY name";
}



$result3 = mysqli_query($connect, $query3);
if(mysqli_num_rows($result3) > 0)
{
  $output .= '<div class="table-responsive">
          <table class="table table-bordered table-hover">
            <tr>
              <th class="bg-primary">Name</th>
              <th class="bg-primary">Date</th>
              <th class="bg-primary">Event</th>
              <th class="bg-primary">Title</th>
              <th class="bg-primary">Time</th>
              <th class="bg-primary">Status</th>
            </tr>';
          
  while($row = mysqli_fetch_assoc($result3))
  {
    $output .= '
      <tr>
        <td>'.$row["name"].'</td>
        <td>'.$row["pref_date"].'</td>
        <td>'.$row["pref_event"].'</td>
        <td>'.$row["title"].'</td>
        <td>'.$row["pref_time"].'</td>
        <td>'.$row["status"].'</td>
      </tr>
    ';
  }
  echo $output;
}
else
{
  echo 'Data Not Found';
} 
?>