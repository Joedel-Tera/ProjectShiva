<?php 
require_once'db.php';
include'headertop.php';
session_start();
if(isset($_SESSION["email"]))
{
    header('Location: blogdetail-logged-in.php');
}
?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <h2>Blogs</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer blog">
<div class="row">
  <div class="col-lg-8">

  <!-- blog detail -->
  <h2>Creative business to takeover the market</h2>
  <div class="info">Posted on: Jan 20, 2013</div>
              <div class="col-md-3 col-xs-10 col-sm-5 col-lg-3">
               <img alt="User Pic" src="images/nobody.jpg" id="profile-image1" class="img-circle img-responsive"> 


              </div>
 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
  <!-- blog detail -->

  </div>
    <div class="col-lg-4 visible-lg">

  <!-- tabs -->
  <div class="tabbable">
              <ul class="nav nav-tabs">
                <li class=""><a href="#tab1" data-toggle="tab">Recent Post</a></li>
                <li class=""><a href="#tab2" data-toggle="tab">Most Popular</a></li>
                <li class="active"><a href="#tab3" data-toggle="tab">Most Commented</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane" id="tab1">
                  <ul class="list-unstyled">
                  <li>
                  <h5><a href="blogdetail.php">Real estate marketing growing</a></h5>
                            <div class="info">Posted on: Jan 20, 2013</div>  
                            </li>
                             <li>
                  <h5><a href="blogdetail.php">Real estate marketing growing</a></h5>
                            <div class="info">Posted on: Jan 20, 2013</div>  
                            </li>
                             <li>
                  <h5><a href="blogdetail.php">Real estate marketing growing</a></h5>
                            <div class="info">Posted on: Jan 20, 2013</div>  
                            </li>
                            </ul>
                </div>
                <div class="tab-pane" id="tab2">
                <ul  class="list-unstyled">
                  <li>
                  <h5><a href="blogdetail.php">Market update on new apartments</a></h5>
                            <div class="info">Posted on: Jan 20, 2013</div>  
                            </li>

                  <li>
                  <h5><a href="blogdetail.php">Market update on new apartments</a></h5>
                            <div class="info">Posted on: Jan 20, 2013</div>  
                            </li>

                  <li>
                  <h5><a href="blogdetail.php">Market update on new apartments</a></h5>
                            <div class="info">Posted on: Jan 20, 2013</div>  
                            </li>
                            </ul>
                </div>
                <div class="tab-pane active" id="tab3">
                <ul class="list-unstyled">      
                            <li>
                  <h5><a href="blogdetail.php">Creative business to takeover the market</a></h5>
                            <div class="info">Posted on: Jan 20, 2013</div>  
                            </li>
                            
                            <li>
                  <h5><a href="blogdetail.php">Creative business to takeover the market</a></h5>
                            <div class="info">Posted on: Jan 20, 2013</div>  
                            </li>
                            </ul>
                </div>
              </div>
              
              
              
            </div>
          </div>
    <div class="col-lg-8">
<br>
<br>
  <!-- blog detail -->
  <h2>Creative business to takeover the market</h2>
  <div class="info">Posted on: Jan 20, 2013</div>
              <div class="col-md-3 col-xs-10 col-sm-5 col-lg-3">
               <img alt="User Pic" src="images/nobody.jpg" id="profile-image1" class="img-circle img-responsive"> 


              </div>
 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
  <!-- blog detail -->




  </div>
  
  <!-- tabs -->



</div>
</div>
</div>

<?php include'footer.php';?>