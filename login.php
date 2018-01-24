<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

if ($result->num_rows == 0){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
//    header("location: error.php");
     echo '<div style="width: 600px; background-color: #F52B28; color: white; font-size: 14px; position: absolute; bottom: 1.5; margin-top: 120px; margin-left: 375px;" class="alert alert-danger"><strong>You\'ve entered an invalid username or password.</strong></div></center>';
}
else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) ) {
        
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['active'] = $user['active'];
        $_SESSION['id'] = $user['id'];
        $_SESSION['user_type'] = $user['user_type_id'];
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: profile.php");
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
//        header("location: error.php");
        echo '<div style="width: 600px; background-color: #F52B28; color: white; font-size: 14px; position: absolute; bottom: 1.5; margin-top: 120px; margin-left: 375px;" class="alert alert-danger"> <strong>Invalid password.</strong></div>';
    }
}

?>


