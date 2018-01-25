<?php 

require 'db.php';

// Escape all $_POST variables to protect against SQL injections
$customerName = $mysqli->escape_string($_POST['full_name']);
$customerEmail = $mysqli->escape_string($_POST['email']);
$customerNumber = $_POST['contact_number'];
$customerNotes = $mysqli->escape_string($_POST['message']);
$propId = $_POST['propertyId'];
$agentId = $_POST['agentId'];


if (isset($_POST['Submit'])){

    
    $sql = "INSERT INTO property_reservations (property_id, agent_id, customer_name, customer_email, customer_number, customer_notes) VALUES ($propId,$agentId,'$customerName' , '$customerEmail', '$customerNumber', '$customerNotes')";
    
    
    if ( $mysqli->query($sql) ){
        
        $updatePropStatus = "UPDATE properties SET status = 3 WHERE id = $propId";
        
        if($mysqli->query($updatePropStatus)){

            echo "<script type='text/javascript'>alert('Your reservation has been sent successfully!')</script>";
        } else {
            echo "<script type='text/javascript'>alert('Oops! Something went wrong')</script>";
        }
    }
    
    else {
        echo "<script type='text/javascript'>alert('Oops! Something went wrong')</script>";

    }
    	header('location: buysalerent.php');
    }
?>



<?php include_once 'footer.php'; ?>