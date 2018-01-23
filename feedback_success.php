<?php 
require_once'db.php';
include'headertop.php';
session_start();
if(isset($_SESSION["email"]))
{
    header('Location: contact-logged-in.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Housefinder</title>
  </head>
<br>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <h2>Contact Us</h2>
  </div>
</div>
<!-- banner -->


<div class="container">
  <div class="spacer">
    <div class="row contact">
      <div class="col-lg-12 col-sm-8">
        <div class="jumbotron">
            <h1 class="display-2">Message Successfully Sent!</h1>
            <p class="lead">Your message has been successfully sent to the administrator. Thank you!</p>
            <br>
            <p class="lead">
              <a class="btn btn-primary btn-lg" href="index.php" role="button">← Back to Home</a>
            </p>
        </div>
      </div>
    </div>
  </div>
</div>

    
    

<?php include'footer.php';?>