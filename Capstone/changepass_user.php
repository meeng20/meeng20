<?php

include 'dbcon.php';

    if(isset($_POST['btnsubmit']) && $_POST['btnsubmit'] = "Update")
    {
        $user_email = $_POST['user_email']; 
        $user_password = $_POST['user_password'];
        $user_newpassword = $_POST['user_newpassword'];
        $user_retypepassword = $_POST['user_retypepassword'];

        $result = mysqli_query("SELECT password FROM clientsrecord WHERE email='$user_email'");

            if(!$result)
            {
                $msg= "The email entered does not exist!";
                header('Location:usersetting.php?msg='.$msg.'');
            }
            else  if($user_password != mysql_result($result, 0))
            {
                $msg= "Entered an incorrect password";
                header('Location:usersetting.php?msg='.$msg.'');
            }

            elseif($user_newpassword != $user_retypepassword)
            {
                $msg = "New password and Re-typepassword must be the same!";
                header('Location:usersetting.php?msg='.$msg.'');  
            }
            else{
                mysql_query("UPDATE clientsrecord SET password = '$user_newpassword' WHERE email = '$user_email'");  
                $msg = "Successfully Changed!";
                header('Location:usersetting.php?msg='.$msg.'');    
            }

    }
      ?>