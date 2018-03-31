<?php

include 'dbcon.php';
error_reporting(0);

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
  <div class="portlet light" style="border: 5px solid black; background-color: #FBF6D9; opacity: .9; width: 50%; height: 450px;float: left;">
  <center>
  <br>
  <br>
 <h3><b>UPDATE DESCRIPTION</b></h3>
  <?php
  ob_start();

if(isset($_POST['update_description']))
{

 $select = $_POST['description'];
 $comment = addslashes($_POST['comment']);
 $comment1 = $_POST['comment'];
 
 
    if($select == 'History')
    {
      

      $sql2 = "UPDATE `aboutupdate` SET `history`='$comment' WHERE `id` = '1'";
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
           echo "Error";
        }
    }
    elseif ($select == 'Address') 
    {
      $sql3 = "UPDATE aboutupdate SET address='$comment'";
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
          echo "Error: " . $sql3 . "<br>" . $conn->error;
        }
  }
    elseif ($select == 'Landline') 
    {
      $sql4 = "UPDATE aboutupdate SET landline='$comment1'";
      $result4 = $conn->query($sql4);

        if ($result4)
        {
        }
        if (mysqli_affected_rows($conn)>0) 
        {
          echo "Update successful!";
        }
        else
        {echo "Error: " . $sql4 . "<br>" . $conn->error;echo "Error updating!";
        }
    }
     elseif ($select == 'Smart') 
    {
      $sql5 = "UPDATE aboutupdate SET smart='$comment1'";
      $result5 = $conn->query($sql5);

        if ($result5)
        {
        }
        if (mysqli_affected_rows($conn)>0) 
        {
          echo "Update successful!";
        }
        else
        {
          echo "Error: " . $sql5 . "<br>" . $conn->error;
        }
    }
    elseif ($select == 'Globe') 
    {
      $sql6 = "UPDATE aboutupdate SET globe='$comment1'";
      $result6 = $conn->query($sql6);

        if ($result6)
        {
        }
        if (mysqli_affected_rows($conn)>0) 
        {
          echo "Update successful!";
        }
        else
        {
          echo "Error: " . $sql6 . "<br>" . $conn->error;
        }
    }
    elseif ($select == 'Email') 
    {
      $sql7 = "UPDATE aboutupdate SET email='$comment1'";
      $result7 = $conn->query($sql7);

        if ($result7)
        {
        }
        if (mysqli_affected_rows($conn)>0) 
        {
          echo "Update successful!";
        }
        else
        {echo "Error: " . $sql7 . "<br>" . $conn->error;echo "Error updating!";
        }
    }



}
ob_end_flush();
?>
  <form method="post" action="updateabout.php">
  <br><select name="description" style="width: 40%;">
      <option value="">--SELECT--</option>
      <option value="History">History</option>
      <option value="Address" >Address</option>
      <option value="Landline">Landline</option>
      <option value="Smart">Smart</option>
      <option value="Globe" >Globe</option>
      <option value="Email">Email</option>
  </select>
   <br>
  <br>
<textarea name="comment" cols ="100" rows="8" style="width: 70%;"></textarea>
  
  <br>
  <br>
  <input type="submit" name="update_description" value="UPDATE ">
  <br>
  <br>
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

          $image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
          move_uploaded_file($_FILES['file']['name'],'uploaded/'.$image.'' );
          $imageType = $_FILES["file"]["type"];

            if($image){
              if (substr($imageType,0,5) == "image") {
                $sql = "UPDATE aboutupdate SET image='$image'";
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


?>
  <form method='post' enctype="multipart/form-data">
  <br>
  <br>

  <input type='file' name='file' style="width: 60%;" />
  <br>
  <br>
  <br>
  <br>
  <br>
    <br>
  <br>
  <input type="submit" name="update_image" value="UPDATE ">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  </form>
  </center>
  </div>
</div>
  </div>
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

