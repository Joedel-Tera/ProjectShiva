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
                <li class="active"><a href="blog.php">Blog</a></li>
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

              <ul class="pull-right">
                <li><a href="buysalerent.php">Buy</a></li>
                <li><a href="buysalerent.php">Sell</a></li>         
                <li><a href="buysalerent.php">Rent</a></li>
              </ul>
</div>
<!-- #Header Starts -->
</div>
    
    
    
            <div class="container">
            <div class="dropdown">

            <button style="background-color: #000; font-color: white; float: right; margin-right: -50px; margin-top: -170px;" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
            <?php echo "<span style='color: #FFF;'> ".$_SESSION["first_name"]." </span>" ?>

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
    <h2>Blogs</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer blog">
<div class="row">
  <div class="col-lg-8">

  <!-- blog detail -->
  <h2>Creative business to takeover the market</h2>
  <div class="info">Posted on: Aug 22, 2017</div>
  <img src="images/blog/1.jpg" class="thumbnail img-responsive"  alt="Registered Agent">
 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
  <!-- blog detail -->




  </div>
  <div class="col-lg-4 visible-lg">

  <!-- tabs -->
  <div class="tabbable">
              <ul class="nav nav-tabs">
                <li class=""><a href="#tab1" data-toggle="tab">Recent Post</a></li>
                <li class=""><a href="#tab2" data-toggle="tab">Most Popular</a></li>
                <li class="active"><a href="#tab3" data-toggle="tab">Most Commented</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane" id="tab1">
                  <ul class="list-unstyled">
                  <li>
                  <h5><a href="blogdetail.php">Real estate marketing growing</a></h5>
                            <div class="info">Posted on: Aug 22, 2017</div>  
                            </li>
                             <li>
                  <h5><a href="blogdetail.php">Real estate marketing growing</a></h5>
                            <div class="info">Posted on: Aug 22, 2017</div>  
                            </li>
                             <li>
                  <h5><a href="blogdetail.php">Real estate marketing growing</a></h5>
                            <div class="info">Posted on: Aug 22, 2017</div>  
                            </li>
                            </ul>
                </div>
                <div class="tab-pane" id="tab2">
                <ul  class="list-unstyled">
                  <li>
                  <h5><a href="blogdetail.php">Market update on new apartments</a></h5>
                            <div class="info">Posted on: Aug 22, 2017</div>  
                            </li>

                  <li>
                  <h5><a href="blogdetail.php">Market update on new apartments</a></h5>
                            <div class="info">Posted on: Aug 22, 2017</div>  
                            </li>

                  <li>
                  <h5><a href="blogdetail.php">Market update on new apartments</a></h5>
                            <div class="info">Posted on: Aug 22, 2017</div>  
                            </li>
                            </ul>
                </div>
                <div class="tab-pane active" id="tab3">
                <ul class="list-unstyled">      
                            <li>
                  <h5><a href="blogdetail.php">Creative business to takeover the market</a></h5>
                            <div class="info">Posted on: Aug 22, 2017</div>  
                            </li>
                            
                            <li>
                  <h5><a href="blogdetail.php">Creative business to takeover the market</a></h5>
                            <div class="info">Posted on: Aug 22, 2017</div>  
                            </li>
                            </ul>
                </div>
              </div>
              
              
              
            </div>
  <!-- tabs -->


  </div>
</div>
</div>
</div>

<?php include'footer.php';?>