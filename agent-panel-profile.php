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


<html>
<head>
            <title>Agent Profile</title>
          <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    
    
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
</head>
    
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
          <span class="pull-left">My Profile &nbsp>&nbsp <a href="agent-panel-listings.php">My Listings</a> &nbsp>&nbsp <a href="agent-panel-reservations.php">My Reservations</a> &nbsp>&nbsp <a href="agent-panel-messages.php">My Transactions</a> </span>
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
                    <li><a href="agent-panel-messages.php">My Transactions</a></li>
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

      <!--   <script type="text/javascript" src="js/jquery.tabledit.min.js"></script> -->
<!-- <script>
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
        </script> -->

    </body>
</html>



<?php include 'footer.php'; ?> 