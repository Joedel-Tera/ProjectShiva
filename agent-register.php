<?php
session_start();
include_once 'headertop.php';
require 'db.php';

/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */

$getnextUserId = $mysqli->query("SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_NAME = 'agents'");

$response = $getnextUserId->fetch_assoc()['AUTO_INCREMENT'];

// Set session variables to be used on profile.php page
$_SESSION['first_name'] = $_POST['first_name'];
$_SESSION['middle_name'] = $_POST['middle_name'];
$_SESSION['last_name'] = $_POST['last_name'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['bday'] = $_POST['bday'];
$_SESSION['age'] = $_POST['age'];
$_SESSION['gender'] = $_POST['gender'];
$_SESSION['contact_number'] = $_POST['contact_number'];
$_SESSION['email_info'] = $_POST['email_info'];
$_SESSION['landline'] = $_POST['landline'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['id'] = $response;
$_SESSION['user_type'] = 2;


// Escape all $_POST variables to protect against SQL injections
$first_name = $mysqli->escape_string($_POST['first_name']);
$middle_name = $mysqli->escape_string($_POST['middle_name']);
$last_name = $mysqli->escape_string($_POST['last_name']);
$address = $mysqli->escape_string($_POST['address']);
$bday = $mysqli->escape_string($_POST['bday']);
$age = $mysqli->escape_string($_POST['age']);
$gender = $mysqli->escape_string($_POST['gender']);
$contact_number = ($_POST['contact_number']);
$email_info = $mysqli->escape_string($_POST['email_info']);
$landline = $mysqli->escape_string($_POST['landline']);
$email = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$avatar_path = $mysqli->real_escape_string('images/'.$_FILES['avatar']['name']);
$hash = $mysqli->escape_string( md5( rand(0,1000) ) );

      
   if (preg_match("!image!",$_FILES['avatar']['type'])) {

    //copy image to images/ folder 
            if (copy($_FILES['avatar']['tmp_name'], $avatar_path)){
                
                $_SESSION['avatar'] = $avatar_path;
                
// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM agents WHERE email='$email'") or die($mysqli->error());

                
// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'User with this email already exists!';
    header("Location: agent-error.php");
    
}
else { // Email doesn't already exist in a database, proceed...
    
    
    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO agents (first_name, middle_name, last_name, address, bday, age, gender, contact_number, email_info, landline, email, password, avatar, hash, date_created)" 
            . "VALUES ('$first_name', '$middle_name', '$last_name', '$address', '$bday', '$age', '$gender', '$contact_number', '$email_info', '$landline', '$email', '$password', '$avatar_path', '$hash', CURRENT_TIMESTAMP)";

    // Add user to the database
    if ( $mysqli->query($sql) ){

        $_SESSION['active'] = 0; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        $_SESSION['message'] =
                
                 "Confirmation link has been sent to $email, please verify
                 your account by clicking on the link attached to the message!";

        // Send registration confirmation link (verify.php)
        $to      = $email;
        $subject = 'Account Verification ( Housefinder.com )';
        $message_body = '
        Hi '.$first_name.',

        Thank you for signing up as an Agent!

        Please click this link to activate your account:

        http://localhost/housefinder/agent-verify.php?email='.$email.'&hash='.$hash;  

        mail( $to, $subject, $message_body );

        header("Location: agent-profile.php");
    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("Location: agent-error.php");
    }

}
            }
   }
?>

<?php include_once 'footer.php'; ?>