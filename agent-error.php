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
        header( "location: agent_login_page.php" );
    endif;
    ?>
    </p>     
    <a href="agent_login_page.php"><button class="button button-block">Back to login page</button></a>
</div>
    
    <div class="footer">

<div class="container">



<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>Information</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.php">About</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="agents.php">Agents</a></li>         
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="blog.php">Blog</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.php">Contact</a></li>
              </ul>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Newsletter</h4>
                    <p style="color: #999999; text-align: left;">Get notified about the latest properties in our marketplace.</p>
                    <form class="form-inline" role="form">
                            <input style="margin-top: -20px; margin-bottom: 20px; " type="text" placeholder="Enter your Email Address" class="form-control">
                        
                                <button class="btn btn-success" type="button">Notify Me!</button></form>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Follow us</h4>
                    <a href="#"><img src="images/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="images/twitter.png" alt="twitter"></a>
                    <a href="#"><img src="images/instagram.png" alt="instagram"></a>
            </div>

             <div class="col-lg-3 col-sm-3">
                    <h4>Contact us</h4>
                 <p style="text-align: left;"><b>Housefinder Inc.</b><br>
<span class="glyphicon glyphicon-map-marker"></span> 4102 Bacoor, Cavite <br>
<span class="glyphicon glyphicon-envelope"></span> housefinder@gmail.com<br>
<span class="glyphicon glyphicon-earphone"></span> (123) 456-7890</p>
            </div>
        </div>
<p style="float: left; color: #999999;" class="copyright"><i>Housefinder&trade; 2017, All Rights Reserved</i></p>


</div></div>



    
    
</body>
</html>

