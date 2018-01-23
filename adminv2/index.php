<?php
require 'db.php';
session_start();

if(isset($_POST["admin_logout"]))  {
  session_unset();
  session_destroy();
 }
 if(isset($_POST["login"]))  
 {  
   $username = mysqli_real_escape_string($mysqli, $_POST["username"]);
   $password = mysqli_real_escape_string($mysqli, $_POST["password"]);
   $query = "SELECT * FROM admin WHERE username = '".$username."' AND password = '".$password."'";
   $result = mysqli_query($mysqli, $query);
   if(mysqli_num_rows($result) > 0)
   {
    $_SESSION["username"] = $_POST["username"];
    header("location: admin_page.php"); 
   }
      else
   {
        echo '<script>alert("You\'ve entered an invalid username or password");</script>';
   }

$ip = $_SERVER["REMOTE_ADDR"];
mysqli_query($mysqli, "INSERT INTO `ip` (`address` ,`timestamp`)VALUES ('$ip', CURRENT_TIMESTAMP)");
$result = mysqli_query($mysqli, "SELECT COUNT(*) FROM `ip` WHERE `address` LIKE '$ip' AND `timestamp` > (now() - interval 10 minutes)");
$count = mysqli_fetch_array($result, MYSQLI_NUM) or die('Invalid' . mysqli_error($mysqli));

  if($count[0] > 3){
        header('location: blocked.php');
    }
 }

?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HouseFinder Admin | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index2.html"><b>Housefinder&reg</b> Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="index.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username" required="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control" placeholder="Password" required="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-6">
          <button type="submit" name="login" class="btn btn-success btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <br>
    <!-- <a href="register.html" class="text-center">Register a new membership</a> -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
