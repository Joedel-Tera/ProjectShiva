<?php
session_start();
require_once 'db.php'; 
include 'headertop.php';

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