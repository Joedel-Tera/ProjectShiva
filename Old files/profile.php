
<?php
/* Displays user information and some useful messages */
session_start();
include 'headertop.php';

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
	$_SESSION['message'] = "You must log in before viewing your profile page!";
	header("location: error.php");    
}
else {
		// Makes it easier to read
		$first_name = $_SESSION['first_name'];
		$last_name = $_SESSION['last_name'];
		$email = $_SESSION['email'];
		$active = $_SESSION['active'];
		$id = $_SESSION['id'];
}
?>


<!DOCTYPE html>
<html>
<head>
			 
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<?php include "css/css.html"; ?>
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
</head>
		
		
<body>
<div class="inside-banner">
    <div class="container">
        <h2>WELCOME</h2>
    </div>
</div>
<div class="form">
    <p>
        <?php if ( isset($_SESSION[ 'message']) ) { echo $_SESSION[ 'message']; unset( $_SESSION[ 'message'] ); } ?>
    </p>

    <?php if ( !$active ){ echo '<div class="info">
							Account is unverified, please confirm your email by clicking
							on the email link!
							</div>'; } ?>
    <h2><?php echo $first_name.' '.$last_name; ?></h2>
    <p>
        <?= $email ?>
    </p>

    <a href="index-logged-in.php">
        <button class="button button-block" name="logout">Start Browsing for Houses</button>
    </a>
    <br>

    <a href="logout.php">
        <button class="button button-block" name="logout">Logout</button>
    </a>

</div>
<?php include 'footer.php'; ?>
</body>
</html>


