<!DOCTYPE html>
<html>
<head>
  <title></title>
    <!--//sweetalert-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

 <?php
session_start();
error_reporting (E_ALL ^ E_NOTICE);
//$type = $_SESSION['type'];
//$member = "member";
if (isset($_SESSION['type']))
{
  if ($_SESSION['type']== owner){
      $email = $_SESSION['email'];
  }else
   header("location: login.php");
}
 else 
 header("location: login.php");

include 'dbcon.php';
$sql = "SELECT * FROM clientsrecord WHERE email='$email' ";
   $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
       while($row = $result->fetch_assoc()) 
      {
    
$id = $row['id'];
$name = $row['name'];
$address = $row['address'];
$bday = $row['bday'];
$gender = $row['gender'];
$contact = $row['contact'];
$email = $row['email'];

}
}


 $date = $_GET['view'];

  $query2 = "SELECT * FROM clientsorder WHERE pref_date='$date'";
    $result = mysqli_query($conn, $query2);
    
    if ($result->num_rows > 0)
    {
      while($row = $result->fetch_assoc())
      {
        $id = $row['id'];
      $name = $row['name'];
      $email = $row['email'];
      $date = $row['pref_date'];
      $time = $row['pref_time'];
      $event = $row['pref_event'];
      $title = $row['title'];
      $guest = $row['guests_no'];
      $venue = $row['pref_venue'];
      $food = $row['food_choice'];
      $payment = $row['payment_total'];
      $package = $row['packagetype'];
      $image = $row['image'];
      $status = $row['status'];

        $status1 = "CANCELLED";

   $sqld = "UPDATE clientsorder SET status='$status1' WHERE email='$email' AND pref_date='$date'";
     $resulta = $conn->query($sqld);

    if ($date = "no date")
    {
 
           
             
       
   }else
    if ($resulta){
    }
   if (mysqli_affected_rows($conn)>0) {
          require_once 'PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer();

    $mail->isSMTP();                                      
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;                               
    $mail->Username = 'ancunabillones@gmail.com';                 // SMTP username email ng catering
    $mail->Password = 'imeememe';                           // SMTP password  password ng catering
    $mail->SMTPSecure = 'tls';                            
    $mail->Port = 587;                                    
$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);
    $mail->setFrom('ancunabillones@gmail.com', 'Catering Services'); //email ng catering, name ng catering
    $mail->addAddress($email);    // recipient(kanino isesend)gagamit ka dito ng variable para makuha mo yung email na nasa textbox

    $mail->isHTML(true);                                 

    $mail->Subject = 'BOOKING UPDATE';
    $mail->Body    = '<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"><title>Cancelation of Reservation</title></head><body style="margin:0px; font-family:Tahoma, Geneva, sans-serif;"><div style="padding:10px; background:#333; font-size:24px; color:#CCC;"><h2>Hello This is an automated message from Catering Services</p><p>You have booked a reservation and we are not accepting due to some reasons.</p><p>Please acccept our dearest apologies. </p></body></html>';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
  echo '<script> swal({  title: "SUCCESSFUL!",
    text: "Cancelation message sent!",
    icon: "success",
    button: "OK"}).then(okay => {
   if (okay) {
    window.location.href = "viewrecords.php";
  }
});

</script>';
}
        } else
         echo "Please Select a Date";

    }
  }
  ?>
</body>
</html>
 