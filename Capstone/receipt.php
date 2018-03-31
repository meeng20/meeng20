<!DOCTYPE html>
<html>
<head>
  <title>
    
  </title>
 <!--//sweetalert-->   <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

  <form method='post' enctype="multipart/form-data">
<?php

if(isset($_POST["clientsreceipt"]))
{
 $output1 = '';
 $connect = mysqli_connect("localhost", "root", "", "catering");
 $query1 = "SELECT image FROM clientsorder WHERE pref_date = '".$_POST["clientsreceipt"]."'";
 $result1 = mysqli_query($connect, $query1) or die($mysqli->error.__LINE__);
 $output1 .= '  

           <tr>  
              <th> <label> Image </label> </th>

      </tr>';
    while($row1 = mysqli_fetch_array($result1))
    {
     $output1 .= '
     <td>
     <img src="data:image/jpeg;base64,'.base64_encode($row1['image'] ).'" height="200" width="200"/>
     </td>
     ';
    }
      
}

?>
</form>
</body>



</html>

