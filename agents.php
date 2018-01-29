<?php 
session_start();
require_once'db.php';
include'headertop.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Housefinder</title>
    
    <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
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
            $sql = "SELECT id,first_name, middle_name, last_name, address, bday, age, gender, contact_number, email_info, landline, email, password, avatar, date_created FROM agents";
            $result = $mysqli->query($sql); 
        
    ?>
  <?php while($row = $result->fetch_assoc()){  ?>
<div class="row">
  <div class="col-lg-8  col-lg-offset-2 col-sm-12">
      <!-- agents -->
      <div class="row">
        <div class="col-lg-3 col-sm-2 "><img alt="User Pic" src="<?php echo $row['avatar']; ?>" id="profile-image1" class="img-circle img-responsive"></div>
        <div class="col-lg-5 col-sm-7 "><h4><?php echo "".$row['first_name']."" ?>&nbsp<?php echo "".$row['last_name']."" ?></h4>
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
        <div class="col-lg-4 col-sm-3 ">
            <span class="glyphicon glyphicon-envelope"></span> 
            <a href="mailto:<?php $row['email_info']; ?>">
                <?php
                    if($row['email_info'] == ""){
                        echo '<i style="font-size: 15px;">No information to display</i>';
                    }else{ 
                        echo $row['email_info']; 
                    } 
                ?>
            </a>
            <br>

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