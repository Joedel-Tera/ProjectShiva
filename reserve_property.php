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
        $message = "Hello ".$customerName." Thank you for using our website Housefinder. ";
        $message2 = "We would like to thank you for your interest in some of the property posted. ";
        $message3 = "The agent associated with the property you reserve will contact you within the prefered time you indicated at your notes.";
        $mainMessage = $message.' '.$message2.' '.$message3;
        $deviceID = $SMS_DEVICE_ID;

        $smsGateway->sendMessageToNumber($number, $mainMessage, $deviceID);
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