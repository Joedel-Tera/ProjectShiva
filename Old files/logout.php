<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 

// Redirect to home page
header("location: index.php");
exit;
?>