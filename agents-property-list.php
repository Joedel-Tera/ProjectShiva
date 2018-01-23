<?php 

require_once('db.php');
session_start();




if(isset($_GET['id'])){
	$agentId = $_GET['id'];
    $sql = "SELECT id,first_name, middle_name, last_name, address, bday, age, gender, contact_number, email_info, landline, email, password, avatar, date_created FROM agents WHERE id = $agentId";
    $result = $mysqli->query($sql);
    $row = mysqli_fetch_assoc($result);
} else {
	Header("Location: agents.php");
}

include 'headertop.php';

?>

<body>

<?php if(isset($_SESSION['first_name'])) { ?> 
<!-- #Header Starts -->
      
<div class="container">
    <div class="dropdown" style="z-index:11;">

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
<?php } ?>

<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
	<h2> <?php echo $row['first_name'].' '.$row['last_name']; ?> Property Listings</h2>
</div>
</div>
<!-- banner -->


<div class="container">
	<div class="properties-listing spacer">
		<div class="row">
	
			<div class="col-lg-12 col-sm-8"> 
				<div id="row" class="row">
					<?php
						$propertySql = "SELECT * FROM properties WHERE agent_id = $agentId";
						$raw_results = $mysqli->query($propertySql);
						if(mysqli_num_rows($raw_results) > 0){
							while($row = mysqli_fetch_array($raw_results)){
					?>  
					<div class="col-lg-3 col-sm-3">
						<div class="properties">
							<a href="property-detail.php?id=<?php echo $row['id'] ?>"> 
								<div class="image-holder">
									<img src="<?php echo $row['featured']; ?>" class="img-responsive" alt="properties">
								</div>
								<?php $row['id'] ?>
								<h4><?php echo $row['property_title']; ?></h4>
							</a>
							<p class="price">Price: ₱<?php echo $row['price']; ?>
							<br>
							<?php echo $row['property_category']; ?>
							<br>
							<?php echo $row['location']; ?>
							<br>
							Uploaded by: <?php echo $row['first_name']; ?>
							<br>
							Date Submitted: <?php echo $row['date_created']; ?></p>
							<a class="btn btn-primary" href="property-detail.php?id=<?php echo $row['id'] ?>">View Details</a>
							
						</div>
					</div>
					<?php } } else { ?>     
						<div class="col-lg-12 col-sm-4" style="text-align:center;">
							<h2> This Agent hasn't Submitted Any Property Yet. </h2>
						</div>
					<?php } ?>
		  		</div>
			</div>  
			
		</div>
	</div>
</div>
	
	
</body>

<?php include'footer.php';?>