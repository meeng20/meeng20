<!DOCTYPE html>
<html>
<head>
  <title></title>

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

</body>
</html>
<?php

 $connect = mysqli_connect("localhost", "root", "", "catering");  
 if(!empty($_POST))  
 {  
      $output = '';  
      //$message = '';  
      $firstname = mysqli_real_escape_string($connect, $_POST["firstname"]);
      $lastname = mysqli_real_escape_string($connect, $_POST["lastname"]); 
      $bday = mysqli_real_escape_string($connect, $_POST["bday"]); 
      $gender = mysqli_real_escape_string($connect, $_POST["Gender2"]);  
      $contact = mysqli_real_escape_string($connect, $_POST["contact"]); 
      $email = mysqli_real_escape_string($connect, $_POST["email"]); 
      $address = mysqli_real_escape_string($connect, $_POST["address"]); 
      $password = mysqli_real_escape_string($connect, $_POST["password"]); 
      $confirmpassword = mysqli_real_escape_string($connect, $_POST["confirmpassword"]);
      $question = mysqli_real_escape_string($connect, $_POST["question"]);  
      $answer = mysqli_real_escape_string($connect, $_POST["answer"]); 
       $type = "member";
  $clienttype = "WALKIN";

      $fullname = $firstname." ".$lastname;

      $sql = "SELECT * FROM clientsrecord WHERE email = '$email'";
      $result = $connect->query($sql) or die($mysqli->error.__LINE__);

      if($result -> num_rows == 0 )
      {

           $query = "
           INSERT INTO clientsrecord (name, address, bday, gender, contact, email, password, question, answer, type, clienttype) values ('$fullname', '$address','$bday', '$gender', '$contact', '$email', '$password' , '$question', '$answer', '$type', '$clienttype')
           "; 

      if(mysqli_query($connect, $query))  
      {  
        mysqli_query($connect, $sql);
       $sql = "SELECT * FROM clientsrecord WHERE email = '$email' LIMIT 1";
       $query = mysqli_query($connect, $sql);
       $result = $connect->query($sql);
       $row = mysqli_fetch_assoc($query);
       $id = $row['id'];
       $name = $row['name'];
       include_once 'signupwalkin.php';


    }

    
 }  
 else
    {
      echo '<script> swal({ title: "SOMETHING IS WRONG!",
 text: "Error adding client!",
 type: "error"}).then(okay => {
  if (okay) {
    window.location.href = "viewrecords.php";
  }
});

</script>';    
      }
}
?>
  