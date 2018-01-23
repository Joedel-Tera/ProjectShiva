<?php include'headertop.php';?>

<?php
require 'db.php';

session_start();

if(isset($_SESSION["email"]))
{
    header('Location: index.php');
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <?php include 'css/css.html'; ?>
    
    <style>
     /* unvisited link */
a:link {
    color: #72b70f;
}

/* visited link */
a:visited {
    color: #72b70f;
}

    </style>
</head>

<?php 
    
    
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
           
    }
    
 
}
    
?>
    

<div class="inside-banner">
    <div class="container"> 
        <h2>Sign up now for free!</h2>
    </div>
</div>
    <br>
    <br><br>
    
    
    
    
<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab"><a href="#signup">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">

         <div id="login">   
          <h1>Welcome!</h1>
          <form id="form" role="form" data-toggle="validator" action="login_page.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required autocomplete="on" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required autocomplete="off" name="password"/>
              <span class="help-block"></span>
          </div>
          <p class="forgot"><a href="agent_login_page.php">Are you an Agent/Broker? Click here!</a></p>
          <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
          
          <button class="button button-block" name="login">Log In</button>
          
          </form>

        </div>
          
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="login_page.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required autocomplete="off" name='email' />
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" autocomplete="off" id="password" name='password'/>
          </div>
              
          <div class="field-wrap">
            <label>
              Confirm Password<span class="req">*</span>
            </label>
            <input type="password" required minlength="8" autocomplete="off" id="confirm_password" name='confirm_password'/>
          </div>
              
                <p class="forgot"><a href="agent_registration_page.php">Are you an Agent/Broker? Click here!</a></p>
          <button type="submit" class="button button-block" name="register">Register</button>
          
          </form>

        </div>  
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    
    
    

<div class="footer">

<div class="container">



<div class="row">
            <div class="col-lg-3 col-sm-3">
                <center><h4>Site Links</h4></center>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.php">About</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="agents.php">Agents</a></li>         
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="buysalerent.php">Browse</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.php">Contact</a></li>
              </ul>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                <center>
                    <h4>About Us</h4>
                      <p style="text-align: justify; color: #999999;">HouseFinder is A Web-based House Information System. It is proposed by Rustine Louise Agbayani and Reuben Derick Llanes, 4th year students currently taking up Bachelor of Science in Information Technology from University of Perpetual Help - Molino.</p>

                </center>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                <center>
                    <h4>Follow us</h4>
                
                    <a href="#"><img src="images/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="images/twitter.png" alt="twitter"></a>
                    <a href="#"><img src="images/instagram.png" alt="instagram"></a></center>
            </div>

             <div class="col-lg-3 col-sm-3">
                 <center>
                    <h4>Information</h4>
                 
                 <p style="text-align: left; color: #999999;"><b>Housefinder Inc.</b><br>
                    <span class="glyphicon glyphicon-map-marker"></span> 4102 Bacoor, Cavite <br>
                    <span class="glyphicon glyphicon-envelope"></span> housefinder@gmail.com<br>
                    <span class="glyphicon glyphicon-earphone"></span> (123) 456-7890
                </p>
                 </center>
            </div>
        </div>
<p style="float: left; color: #999999;" class="copyright"><i>Housefinder&trade; <?php echo date('Y'); ?>, All Rights Reserved</i></p>


</div></div>   
    
    

<script src='js/jquery.min.js'></script>
<script src="js/index.js"></script>
    
    <script>
        var password = document.getElementById("password")
        , confirm_password = document.getElementById("confirm_password");

        function validatePassword(){
        if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords don't match");
        } else {
        confirm_password.setCustomValidity('');
        }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>


</body>
</html>


