<?php
/* Database connection settings */

$setDeployment = 'Local'; // Live or Local

if($setDeployment == 'Live'){
	$host = 'localhost';
	$user = 'id4347222_housefinder2018';
	$pass = 'house-password-2018';
	$db = 'id4347222_housefinder';

} else {
	
	$host = 'localhost';
	$user = 'root';
	$pass = 'Esco2017';
	$db = 'housefinder';
}


$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

?>