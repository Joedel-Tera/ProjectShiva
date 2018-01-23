<?php
require 'db.php';
session_start();

?>


<?php

if(!$_SESSION["username"])
{
    //Do not show protected data, redirect to login...
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<style type="text/css">
  .control-sidebar {
       .tab-content {
               height: calc(100vh - 135px);
               overflow-y: scroll;
               overflow-x: hidden;
        }
}

@media (min-width: 768px) {
        .control-sidebar {
               .tab-content {
                       height: calc(100vh - 85px);
                }
        }
}

</style>
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="startTime()" class="hold-transition skin-green-light sidebar-mini layout-boxed">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>H</b>F</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Housefinder</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user"></i>
              <span class="hidden-xs"><?php echo ucwords($_SESSION['username']) ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <p>
                  Signed in as Admin
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-danger btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <!-- <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> -->
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="admin_page.php">
            <i class="fa fa-gears"></i> <span>Home</span>
          </a>
        </li>
        <li>
          <a href="manage_houses.php">
            <i class="fa fa-home"></i> <span>Manage Houses</span>
<!--             <span class="pull-right-container">
              <small class="label pull-right bg-green">Hot</small>
            </span> -->
          </a>
        </li>
        <li>
          <a href="manage_agent.php">
            <i class="fa fa-users"></i> <span>Manage Agents</span>
<!--             <span class="pull-right-container">
              <small class="label pull-right bg-green">Hot</small>
            </span> -->
          </a>
        </li>
        <li>
          <a href="view_feedback.php">
            <i class="fa fa-envelope-o"></i> <span>View Feedbacks</span>
<!--             <span class="pull-right-container">
              <small class="label pull-right bg-green">Hot</small>
            </span> -->
          </a>
        </li>
<!--         <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

	<h1 id="txt"><?php echo(time()); ?></h1>

      <ol class="breadcrumb">
        <li><i class="fa fa-gears"><a href="admin_page.php"></i>&nbsp Home</a></li>
        <li class="active"><i class="fa fa-home">&nbsp Manage Houses</i></li>
        <li><i class="fa fa-users"><a href="manage_agent.php"></i>&nbsp Manage Agents</a></li>
        <li><i class="fa fa-envelope-o"><a href="view_feedback.php"></i>&nbsp Feedbacks</a></li>
      </ol>
    </section>
    <br>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Houses</h3>
                 			<div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'housefinder';
    $mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
    $sql = "SELECT * FROM properties";
    $result = $mysqli->query($sql); 
?>     

              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Agent</th>
                  <th>Type</th>
                  <th>Category</th>
                  <th>Location</th>
                  <th>Price</th>
                  <th>Property Name</th>
                  <th>Actions</th>
                </tr>
                </thead>

                <tbody>
                   <?php while($row = mysqli_fetch_array($result)){  ?>
         			<?php $id = $row['id']; ?>
                <tr>

	              <?php $row['id']; ?>
	              <td><?php echo $row['first_name']; ?></td>
	              <td><?php echo $row['property_type']; ?></td>
	              <td><?php echo $row['property_category']; ?></td>
	              <td><?php echo $row['location']; ?></td>
	              <td>₱ <?php echo $row['price']; ?></td>
	              <td><?php echo $row['property_title']; ?></td>
	              <?php echo "<td><a href ='housedelete.php?id=$id', onclick='myFunction(); return false;'>Delete</a></td>"; ?>
	                           
                </tr>
	     				<?php } ?>   
                </tbody>
             
                <tfoot>
                <tr>
                  <th>Agent</th>
                  <th>Type</th>
                  <th>Category</th>
                  <th>Location</th>
                  <th>Price</th>
                  <th>Property Name</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>

            </div>
            <!-- /.box-body -->
          </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b><i>Admin</i></b>
    </div>
    <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="#">Housefinder&reg</a></strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <!-- <aside class="control-sidebar control-sidebar-dark"> -->

    <!-- Tab panes -->
    <!-- <div class="tab-content"> -->
      <!-- Home tab content -->
      <!-- <div class="tab-pane" id="control-sidebar-home-tab"> -->

      <!-- </div> -->

    <!-- </div> -->
  <!-- </aside> -->
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <!-- <div class="control-sidebar-bg"></div> -->
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
var ctoday = <?php echo time() * 1000 ?>;
setInterval(function() {ctoday += 1000;},1000);
function startTime() {
    var today = new Date(ctoday);
    var montharray = new Array("January","February","March","April","May","June","July","August","September","October","November","December");
    var h = today.getHours();
    var ampm = h >= 12 ? 'PM' : 'AM';
    h = h % 12;
    h = h ? h : 12;
    var m = today.getMinutes();
    var s = today.getSeconds();
    h = checkTime(h);
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML = 
    montharray[today.getMonth()]+" "+checkTime(today.getDate())+", "+today.getFullYear() + " (" + h +":" + m + ":" + s + " " + ampm +")"; 
    setTimeout(startTime, 1000);
}

function checkTime(i) {
    if (i < 10) {i = "0" + i};
    return i;
}
</script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
function myFunction() {
  if(confirm("Are you sure you want to delete this info?"))
    document.forms[0].submit();
  else
    return false;
}
</script>


</body>
</html>
