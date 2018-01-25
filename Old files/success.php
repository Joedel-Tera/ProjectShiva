<?php include'headertop.php';?>

<?php
/* Displays all successful messages */
session_start();
?>


<!DOCTYPE html>
<html>
<head>
  <title>Success</title>
  <?php include 'css/css.html'; ?>
</head>
<body>
<div class="form">
    <h1><?= 'Success'; ?></h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
        echo $_SESSION['message'];    
    else:
        header( "location: index-logged-in.php" );
    endif;
    ?>
    </p>
    <a href="index-logged-in.php"><button class="button button-block">Continue Browsing Houses</button></a>
</div>
    
    
    
</body>
</html>

<?php include'footer.php';?>
