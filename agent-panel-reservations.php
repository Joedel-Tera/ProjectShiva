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
    


        <div class="inside-banner">
            <div class="container"> 
                <h2>Dashboard</h2>
            </div>
        </div>

    <body>
<div class="container">
<div class="spacer">
<div class="row">
    <span class="pull-left"><a href="agent-panel-profile.php">My Profile</a> &nbsp>&nbsp <a href="agent-panel-listings.php">My Listings</a> &nbsp>&nbsp My Reservations&nbsp>&nbsp <a href="agent-panel-messages.php">My Messages</a> </span>
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
                    <li><a href="agent-panel-listings.php">Property Listings</a></li>
                    <li class="active"><a href="agent-panel-reservations.php">House Reservations</a></li>
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
                  </div>
                   <hr>
                        
                  
                  
        <?php 
            $sql = "SELECT * FROM property_reservations as pr INNER JOIN properties as prop ON property_id = prop.id INNER JOIN agents as agent ON pr.agent_id = agent.id WHERE pr.agent_id = '".$_SESSION['id']."'";
            $result = $mysqli->query($sql); 

        ?>      
                  
                
                    <table id="listings" class="table table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Customer Name</th>
                                <th>Customer Email</th>
                                <th>Customer No.</th>
                                <th>Property Category</th>
                                <th>Property Type</th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        
                        <tbody>
                           <?php while($row = $result->fetch_assoc()){  ?>
                            <tr>
                                <td><?php echo $row['customer_name']; ?></td>
                                <td><?php echo $row['customer_email']; ?></td>
                                <td><?php echo $row['customer_number']; ?></td>
                                <td><?php echo $row['property_category']; ?></td>
                                <td><?php echo $row['property_type']; ?></td>
                                <td> </td>
                            </tr>
                           <?php } ?>
                        </tbody>
                    </table>
                
              </div>
        </div>
    </div>
                 
        <script type="text/javascript" src="jquery.dataTables.min.js"></script>
        <script>
/*            $(document).ready(function(){
            $('#listings').DataTable({
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            });
            });*/
        </script>
    </div>
</div>
</div>
</div>

    </body>
</html>



<?php include 'footer.php'; ?> 