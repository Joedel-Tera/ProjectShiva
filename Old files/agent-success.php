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
    <!-- banner -->
<div class="inside-banner">
  <div class="container"> 
      
    <h2>Verify</h2>
</div>
</div>
<!-- banner -->
<div class="form">
    <h1><?= 'Success'; ?></h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
        echo $_SESSION['message'];    
    else:
        header( "location: agent-index.php" );
    endif;
    ?>
    </p>
    <a href="agent-index.php"><button class="button button-block">Manage For Sale Houses</button></a>
</div>
    
    
    
</body>
</html>

<?php include'footer.php';?>
