<?php
require_once 'db.php'; 
?>

<?php
session_start();

if(!$_SESSION["email"])
{
    //Do not show protected data, redirect to login...
    header('Location: agent_login_page.php');
}
?>


<html>
<head>
            <title>Add Property</title>
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
        #map-canvas { height:400px;width: 100%; }
        *[role="form"] {
            max-width: 530px;
            padding: 15px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 0.3em;
        }

        *[role="form"] h2 {
            margin-left: 5em;
            margin-bottom: 1em;
        }

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
    <nav class="navbar navbar-fixed-top">
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div style="height: 50px;" class="navbar-header">


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
               <li class="active"><a href="agent-index.php">Home</a></li>
                <li class="active"><a href="agent-about.php">About</a></li>
                <li class="active"><a href="agent-agents.php">Agents</a></li>
                <li class="active"><a href="agent-blog.php">Blog</a></li>
                <li class="active"><a href="agent-contact.php">Contact</a></li>      
              </ul>
                </nav>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>
  <div class="dropdown">

    <button style="background-color: #000; font-color: white; float: right; margin-top: -54px; margin-right: 20px;" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
     <?php echo "<span style='color: #FFF;'> ".$_SESSION["first_name"]." </span>" ?>
        
        &nbsp;&nbsp;
        <span class="caret white"></span>
      </button>
    <ul style="margin-top: -22px; margin-left: 1170px;" class="dropdown-menu">
      <li class="dropdown-header">Account Settings</li>
      <li><a style="text-transform: capitalize;" href="edit-profile.php">Manage Account</a></li>
      <li class="divider"></li>
      <li class="dropdown-header">Done browsing?</li>
      <li><a style="text-transform: capitalize;" href="logout.php">Logout</a></li>
    </ul>
  </div>
    </div>
        
        
     </nav> 
    <br>
    <br>
    
<!-- #Header Starts -->

<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="agent-index.php"><img style="margin-top: -30px;" src="images/logo2.png" alt="Housefinder"><img style="margin-top: 50px; margin-left: -210px; margin-bottom: -20px;" src="images/title.png"></a>

</div>
<!-- #Header Starts -->
</div>

        <div class="inside-banner">
            <div class="container"> 
                <h2>Dashboard</h2>
            </div>
        </div>

    <body>
<div class="container">
<div class="spacer">
<div class="row">
          <span class="pull-left"><a href="agent-panel-profile.php">My Profile</a> &nbsp>&nbsp My Listings &nbsp>&nbsp <a href="agent-panel-reservations.php">My Reservations</a> &nbsp>&nbsp <a href="agent-panel-messages.php">My Messages</a> </span>
    <br>
    <br><br>
             <div style="overflow-x: hidden;" class="row">
              <div class="panel panel-default">

               <div class="panel-body">
                   
              <div class="col-md-5 col-xs-5 col-sm-6 col-lg-6" >
                  <div class="container" >
                    <blockquote style="background-color: #ddd;"><h3>My Listings</h3></blockquote>
                  </div>

                  <form method="post" action="property-process.php" enctype="multipart/form-data">
                   <h2>Add Property</h2><br>
                   
                 <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Type:</label>
                    <div class="col-sm-9">
                        <select name="property_type" id="property_type" class="form-control" required>
                            <option selected disabled>Select type...</option>
                            <option value="For Rent">For Rent</option>
                            <option value="For Sale">For Sale</option>
                        </select>
                    </div>
                </div>            
                <div class="form-group">
                    <label class="col-sm-3 control-label">Category:</label>
                    <div class="col-sm-9">
                        <select name="property_category" id="property_category" class="form-control" required>
                            <option selected disabled>Select category...</option>
                            <option value="House and Lot">House and Lot</option>
                            <option value="Condominium">Condominium</option>
                            <option value="Apartment">Apartment</option>
                        </select>
                    </div>
                </div> 
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Location:</label>
                    <div class="col-sm-9">
                        <input type="text" name="location" id="location" placeholder="eg. Bacoor City, Cavite" class="form-control" autofocus required>
                    </div>
                </div>
<!--                 <div class="form-group">
                    <label class="col-sm-3 control-label">Postal Code:</label>
                    <div class="col-sm-9">
                        <input type="text" name="postal" id="postal" oninput="this.value=this.value.replace(/[^0-9]/g,'');" minlength="4" maxlength="4" placeholder="Postal Code" class="form-control" required>
                    </div>
                </div>
 -->                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Price:</label>
                    <div class="col-sm-9">
                        <input type="text" name="price" id="price" oninput="this.value=this.value.replace(/[^0-9]/g,'');" placeholder="Price" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                     <div style="margin-left: 140px;" class="checkbox">
                         Price negotiable?
                        <label class="col-sm-12 control-label">
                            <input type="radio" id="check" name="negotiable" value="Yes">
                           Yes
                        </label> 
                         <label style="margin-bottom: 20px;" class="col-sm-12 control-label">
                            <input type="radio" id="check" name="negotiable" value="No">
                           No
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Property Size:</label>
                    <div class="col-sm-9">
                        <input type="text" name="property_size" id="property_size" oninput="this.value=this.value.replace(/[^0-9]/g,'');" placeholder="Floor Area" class="form-control" required>
                    </div>
                </div>    
                <div class="form-group">
                    <label class="col-sm-3 control-label">Property Title:</label>
                    <div class="col-sm-9">
                        <input type="text" name="property_title" id="property_title" placeholder="Property Name" maxlength="12" class="form-control" required>
                    </div>
                </div> 
               <div class="form-group">
                    <label class="col-sm-3 control-label">Bedrooms:</label>
                    <div class="col-sm-9">
                        <select name="bedrooms" id="bedrooms" class="form-control" required>
                            <option selected disabled>Select number of bedrooms...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>    
                <div class="form-group">
                    <label class="col-sm-3 control-label">Bathrooms:</label>
                    <div class="col-sm-9">
                        <select name="bathrooms" id="bathrooms" class="form-control" required>
                            <option selected disabled>Select number of bathrooms...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Garages:</label>
                    <div class="col-sm-9">
                        <select name="garages" id="garages" class="form-control">
                            <option selected disabled>Select number of garages...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5+">5+</option>
                        </select>
                    </div>
                </div>   
                <div class="form-group">
                    <label class="col-sm-3 control-label">No. of Storey:</label>
                    <div class="col-sm-9">
                        <input type="text" name="storey" id="storey" oninput="this.value=this.value.replace(/[^0-9]/g,'');" placeholder="Floors" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Additional Features:</label>
                    <div class="col-sm-8">
                        <input type="text" name="additional" id="additional" placeholder="eg. Swimming Pool, Jacuzzi, Air Condition" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Gallery:</label>
                    <div class="col-sm-8">
                        <input type="hidden" name="first_name" value="<?php echo $_SESSION['first_name']; ?>"/>
                         <input type="file" id="file" name="files[]" multiple="multiple" accept="image/*" required/>
                    </div>
                </div>  
                <div class="form-group">
                    <label class="col-sm-4 control-label">Featured Photo:</label>
                    <div class="col-sm-8">
                         <input type="file" id="featured" name="featured" accept="image/*" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" style="padding-top:20px;"> Search Location for Coordinates </label>
                    <div class="col-sm-8">
                        <span style="color:red;"> * Note only the coordinates will be saved in the database </span>
                         <input id="search-txt"  class="form-control" type="text" value="Bacoor, Cavite" maxlength="100" style="width: 200px;display: inline-block;">
                        <input id="search-btn" class="btn" type="button" value="Locate Address" style="display: inline;position: relative; margin-bottom: 20px;">
                        <input id="detect-btn" class="btn" type="button" value="Detect Location" disabled>
                    </div>
                    <div class="col-md-12" style="margin:20px 0;">
                        <div class="col-md-6">
                            <label> Latitute </label>
                            <input id="latitude" name="latitude" class="form-control" readonly> 
                        </div>
                        <div class="col-md-6">
                            <label> Longitude </label>
                            <input id="longitude" name="longitude" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="col-md-12" style="padding-bottom:20px">
                        <div id="map-canvas"></div>
                    </div>
                    
                </div> 

                <div class="form-group" style="padding:20px;">
                    <div class="col-sm-9 col-sm-offset-3">
                        <input type="hidden" value="<?php echo $_SESSION['user_session']; ?>" name="userId">
                        <button type="submit" name="btn_save" class="btn btn-primary" value="1">Save</button>
                    </div>
                </div>
                  </form>
                  <div style="clear:both;"> </div>
                    <div class="form-group" style="margin-top:20px;">
                       <a style="font-size: 15px;" href="agent-panel-listings.php">
                        <i class="glyphicon glyphicon-arrow-left"></i> Back to my Listings</a>
                  </div>
              </div>
        </div>
    </div>
                 

    </div>
</div>
</div>
</div>
<script type="text/javascript">
        /*
         * Google Maps: Latitude-Longitude Finder Tool
         * http://salman-w.blogspot.com/2009/03/latitude-longitude-finder-tool.html
         */
        function loadmap() {
            // initialize map
            var map = new google.maps.Map(document.getElementById("map-canvas"), {
                center: new google.maps.LatLng(14.416022, 120.968860),
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            // initialize marker
            var marker = new google.maps.Marker({
                position: map.getCenter(),
                draggable: true,
                map: map
            });
            // intercept map and marker movements
            google.maps.event.addListener(map, "idle", function() {
                console.log(map.getCenter().lat());
                marker.setPosition(map.getCenter());
                console.log(map.zoom);
                $('#latitude').val(map.getCenter().lat().toFixed(6));
                $('#longitude').val(map.getCenter().lng().toFixed(6));
            });
            google.maps.event.addListener(marker, "dragend", function(mapEvent) {
                map.panTo(mapEvent.latLng);
            });
            // initialize geocoder
            var geocoder = new google.maps.Geocoder();
            google.maps.event.addDomListener(document.getElementById("search-btn"), "click", function() {
                geocoder.geocode({ address: document.getElementById("search-txt").value }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var result = results[0];
                        document.getElementById("search-txt").value = result.formatted_address;
                        if (result.geometry.viewport) {
                            map.fitBounds(result.geometry.viewport);
                        } else {
                            map.setCenter(result.geometry.location);
                        }
                    } else if (status == google.maps.GeocoderStatus.ZERO_RESULTS) {
                        alert("Sorry, geocoder API failed to locate the address.");
                    } else {
                        alert("Sorry, geocoder API failed with an error.");
                    }
                });
            });
            google.maps.event.addDomListener(document.getElementById("search-txt"), "keydown", function(domEvent) {
                if (domEvent.which === 13 || domEvent.keyCode === 13) {
                    google.maps.event.trigger(document.getElementById("search-btn"), "click");
                }
            });
            // initialize geolocation
            if (navigator.geolocation) {
                google.maps.event.addDomListener(document.getElementById("detect-btn"), "click", function() {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        map.setCenter(new google.maps.LatLng(position.coords.latitude, position.coords.longitude));
                    }, function() {
                        alert("Sorry, geolocation API failed to detect your location.");
                    });
                });
                document.getElementById("detect-btn").disabled = false;
            }
        }
    </script>
    <script src="//maps.googleapis.com/maps/api/js?v=3&amp;sensor=false&amp;key=AIzaSyCa_5PxIUT1mQIkvvcaW-lhxFN4JbtlK4o&amp;callback=loadmap" defer></script>
    </body>
</html>



<?php include 'footer.php'; ?> 