<?php 
session_start();
require 'db.php';
include 'headertop.php';

if(isset($_SESSION['alert'])){
	echo "<script type='text/javascript'>alert('Successfully Reserved!')</script>";
}
unset($_SESSION['alert']);
?>

<html>
	<head>
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
		});
		
		</script>
	</head>

<body>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
	<h2> Buy, Sell & Rent </h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">

<div class="search-form"><h4><span class="glyphicon glyphicon-search"></span>Search For</h4>
	<form action="search_results.php" method="get">
		<div class="ui-widget">
			<input id="tags" type="search" name="query" class="form-control" placeholder="Location" required>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<select name="property_type" class="form-control">
					<option disabled selected>Type</option>
					<option>For Sale</option>
					<option>For Rent</option>
				</select>
			</div>
			<div class="col-lg-6">
				<select name="min_price" class="form-control">
					<option disabled selected>Min Price</option>
					<option value="250000">₱ 250,000</option>
					<option value="500000">₱ 500,000</option>
					<option value="750000">₱ 750,000</option>
					<option value="1000000">₱ 1,000,000</option>
					<option value="1100000">₱ 1,100,000</option>
					<option value="1200000">₱ 1,200,000</option>
					<option value="1300000">₱ 1,300,000</option>
					<option value="1400000">₱ 1,400,000</option>
					<option value="1500000">₱ 1,500,000</option>
					<option value="1600000">₱ 1,600,000</option>
					<option value="1700000">₱ 1,700,000</option>
					<option value="180000">₱ 1,800,000</option>
					<option value="1850000">₱ 1,850,000</option>
					<option value="1900000">₱ 1,900,000</option>
					<option value="1950000">₱ 1,950,000</option>
					<option value="2000000">₱ 2,000,000</option>
					<option value="2050000">₱ 2,050,000</option>
					<option value="2100000">₱ 2,100,000</option>
					<option value="2150000">₱ 2,150,000</option>
					<option value="2200000">₱ 2,200,000</option>
					<option value="2300000">₱ 2,300,000</option>
					<option value="2350000">₱ 2,350,000</option>
					<option value="2400000">₱ 2,400,000</option>
					<option value="2450000">₱ 2,450,000</option>
					<option value="2500000">₱ 2,500,000</option>
					<option value="2550000">₱ 2,550,000</option>
					<option value="2600000">₱ 2,600,000</option>
					<option value="2650000">₱ 2,650,000</option>
					<option value="2700000">₱ 2,700,000</option>
					<option value="2800000">₱ 2,800,000</option>
					<option value="2850000">₱ 2,850,000</option>
					<option value="2900000">₱ 2,900,000</option>
					<option value="2950000">₱ 2,950,000</option>
					<option value="3000000">₱ 3,000,000</option>
					<option value="3050000">₱ 3,050,000</option>
					<option value="3100000">₱ 3,100,000</option>
					<option value="3150000">₱ 3,150,000</option>
					<option value="3200000">₱ 3,200,000</option>
					<option value="3250000">₱ 3,250,000</option>
					<option value="3300000">₱ 3,300,000</option>
					<option value="3350000">₱ 3,350,000</option>
					<option value="3400000">₱ 3,400,000</option>
					<option value="3450000">₱ 3,450,000</option>
					<option value="3500000">₱ 3,500,000</option>
					<option value="3550000">₱ 3,550,000</option>
					<option value="3600000">₱ 3,600,000</option>
					<option value="3650000">₱ 3,650,000</option>
					<option value="3700000">₱ 3,700,000</option>
					<option value="3750000">₱ 3,750,000</option>
					<option value="3800000">₱ 3,800,000</option>
					<option value="3850000">₱ 3,850,000</option>
					<option value="3900000">₱ 3,900,000</option>
					<option value="3950000">₱ 3,950,000</option>
					<option value="4000000">₱ 4,000,000</option>
					<option value="4100000">₱ 4,100,000</option>
					<option value="4200000">₱ 4,200,000</option>
					<option value="4300000">₱ 4,300,000</option>
					<option value="4400000">₱ 4,400,000</option>
					<option value="4500000">₱ 4,500,000</option>
					<option value="5000000">₱ 5,000,000</option>
					<option value="5500000">₱ 5,500,000</option>
					<option value="6000000">₱ 6,000,000</option>
					<option value="7000000">₱ 7,000,000</option>
					<option value="8000000">₱ 8,000,000</option>
					<option value="10000000">₱ 10,000,000</option>
					<option value="20000000">₱ 20,000,000</option>
				</select>
			</div>
			<div class="col-lg-6">
				<select name="max_price" class="form-control">
					<option disabled selected>Max Price</option>
					<option value="250000">₱ 250,000</option>
					<option value="500000">₱ 500,000</option>
					<option value="750000">₱ 750,000</option>
					<option value="1000000">₱ 1,000,000</option>
					<option value="1100000">₱ 1,100,000</option>
					<option value="1200000">₱ 1,200,000</option>
					<option value="1300000">₱ 1,300,000</option>
					<option value="1400000">₱ 1,400,000</option>
					<option value="1500000">₱ 1,500,000</option>
					<option value="1600000">₱ 1,600,000</option>
					<option value="1700000">₱ 1,700,000</option>
					<option value="180000">₱ 1,800,000</option>
					<option value="1850000">₱ 1,850,000</option>
					<option value="1900000">₱ 1,900,000</option>
					<option value="1950000">₱ 1,950,000</option>
					<option value="2000000">₱ 2,000,000</option>
					<option value="2050000">₱ 2,050,000</option>
					<option value="2100000">₱ 2,100,000</option>
					<option value="2150000">₱ 2,150,000</option>
					<option value="2200000">₱ 2,200,000</option>
					<option value="2300000">₱ 2,300,000</option>
					<option value="2350000">₱ 2,350,000</option>
					<option value="2400000">₱ 2,400,000</option>
					<option value="2450000">₱ 2,450,000</option>
					<option value="2500000">₱ 2,500,000</option>
					<option value="2550000">₱ 2,550,000</option>
					<option value="2600000">₱ 2,600,000</option>
					<option value="2650000">₱ 2,650,000</option>
					<option value="2700000">₱ 2,700,000</option>
					<option value="2800000">₱ 2,800,000</option>
					<option value="2850000">₱ 2,850,000</option>
					<option value="2900000">₱ 2,900,000</option>
					<option value="2950000">₱ 2,950,000</option>
					<option value="3000000">₱ 3,000,000</option>
					<option value="3050000">₱ 3,050,000</option>
					<option value="3100000">₱ 3,100,000</option>
					<option value="3150000">₱ 3,150,000</option>
					<option value="3200000">₱ 3,200,000</option>
					<option value="3250000">₱ 3,250,000</option>
					<option value="3300000">₱ 3,300,000</option>
					<option value="3350000">₱ 3,350,000</option>
					<option value="3400000">₱ 3,400,000</option>
					<option value="3450000">₱ 3,450,000</option>
					<option value="3500000">₱ 3,500,000</option>
					<option value="3550000">₱ 3,550,000</option>
					<option value="3600000">₱ 3,600,000</option>
					<option value="3650000">₱ 3,650,000</option>
					<option value="3700000">₱ 3,700,000</option>
					<option value="3750000">₱ 3,750,000</option>
					<option value="3800000">₱ 3,800,000</option>
					<option value="3850000">₱ 3,850,000</option>
					<option value="3900000">₱ 3,900,000</option>
					<option value="3950000">₱ 3,950,000</option>
					<option value="4000000">₱ 4,000,000</option>
					<option value="4100000">₱ 4,100,000</option>
					<option value="4200000">₱ 4,200,000</option>
					<option value="4300000">₱ 4,300,000</option>
					<option value="4400000">₱ 4,400,000</option>
					<option value="4500000">₱ 4,500,000</option>
					<option value="5000000">₱ 5,000,000</option>
					<option value="5500000">₱ 5,500,000</option>
					<option value="6000000">₱ 6,000,000</option>
					<option value="7000000">₱ 7,000,000</option>
					<option value="8000000">₱ 8,000,000</option>
					<option value="10000000">₱ 10,000,000</option>
					<option value="20000000">₱ 20,000,000</option>
				</select>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<select class="form-control" id="propertyCatId" name="property_category">
					<option disabled selected>Property</option>
					<option>Condominium</option>
					<option>Apartment</option>
					<option>House and Lot</option>
				</select>
			</div>
		</div>
		<button type="submit" name="btn_find" class="btn btn-primary">Find Now</button>
	</form>
</div>

		<?php 
			$sql = "SELECT id, price, property_title, location, featured FROM properties WHERE status = 0 LIMIT 5";
			$result = $mysqli->query($sql); 
		?>      
  <h4>New Properties</h4>  
 <?php while($row = $result->fetch_assoc()){  ?>
<div class="hot-properties hidden-xs">

<div class="row">
				<div class="col-lg-4 col-sm-5"><img src="<?php echo $row['featured']; ?>" class="img-responsive img-circle" alt="properties"></div>
				<div class="col-lg-8 col-sm-7">
				  <h5><a href="property-detail.php?id=<?php echo $row['id'] ?>"><?php echo $row['property_title']; ?></a></h5>
				  <p class="price">Price: ₱<?php echo $row['price']; ?></p>
				  <p class="price">Location: <?php echo $row['location']; ?></p> </div>
			  </div>

</div>
<?php } ?>

</div>

<div class="col-lg-9 col-sm-8">
	
		<?php 
			$i=1;
			$sql = "SELECT * FROM properties WHERE status = 0 ORDER BY id desc";
			$result = $mysqli->query($sql); 
		?>      

	  <div id="row" class="row">
<?php while($row = $result->fetch_assoc()){  ?>
<?php $i; ?>
		<div class="col-lg-3 col-sm-3">
		<div class="properties">
			
	   <a href="property-detail.php?id=<?php echo $row['id'] ?>"> <div class="image-holder"><img style="height: 150px; width: 170px;" src="<?php echo $row['featured']; ?>" class="img-responsive" alt="properties">
		</div>
		<?php $row['id'] ?>
		<h4><?php echo $row['property_title']; ?></h4></a>
		<p class="price">Price: ₱<?php echo $row['price']; ?>
		<br>
		<?php echo $row['property_category']; ?>
		<br>
		<?php echo $row['location']; ?>
		<br>
		Uploaded by: <?php echo $row['first_name']; ?>
		<br>
		Date Posted: <?php echo $row['date_created']; ?></p>
		<a class="btn btn-primary" href="property-detail.php?id=<?php echo $row['id'] ?>">View Details</a>
		</div>
		</div>
<?php $i++; } ?>
	  </div>



</div>
</div>
</div>
</div>
	
 <script>

	</script>
	
	
<!--
<script type="text/javascript" src="jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function(){
	$('#myTable').DataTable({
		"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
	});
	});
</script>
-->

	</body>
</html>

<?php include'footer.php';?>