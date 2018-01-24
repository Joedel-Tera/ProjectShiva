

<?php 
require 'db.php';
?>

<?php
session_start();
if(!$_SESSION["email"])
{
    //Do not show protected data, redirect to login...
    header('Location: login_page.php');
}
?>
<html>
    <head>
<!--    <link rel="stylesheet" href="jquery.dataTables.min.css" />-->
<!--
  <link rel="stylesheet" href="css/jquery-ui.css">   
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
-->

    <script>
//  $( function() {
//    var availableTags = [
//        "Cavite",
//        "Bacoor, Cavite",
//        "Manila City, Metro Manila",
//        "Imus, Cavite",
//        "Dasmariñas, Cavite",
//        "General Trias, Cavite",
//        "Tagaytay City, Cavite",
//        "Kawit, Cavite"
//    ];
//    $( "#tags" ).autocomplete({
//      source: availableTags
//    });
//  } );
  </script>
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
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            
            <div style="margin-right: 50px;" class="navbar-collapse  collapse">
                <nav class="shift">
              <ul class="nav navbar-nav navbar-left">
               <li class="active"><a href="index.php">Home</a></li>
                <li class="active"><a href="about.php">About</a></li>
                <li class="active"><a href="agents.php">Agents</a></li>
                <li class="active"><a href="buysalerent-logged-in.php">Browse</a></li>
                <li class="active"><a href="contact.php">Contact</a></li>      
              </ul>
                </nav>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->

<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="index.php"><img style="margin-top: -30px;" src="images/logo2.png" alt="Housefinder"><img style="margin-top: 50px; margin-left: -210px; margin-bottom: -20px;" src="images/title.png"></a>

</div>
<!-- #Header Starts -->
</div>

<div class="container">
  <div class="dropdown">

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
            <form action="search_results.php" method="get">
            <div class="ui-widget">
          <input id="tags" type="search" name="query" class="form-control" placeholder="Location" required>
                </div>
        <div class="row">
            <div class="col-lg-5">
              <select name="property_category" class="form-control">
                <option disabled selected>Type</option>
                <option>House and Lot</option>
                <option>Condominium</option>
                <option>Apartment</option>
              </select>
            </div>
             <div class="col-lg-6 col-sm-7">
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
             <div class="col-lg-7 col-sm-7">
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
            $sql = "SELECT * FROM properties ORDER BY id desc";
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
        Date Submitted: <?php echo $row['date_created']; ?></p>
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