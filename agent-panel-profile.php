<?php
require_once 'db.php'; 

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
                    padding: 6px 0; 
                    border: 1px solid #ddd;
                    font-size: 11px;
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
    
    
      
  <link rel="stylesheet" href="css/jquery-ui.css">   
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <script>
  $( function() {
    var availableTags = [
        "Cavite",
        "Bacoor, Cavite",
        "Manila City, Metro Manila",
        "Imus, Cavite",
        "Dasmariñas, Cavite",
        "General Trias, Cavite",
        "Tagaytay City, Cavite",
        "Kawit, Cavite"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
    

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
            
            <div style="margin-right: 50px;" class="navbar-collapse collapse">
                <nav class="shift">
              <ul class="nav navbar-nav navbar-left">
               <li class="active"><a href="agent-index.php">Home</a></li>
                <li class="active"><a href="agent-about.php">About</a></li>
                <li class="active"><a href="agent-agents.php">Agents</a></li>
                <li class="active"><a href="buysalerent.php">Browse</a></li>
                <li class="active"><a href="agent-contact.php">Contact</a></li>      
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
          <span class="pull-left">My Profile &nbsp>&nbsp <a href="agent-panel-listings.php">My Listings</a> &nbsp>&nbsp <a href="agent-panel-reservations.php">My Reservations</a> &nbsp>&nbsp <a href="agent-panel-messages.php">My Messages</a> </span>
    <br>
    <br><br>
    

    
        <?php 
            $sql = "SELECT first_name, middle_name, last_name, address, bday, age, gender, contact_number, email_info, landline, email, password, avatar FROM agents WHERE email = '".$_SESSION["email"]."'";
            $result = $mysqli->query($sql); 
        ?>
    
      <?php while($row = $result->fetch_assoc()){  ?>
             <div style="overflow-x: hidden;" class="row">
              <div class="panel panel-default">
              <div class="panel-heading"> 
                  <blockquote style="background-color: #E8E8E8;" class="blockquote">
                        <p class="mb-0">User Profile</p>
                    </blockquote>
                  </div>
               <div class="panel-body">
              <div class="col-md-2 col-xs-9 col-sm-5 col-lg-2">
               <img alt="User Pic" src="<?php echo $row['avatar']; ?>" id="profile-image1" class="img-circle img-responsive"> 
                  
                        <br>
                        <br>
                  <i><h6 style="color: #b0b0b0;">Main Navigation</h6></i>
            <nav class="nav-sidebar">
                <ul class="nav">
                    <li class="active"><a href="agent-panel-profile.php">Profile</a></li>
                    <li><a href="agent-panel-listings.php">Property Listings</a></li>
                    <li><a href="agent-panel-reservations.php">House Reservations</a></li>
                    <li><a href="agent-panel-messages.php">My Messages</a></li>
                    <li class="nav-divider"></li>
                    <li><a href="logout.php"><i class="glyphicon glyphicon-off"></i>&nbsp Logout</a></li>
                </ul>
            </nav>
                        <br>
                        <br>
                   
                   
              </div>
                   

                   
              <div style="margin-left: 50px;" class="col-md-8 col-xs-9 col-sm-6 col-lg-9" >
                  <div class="container" >
                      
                    <blockquote><h3><?php echo "".$_SESSION['first_name']."" ?>&nbsp<?php echo "".$_SESSION['last_name']."" ?></h3></blockquote>
                    <h3>-Agent</h3>
                  </div>
                   <hr>

            
                <table id="myTable" class="table table-user-information">
                    <tbody>
                      <tr>
                        <td><span class="glyphicon glyphicon-home one"></span>&nbsp Address:</td>
                        <td><?php if($row['address'] == ""){ echo '<i style="font-size: 15px;">No information to display</i>';}else{ echo $row['address'];  }  ?></td>
                      </tr>   
                      <tr>
                        <td><span class="glyphicon glyphicon-gift one"></span>&nbsp Birthdate:</td>
                        <td><?php if($row['bday'] == ""){ echo '<i style="font-size: 15px;">No information to display</i>';}else{ echo date('F d, Y', strtotime($row['bday']));  }  ?></td>
                      </tr>
                      <tr>
                        <td><span class="glyphicon glyphicon-ok one"></span>&nbsp Age:</td>
                        <td><?php if($row['age'] == ""){ echo '<i style="font-size: 15px;">No information to display</i>';}else{ echo $row['age'];  }  ?></td>
                      </tr>                  
                    <tr>
                        <td><span class="glyphicon glyphicon-user one"></span>&nbsp Gender:</td>
                        <td><?php if($row['gender'] == ""){ echo '<i style="font-size: 15px;">No information to display</i>';}else{ echo $row['gender'];  }  ?></td>
                      </tr>                    
                        <tr>
                        <td><span class="glyphicon glyphicon-phone one"></span>&nbsp Cellphone #:</td>
                        <td><?php if($row['contact_number'] == ""){ echo '<i style="font-size: 15px;">No information to display</i>';}else{ echo $row['contact_number'];  }  ?></td>
                      </tr>
                        <tr>
                        <td><span class="glyphicon glyphicon-earphone one"></span>&nbsp Landline #: </td>
                        <td><?php if($row['landline'] == ""){ echo '<i style="font-size: 15px;">No information to display</i>';}else{ echo $row['landline']; } ?></td>
                      </tr>
                      <tr>
                        <td><span class="glyphicon glyphicon-envelope one"></span>&nbsp Email:</td>
                        <td><?php if($row['email_info'] == ""){ echo '<i style="font-size: 15px;">No information to display</i>';}else{ echo $row['email_info'];  }  ?></td>
                      </tr>
                    </tbody>
                  </table><br>
            <div class="col-md-4 col-sm-5 col-lg-12">
                <blockquote class="col-md-12 col-sm-12 col-lg-12" style="background-color: #E8E8E8;" class="blockquote">
                    <p class="mb-0">Actions</p>
                </blockquote>
                     <table>
                        <tbody>
                            <tr>
                                <td><a style="font-size: 15;" href="edit-profile.php">Edit Profile</a></td>
                            </tr>
                            <tr>
                                <td style="padding-top: .5em; padding-bottom: .5em;"><a style="font-size: 15;" href="change-password.php">Change Password</a></td>
                            </tr>
                            <tr>
                                <td><a style="font-size: 15;" href="agent-contact.php">Contact Administration</a></td>
                            </tr>           
                            <tr>
                                <td style="padding-top: .5em;"><a style="font-size: 15;" href="agent-panel-listings.php">Add New Property</a></td>
                            </tr>
                        </tbody>
                     </table>
            </div>

             
        </div>
                
        </div>
    </div>
                 

    </div>
</div>
</div>
</div>
         <?php } ?>
<!--
        <script type="text/javascript" src="js/jquery.tabledit.min.js"></script>
<script>
        $('#myTable').Tabledit({
    url: 'update.php',
    deleteButton: false,
    saveButton: true,
    autoFocus: false,
    buttons: {
        edit: {
            class: 'btn btn-sm btn-primary',
            html: '<span class="glyphicon glyphicon-pencil"></span> &nbsp EDIT',
            action: 'edit'
        }
    },
    columns: {
        identifier: [0, 'id'],
        editable: [[1, 'address'], [2, 'bday'], [3, 'age'], [4, 'gender'], [5, 'contact_number'], [6, 'landline'], [7, 'email_info']]
    }
});
        </script>
-->
    </body>
</html>



<?php include 'footer.php'; ?> 