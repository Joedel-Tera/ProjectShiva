<?php 
session_start();
require 'db.php';
include "smsGateway.php";

$SMS_EMAIL = 'Strafer14@yahoo.com';
$SMS_PASSWORD = 'Tsumichan';
$SMS_DEVICE_ID = 76821;


// Escape all $_POST variables to protect against SQL injections
$customerName = $mysqli->escape_string($_POST['full_name']);
$customerEmail = $mysqli->escape_string($_POST['email']);
$customerNumber = $_POST['contact_number'];
$customerNotes = $mysqli->escape_string($_POST['message']);
$propId = $_POST['propertyId'];
$agentId = $_POST['agentId'];
$userId= $_POST['userId']; 


if (isset($_POST['Submit'])){

    
    $sql = "INSERT INTO property_reservations (property_id, agent_id, customer_name, customer_email, customer_number, customer_notes, user_id) VALUES ($propId,$agentId,'$customerName' , '$customerEmail', '$customerNumber', '$customerNotes', '$userId')";
    
    
    if ( $mysqli->query($sql) ){
        $smsGateway = new SmsGateway($SMS_EMAIL, $SMS_PASSWORD); 

        //Notif to Customer
        $number = $customerNumber;
        $message = "Thank you for your interest in some of the property i posted. I will contact you as soon as possible.";
        $deviceID = $SMS_DEVICE_ID;

        $smsGateway->sendMessageToNumber($number, $message, $deviceID);
        //End Notif

        //Notif to Agent
        $ToAgentnumber = $_POST['agentContact'];
        $ToAgentMessage = "A Customer has reserved a property you posted. Customer Notes:".$customerNotes.' Customer Contact:'.$customerNumber;
        $deviceID = $SMS_DEVICE_ID;

        $smsGateway->sendMessageToNumber($ToAgentnumber, $ToAgentMessage, $deviceID);
        //End Notif
        
        $updatePropStatus = "UPDATE properties SET status = 3 WHERE id = $propId";
        
        if($mysqli->query($updatePropStatus)){

            $_SESSION['alert'] = 'Success';
            header('location: buysalerent.php');
        } else {
            echo "<script type='text/javascript'>alert('Oops! Something went wrong')</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Oops! Something went wrong')</script>";

    }
    	
    }
?>



<?php include_once 'footer.php'; ?>