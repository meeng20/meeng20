<form method='post' action='uploadtransactionreceipt.php'>
		<input type='file' name='file' />
      <input type='submit' name='btn_submit' value='UPLOAD'/>
		<br>
		<br>
</form>

		<?php
if (isset($_POST['btn_submit'])) {
				//if($_FILES['file']['error'] == 0){
				//	if(!empty($_FILES['file']['name'])  && file_exists($_FILES['file']['tmp_name'])) {
					$dates1 = $_POST['eventdate'];
					$image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
					move_uploaded_file($_FILES['file']['name'],'uploaded/'.$image.'' );
					$imageType = $_FILES["file"]["type"];
				   // }

					
					
	
						if($image){
							if (substr($imageType,0,5) == "image") {
						//	$sql1 = "INSERT INTO transactionreceipt (name,image) values('$user', '$image')";
  							$sql = "UPDATE clientsorder SET image='$image' WHERE pref_date ='$dates1'";
          					$result = $conn->query($sql);
          				//	$result1 = $conn->query($sql1);

          						if ($result) {
          						}
          					//	if ($result1) {
          					//	}

          						if(mysqli_affected_rows($conn)>0){
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

?>

<?php

if(isset($_POST['foodtasting']))
{

}

?>