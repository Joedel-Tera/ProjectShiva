<?php
    require_once('db.php');
				
			$address = $mysqli->escape_string($_POST['address']);
			$contact_number = $mysqli->escape_string($_POST['contact_number']);
			$landline = $mysqli->escape_string($_POST['landline']);
			$email_info = $mysqli->escape_string($_POST['email_info']);
			// $avatar_path = $mysqli->real_escape_string('images/'.$_FILES['avatar']['name']);

		if(isset($_POST['btn_update']))
		{	

		    $file_name = $_FILES['avatar']['name'];
		    $file_size = $_FILES['avatar']['size'];
		    $file_tmp  = $_FILES['avatar']['tmp_name'];
		    $filetmp = $file_tmp;
		    $file_path = "images/" . $file_name;
		    move_uploaded_file($filetmp, $file_path);

			   // if (preg_match("!image!",$_FILES['avatar']['type'])) {

      //       if (copy($_FILES['avatar']['tmp_name'], $avatar_path)){

				mysqli_query($mysqli, "UPDATE agents SET address ='$address', contact_number ='$contact_number', landline ='$landline', email_info ='$email_info', avatar ='$file_path' WHERE email = '".$_SESSION["email"]."'") or die(mysqli_error($mysqli)); 

				echo "alert('Account Successfully Updated!')";

			header("Location: agent-panel-profile.php");
		}
// 	}
// }
		mysqli_close($mysqli);
?>