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
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" /> 
     
    
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
          <div class="container">
            <span class="pull-left" style="padding:20px 0px; font-size: 18px;">
                <a href="agent-panel-profile.php">My Profile</a> > 
                <a href="agent-panel-listings.php">My Listings </a> > My Reservations >
                <a href="agent-panel-messages.php">My Transactions</a>
            </span>
          </div>
    

<div style="overflow-x: hidden;" class="row">
<div class="panel panel-default">
    <div class="panel-heading"> 
        <blockquote style="background-color: #E8E8E8;" class="blockquote">
            <p class="mb-0">User Profile</p>
        </blockquote>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-2">
                <i><h6 style="color: #b0b0b0;">Main Navigation</h6></i>
                    <nav class="nav-sidebar">
                        <ul class="nav">
                            <li><a href="agent-panel-profile.php">Profile</a></li>
                            <li><a href="agent-panel-listings.php">Property Listings</a></li>
                            <li class="active"><a href="agent-panel-reservations.php">House Reservations</a></li>
                            <li><a href="agent-panel-messages.php">My Transactions</a></li>
                            <li class="nav-divider"></li>
                            <li><a href="logout.php"><i class="glyphicon glyphicon-off"></i>&nbsp Logout</a></li>
                        </ul>
                    </nav>
                <br>
                <br>
            </div>
                                          
            <div class="col-md-10">
                <div class="row" style="padding: 20px 10px 30px 40px;">
                    <blockquote style="background-color: #ddd;"><h3> My Reservations </h3></blockquote>
                    <?php 
                    $sql = "SELECT * FROM property_reservations as pr INNER JOIN properties as prop ON property_id = prop.id INNER JOIN agents as agent ON pr.agent_id = agent.id WHERE pr.agent_id = '".$_SESSION['id']."'";
                    $result = $mysqli->query($sql); 
                    ?>      
                    
                    <div class="col-md-12">
                        <table id="listings" class="table table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th> Name </th>
                                    <th> Customer No. </th>
                                    <th> Category </th>
                                    <th> Res. Fee </th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php while($row = $result->fetch_assoc()){  ?>
                                <tr>
                                    <td><?php echo $row['customer_name']; ?></td>
                                    <td><?php echo $row['customer_number']; ?></td>
                                    <td><?php echo $row['property_category']; ?></td>
                                    <td>₱ <?php echo $row['reservationFee']; ?></td>
                                    <td><?php echo $row['reservation_status']; ?></td>
                                    <td>
                                    <?php if($row['reservation_status'] == '') { ?>
                                    <input type="hidden" class="propId" value="<?php echo $row['property_id']; ?>">
                                    <input type="hidden" class="reservationId" value="<?php echo $row['reservation_id']; ?>">
                                    <button class="approvedAction btn" style="font-size: 14px;" href="">Approved </button>
                                    <button class="soldAction btn" style="font-size: 14px;" href="">Sold </button>
                                    <button class="declineAction btn" style="font-size: 14px;" href="">Decline </button>
                                    <?php } else if ($row['reservation_status'] == 'APPROVED') { ?>
                                    <input type="hidden" class="propId" value="<?php echo $row['property_id']; ?>">
                                    <input type="hidden" class="reservationId" value="<?php echo $row['reservation_id']; ?>">
                                    <button class="soldAction btn" style="font-size: 14px;" href="">Sold </button>
                                    <button class="declineAction btn" style="font-size: 14px;" href="">Decline </button>
                                    <?php } ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        
                    </div>
                    <div style="clear:both;"> </div>
                </div>
            </div>
        </div>
    </div>
</div>
                 
        <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#listings').DataTable({
                    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                });
                $('.approvedAction').each(function(){
                    var _this = $(this);
                    
                   _this.on('click',function(){
                    var propId = _this.parent().find('.propId').val();
                    var reservationId = _this.parent().find('.reservationId').val();
                        $.ajax({
                            type: 'POST',
                            url: 'ajaxFunctions.php',
                            data: {
                                'reservationId' : reservationId
                            },
                            dataType: 'json',
                            success: function(data){

                               if(data.result){
                                alert("Status Updated Wait for the page to reload.");
                                    setTimeout(function(){// wait for 5 secs(2)
                                        location.reload(); // then reload the page.(3)
                                    }, 3000);
                               } else {
                                 alert("Error Occurred Please Try again later.");
                               }
                            }
                        });
                   });
                });
                $('.soldAction').each(function(){
                    var _this = $(this);
                    

                   _this.on('click',function(){
                    var propId = _this.parent().find('.propId').val();
                    var reservationId = _this.parent().find('.reservationId').val();
                        $.ajax({
                            type: 'POST',
                            url: 'ajaxFunctions.php',
                            data: {
                                'soldStatus' : propId,
                                'reservationId' : reservationId
                            },
                            dataType: 'json',
                            success: function(data){

                               if(data.result){
                                alert("Status Updated Wait for the page to reload.");
                                    setTimeout(function(){// wait for 5 secs(2)
                                        location.reload(); // then reload the page.(3)
                                    }, 3000);
                               } else {
                                 alert("Error Occurred Please Try again later.");
                               }
                            }
                        });
                   });
                });
                $('.declineAction').each(function(){
                    var _this = $(this);


                   _this.on('click',function(){
                    var propId = _this.parent().find('.propId').val();
                    var reservationId = _this.parent().find('.reservationId').val();
                        $.ajax({
                            type: 'POST',
                            url: 'ajaxFunctions.php',
                            data: {
                                'declined' : propId,
                                'reservationId' : reservationId
                            },
                            dataType: 'json',
                            success: function(data){

                               if(data.result){
                                alert("Status Updated Wait for the page to reload.");
                                    setTimeout(function(){// wait for 5 secs(2)
                                        location.reload(); // then reload the page.(3)
                                    }, 3000);
                               } else {
                                 alert("Error Occurred Please Try again later.");
                               }
                            }
                        });
                   });
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