<?php

session_start();
error_reporting (E_ALL ^ E_NOTICE);
//$type = $_SESSION['type'];
//$member = "member";
if (isset($_SESSION['type']))
{
  if ($_SESSION['type']== admin){
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



  $sql = "SELECT * FROM homeupdate";
   $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
       while($row = $result->fetch_assoc()) 
      {
    
$id = $row['id'];
$missiondescription = $row['missiondescription'];
$missionimage = $row['missionimage'];
$visiondescription = $row['visiondescription'];
$visionimage = $row['visionimage'];
$purposedescription = $row['purposedescription'];
$purposeimage = $row['purposeimage'];

}
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Whiteplates Catering Services</title>
  <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    
  <!--//fonts-->
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/bootstrapa.css" rel="stylesheet" type="text/css" media="all" />
      <link href="css/stylea.css" rel="stylesheet" type="text/css" media="all" />
      <link href="css/profile1.css" rel="stylesheet" type="text/css" media="all" />
      <link href="css/font-awesome.css" rel="stylesheet"> 
      <link href="css/responsive.css" rel="stylesheet">

  <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Favorites Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- //for-mobile-apps -->  
  <!-- js -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- js -->
  <!-- cart -->
    <script src="js/simpleCart.min.js"> </script>
  <!-- cart -->
  <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){   
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
      });
    </script>
  <!-- start-smoth-scrolling -->

</head>
<body style="background-image: url('images/glass2.jpg'); background-repeat: no-repeat; background-size: cover;">
<div class="bg">
<!-- header -->
<div class="header">
  <div class="container">
    <div class="top-header">
        <div class="header-left">
          
        </div>
          <ul class="pull-right">
            <a href="index.php" style="color:white;">WHITEPLATES</a> ||
            <a href="logout.php" style="color:white;">LOGOUT</a> 
    
          </ul>
        </div>        
        <div class="clearfix"></div>
    </div>
  </div>
</div>

<div class="container" style="padding-top: 50px; ">
  <div class="portlet light" style="border: 5px solid black; background-color: #FBF6D9; opacity: .9; width: 50%; height: 450px; float: left;">
  <center>
  <br>
  <br>
  <h3><b>UPDATE DESCRIPTION</b></h3>
  <?php

if(isset($_POST['update_description']))
{

  $select = $_POST['description'];
  $description = addslashes($_POST['comment']);

    if($select == 'Mission')
    {
      
      $sql2 = "UPDATE homeupdate SET missiondescription='$description'";
      $result2 = $conn->query($sql2);

        if ($result2)
        {
        }
        if (mysqli_affected_rows($conn)>0) 
        {
          echo "Update successful!";
        }
        else
        {
          echo "Error updating!";
        }
    }
    elseif ($select == 'Vision') 
    {
      $sql3 = "UPDATE homeupdate SET visiondescription='$description'";
      $result3 = $conn->query($sql3);

        if ($result3)
        {
        }
        if (mysqli_affected_rows($conn)>0) 
        {
          echo "Update successful!";
        }
        else
        {
          echo "Error updating!";
        }
    }
    elseif ($select == 'Purpose') 
    {
      $sql4 = "UPDATE homeupdate SET purposedescription='$description'";
      $result4 = $conn->query($sql4);

        if ($result4)
        {
        }
        if (mysqli_affected_rows($conn)>0) 
        {
          echo "Update successful!";
        }
        else
        {
          echo "Error updating!";
        }
    }



}
?>
  <form method="post" action="updatehome.php">
  <br><select name="description" style="width: 40%;">
      <option value="">--SELECT--</option>
      <option value="Mission">Mission</option>
      <option value="Vision" >Vision</option>
      <option value="Purpose">Purpose</option>
  </select>
   <br>
  <br>
  <textarea name="comment" cols ="50" rows="6" style="width: 70%;"></textarea>
  <br>
  <br>
  <input type="submit" name="update_description" value="UPDATE ">
  <br>
  <br>
  </form>
  </center>
  </div>
  <div class="portlet light" style="border: 5px solid black; background-color: #FBF6D9; opacity: .9; width: 50%; height: 450px; float: right;">
  <center>
  <br>
  <br>
  <h3><b>UPDATE IMAGE</b></h3>
  <br>
  <?php

if(isset($_POST['update_image']))
{

  $select = $_POST['image'];


    if($select == 'Mission')
    {

          $image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
          move_uploaded_file($_FILES['file']['name'],'uploaded/'.$image.'' );
          $imageType = $_FILES["file"]["type"];

            if($image){
              if (substr($imageType,0,5) == "image") {
                $sql = "UPDATE homeupdate SET missionimage='$image'";
                    $result = $conn->query($sql);
                      if ($result) {
                      }
                      if(mysqli_affected_rows($conn)>0)
                      {

                echo "<font color='red'>"."Upload successful!"."</font>";
                echo "<br>";
                echo "<br>";
                }
                else
                echo "Error";
                }
              else 
              echo "Only images are allowed!";
            }
            else
            echo "Please choose image to upload";
    }

    elseif($select == 'Vision')
    {

          $image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
          move_uploaded_file($_FILES['file']['name'],'uploaded/'.$image.'' );
          $imageType = $_FILES["file"]["type"];

            if($image){
              if (substr($imageType,0,5) == "image") {
                $sql = "UPDATE homeupdate SET visionimage='$image'";
                    $result = $conn->query($sql);
                      if ($result) {
                      }
                      if(mysqli_affected_rows($conn)>0)
                      {

                echo "<font color='red'>"."Upload successful!"."</font>";
                echo "<br>";
                echo "<br>";
                }
                else
                echo "Error";
                }
              else 
              echo "Only images are allowed!";
            }
            else
            echo "Please choose image to upload";
    }
    elseif($select == 'Purpose')
    {

          $image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
          move_uploaded_file($_FILES['file']['name'],'uploaded/'.$image.'' );
          $imageType = $_FILES["file"]["type"];

            if($image){
              if (substr($imageType,0,5) == "image") {
                $sql = "UPDATE homeupdate SET purposeimage='$image'";
                    $result = $conn->query($sql);
                      if ($result) {
                      }
                      if(mysqli_affected_rows($conn)>0)
                      {
                      echo "<br>";
                echo "<br>";
                echo "<font color='red'>"."Upload successful!"."</font>";
                echo "<br>";
                echo "<br>";
                }
                else
                echo "Error";
                }
              else 
              echo "Only images are allowed!";
            }
            else
            echo "Please choose image to upload";
    }
} 


?>
  <form method='post' enctype="multipart/form-data">
  <select name="image" style="width: 40%;">
      <option value="">--SELECT--</option>
      <option value="Mission">Mission</option>
      <option value="Vision" >Vision</option>
      <option value="Purpose">Purpose</option>
  </select>
  <br>
  <br>
  <br>
  <input type='file' name='file' style="width: 60%;" />
  <br>
  <br>
  <br>
  <br>
  <br>
  <input type="submit" name="update_image" value="UPDATE ">
  <br>
  <br>
  <br>
  </form>
  </center>
  </div>
</div>

  <br>
  <br>
  <br>
  <br>
  <br>


<!-- footer --><br><br>
<div class="footer">
  <div class="container">
    <div class="footer-right">
      <ul>
<br><     </ul>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
</div>
<!-- //footer -->
<!-- smooth scrolling -->
  <script type="text/javascript">
    $(document).ready(function() {
    /*
      var defaults = {
      containerID: 'toTop', // fading element id
      containerHoverID: 'toTopHover', // fading element hover id
      scrollSpeed: 1200,
      easingType: 'linear' 
      };
    */                
    $().UItoTop({ easingType: 'easeOutQuart' });
    });
  </script>
  <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

</div>

</body>
</html>

