<?php
session_start();
include_once 'headertop.php';
require 'db.php';

// Escape all $_POST variables to protect against SQL injections

$agentId = $_POST['agentId'];
$propId = $_POST['propertyId'];
$userId = $_POST['userId'];
$amount = $_POST['amount'];
$refNumber = $_POST['paymentReference'];

if (isset($_POST['paymentDetails'])){

    
    $sql = "INSERT INTO reservation_payments (agent_id, property_id, user_id, amount, reference_number) " 
            . "VALUES ('$agentId', '$propId', '$userId', '$amount', '$refNumber')";
    if ( $mysqli->query($sql) ){
        
        $_SESSION['alert'] = 'Success';
        header('location: agents-property-list.php?id='.$agentId);
    }
    else {
        echo "<script type='text/javascript'>alert('Oops! Something went wrong')</script>";

    }
    	header('location: agents-property-list.php?id='.$agentId);
} 

if (isset($_POST['reservationSubmit'])){
    $resId = $_POST['resId'];
    
    $sql = "INSERT INTO reservation_payments (agent_id, property_id, user_id, amount, reference_number) " 
            . "VALUES ('$agentId', '$propId', '$userId', '$amount', '$refNumber')";
    if ( $mysqli->query($sql) ){
        $sql2 = "UPDATE property_reservations SET reservation_status = 'PENDING CONFIRMATION' WHERE reservation_id = $resId";

        if($mysqli->query($sql2)){
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