<?php 
session_start();
include 'headertop.php';
require 'db.php';


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
    
    
<div class="inside-banner">
    <div class="container"> 
        <h2> Edit Profile </h2>
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