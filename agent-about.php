<?php 
require 'db.php';
?>

<?php
session_start();
if(!$_SESSION["email"])
{
    //Do not show protected data, redirect to login...
    header('Location: agent_login_page.php');
}
?>


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
               <li class="active"><a href="agent-index.php">Home</a></li>
                <li class="active"><a href="agent-about.php">About</a></li>
                <li class="active"><a href="agent-agents.php">Agents</a></li>
                <li class="active"><a href="agent-blog.php">Blog</a></li>
                <li class="active"><a href="agent-contact.php">Contact</a></li>  
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
<a href="agent-index.php"><img style="margin-top: -30px;" src="images/logo2.png" alt="Housefinder"><img style="margin-top: 50px; margin-left: -210px; margin-bottom: -20px;" src="images/title.png"></a>


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
            <li><a href="agent-panel-profile.php">Profile</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Done browsing?</li>
            <li><a href="logout.php">Logout</a></li>
            </ul>
            </div>
            </div>
    
    <body>
        
    
        
        
        <div class="inside-banner">
        <div class="container"> 
           
        <h2>About Us</h2>
        </div>
        </div>
       <center>
    <div style="height: 100%; ;width: 76%; text-align: left;" id="container">
        <br>
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vulputate justo at semper malesuada. Nunc sit amet aliquam lectus. Curabitur suscipit massa at massa dictum, eget lobortis turpis finibus. Suspendisse potenti. Donec ac facilisis erat. Curabitur eu tortor at nulla auctor volutpat. Nulla pretium, ante id pulvinar luctus, ex lectus blandit mauris, at vestibulum enim orci eu dolor. Pellentesque interdum suscipit justo vitae ultricies. Nulla venenatis metus sem, sed accumsan massa congue ut. Integer vulputate justo a mi efficitur, at placerat tellus aliquet. Sed consectetur, urna ut lobortis molestie, magna nunc ullamcorper ante, id vulputate tellus neque sit amet dui. Curabitur ac rhoncus metus. Aliquam molestie augue eget viverra mattis. Morbi dolor turpis, consequat in accumsan id, vehicula at odio.<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vulputate justo at semper malesuada. Nunc sit amet aliquam lectus. Curabitur suscipit massa at massa dictum, eget lobortis turpis finibus. Suspendisse potenti. Donec ac facilisis erat. Curabitur eu tortor at nulla auctor volutpat. Nulla pretium, ante id pulvinar luctus, ex lectus blandit mauris, at vestibulum enim orci eu dolor. Pellentesque interdum suscipit justo vitae ultricies. Nulla venenatis metus sem, sed accumsan massa congue ut. Integer vulputate justo a mi efficitur, at placerat tellus aliquet. Sed consectetur, urna ut lobortis molestie, magna nunc ullamcorper ante, id vulputate tellus neque sit amet dui. Curabitur ac rhoncus metus. Aliquam molestie augue eget viverra mattis. Morbi dolor turpis, consequat in accumsan id, vehicula at odio<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vulputate justo at semper malesuada. Nunc sit amet aliquam lectus. Curabitur suscipit massa at massa dictum, eget lobortis turpis finibus. Suspendisse potenti. Donec ac facilisis erat. Curabitur eu tortor at nulla auctor volutpat. Nulla pretium, ante id pulvinar luctus, ex lectus blandit mauris, at vestibulum enim orci eu dolor. Pellentesque interdum suscipit justo vitae ultricies. Nulla venenatis metus sem, sed accumsan massa congue ut. Integer vulputate justo a mi efficitur, at placerat tellus aliquet. Sed consectetur, urna ut lobortis molestie, magna nunc ullamcorper ante, id vulputate tellus neque sit amet dui. Curabitur ac rhoncus metus. Aliquam molestie augue eget viverra mattis. Morbi dolor turpis, consequat in accumsan id, vehicula at odio</p>
    </div></center> 

    </body>
    </html>
        
<?php include'footer.php';?>