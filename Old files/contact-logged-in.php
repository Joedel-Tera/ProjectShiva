<?php 
require 'db.php';
?>

<?php
session_start();
if(!$_SESSION["email"])
{
    //Do not show protected data, redirect to login...
    header('Location: login_page.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Housefinder</title>
    
    <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/style.css"/>
    <script src="assets/bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/script.js"></script>


    <!-- Owl stylesheet -->
    <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
    <script src="assets/owl-carousel/owl.carousel.js"></script>
    <!-- Owl stylesheet -->


    <!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
    <!-- slitslider -->
    
    
                <style>
                    
                .white
                {
                border-top:4px solid white;
                }

                nav ul li a {
                display: block;
                padding: 1px;
                text-decoration: none;
                color: #aaa;
                font-weight: 800;
                text-transform: uppercase;
                }
                nav ul li a,
                nav ul li a:after,
                nav ul li a:before {
                transition: all .5s;
                }
                nav ul li a:hover {
                color: #555;
                }
                    
                /* SHIFT */
                nav.shift ul li a {
                position:relative;
                z-index: 1;
                }
                nav.shift ul li a:hover {
                color: #91640F;
                }
                nav.shift ul li a:after {
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                margin: auto;
                width: 100%;
                height: 1px;
                content: '.';
                color: transparent;
                background: #000;
                visibility: none;
                opacity: 0;
                z-index: -1;
                }
                nav.shift ul li a:hover:after {
                opacity: 1;
                visibility: visible;
                height: 100%;
                }

                </style>
    
    
    
</head>
    
    <!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            
            <div style="margin-right: 50px;" class="navbar-collapse  collapse">
                <nav class="shift">
              <ul class="nav navbar-nav navbar-left">
               <li class="active"><a href="index.php">Home</a></li>
                <li class="active"><a href="about.php">About</a></li>
                <li class="active"><a href="agents.php">Agents</a></li>
                <li class="active"><a href="buysalerent-logged-in.php">Browse</a></li>
                <li class="active"><a href="contact.php">Contact</a></li>     
              </ul>
                </nav>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->

<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="index.php"><img style="margin-top: -30px;" src="images/logo2.png" alt="Housefinder"><img style="margin-top: 50px; margin-left: -210px; margin-bottom: -20px;" src="images/title.png"></a>
</div>
<!-- #Header Starts -->
</div>
    
    
    
            <div class="container">
            <div class="dropdown">

            <button style="background-color: #000; font-color: white; float: right; margin-right: -50px; margin-top: -170px;" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
            <span style="color: white" class="glyphicon glyphicon-user "><?php echo "<span style='color: #FFF;'> ".$_SESSION["first_name"]." </span>" ?></span>

            &nbsp;&nbsp;
            <span class="caret white"></span>
            </button>

            <ul style=" margin-top: -140px; margin-left: 1032px;" class="dropdown-menu">
            <li class="dropdown-header">Account Settings</li>
            <li><a href="edit-profile.php">Profile</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Done browsing?</li>
            <li><a href="logout.php">Logout</a></li>
            </ul>
            </div>
            </div>
    

    
    
    
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
  <div class="col-lg-6 col-sm-6 ">
    <h6 style="line-height: 1.5;">You can use the form below to reach out and ask us anything. Please feel free to contact Housefinder with any general inquiries regarding the website at <b><u>(046) 999-9999</u></b> / <b><u>+6399 999 9999</u></b>. For sales inquiry email us at <b><u>housefinder@gmail.com</u></b>.</h6><br>

<form action="" method="post">
                <input type="text" class="form-control" placeholder="Full Name" value="<?php echo "".$_SESSION["first_name"]."" ?>&nbsp;<?php echo "".$_SESSION["last_name"]."" ?>"> 
                <input type="text" class="form-control" value="<?php echo "".$_SESSION["email"]."" ?>" placeholder="Email Address">
                <input type="text" class="form-control" placeholder="Contact Number" required>
                <textarea rows="6" class="form-control" placeholder="Message" required></textarea>

      <button type="submit" class="btn btn-success" name="Submit">Send Message</button>
          
</form>
                
        </div>
  <div class="col-lg-6 col-sm-6 ">
   <div style="margin-top: 40px;" class="well"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3864.5409125923334!2d120.97265191432355!3d14.395953189933048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d3cfd75b08eb%3A0xa40b1d5ad035c034!2sUniversity+of+Perpetual+Help+System+DALTA%2C+Molino+Campus!5e0!3m2!1sen!2sph!4v1501771920296"></iframe></div>
  </div>
  </div>
</div>
</div>


<?php include'footer.php';?>