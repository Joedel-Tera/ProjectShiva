<?php include 'headertop.php';?>

<?php
require 'db.php';
session_start();

?>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) {

        require 'agent-login.php';
        
    }    
//    elseif (isset($_POST['register'])) {
//        require 'register.php';
        
    }
?>

<html>
    <head>
        <title></title>
    </head>
    <body>
        <div class="inside-banner">
            <div class="container"> 
                <h2>Agent Login Form</h2>
            </div>
        </div>
        <br><br><br>    
        
<div class="container">
<div class="spacer">
<div class="row contact">
  <div style="margin-left: 292px;" class="col-lg-6 col-sm-6 ">

<form action="agent_login_page.php" method="post">
                <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                <input type="password" class="form-control" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

    <p style="float: right;" class="forgot"><a href="agent_registration_page.php"><u>Register as a broker!</u></a></p>
    <p class="forgot"><a href="agent-forgot.php">Forgot Password?</a></p>
      <button type="submit" class="btn btn-success" name="login">LOGIN</button>
          
</form>
              
        </div>
  </div>
</div>
</div>
        <br><br><br><br>
        

        
    </body>
    
    
    
    
</html>



<?php include'footer.php';?>
