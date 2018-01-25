<?php include_once 'headertop.php';?>
<?php require 'db.php';?>


<?php

// Set session variables to be used on profile.php page
$_SESSION['full_name'] = $_POST['full_name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['contact_number'] = $_POST['contact_number'];
$_SESSION['message'] = $_POST['message'];
$_SESSION['agent'] = $_POST['agent'];

// Escape all $_POST variables to protect against SQL injections
$full_name= $mysqli->escape_string($_POST['full_name']);
$email = $mysqli->escape_string($_POST['email']);
$contact_number = $_POST['contact_number'];
$message = $mysqli->escape_string($_POST['message']);
$agent = $_POST['agent_name'];


if (isset($_POST['Submit'])){

    
    $sql = "INSERT INTO agents_reservation (full_name, email, contact_number, message, agent) " 
            . "VALUES ('$full_name', '$email', '$contact_number', '$message', '$agent')";
    
    
    if ( $mysqli->query($sql) ){
        
        echo "<script type='text/javascript'>alert('Your reservation has been sent successfully!')</script>";

    }
    
    else {
        echo "<script type='text/javascript'>alert('Oops! Something went wrong')</script>";

    }
    	header('location: buysalerent.php');
    }
?>



<?php include_once 'footer.php'; ?>