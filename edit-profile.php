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

<!DOCTYPE HTML>
<html>
    <head>
        <title>Edit profile</title>
           
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
            <li><a href="edit-profile.php">My Account</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Done browsing?</li>
            <li><a href="logout.php">Sign out</a></li>
            </ul>
            </div>
            </div>
    

    
    
        <div class="inside-banner">
        <div class="container"> 
           
        <h2>Edit Profile</h2>
        </div>
        </div>
    
        <?php 
            $sql = "SELECT address, contact_number, email_info, landline, avatar FROM agents WHERE email = '".$_SESSION["email"]."'";
            $result = $mysqli->query($sql); 
        ?>
    
  <?php while($row = $result->fetch_assoc()){  ?>  
<div class="container">
    <div class="spacer">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-6 col-xs-6 col-sm-7 col-lg-7" >
                  <form method="post" action="edit-profile-process.php" enctype="multipart/form-data">           
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Update address:</label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $row['address'] ?>" name="address" id="address" placeholder="New Address" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Update Contact #:</label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $row['contact_number'] ?>" name="contact_number" id="contact_number" minlength="10" maxlength="12" placeholder="New Contact #" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Update Landline #:</label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $row['landline'] ?>" name="landline" id="landline" placeholder="New Landline # (optional)" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Update Email:</label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $row['email_info'] ?>" name="email_info" id="email_info" placeholder="New Email" class="form-control" required>
                    </div>
                </div>    
                <div class="form-group">
                    <label class="col-sm-4 control-label">New profile photo:</label>
                    <div class="col-sm-8">
                         <input type="file" id="avatar" name="avatar" accept="image/*" required/>
                    </div>
                </div>                       
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" name="btn_update" class="btn btn-primary" value="1">Update</button>
                    </div>
                </div>
                  </form>
                    <div class="form-group">
                       <a style="font-size: 15px;" href="agent-panel-profile.php"><i class="glyphicon glyphicon-arrow-left"></i> Back to my profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>  
<?php } ?> 
</html>


<?php include'footer.php' ?>