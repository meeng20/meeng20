
<!DOCTYPE html>
<html>
<head>
	  <title>Whiteplates Catering Services</title>
	  
 <!--//sweetalert-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

<div id="data_modal1" class="modal fade">
 <div class="modal-dialog modal-lg" >
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Client Details</h4>
   </div><div style="overflow:auto; height: 500px; width: 100%">
   <div class="modal-body" id="clientdetails">
    
   </div></div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>





</body>



</html>


<script>
$(document).ready(function(){
 $(document).on('click', '.viewclientdata', function(){
  //$('#data_modal1').modal();
  var clientID = $(this).attr("id");
  $.ajax({
   url:"select.php",
   method:"POST",
   data:{clientID:clientID},
   success:function(data){
    $('#data_modal1').modal('show'); 
     $('#clientdetails').html(data);
   }
  });
 });
});  
 </script>

<?php
$connect = mysqli_connect("localhost", "root", "", "catering");
$type = "member";
  $query = "SELECT * FROM clientsrecord WHERE type ='$type' AND activated='1'";
$output = '';



if(isset($_POST["query"]))
{
  $search = $_POST["query"];
  $query = "SELECT * FROM clientsrecord WHERE type='$type' AND activated='1' AND name LIKE '%$search%'";
}
else
{
  
  $query = "SELECT * FROM clientsrecord WHERE type ='$type' AND activated='1' ORDER BY name";
}




$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
  $output .= '<div class="table-responsive">
          <table class="table table-bordered table-hover">
            <tr class="table-active">
              <th class="bg-primary">Name</th>
              <th class="bg-primary">Address</th>
              <th class="bg-primary">Email</th>
              <th class="bg-primary">Contact</th>
              <th class="bg-primary">Details</th>
            </tr>';
          
  while($row = mysqli_fetch_assoc($result))
  {
    $output .= '
      <tr>
        
        <td>'.$row["name"].'</td>
        <td>'.$row["address"].'</td>
        <td>'.$row["email"].'</td>
        <td>'.$row["contact"].'</td>
<td><input type="button" name="view" value="view" id='.$row["email"].' data-target="#data_modal1" class="btn btn-primary viewclientdata"  /></td>
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