<?php
//insert.php  
session_start();
include 'dbcon.php';



if(isset($_POST["operation"]))
{
 if($_POST["operation"] == "Add")
 {

  $statement = $conn->prepare("
   INSERT INTO clientsrecord (name,address,bday,gender,contact,email,password,question, answer, type, clienttype) 
   VALUES (:firstname, :address, :datepicker, :gender, :contact, :email,:password,:question, :answer, :type, :clienttype)
  ");

  $result = $statement->execute(
   array(
    ':firstname' =>$_POST["firstname"],
    ':lastname' => $_POST["lastname"],
    ':address' => $_POST["address"],
    ':datepicker' => $_POST["datepicker"],
    ':gender' => $_POST["gender"],
    ':contact' => $_POST["contact"],
    ':email' => $_POST["email"],
    ':password' => $_POST["password"]
    ':question' => $_POST["question"],
    ':answer' => $_POST["answer"],
    ':type' => $_POST["type"],
    ':clienttype' => $_POST["clienttype"]
  
   )
  );
  if(!empty($result))
  {
   echo 'Data Inserted';
    //echo "<script>
//alert('Data Inserted...');
//window.location.href='viewrecords.php';
//</script>";
  }
 }
 

}



?>
  