<?php
include ('db.php');

	$id=$_REQUEST['id'];
	
	// sending query
	mysqli_query($mysqli, "DELETE FROM agents WHERE id = '$id'") or die(mysqli_error($mysqli));  	
	
	header("Location: manage_agent.php");
?> 