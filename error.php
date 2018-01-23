<?php include'headertop.php'; ?>

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
  <?php include 'css/css.html'; ?>
</head>
<body>
    
    
            <div class="inside-banner">
            <div class="container"> 
            <h2>ERROR</h2>
            </div>
            </div>
    
<div class="form">
    <h1>Oops something went wrong!</h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        header( "location: login_page.php" );
    endif;
    ?>
    </p>     
    <a href="login_page.php"><button class="button button-block">Back to login page</button></a>
</div>
</body>
</html>

<?php
    include "footer.php";
?>


