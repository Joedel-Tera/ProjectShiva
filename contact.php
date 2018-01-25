<?php 
session_start();
require_once'db.php';
include'headertop.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Housefinder</title>
    </head>
<br>

<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
      
    <h2>Contact Us</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row contact">
  <div class="col-lg-6 col-sm-6 ">
<h6 style="line-height: 1.5;">You can use the form below to reach out and ask us anything. Please feel free to contact Housefinder with any general inquiries regarding the website at <b><u>(046) 999-9999</u></b> / <b><u>+6399 999 9999</u></b>. For sales inquiry email us at <b><u>housefinder@gmail.com</u></b>.</h6><br>

<form action="feedback.php" method="post">
                <input type="text" class="form-control" placeholder="Full Name" required name="full_name">
                <input type="text" class="form-control" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required name="email">
                <input type="text" class="form-control" placeholder="Contact Number" pattern="^(09|\+639)\d{9}$" oninput="this.value=this.value.replace(/[^0-9]/g,'');" minlength="10" maxlength="11" required name="contact_no">
                <textarea style="resize: none;" rows="7" maxlength="300" class="form-control" placeholder="Message (Maximum of 300 characters)" required name="message"></textarea>

      <button type="submit" class="btn btn-success" name="send">Send Message</button>
          
</form>
                
        </div>
  <div class="col-lg-6 col-sm-6 ">
  <div style="margin-top: 40px;" class="well"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3864.5409125923334!2d120.97265191432355!3d14.395953189933048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d3cfd75b08eb%3A0xa40b1d5ad035c034!2sUniversity+of+Perpetual+Help+System+DALTA%2C+Molino+Campus!5e0!3m2!1sen!2sph!4v1501771920296"></iframe></div>
  </div>
  </div>
</div>
</div>

    
    

<?php include'footer.php';?>