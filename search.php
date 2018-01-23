<?php 
require_once('db.php');


	if(isset($_POST['btn_find'])){

        $sql = "SELECT * FROM properties WHERE location = '".$_POST['search']."'";
        $result = $mysqli->query($sql); 

        print_r($result);
	} else {

	}
		// header('location: search_results.php');
?>