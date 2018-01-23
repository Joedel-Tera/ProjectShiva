<?php
if(isset($_POST['send'])){
	include "smsGateway.php";
		$smsGateway = new SmsGateway('llanesdek@gmail.com', 'dekdek04'); 

		$number = $_POST['contact_number'];
		$message = "Thank you for contacting me! I've received your message and I hope that you will email me at  ";
		$deviceID = 71261;
		$number = '+63'.$number;
		$message = $message;

		$result = $smsGateway->sendMessageToNumber($number, $message, $deviceID);
		if($result){
			header("location: message-sent.php");
		}
}
?>