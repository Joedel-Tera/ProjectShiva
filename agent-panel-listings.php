<?php
require_once 'db.php'; 
?>

<?php
session_start();
if(!$_SESSION["email"])
{
    //Do not show protected data, redirect to login...
    header('Location: agent_login_page.php');
}
?>


<html>
<head>
    
            <title>Agent Profile</title>
          <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
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
        /*  nav sidebar  */
                .nav-sidebar { 
                    width: 120%;
                    padding: 8px 0; 
                    border: 1px solid #ddd;
                    font-size: 12px;
                    font-weight: normal;
                }
                .nav-sidebar a {
                    color: #333;
                    -webkit-transition: all 0.08s linear;
                    -moz-transition: all 0.08s linear;
                    -o-transition: all 0.08s linear;
                    transition: all 0.08s linear;
                    -webkit-border-radius: 4px 0 0 4px; 
                    -moz-border-radius: 4px 0 0 4px; 
                    border-radius: 4px 0 0 4px; 
                }
                .nav-sidebar .active a { 
                    cursor: default;
                    background-color: #428bca; 
                    color: #fff; 
                    text-shadow: 1px 1px 1px #666; 
                }
                .nav-sidebar .active a:hover {
                    background-color: #428bca;   
                }
                .nav-sidebar .text-overflow a,
                .nav-sidebar .text-overflow .media-body {
                    white-space: nowrap;
                    overflow: hidden;
                    -o-text-overflow: ellipsis;
                    text-overflow: ellipsis; 
                }

    /*  nav sidebar end */                
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
                .white
                {
                    border-top:4px solid white;
                }
    </style>
    

    </head>
    
    <!-- Header Starts -->
    <nav class="navbar navbar-fixed-top">
<div class="navbar-wrapper">

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
            
            <div style="margin-right: 50px;" class="navbar-collapse  collapse">
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
            <!-- #Nav Ends -->

          </div>
        </div>
  <div class="dropdown">

    <button style="background-color: #000; font-color: white; float: right; margin-top: -54px; margin-right: 20px;" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
     <span style="color: white" class="glyphicon glyphicon-user "><?php echo "<span style='color: #FFF;'> ".$_SESSION["first_name"]." </span>" ?></span>
        
        &nbsp;&nbsp;
        <span class="caret white"></span>
      </button>
    <ul style="margin-top: -22px; margin-left: 1170px;" class="dropdown-menu">
      <li class="dropdown-header">Account Settings</li>
      <li><a style="text-transform: capitalize;" href="edit-profile.php">Manage Account</a></li>
      <li class="divider"></li>
      <li class="dropdown-header">Done browsing?</li>
      <li><a style="text-transform: capitalize;" href="logout.php">Logout</a></li>
    </ul>
  </div>
    </div>
        
        
     </nav> 
    <br>
    <br>
    
<!-- #Header Starts -->

<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="agent-index.php"><img style="margin-top: -30px;" src="images/logo2.png" alt="Housefinder"><img style="margin-top: 50px; margin-left: -210px; margin-bottom: -20px;" src="images/title.png"></a>

</div>
<!-- #Header Starts -->
</div>

        <div class="inside-banner">
            <div class="container"> 
                <h2>Dashboard</h2>
            </div>
        </div>

    <body>
<div class="container">
<div class="spacer">
<div class="row">
          <span class="pull-left"><a href="agent-panel-profile.php">My Profile</a> &nbsp>&nbsp My Listings &nbsp>&nbsp <a href="agent-panel-reservations.php">My Reservations</a> &nbsp>&nbsp <a href="agent-panel-messages.php">My Messages</a> </span>
    <br>
    <br><br>
    

    

    
             <div style="overflow-x: hidden;" class="row">
              <div class="panel panel-default">
              <div class="panel-heading"> 
                  <blockquote style="background-color: #E8E8E8;" class="blockquote">
                        <p class="mb-0">User Profile</p>
                    </blockquote>
                  </div>
               <div class="panel-body">
              <div class="col-md-2 col-xs-9 col-sm-5 col-lg-2">
                  <i><h6 style="color: #b0b0b0;">Main Navigation</h6></i>
            <nav class="nav-sidebar">
                <ul class="nav">
                    <li><a href="agent-panel-profile.php">Profile</a></li>
                    <li class="active"><a href="agent-panel-listings.php">Property Listings</a></li>
                    <li><a href="agent-panel-reservations.php">House Reservations</a></li>
                    <li><a href="agent-panel-messages.php">My Messages</a></li>
                    <li class="nav-divider"></li>
                    <li><a href="logout.php"><i class="glyphicon glyphicon-off"></i>&nbsp Logout</a></li>
                </ul>
            </nav>
            <br>
            <br>
              </div>
                   
        
                   
              <div style="margin-left: 40px;" class="col-md-10 col-xs-10 col-sm-10 col-lg-9" >
                  <div class="container" >
                    <blockquote style="background-color: #ddd; width: 900px;"><h3>My Listings</h3></blockquote>
                        <a href="add-property.php"><i class="glyphicon glyphicon-plus"></i> Add New Property</a>
                  </div>
                   <hr>
                        
                  
                  
        <?php 

            $sql = "SELECT property_type, property_category, location, negotiable, property_title FROM properties WHERE first_name = '".$_SESSION["first_name"]."'";
            $result = $mysqli->query($sql); 
        ?>      
                  
                
                    <table style="font-size: 13px" id="listings" class="table table-striped table-hover" cellspacing="0" width="930px">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Category</th>
                                <th>Location</th>
                                <th>Negotiable</th>
                                <th>Property Name</th>
                                <th>STATUS</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                           <?php while($row = $result->fetch_assoc()){  ?>
                            <tr>
                                <td><?php echo $row['property_type']; ?></td>
                                <td><?php echo $row['property_category']; ?></td>
                                <td><?php echo $row['location']; ?></td>
                                <td><?php echo $row['negotiable']; ?></td>
                                <td><?php echo $row['property_title']; ?></td>
                                <td>
                                    <?php
                                    // PAKIAYOS TO AFTER NG SHOW HIDE REMOVE A HREFSSSS
                                        $yehey = 1;
                                        if ($yehey == 1) {
                                            echo "<i>HIDDEN</i>";
                                        } else {
                                            echo "<i>DISPLAYED</i>";
                                        }
                                    ?>
                                </td>
                                <td>
                                    <a style="font-size: 14px;" href=""><u>Show</u></a> &nbsp
                                    <a style="font-size: 14px;" href="#"><u>Hide</u></a> &nbsp
                                    <a style="font-size: 14px; color: #FA5252;" href="#"><u>Remove</u></a>
                                </td>
                            </tr>
                           <?php } ?>
                        </tbody>
                    </table>
                
              </div>
        </div>
    </div>
                 
        <script type="text/javascript" src="jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function(){
            $('#listings').DataTable({
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            });
            });
        </script>
    </div>
</div>
</div>
</div>

    </body>
</html>



<?php include 'footer.php'; ?> 