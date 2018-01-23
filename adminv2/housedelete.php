<?php
include ('db.php');

	$id=$_REQUEST['id'];
	
	// sending query
	mysqli_query($mysqli, "DELETE FROM properties WHERE id = '$id'") or die(mysqli_error($mysqli));  	
	
	header("Location: manage_houses.php");
?> 