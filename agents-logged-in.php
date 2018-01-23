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
    <h2>Agents</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer agents">
    
    <?php 
            $sql = "SELECT id, first_name, middle_name, last_name, address, bday, age, gender, contact_number, email_info, landline, email, password, avatar, date_created FROM agents";
            $result = $mysqli->query($sql); 
    
    ?>
  <?php while($row = $result->fetch_assoc()){  ?>
<div class="row">
  <div class="col-lg-8  col-lg-offset-2 col-sm-12">
      <!-- agents -->
      <div class="row">
        <div class="col-lg-2 col-sm-2 "><img alt="User Pic" src="<?php echo $row['avatar']; ?>" id="profile-image1" class="img-circle img-responsive"></div>
        <div class="col-lg-7 col-sm-7 "><h4><?php echo "".$row['first_name']."" ?>&nbsp<?php echo "".$row['last_name']."" ?></h4>
            <br>
            
            <p>     Address:   
                <?php
                    if($row['address'] == ""){
                        echo '<i style="font-size: 12px;">NA</i>';
                    }else{ 
                        echo $row['address']; 
                    } 
                ?>
                <br>
                    Age:
                <?php
                    if($row['age'] == ""){
                        echo '<i style="font-size: 12px;">NA</i>';
                    }else{ 
                        echo $row['age']; 
                    } 
                ?>
                <br>
                    Gender:
                <?php
                    if($row['gender'] == ""){
                        echo '<i style="font-size: 12px;">NA</i>';
                    }else{ 
                        echo $row['gender']; 
                    } 
                ?>
                <br>
                    Member Since:
                <?php
                    if($row['date_created'] == ""){
                        echo '<i style="font-size: 12px;">NA</i>';
                    }else{ 
                        echo date('F d, Y', strtotime($row['date_created'])); 
                    } 
                ?>
            </p>

                
        </div>
        <div class="col-lg-3 col-sm-3 "><span class="glyphicon glyphicon-envelope"></span> 
            <a href="mailto:<?php $row['email_info']; ?>">
                <?php
                    if($row['email_info'] == ""){
                        echo '<i style="font-size: 15px;">No information to display</i>';
                    }else{ 
                        echo $row['email_info']; 
                    } 
                ?></a><br>
        <span class="glyphicon glyphicon-phone"></span>
                <?php
                    if($row['contact_number'] == ""){
                        echo '<i style="font-size: 12px;">NA</i>';
                    }else{ 
                        echo $row['contact_number']; 
                    } 
                ?>
            <br>
             <span class="glyphicon glyphicon-earphone"></span>
                <?php
                    if($row['landline'] == ""){
                        echo '<i style="font-size: 12px;">NA</i>';
                    }else{ 
                        echo $row['landline']; 
                    } 
                ?>
            <br><br>
            <a href="agents-property-list.php?id=<?php echo $row['id']; ?>"><button class="btn btn-success"> View Properties </button></a>
          </div>
      </div>
      <!-- agents -->
      

 
     
  </div>
</div>

    <?php } ?> 
</div>
</div>

<?php include'footer.php';?>