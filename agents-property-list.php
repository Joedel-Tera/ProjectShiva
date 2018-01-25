<?php 
session_start();
require_once('db.php');
include 'headertop.php';



if(isset($_GET['id'])){
	$agentId = $_GET['id'];
    $sql = "SELECT id,first_name, middle_name, last_name, address, bday, age, gender, contact_number, email_info, landline, email, password, avatar, date_created FROM agents WHERE id = $agentId";
    $result = $mysqli->query($sql);
    $agentData = mysqli_fetch_assoc($result);
} else {
	Header("Location: agents.php");
}

if(isset($_SESSION['alert'])){
	echo "<script type='text/javascript'>alert('Payment Information Submitted!')</script>";
}
unset($_SESSION['alert']);
?>



<body>

<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
	<h2> <?php echo $agentData['first_name'].' '.$agentData['last_name']; ?> Property Listings</h2>
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
									<img src="<?php echo $row['featured']; ?>" class="img-responsive" alt="properties" style="height:190px;">
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
							<?php if($row['status'] == 0) { ?>
							<a class="btn btn-primary" href="property-detail.php?id=<?php echo $row['id'] ?>">View Details</a>
							<?php } else if ($row['status'] == 3) { ?>
								<?php 
									$reservedBy = "SELECT * FROM property_reservations WHERE property_id = ".$row['id'];
									$getRes = $mysqli->query($reservedBy);
									$myRow = mysqli_fetch_assoc($getRes);
									if($myRow['user_id'] == $_SESSION['id']){
								?>
									<?php if($myRow['reservation_status'] == 'APPROVED') { ?> 
									<button class="btn btn-default" disabled> Reserved By Me </button> 
									<?php } else if ($myRow['reservation_status'] == '') { ?>
									<input type="hidden" class="propertyId" value="<?php echo $row['id']; ?>">
									<button class="btn btn-primary payFee"> Pay Reservation Fee </button>
									<?php } ?>
								<?php } else { ?>
									<button class="btn btn-default" disabled> Already Reserved </button>
								<?php } ?>
							<?php } else { ?>
							<button class="btn btn-default" disabled> No Longer Available </button>
							<?php } ?>
							
							
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
	
<div id="showPaymentForm" class="modal fade" role="dialog">
	<div class="modal-dialog" style="top:15%;">
		<div class="modal-content">
			<div class="modal-header">
				<h4 style="display:inline;"> Payment Reservation Information </h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<div class="row">
						<div class="col-md-12">
							<form method="post" action="payment-process.php">
								<div class="form-group">
				                    <label for="agentName" class="col-sm-3 col-sm-offset-2 control-label">Agent Name:</label>
				                    <div class="col-sm-6">
				                    	
				                        <input type="text" name="agentName" class="form-control" value="<?php echo $agentData['first_name'].' '.$agentData['last_name']; ?>" readonly>
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label for="agentName" class="col-sm-3 col-sm-offset-2 control-label"> Payment Reference No:</label>
				                    <div class="col-sm-6">
				                        <input type="text" name="paymentReference" class="form-control" required>
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label for="agentName" class="col-sm-3 col-sm-offset-2 control-label"> Amount </label>
				                    <div class="col-sm-6">
				                        <input type="text" name="amount" class="form-control" placeholder="Reservation Fee" required>
				                    </div>
				                </div>
				                <div class="form-group">
				                	<div class="col-sm-6 col-sm-offset-3">
				                		<input type="hidden" name="agentId" value="<?php echo $agentData['id']; ?>">
				                		<input type="hidden" id="propertyId" name="propertyId" value="<?php echo $row['id']; ?>">
				                		<input type="hidden" name="userId" value="<?php echo $_SESSION['id']; ?>">
				                		<button type="submit" class="btn btn-primary" name="paymentDetails"> Submit Transaction </button>
				                	</div>
				                </div>
							</form>
						</div>
					</div>			
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$('.payFee').each(function(){
		var _this = $(this);
		_this.on('click', function(){
			var propId = _this.parent().find('.propertyId').val();
			$('#propertyId').val(propId);
			$('#showPaymentForm').modal('show');
		});
	});
</script>	
</body>

<?php include'footer.php';?>