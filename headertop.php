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
    <!-- <script src="js/jquery.typeahead.min.js"></script> -->
   
    
    <!-- Owl stylesheet -->
    <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
    <script src="assets/owl-carousel/owl.carousel.js"></script>
    <!-- Owl stylesheet -->
    <!-- <link rel="stylesheet" href="css/jquery.typeahead.min.css"> -->

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
     nav ul li a, nav ul li a:after, nav ul li a:before {
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
     #login-nav input {
         margin-bottom: 15px;
    }
     </style>  

</head>

<?php include 'commonHeader.php'; ?>
<script>   
$(document).ready(function(){
//Handles menu drop down
    $('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
    });
    $("img").error(function(){
        $(this).attr('src', 'images/missing.png');
        $(this).attr('title', "Missing/Broken Image");
        $(this).css('padding-left','20px');
    });
});
</script>
