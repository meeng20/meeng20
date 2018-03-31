
  <!--//sweetalert-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <?php
$connection =   mysqli_connect('localhost' , 'root' ,'' ,'catering');
if(!empty($_POST))
{   
    $transaction=mysqli_real_escape_string($connection, $_POST["transac"]);
    $date=mysqli_real_escape_string($connection, $_POST['eventdate'];
    $amount=mysqli_real_escape_string($connection, $_POST['amount'];
    $id=mysqli_real_escape_string($connection, $_POST['date'];


                        
                        if ($transaction == "reserve"){
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

                             $sql2 = "UPDATE clientsorder SET reservationamount='$amount',  reservationdate='$date', balance ='$leftbalance', totalpayment='$totalpayment'  WHERE pref_date = '$id' ";

                              $query1 = "SELECT * FROM `clientsorder` WHERE status='APPROVED'";
                              $search_result = $connection->query($query1);

                             mysqli_query($connection, $sql2);
                             echo  "<script>
                                    alert('SUCCESSFUL!!!');
                                    window.location.href='viewrecords.php';
                                    </script>";
                                          exit();

                        }
                        elseif ($transaction == "partial"){
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

                             $sql2 = "UPDATE clientsorder SET partialamount='$amount',  partialdate='$paymentdate',balance ='$leftbalance', totalpayment='$totalpayment'  WHERE pref_date = '$id' ";
                             mysqli_query($connection, $sql2);
                             echo  "<script>
                                    alert('SUCCESSFUL!!!');
                                    window.location.href='viewrecords.php';
                                    </script>";
                                          exit();
                        }
                        elseif ($transaction =="full"){
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
                            $status = "PAID";


                             $sql2 = "UPDATE clientsorder SET fullamount='$amount',  fulldate='$paymentdate',balance ='$leftbalance', totalpayment='$totalpayment', status='$status'  WHERE pref_date = '$id' ";
                             mysqli_query($connection, $sql2);
                             echo  "<script>
                                    alert('SUCCESSFUL!!!');
                                    window.location.href='viewrecords.php';
                                    </script>";
                                          exit();
                        }

    }


             ?>