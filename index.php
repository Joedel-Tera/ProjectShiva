<?php
require_once 'db.php';
include 'headertop.php';
session_start();
  if(isset($_SESSION["email"]))
  {
      header('Location: index-logged-in.php');
  }
?>
<html>
    <head>
          <link rel="stylesheet" href="css/jquery-ui.css">
          <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <style>
            body{
              font-family: 'Titillium Web', sans-serif;
            }
        </style>
<!--
        <style>
       #return-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.7);
    width: 50px;
    height: 50px;
    display: block;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    display: none;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top i {
    color: #fff;
    margin: 0;
    position: relative;
    left: 16px;
    top: 13px;
    font-size: 19px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top:hover {
    background: rgba(0, 0, 0, 0.9);
}
#return-to-top:hover i {
    color: #fff;
    top: 5px;
}


        </style>
-->

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
        "Kawit, Cavite",
        "New York, Cavite"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script>

    </head>
<br>
<body>
<div class="banner-search">
  <div class="container">

    <!-- banner -->
    <h3>Search For Rent & For Sale Properties</h3>
    <div class="searchbar">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
        <form action="search_results.php" method="get">
            <div style="width: 440px;" class="ui-widget">
          <input id="tags" name="query" type="text" class="form-control" placeholder="Location" required>
            </div>
          <button style="width: 100px; margin-top: -97px; margin-left: 450px;" type="submit" name="btn_find" class="btn btn-success">Find Now</button>
          <div style="margin-top: -20px;" class="row">
            <div class="col-lg-3 col-sm-3 ">
              <select name="property_category" class="form-control">
                <option disabled selected>Type</option>
                <option>House and Lot</option>
                <option>Condominium</option>
                <option>Apartment</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
              <select name="min_price" class="form-control">
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
                <option value="1800000">₱ 1,800,000</option>
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
             <div class="col-lg-3 col-sm-4">
              <select name="max_price" class="form-control">
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
                <option value="1800000">₱ 1,800,000</option>
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
<!--
              <div class="col-lg-3 col-sm-4">
              <button class="btn btn-success"  onclick="window.location.href='buysalerent.php'">Find Now</button>
              </div>
-->
          </div>
            </form>
        </div>
        <div style="margin-top: -20px;" class="col-lg-5 col-lg-offset-1 col-sm-7 ">
          <h3>Join today and get updated with the properties near you!</h3>
            <a href="login_page.php"><button class="btn btn-info">Login</button></a>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="">


            <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">

          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
                <h2><a href="buysalerent.php">Find Property For Sale or For Rent!</a></h2>
              <blockquote>
              <p class="location">Are you a Real Estate Broker, Real Estate Agency or Real Estate Developer and want to place your listing here? Contact us <a href="contact.php">here.</a></p>

              </blockquote>
            </div>
          </div>

          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2"></div>
              <h2><a href="#"></a></h2>
              <blockquote>
              <p class="location"> </p>

              </blockquote>
            </div>
          </div>

          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-3"></div>
              <h2><a href="#"></a></h2>
              <blockquote>
              <p class="location"></p>

              </blockquote>
            </div>
          </div>

          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-4"></div>
              <h2><a href="#"></a></h2>
              <blockquote>
              <p class="location"></p>

              </blockquote>
            </div>
          </div>

          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-5"></div>
              <h2><a href="#"></a></h2>
              <blockquote>
              <p class="location"></p>

              </blockquote>
            </div>
          </div>
        </div><!-- /sl-slider -->



        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>
      </div><!-- /slider-wrapper -->
</div>


        <?php
            $i=1;
            $sql = "SELECT * FROM properties ORDER BY id desc LIMIT 7";
            $result = $mysqli->query($sql);
        ?>
<!-- banner -->
<div class="container">
  <div class="properties-listing spacer"> <a href="buysalerent.php" class="pull-right viewall">View All Listing</a>
    <h2>Featured Properties</h2>

    <div id="owl-example" class="owl-carousel">
<?php while($row = $result->fetch_assoc()){  ?>
<?php $i; ?>
      <div class="properties">
        <div class="image-holder"><img style= "height:170px; width: 200px" src="<?php echo $row['featured']; ?>" class="img-responsive" alt="properties"/>
        </div>

        <h4><a href="property-detail.php?id=<?php echo $row['id'] ?>"><?php echo $row['property_title']; ?></a></h4>
        <p class="price">Price: ₱<?php echo $row['price']; ?>
        <br>
        <?php echo $row['property_category']; ?>
        <br>
        <?php echo $row['location']; ?>
        <br>
        Uploaded by: <?php echo $row['first_name']; ?></p>
        <a class="btn btn-primary" href="property-detail.php?id=<?php echo $row['id'] ?>">View Details</a>
      </div>

<?php $i++; } ?>

    </div>
  </div>
  <div class="spacer">
    <div class="row">
      <div class="col-lg-6 col-sm-9 recent-view">
        <h3>About Us</h3>
        <p style="text-align: justify;">HouseFinder is A Web-based House Information System. It is proposed by Rustine Louise Agbayani and Reuben Derick Llanes, 4th year students currently taking up Bachelor of Science in Information Technology from University of Perpetual Help - Molino. The focus of this research project is basically managing housing for low income, medium and high incomes households or what is commonly known as affordable housing. “Affordable” is a term used to describe individuals’ capability to pay for certain products or services because their income is enough to do so. Although the term “affordable housing” is often applied to rental housing; that is within the financial means of those in the lower income ranges of a geographical area, the concept is applicable to both middle and high-income individuals.<br><a href="about.php">Learn More</a></p>

      </div>

        <?php
            $i=1;
            $sql = "SELECT * FROM properties ORDER BY id asc LIMIT 3";
            $result = $mysqli->query($sql);
        ?>
      <div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
        <h3>Recommended Properties</h3>
        <div id="myCarousel" class="carousel slide">

          <!-- Carousel items -->
<?php while($row = $result->fetch_assoc()){  ?>
<?php $i; ?>
          <div class="carousel-inner">
            <div class="item active">
              <div class="row">
                <div class="col-lg-4"><img style= "height:100px; width: 150px;" src="<?php echo $row['featured']; ?>" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5><a href="property-detail.php?id=<?php echo $row['id'] ?>"><?php echo $row['property_title']; ?></a></h5>
                  <p class="price">Price: ₱<?php echo $row['price']; ?></p>
                  <a href="property-detail.php?id=<?php echo $row['id'] ?>" class="more">More Detail</a> </div>
              </div><br>
            </div>

          </div>
<?php $i++; } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!--
    <a href="javascript:" id="return-to-top"><i class="glyphicon glyphicon-chevron-up"></i></a>

    <script>
  // ===== Scroll to Top ====
  $(window).scroll(function() {
      if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
          $('#return-to-top').fadeIn(200);    // Fade in the arrow
      } else {
          $('#return-to-top').fadeOut(200);   // Else fade out the arrow
      }
  });
  $('#return-to-top').click(function() {      // When arrow is clicked
      $('body,html').animate({
          scrollTop : 0                       // Scroll to top of body
      }, 500);
  });
    </script>
-->
    </body>
</html>


<?php include'footer.php';?>
