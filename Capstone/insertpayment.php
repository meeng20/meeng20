  <?php  
 $connect = mysqli_connect("localhost", "root", "", "catering");  
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $amount = mysqli_real_escape_string($connect, $_POST["amount"]);  
      $datepicker = mysqli_real_escape_string($connect, $_POST["datepicker"]);  
      $transac = mysqli_real_escape_string($connect, $_POST["transac"]);  
     
      if($_POST["employee_id"] != '')  
      {  



                        if ($transac == "reserve"){
                            $sql = "SELECT * FROM clientsorder WHERE pref_date='$id'";
                            $query = mysqli_query($connection, $sql);
                            $row = mysqli_fetch_assoc($query);
                            $balance = $row['balance'];
                            $total = $row['totalpayment'];
                           // $reservation = $row['reservationamount'];
                            #LEFT BALANCE
                            $leftbalance = $balance - $amount;
                            #TOTAL PAYMENT
                            $totalpayment = $total + $amount;

                             $query = " 
                                       UPDATE clientsorder   
                                       SET reservationamount='$amount',  reservationdate='$date', balance ='$leftbalance', totalpayment='$totalpayment'    
                                         
                                       WHERE pref_date='".$_POST["employee_id"]."'";  
                                       $message = 'Data Updated';  


                        }
                        elseif ($transac == "partial"){
                           $sql = "SELECT * FROM clientsorder WHERE pref_date='$id'";
                            $query = mysqli_query($connection, $sql);
                            $row = mysqli_fetch_assoc($query);
                            $balance = $row['balance'];
                            $total = $row['totalpayment'];
                           // $reservation = $row['reservationamount'];
                            #LEFT BALANCE
                            $leftbalance = $balance - $amount;
                            #TOTAL PAYMENT
                            $totalpayment = $total + $amount;

                             $query = " 
                                       UPDATE clientsorder   
                                       SET reservationamount='$amount',  reservationdate='$date', balance ='$leftbalance', totalpayment='$totalpayment'    
                                         
                                       WHERE pref_date='".$_POST["employee_id"]."'";  
                                       $message = 'Data Updated';  
                        }
                        elseif ($transac =="full"){
                            $sql = "SELECT * FROM clientsorder WHERE pref_date='$id'";
                            $query = mysqli_query($connection, $sql);
                            $row = mysqli_fetch_assoc($query);
                            $balance = $row['balance'];
                            $total = $row['totalpayment'];
                           // $reservation = $row['reservationamount'];
                            #LEFT BALANCE
                            $leftbalance = $balance - $amount;
                            #TOTAL PAYMENT
                            $totalpayment = $total + $amount;
                            
                            if ($amount == $balance){
                              $status1 = "PAID";
                              $query = " 
                                       UPDATE clientsorder   
                                       SET reservationamount='$amount',  reservationdate='$date', balance ='$leftbalance', totalpayment='$totalpayment', status='$status1'    
                                         
                                       WHERE pref_date='".$_POST["employee_id"]."'";  
                                       $message = 'Data Updated';  
                            }
                                else{
                                  $status = "APPROVED";
                             $query = " 
                                       UPDATE clientsorder   
                                       SET reservationamount='$amount',  reservationdate='$date', balance ='$leftbalance', totalpayment='$totalpayment', status='$status'    
                                         
                                       WHERE pref_date='".$_POST["employee_id"]."'";  
                                       $message = 'Data Updated';  
                             
                                   }
                        }

          
      }  
     
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM clientsrecord ORDER BY id DESC";  
           $result = mysqli_query($connect, $select_query);  
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
           while($row = mysqli_fetch_array($result))  
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


 

        <td><a href="#" data-role="update" data-id='.$row["pref_date"].'  data-toggle="modal" data-target="#add_data_Modal" class="btn btn-info btn-xs edit_data" >Update</a></td>


        <td style="padding:10px 10px 10px 10px;" class="col-sm-2" value="$id"><a class="btn btn-primary" href="print.php?view='.$row["pref_date"].'">PRINT</a></td>
      </tr>
    ';
           }  
           $output .= '</table>';  
      }  
      echo $output;  
 }  
 ?>