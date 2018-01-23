<?php include_once 'headertop.php';?>
<?php require 'db.php';?>


<?php

// Set session variables to be used on profile.php page
$_SESSION['full_name'] = $_POST['full_name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['contact_no'] = $_POST['contact_no'];
$_SESSION['message'] = $_POST['message'];

// Escape all $_POST variables to protect against SQL injections
$full_name= $mysqli->escape_string($_POST['full_name']);
$email = $mysqli->escape_string($_POST['email']);
$contact_no = $mysqli->escape_string($_POST['contact_no']);
$message = $mysqli->escape_string($_POST['message']);
      

if (isset($_POST['send'])){
    
    $sql = "INSERT INTO feedback (full_name, email, contact_no, message) " 
            . "VALUES ('$full_name','$email','$contact_no','$message')";
    
    if ( $mysqli->query($sql) ){
        header('location: feedback_success.php');
    }
    else {
        echo "<script type='text/javascript'>alert('Oops! Something went wrong')</script>";

    }
}
?>
<?php include_once 'footer.php'; ?>