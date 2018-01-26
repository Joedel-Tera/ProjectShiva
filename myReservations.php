<?php 
session_start();
require_once('db.php');
include 'headertop.php';

if(isset($_SESSION['id'])){
  $userId = $_SESSION['id'];
  $sql = "SELECT * FROM property_reservations as pr 
  INNER JOIN properties as prp ON pr.property_id = prp.id
  INNER JOIN agents as ag ON pr.agent_id = ag.id
  WHERE user_id = $userId";
  $result = $mysqli->query($sql);
} else {
  Header("Location: index.php");
}


if(isset($_SESSION['alert'])){
  echo "<script type='text/javascript'>alert('Payment Information Submitted!')</script>";
}
if(isset($_SESSION['error'])){
  echo "<script type='text/javascript'>alert('Oops! Something went wrong')</script>";
}

unset($_SESSION['alert']);
unset($_SESSION['error']);
?>



<body>

<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
  <h2> My Reservations </h2>
</div>
</div>
<!-- banner -->


<div class="container">
  <div class="properties-listing spacer">
    <div class="row">
  
      <div class="col-lg-12 col-sm-8"> 
        <div id="row" class="row">
          <?php
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_array($result)){
          ?>  
          <div class="col-lg-3 col-sm-3">
            <div class="properties">
              <input type="hidden" class="resId" value="<?php echo $row['reservation_id']; ?>">
              <input type="hidden" class="agentId" value="<?php echo $row['agent_id']; ?>">
              <input type="hidden" class="propertyId" value="<?php echo $row['property_id']; ?>">
              <input type="hidden" class="agentName" value="<?php echo $row['first_name'].' '.$row['last_name']; ?>"
              <a href="property-detail.php?id=<?php echo $row['property_id'] ?>"> 
                <div class="image-holder">
                  <img src="<?php echo $row['featured']; ?>" class="img-responsive" alt="properties" style="height:190px;">
                </div>
                <h4><?php echo $row['property_title']; ?></h4>
              </a>
              <p class="price">Price: ₱<?php echo $row['price']; ?>
              <br>
              Reservation Fee: ₱<?php echo $row['reservationFee']; ?>
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
                  <?php if($row['reservation_status'] == 'DECLINED') { ?>
                      <button class="btn btn-primary"> Reservation Declined </button>
                  <?php } else if ($row['reservation_status'] == 'PENDING CONFIRMATION') { ?>
                      <button class="btn"> Confirming Reservation Fee </button>
                  <?php } else if ($row['reservation_status'] == '') { ?>
                      <button class="btn btn-primary payFee"> Pay Reservation Fee </button>
                  <?php } else { ?>
                      <button class="btn"> Payment Approved </button>
                  <?php } ?>
              <?php } else { ?>
                <button class="btn btn-default" disabled> No Longer Available </button>
                 
              <?php } ?>
              
              
            </div>
          </div>
          <?php } } else { ?>     
            <div class="col-lg-12 col-sm-4" style="text-align:center;">
              <h2> You Have No Reservations. </h2>
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
                              
                                <input type="text" id="agentName" class="form-control" value="" readonly>
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
                            <input type="hidden" name="resId" id="resId">
                            <input type="hidden" name="agentId" id="agentId">
                            <input type="hidden" name="propertyId" id="propertyId">
                            <input type="hidden" name="userId" value="<?php echo $_SESSION['id']; ?>">
                            <button type="submit" class="btn btn-primary" name="reservationSubmit"> Submit Transaction </button>
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
      var resId = _this.parent().find('.resId').val();
      var agentId = _this.parent().find('.agentId').val();
      var agentName = _this.parent().find('.agentName').val();

      $('#propertyId').val(propId);
      $('#agentId').val(agentId);
      $('#agentName').val(agentName);
      $('#resId').val(resId);
      $('#showPaymentForm').modal('show');
    });
  });
</script> 
</body>

<?php include'footer.php';?>