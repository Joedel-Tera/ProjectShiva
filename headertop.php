<?php ob_start(); ?>


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
    <script src="js/jquery.typeahead.min.js"></script>
   
    
    <!-- Owl stylesheet -->
    <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
    <script src="assets/owl-carousel/owl.carousel.js"></script>
    <!-- Owl stylesheet -->
    <link rel="stylesheet" href="css/jquery.typeahead.min.css">

    <!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
    <!-- slitslider -->
    
    
                <style>

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
                    #login-nav input { margin-bottom: 15px; }

                </style>

</head>


<!-- Header Starts -->
<nav class="navbar navbar-default navbar-fixed-top" style="z-index:10;">
<div  class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div style="height: 50px;" class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            
            <div class="navbar-collapse collapse">
                <nav class="shift">
              <ul class="nav navbar-nav navbar-left">
               <li class="active"><a href="index.php">Home</a></li>
                <li class="active"><a href="about.php">About</a></li>
                <li class="active"><a href="agents.php">Agents</a></li>
                <li class="active"><a href="buysalerent.php">Browse</a></li>
                <li class="active"><a href="contact.php">Contact</a></li>          
                  
              </ul>

          
  </nav>
          </div>
        </div>

    </div>
    </nav>
    <br>
    <br>

<!-- #Header Starts -->

<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="index.php"><img style="margin-top: -30px;" src="images/logo2.png" alt="Housefinder"><img style="margin-top: 50px; margin-left: -210px; margin-bottom: -20px;" src="images/title.png"></a>


</div>
<!-- #Header Starts -->
</div>
    <script>
    
    $(document).ready(function(){
    //Handles menu drop down
    $('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
    });
});
    
    </script>
