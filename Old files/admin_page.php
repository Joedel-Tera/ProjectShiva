<?php
require 'db.php';
session_start();

?>

<!DOCTYPE html>

<?php

if(!$_SESSION["username"])
{
    //Do not show protected data, redirect to login...
    header('Location: admin_login_page.php');
}
?>

<html>
<head>
<title>HouseFinder</title>

<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/style.css"/>
    <script src="assets/bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/script.js"></script>
    <script src="js/jquery.typeahead.min.js"></script>

  <?php include 'css/css.html'; ?>

<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>

    <style>

.blogShort{ border-bottom:1px solid #ddd;}
.add{background: #333; padding: 10%; height: 300px;}

.nav-sidebar { 
    width: 150%;
    padding: 10; 
    border-right: 1px solid #ddd;
    margin-left: -120px;
}
.nav-sidebar a {
    color: #333;
    -webkit-transition: all 0.08s linear;
    -moz-transition: all 0.08s linear;
    -o-transition: all 0.08s linear;
    transition: all 0.08s linear;
}
.nav-sidebar .active a { 
    cursor: default;
    background-color: #0b56a8; 
    color: #fff; 
}
.nav-sidebar .active a:hover {
    background-color: #E50000;   
}
.nav-sidebar .text-overflow a,
.nav-sidebar .text-overflow .media-body {
    white-space: nowrap;
    overflow: hidden;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis; 
}

.btn-blog {
    color: #ffffff;
    background-color: #E50000;
    border-color: #E50000;
    border-radius:0;
    margin-bottom:10px
}
.btn-blog:hover,
.btn-blog:focus,
.btn-blog:active,
.btn-blog.active,
.open .dropdown-toggle.btn-blog {
    color: white;
    background-color:#0b56a8;
    border-color: #0b56a8;
}
article h2{color:#333333;}
h2{color:#0b56a8;}
 .margin10{margin-bottom:10px; margin-right:10px;}
 
 .container .text-style
{
  text-align: justify;
  line-height: 23px;
  margin: 0 13px 0 0;
  font-size: 19px;
}

    </style>
</head>
    
<body onload="startTime()">

    <div class="container"> 
          <img style="margin-top: -30px; margin-left: -50px;" src="images/logo2.png" alt="HouseFinder"><img style="margin-top: 50px; margin-left: -210px; margin-bottom: -20px;" src="images/title.png">
    </div>
<div class="inside-banner">
</div>
<br>
<div class="container">
  <div class="col-sm-2">
    <nav class="nav-sidebar">
    <ul class="nav tabs">
          <li class="active"><a href="#tab1">Home</a></li>
          <li class=""><a href="admin_change_pw.php">Change Password</a></li>
          <li class=""><a href="manage_houses.php">Manage Houses</a></li>
          <li class=""><a href="manage_agent.php">Manage Agent</a></li>
          <li class=""><a href="view_feedback.php">View Feedback</a></li>
    </ul>
  </nav>
</div>
<br>
<!-- tab content -->
<div class="tab-content">

<div class="tab-pane active text-style" id="tab1">

<?php

date_default_timezone_set('Europe/Berlin');
echo "<p style='text-align: center; color: black;'>". date("m-d-y",time()). '</p>'

?>

<div id="txt" style="text-align: center;"></div>

<br>
<br>

<?php

if(isset($_SESSION["username"]))  
{  
  echo "<h2>Welcome, ".$_SESSION["username"]."!</h2>";
}

?>

<hr>
</div>
<div class="tab-pane text-style" id="tab2">

</div>
    
</div>

</div>

</body>
</html>