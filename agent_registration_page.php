<?php include'headertop.php';?>

<?php
require 'db.php';
session_start();
?>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['register'])) {

        require 'agent-register.php';
        
    }    
//    elseif (isset($_POST['register'])) {
//        require 'register.php';
        
    }
?>





<html>
    <head>
        <title></title>
        <style>
.capbox {
	background-color: #92D433;
	border: #B3E272 0px solid;
	border-width: 0px 12px 0px 0px;
	display: inline-block;
	*display: inline; zoom: 1; /* FOR IE7-8 */
	padding: 8px 40px 8px 8px;
	}

.capbox-inner {
	font: bold 11px arial, sans-serif;
	color: #000000;
	background-color: #F3EDEC;
	margin: 5px auto 0px auto;
	padding: 3px;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	}

#CaptchaDiv {
	font: bold 17px verdana, arial, sans-serif;
	font-style: italic;
	color: #000000;
	background-color: #F3EDEC;
	padding: 4px;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	}

#CaptchaInput { margin: 1px 0px 1px 0px; width: 145px; height: 30px; }

        </style>
    </head>
    <body>
        <div class="inside-banner">
            <div class="container"> 
                <h2>Agent Registration Form</h2>
            </div>
        </div>
        

 <div class="spacer">

<form action="agent_registration_page.php" method="post" onsubmit="return checkform(this);" enctype="multipart/form-data">
 <div class="container">
    <h6 class="col-sm-10 col-md-offset-1 well"><i>Please fill in your registration details to start using site options in full. Fields without * are optional</i></h6>
	<div class="col-sm-10 col-md-offset-1 well">
	<div class="row">
					<div class="col-sm-12 ">
                            <blockquote style="background-color: #E8E8E8;" class="blockquote">
                                <p class="mb-0">Personal Details</p>
                            </blockquote>
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>*First Name:</label>
								<input type="text" name="first_name" pattern="[a-zA-Z\s]+" title="Numbers are not allowed" placeholder="Enter Your First Name" class="form-control" required>
							</div>
							<div class="col-sm-4 form-group">
								<label>Middle Name:</label>
								<input type="text" name="middle_name" pattern="[a-zA-Z\s]+" title="Numbers are not allowed" placeholder="Enter Your Middle Name" class="form-control">
							</div>
                            <div class="col-sm-4 form-group">
								<label>*Last Name:</label>
								<input type="text" name="last_name" pattern="[a-zA-Z\s]+" title="Numbers are not allowed" placeholder="Enter Your Last Name" class="form-control" required>
							</div>
						</div>					
						<div class="form-group">
							<label>*Address:</label>
							<input type="text" style="resize: none;" name="address" placeholder="Enter Your Address Here" class="form-control" required>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>*Birthdate:</label>
								<input type="date" name="bday" min="1960-01-01" max="2017-12-31" placeholder="Enter Your Birthdate Here" class="form-control" required>
							</div>	
                            <div class="col-sm-3 form-group">
								<label>*Age:</label>
								<input type="text" name="age" oninput="this.value=this.value.replace(/[^0-9]/g,'');" minlength="1" maxlength="2" placeholder="Enter Your Age Here" class="form-control" required>
							</div>	
                            <div class="col-sm-5 form-group">
                                <label>*Gender:</label>
                                <select required name="gender" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>	
                            </div>
						</div>
                            <blockquote style="background-color: #E8E8E8;" class="blockquote">
                                <p class="mb-0">Contact Details</p>
                            </blockquote>
					<div class="row">
                        <div class="col-sm-4 form-group">
						<label>*Phone Number:</label>
						  <input type="text" name="contact_number"  pattern="^(09|\+639)\d{9}$" title="Phone number should start with 63, 09, or 9" oninput="this.value=this.value.replace(/[^0-9]/g,'');" minlength="10" maxlength="12" placeholder="(+63)" class="form-control" required>
					       </div>	
                        <div class="col-sm-4 form-group">
						<label>*Email Address:</label>
						  <input type="text" name="email_info" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter a valid email address" placeholder="your@email.com" class="form-control" required>
                        </div>
                         <div class="col-sm-4 form-group">
						<label>Landline:</label>
						  <input type="text" name="landline" oninput="this.value=this.value.replace(/[^0-9]/g,'');" minlength="7" maxlength="7" placeholder="(Optional)" class="form-control">
                        </div>
					</div>
                            <blockquote style="background-color: #E8E8E8;" class="blockquote">
                                <p class="mb-0">Account Details</p>
                            </blockquote>
                    <div class="row">
                        
                    <div class="col-sm-4 form-group">
						  <label>*Email:</label>
						      <input type="text" name="email" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter a valid email address" class="form-control" required>
				    </div>
                        <div class="col-sm-4 form-group">
						  <label>*Password:</label>
						      <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" class="form-control" required>
					   </div>  
                        <div class="col-sm-4 form-group">
						  <label>*Confirm Password:</label>
						      <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" class="form-control" required>
					   </div>
                        <div class="col-sm-5 form-group">
                            <div class="avatar"><label>Select your Profile Picture:</label><input type="file" name="avatar" id="image" accept="image/*" required>Photo format must be .jpg/.png</div>
                        </div>
                        
                            <div class="col-sm-6 form-group">
                                <!-- START CAPTCHA -->
                                <div class="capbox">
                                         <label style="color: black"><i>*Captcha:</i>&nbsp&nbsp</label> 
                                <div id="CaptchaDiv"></div>

                                <div class="capbox-inner">
                                Type the numbers above:<br>

                                <input type="hidden" id="txtCaptcha">
                                <input type="text" name="CaptchaInput" id="CaptchaInput" size="20" required><br>

                                </div>
                                </div>
                                <br><br>
                                <!-- END CAPTCHA -->
                             </div>
                    </div>

<br>
                        
					      <button type="submit" class="btn btn-success btn-sm" name="register">Create Account!</button>				
					</div>
				</div>
	</div>
	</div>
    </form>
    
     </div>
            <br>
            


  
<script>
    // Captcha Script

    function checkform(theform){
    var why = "";

    if(theform.CaptchaInput.value == ""){
    why += "- Please Enter CAPTCHA Code.\n";
    }
    if(theform.CaptchaInput.value != ""){
    if(ValidCaptcha(theform.CaptchaInput.value) == false){
    why += "- The CAPTCHA Code Does Not Match.\n";
    }
    }
    if(why != ""){
    alert(why);
    return false;
    }
    }

    var a = Math.ceil(Math.random() * 9)+ '';
    var b = Math.ceil(Math.random() * 9)+ '';
    var c = Math.ceil(Math.random() * 9)+ '';
    var d = Math.ceil(Math.random() * 9)+ '';
    var e = Math.ceil(Math.random() * 9)+ '';

    var code = a + b + c + d + e;
    document.getElementById("txtCaptcha").value = code;
    document.getElementById("CaptchaDiv").innerHTML = code;

    // Validate input against the generated number
    function ValidCaptcha(){
    var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
    var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
    if (str1 == str2){
    return true;
    }else{
    return false;
    }
    }

    // Remove the spaces from the entered and generated code
    function removeSpaces(string){
    return string.split(' ').join('');
    }
</script>
</form>
              
        
</div>

        
    <script>
        var password = document.getElementById("password")
        , confirm_password = document.getElementById("confirm_password");

        function validatePassword(){
        if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords don't match");
        } else {
        confirm_password.setCustomValidity('');
        }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>    
        
    </body>
    
</html>



<?php include'footer.php';?>
