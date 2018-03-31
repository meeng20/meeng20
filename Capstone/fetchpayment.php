


<!DOCTYPE html>
<html>
<head>
    <title>Whiteplates Catering Services</title>
   <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- calendar -->
  <link href="jqueryui/jquery-ui.css" rel="stylesheet">
  <script src="jqueryui/jquery-ui.js"> </script>
  <script>
  $(document).ready(function(){
     
    $("#datepicker").datepicker(
      {
        
        changeMonth: true,
        changeYear: true,
      });

  });
  
  </script>
  <!-- datepicker -->

   <script>  
 $(document).ready(function(){  
 $('#updatepaymentform').on("submit", function(event){  
    var clientID = $(this).attr("id");
  event.preventDefault();    
   $.ajax({  
    url:"selectpayment.php",  
    method:"POST",  
    data:$('#updatepaymentform').serialize(),  
    beforeSend:function(){  
     $('#update').val("Updating");  
    },  
    success:function(data)
    {  
     $('#updatepaymentform')[0].reset();  
     $('#updatepaymentmodal').modal('hide');        }  
   });  
    
 });
}); 
 </script>

</head>
<body>


 <div id="updatepaymentmodal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">PHP Ajax Update MySQL Data Through Bootstrap Modal</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="updatepaymentform">  
                          <label>Amount</label>  
                          <input type="text" name="amount" id="amount" class="form-control" />  
                          <br />  
                          <label>Date of Payment</label>  
                          <input type="date" name="date" id="date" class="form-control"  class="form-control"  />
                          <br>
                          <select id="transac" name = "transac" class="form-control">
              <option value="reserve">RESERVATION FEE</option>
              <option value="partial">PARTIAL PAYMENT</option>
              <option value="full">FULL PAYMENT</option>
            </select>
                          
                          <br />  
                          <input type="hidden" name="employee_id" id="employee_id" />  
                          <input type="submit" name="update" id="update" value="Update" class="btn btn-success" />  

                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>   
</body>

</html>


<!-- <script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#updatepaymentform')[0].reset();  
      });  
      $(document).on('click', '.a[data-role=update]', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"fetch1.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#amount').val(data.amount);  
                     $('#date').val(data.date);  
                     $('#transac').val(data.transac);    
                     $('#employee_id').val(data.id);  
                     $('#insert').val("Update");  
                     $('#updatepaymentmodal').modal('show');  
                }  
           });  
      });  
      $('#updatepaymentform').on("submit", function(event){  
           event.preventDefault();  
           if($('#amount').val() == "")  
           {  
                alert("Amount is required");  
           }  
           else if($('#date').val() == '')  
           {  
                alert("Date is required");  
           }  

           else  
           {  
                $.ajax({  
                     url:"insertpayment.php",  
                     method:"POST",  
                     data:$('#updatepaymentform').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#updatepaymentform')[0].reset();  
                          $('#updatepaymentmodal').modal('hide');  
                          $('#employee_table').html(data);  
                     }  
                });  
           }  
      });  

 });  
    
 </script>-->


<?php
$connect = mysqli_connect("localhost", "root", "", "catering");
$status = "PAID";
$status2 = "APPROVED";
$query2 = "SELECT * FROM clientsorder WHERE status ='$status' OR status ='$status2'";
$output = '';

if(isset($_POST["query2"]))
{
  $search = $_POST["query2"];
  $query2 = "SELECT * FROM clientsorder WHERE status ='$status' OR status ='$status2' AND name LIKE '%$search%'";
}
else
{
  
  $query2 = "SELECT * FROM clientsorder WHERE status ='$status' OR status ='$status2' ORDER BY name";
}



$result2 = mysqli_query($connect, $query2);
if(mysqli_num_rows($result2) > 0)
{
  $output .= '<div class="table-responsive">
          <table class="table table-bordered table-hover">
            <tr>
              <th class="bg-primary">Name</th>
              <th class="bg-primary">Email</th>
              <th class="bg-primary">Date</th>
              <th class="bg-primary">Event</th>
              <th class="bg-primary">Status</th>
              <th class="bg-primary">Total Package</th>
              <th class="bg-primary">Reservation</th>
              <th class="bg-primary">Date</th>
              <th class="bg-primary">Partial Payment</th>
              <th class="bg-primary">Date</th>
              <th class="bg-primary">Full Payment</th>
              <th class="bg-primary">Date</th>
              <th class="bg-primary">Total Payments</th>
              <th class="bg-primary">Balance</th>
              <th class="bg-primary">Update</th>
              <th class="bg-primary">Print Receipt</th>
            </tr>';
          
  while($row = mysqli_fetch_assoc($result2))
  {
    $output .= '
      <tr id='.$row["pref_date"].'>
        <td data-target="name">'.$row["name"].'</td>
        <td data-target="email">'.$row["email"].'</td>
        <td data-target="pref_date">'.$row["pref_date"].'</td>
        <td data-target="pref_event">'.$row["pref_event"].'</td>
        <td data-target="status">'.$row["status"].'</td>
        <td data-target="payment_total">'.$row["payment_total"].'</td>
        <td data-target="reservationamount">'.$row["reservationamount"].'</td>
        <td data-target="reservationdate">'.$row["reservationdate"].'</td>
        <td data-target="partialamount">'.$row["partialamount"].'</td>
        <td data-target="partialdate">'.$row["partialdate"].'</td>
        <td data-target="fullamount">'.$row["fullamount"].'</td>
        <td data-target="fulldate">'.$row["fulldate"].'</td>
        <td data-target="totalpayment">'.$row["totalpayment"].'</td>
        <td data-target="balance">'.$row["balance"].'</td>


 

        <td><a href="#" data-role="update" id='.$row["pref_date"].'  data-toggle="modal" data-target="#updatepaymentmodal" class="btn btn-info btn-xs" >Update</a></td>

        <td style="padding:10px 10px 10px 10px;" class="col-sm-2" value="$id"><a class="btn btn-primary" href="print.php?view='.$row["pref_date"].'">PRINT</a></td>
      </tr>
    ';
  }
  echo $output;

//        <td><a href="#" data-role="update" data-id='.$row["pref_date"].'  data-toggle="modal" data-target="#updatepaymentmodal" class="btn btn-info btn-xs edit_data" >Update</a></td>
  // <td><input type="button" name="edit" value="Edit" id='.$row["pref_date"].' class="btn btn-info btn-xs edit_data" /></td> 
 // <button type="button" name="age" id='.$row["pref_date"].' data-toggle="modal" data-target="#updatepaymentmodal" class="btn btn-warning">Add</button>
}
else
{
  echo 'Data Not Found';
} 
?>


