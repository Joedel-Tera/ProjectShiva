<?php
session_start();
include_once 'headertop.php';
require 'db.php';
include "smsGateway.php";

$SMS_EMAIL = 'Strafer14@yahoo.com';
$SMS_PASSWORD = 'Tsumichan';
$SMS_DEVICE_ID = 76821;

$smsGateway = new SmsGateway($SMS_EMAIL, $SMS_PASSWORD); 

// Escape all $_POST variables to protect against SQL injections
$resId = $_POST['resId'];
$agentId = $_POST['agentId'];
$propId = $_POST['propertyId'];
$userId = $_POST['userId'];
$amount = $_POST['amount'];
$refNumber = $_POST['paymentReference'];

$getUserNumber = "SELECT * FROM property_reservations WHERE user_id = $userId";
$res = $mysqli->query($getUserNumber);
$userData = $res->fetch_assoc();
$customerNumber = $userData['customer_number'];

if (isset($_POST['paymentDetails'])){

    
    $sql = "INSERT INTO reservation_payments (agent_id, property_id, user_id, amount, reference_number) " 
            . "VALUES ('$agentId', '$propId', '$userId', '$amount', '$refNumber')";

    if ( $mysqli->query($sql) ){
        $sql2 = "UPDATE property_reservations SET reservation_status = 'PENDING CONFIRMATION' WHERE reservation_id = $resId";

        if($mysqli->query($sql2)){
            $number = $customerNumber;
            $message = "Thank you for submiting your reference number. the agent associated with the property will verify your reservation fee.";
            $message2 = "Housefinder Notifications.";
            $mainMessage = $message.' '.$message2;
            $deviceID = $SMS_DEVICE_ID;

            $smsGateway->sendMessageToNumber($number, $mainMessage, $deviceID);
             $_SESSION['alert'] = 'Success';
            header('location: agents-property-list.php?id='.$agentId);
        }
    }
    else {
         $_SESSION['error'] = 'Error';
         header('location: agents-property-list.php?id='.$agentId);
    }
    header('location: agents-property-list.php?id='.$agentId);
} 

if (isset($_POST['reservationSubmit'])){
    
    
    $sql = "INSERT INTO reservation_payments (agent_id, property_id, user_id, amount, reference_number) " 
            . "VALUES ('$agentId', '$propId', '$userId', '$amount', '$refNumber')";
    if ( $mysqli->query($sql) ){
        $sql2 = "UPDATE property_reservations SET reservation_status = 'PENDING CONFIRMATION' WHERE reservation_id = $resId";

        if($mysqli->query($sql2)){
            $number = $customerNumber;
            $message = "Thank you for submiting your reference number. the agent associated with the property will verify your reservation fee.";
            $message2 = "Housefinder Notifications.";
            $mainMessage = $message.' '.$message2;
            $deviceID = $SMS_DEVICE_ID;

            $smsGateway->sendMessageToNumber($number, $mainMessage, $deviceID);
             $_SESSION['alert'] = 'Success';
            header('location: myReservations.php');
        }
    }
    else {
        $_SESSION['error'] = 'Error';
        header('location: myReservations.php');
    }
    header('location: myReservations.php');    
} 
?>



<?php include_once 'footer.php'; ?>