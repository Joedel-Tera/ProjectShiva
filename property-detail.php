<?php 
session_start();
include 'headertop.php';
require_once 'db.php'; 


?>
<!DOCTYPE html>
<html>
<body>
  <head>
    <style>
        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {opacity: 0.7;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 80px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
/*        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }*/

        /* Add Animation */
        .modal-content, #caption {    
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {-webkit-transform:scale(0)} 
            to {-webkit-transform:scale(1)}
        }

        @keyframes zoom {
            from {transform:scale(0)} 
            to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
        }
        .reservationFee {
          color:#72b70f;
          font-weight: 500;
        }
    </style>
  </head>




<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <h2>Property Details</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 hidden-xs">

        <?php 
            $i=1;
            /*$sql = "SELECT *,MAX(recent_id) FROM recent_search INNER JOIN properties ON property_id = id WHERE status = 0 GROUP BY id ORDER BY MAX(recent_id) DESC LIMIT 5";*/
            $sql = "SELECT property_title,id,price,location, MAX(recent_id)
FROM recent_search 
INNER JOIN properties ON property_id = id
GROUP BY property_id
ORDER BY MAX(recent_id) DESC
LIMIT 5";
            $result = $mysqli->query($sql); 
        ?>  
<div class="hot-properties hidden-xs">
<h4>Hot Properties</h4>
<?php while($row = $result->fetch_assoc()){  ?>
<?php $i; ?>
<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="<?php echo $row['featured']; ?>" class="img-responsive img-circle" alt="properties"/></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a class="addToRecentClicked" data-id="<?php echo $row['id']; ?>" href="#"><?php echo $row['property_title']; ?></a></h5>
                  <p class="price">Price: ₱<?php echo $row['price']; ?>
                      <br>
                    <?php echo $row['location']; ?>
                    </p> </div>
              </div>
<?php $i++; } ?>  
</div>
</div>


        <?php 
            $id=$_GET['id'];
            $i=1;
            $sql = "SELECT properties.*, media.`gallery` FROM properties LEFT JOIN media ON properties.`id` = media.`pid` WHERE properties.`id` = $id"; 
            $result = $mysqli->query($sql); 
        ?>  
    <?php if($row = $result->fetch_assoc()){  ?>
<div class="col-lg-9 col-sm-8 ">

<h2><?php echo $row['property_title'] ?></h2>
<div class="row">
  <div class="col-lg-8">
  <div>
    <?php } ?> 

    <?php 
        $id=$_GET['id'];
        $i=1;
        $sql = "SELECT properties.*, media.`gallery` FROM properties LEFT JOIN media ON properties.`id` = media.`pid` WHERE properties.`id` = $id"; 
        $res = mysqli_query($mysqli, $sql);
    ?>  
        <div style="width: 580px;" class="container">
            <div class="row">
              <?php while($row=mysqli_fetch_array($res)) { ?>
              <?php $i; ?>
                <img id="myImg" src="<?php echo $row['gallery']; ?>" class="img-thumbnail" alt="Properties" width="250px" height="250px">
              <?php $i++; } ?> 
            </div>
        </div>
 
  </div>
        <?php 
            $id=$_GET['id'];
            $i=1;
            $sql = "SELECT properties.*, media.`gallery` FROM properties LEFT JOIN media ON properties.`id` = media.`pid` WHERE properties.`id` = $id"; 
            $result = $mysqli->query($sql); 
        ?>  
    <?php if($row = $result->fetch_assoc()){  ?>
  <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
 <table class="table table-striped">
    <tr>
      <td><b>Property Type:</b></td>
      <td><?php echo $row['property_type'] ?></td>
    </tr>
    <tr>
      <td><b>Category:</b></td>
      <td><?php echo $row['property_category'] ?></td>
    </tr>
    <tr>
      <td><b>Location:</b></td>
      <td><?php echo $row['location'] ?></td>
    </tr>
    <tr>
      <td><b>Negotiable Price:</b></td>
      <td><?php echo $row['negotiable'] ?></td>
    </tr>
    <tr>
      <td><b>Property Size (sq.m):</b></td>
      <td><?php echo $row['property_size'] ?> sq.m.</td>
    </tr>
    <tr>
      <td><b>Property Name:</b></td>
      <td><?php echo $row['property_title'] ?></td>
    </tr>
    <tr>
      <td><b>No. of Bedrooms:</b></td>
      <td><?php echo $row['bedrooms'] ?></td>
    </tr>
    <tr>
      <td><b>No. of Bathrooms:</b></td>
      <td><?php echo $row['bathrooms'] ?></td>
    </tr>
    <tr>
      <td><b>No. of Garages:</b></td>
      <td><?php if($row['garages'] == ""){ echo '<i style="font-size: 13px;">No information to display</i>';}else{ echo $row['garages']; } ?></td>
    </tr>
    <tr>
      <td><b>No. of Storeys:</b></td>
      <td><?php echo $row['storey'] ?></td>
    </tr>
    <tr>
      <td><b>Additional Features:</b></td>
      <td><?php if($row['additional'] == ""){ echo '<i style="font-size: 13px;">No information to display</i>';}else{ echo $row['additional']; } ?></td>
    </tr>
 </table>
  </div>
          
      
  <div><h4><span class="glyphicon glyphicon-map-marker"></span>Location</h4>
<div style="width: 120%;" class="well"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo $row['latitude']; ?>,<?php echo $row['longitude']; ?>&key=AIzaSyD6MaLs5FbsXq0Bagjc_vyjeDhy2WOS12Y&zoom=14" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
  </div>

  </div>
  <div class="col-lg-4">
      <div class="col-lg-12  col-sm-6">
        <div class="property-info" style="text-align:center;">
          <p class="price">₱<?php echo $row['price']; ?></p>
          
          <p class="area"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $row['location'] ?></p>
            <?php } ?>
        </div>
            <?php 
                $id=$_GET['id'];
                $sql = "SELECT * FROM properties WHERE id = $id";
                $result = $mysqli->query($sql); 
            ?>  
    </div>
<?php 
$agentId = $row['agent_id'];
$getAgentContact = "SELECT * FROM agents WHERE id = $agentId";
$response = $mysqli->query($getAgentContact);
$agentContact = $response->fetch_assoc()['contact_number'];

?>
<?php if(isset($_SESSION['first_name'])) { ?> 
<div class="col-lg-12 col-sm-6 "> 
  <div class="enquiry">
    <h3 style="text-align:center;"> Rervation Fee <p class="reservationFee">₱<?php echo $row['reservationFee']; ?></p></h3>
    <h6><span class="glyphicon glyphicon-envelope"></span> A message will be sent to the  <h6 style="margin-top: -7px; margin-left: 20px;">Broker/Agent on your behalf.</h6></h6>
    <form action="reserve_property.php" method="post" role="form">
    <?php if($row = $result->fetch_assoc()){  ?>
    <input type="text" name="full_name" class="form-control" placeholder="Full Name" required/>
    <input type="text" name="email" class="form-control" placeholder="you@email.com" required/>
    <input type="text" name="contact_number" class="form-control" placeholder="Your Number" required/>
    <textarea rows="6" name="message" class="form-control" placeholder="Please contact me regarding to this house" style="resize:none;"></textarea>
    <input type="hidden" name="agentId" value="<?php echo $row['agent_id']; ?>">
    <input type="hidden" name="propertyId" value="<?php echo $row['id']; ?>">
    <input type="hidden" name="userId" value="<?php echo $_SESSION['id']; ?>">
    <input type="hidden" name="agentContact" value="<?php echo $agentContact; ?>">
    <button type="submit" class="btn btn-primary" name="Submit">Reserve this property</button>
    <?php } ?>
    </form>
  </div>         
</div>
<?php } ?>
</div>
</div>
</div>
</div>
</div>
</div>
  <!-- The Modal -->
  <div id="myModal" class="modal">
    <span class="close">&times;</span>
     <img class="modal-content" id="img01">
    <!-- <div id="caption"></div> -->
  </div>
  <script>
      $('.addToRecentClicked').each(function(){
    var _this = $(this);
    _this.on('click', function(){
      var propId = _this.attr('data-id');
      $.ajax({
                type: 'POST',
                url: 'ajaxFunctions.php',
                data: {
                    'clickedProp' : propId
                },
                dataType: 'json',
                success: function(data){
                   if(data.result){
                        setTimeout(function(){// wait for 5 secs(2)
                            location.href = 'property-detail.php?id='+propId; // then reload the page.(3)
                        }, 500);
                   } else {
                     alert("Error Occurred Please Try again later.");
                   }
                }
            });
    });
  });
      
      var modal = document.getElementById('myModal');

      modal.addEventListener('click',function(){
      this.style.display="none";
      })

      var span = document.getElementsByClassName("close")[0];

      span.onclick = function() {
        modal.style.display = "none";
      }

      var images = document.getElementsByTagName('img');
      var modalImg = document.getElementById("img01");
      var captionText = document.getElementById("caption");
      var i;

      for (i = 0; i < images.length; i++) {
        images[i].onclick = function() {
          modal.style.display = "block";
          modalImg.src = this.src;
          modalImg.alt = this.alt;
          captionText.innerHTML = this.nextElementSibling.innerHTML;
        }
      }

  </script>
</body>
</html>
<?php include 'footer.php';?> 