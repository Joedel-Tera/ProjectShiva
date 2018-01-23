<?php
include ('db.php');

	$id=$_REQUEST['id'];
	
	// sending query
	mysqli_query($mysqli, "DELETE FROM feedback WHERE id = '$id'") or die(mysqli_error($mysqli));  	
	
	header("Location: view_feedback.php");
?> 