<?php include'headertop.php';?>

<?php 
require_once('db.php');
?>

<html>
	<head>

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
	
		
		<style>


		</style>
	</head>

<body>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
	<h2>Buy, Sell & Rent</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">

  <div class="search-form"><h4><span class="glyphicon glyphicon-search"></span>Search For</h4>
			<form action="" method="get">
			<div class="ui-widget">
		  <input id="LocationId" name="query" type="search" class="form-control" placeholder="Location" value="">
				</div>
		<div class="row">
			<div class="col-lg-5">
			  <select name="property_type" class="form-control">
				<option disabled selected>Type</option>
				<option>For Sale</option>
				<option>For Rent</option>
			  </select>
			</div>
			 <div class="col-lg-6 col-sm-7">
			  <select name="min_price" id="minPriceId" class="form-control">
				<option disabled selected>Min Price</option>
				<option value="100000">₱ 100,000</option>
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
			 <div class="col-lg-7 col-sm-7">
			  <select name="max_price" id="maxPriceId" class="form-control">
				<option disabled selected>Max Price</option>
		  		<option value="100000">₱ 100,000</option>
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
			$sql = "SELECT id, price, property_title, location, featured FROM properties LIMIT 5";
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
	<div id="row" class="row">  
<?php
	/** Added 01-17-17
	 *  Fix error for empty Query going into search_results.php page.
	 *  Fix Search fields.
	 *  Tsumiii
	 *  Start Fix
	 */
	$param1 = '';
	$param2 = '';
	$param3 = '';
	$param4 = '';
	$param5 = '';
	$isSearch = false;


	foreach($_GET as $name => $value){
		if($name == 'query'){
			$param1 = $_GET['query'];
			$isSearch = true;
		} else if ($name == 'property_type') {
			$param2 = $_GET['property_type'];
			$isSearch = true;
		} else if ($name == 'min_price') {
			$param3 = $_GET['min_price'];
			$isSearch = true;
		} else if ($name == 'max_price') {
			$param4 = $_GET['max_price'];
			$isSearch = true;
		} else if ($name == 'property_category') {
			$param5 = $_GET['property_category'];
			$isSearch = true;
		}
	}

	if($isSearch){
		$sqlSearch = "SELECT * FROM properties WHERE status = 0 AND ";

		if($param1 != ''){
			$sqlSearch .= "location LIKE '%".$param1."%' ";
		}

		if($param2 != '' && $param1 != ''){
			$sqlSearch .= "AND property_type = '".$param2."' ";
		} else if ($param2 != '' && $param1 == '') {
			$sqlSearch .= "property_type = '".$param2."' ";
		}

		if($param3 != '' && $param4 != '' && $param2 != '' && $param1 != ''){
			$sqlSearch .= "AND price >= $param3 AND price <= $param4 ";
		} else if ($param3 != '' && $param4 != '' && $param2 == '' && $param1 == '') {
			$sqlSearch .= "price >= $param3 AND price <= $param4 ";
		} else if ($param3 == '' && $param4 != '' && $param2 == '' && $param1 == '') {
			$sqlSearch .= "price <= $param4 ";
		} else if ($param3 != '' && $param4 == '' && $param2 == '' && $param1 == '') {
			$sqlSearch .= "price >= $param3 ";
		} else if ($param3 == '' && $param4 != '' && $param2 != '' && $param1 == '') {
			$sqlSearch .= "AND price <= $param4 ";
		} else if ($param3 != '' && $param4 == '' && $param2 != '' && $param1 == '') {
			$sqlSearch .= "AND price >= $param3 ";
		} else if ($param3 == '' && $param4 != '' && $param2 == '' && $param1 != '') {
			$sqlSearch .= "AND price <= $param4 ";
		} else if ($param3 != '' && $param4 == '' && $param2 == '' && $param1 != '') {
			$sqlSearch .= "AND price >= $param3 ";
		}

		if($param5 != '' && $param3 != '' && $param4 != '' && $param2 != '' && $param1 != '' ||
			$param5 != '' && $param3 != '' && $param4 != '' && $param2 != '' && $param1 == '' ||
			$param5 != '' && $param3 != '' && $param4 != '' && $param2 == '' && $param1 == '' ||
			$param5 != '' && $param3 != '' && $param4 == '' && $param2 == '' && $param1 == '' ||
			$param5 != '' && $param3 == '' && $param4 != '' && $param2 == '' && $param1 == '' ||
			$param5 != '' && $param3 == '' && $param4 == '' && $param2 != '' && $param1 == '' || 
			$param5 != '' && $param3 == '' && $param4 == '' && $param2 == '' && $param1 != '' || 
			$param5 != '' && $param3 != '' && $param4 == '' && $param2 != '' && $param1 == '' ||
			$param5 != '' && $param3 != '' && $param4 != '' && $param2 == '' && $param1 != '' ||
			$param5 != '' && $param3 != '' && $param4 == '' && $param2 != '' && $param1 != '' ) {
			$sqlSearch .= "AND property_category = '".$param5."' ";
		} else if ($param5 != '' && $param3 == '' && $param4 == '' && $param2 == '' && $param1 == '') {
			$sqlSearch .= "property_category = '".$param5."' ";
		}

		$raw_results = mysqli_query($mysqli, $sqlSearch) or die(mysqli_error($mysqli));

		if(mysqli_num_rows($raw_results) > 0){ 
			while($row = mysqli_fetch_array($raw_results)){
	
	/*
	 * End Fix
	 */
	
?>
	<div class="col-lg-3 col-sm-3">
		<div class="properties">
			<a href="property-detail.php?id=<?php echo $row['id'] ?>"> 
				<div class="image-holder">
					<img style="height: 160px; width: 170px;" src="<?php echo $row['featured']; ?>" class="img-responsive" alt="properties">
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

<div class="col-lg-9 col-sm-8">    
	<div id="row" class="row">          
		<div class="col-lg-4 col-sm-4">
			<h3>No Results :(</h3>
		</div>
	</div>
</div>

<?php  } } ?>

			   </div>
			</div>  
		</div>
	</div>
</div>
	
	
	</body>
</html>

<?php include'footer.php';?>