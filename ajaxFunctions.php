<?php
require 'db.php';

if(isset($_POST['hideStatus'])){

	$sql = "UPDATE properties SET status = 1 WHERE id = '".$_POST['hideStatus']."'";
	$result = $mysqli->query($sql); 
	if($result){
		$response = json_encode(array('result'=>true));
	}
	echo $response;
}

if(isset($_POST['removeStatus'])){

	$sql = "UPDATE properties SET status = 2 WHERE id = '".$_POST['removeStatus']."'";
	$result = $mysqli->query($sql); 
	if($result){
		$response = json_encode(array('result'=>true));
	}
	echo $response;
}

if(isset($_POST['showStatus'])){

	$sql = "UPDATE properties SET status = 0 WHERE id = '".$_POST['showStatus']."'";
	$result = $mysqli->query($sql); 
	if($result){
		$response = json_encode(array('result'=>true));
	}
	echo $response;
}

if(isset($_POST['soldStatus'])){

	$sql = "UPDATE properties SET status = 4 WHERE id = '".$_POST['soldStatus']."'";
	$result = $mysqli->query($sql); 
	if($result){
		$sql2 = "UPDATE property_reservations SET reservation_status = 'SOLD' WHERE reservation_id = '".$_POST['resId']."'";
		$result = $mysqli->query($sql2);
		if($result){
			$response = json_encode(array('result'=>true));
		}
		
	}
	echo $response;
}

if(isset($_POST['declined'])){
	$sql = "UPDATE properties SET status = 0 WHERE id = '".$_POST['declined']."'";
	$result = $mysqli->query($sql); 

	if($result){
		$sql2 = "UPDATE property_reservations SET reservation_status = 'DECLINED' WHERE reservation_id = '".$_POST['resId']."'";

		$result2 = $mysqli->query($sql2);
		if($result2){
			$response = json_encode(array('result'=>true));
		}
		
	}

	echo $response;
}

if(isset($_POST['reservationId'])){

	$sql2 = "UPDATE property_reservations SET reservation_status = 'APPROVED' WHERE reservation_id = '".$_POST['reservationId']."'";
	$result = $mysqli->query($sql2);
	if($result){
		$response = json_encode(array('result'=>true));
	}
		

	echo $response;
}


?>