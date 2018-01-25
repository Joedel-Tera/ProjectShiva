<?php
include 'db.php';
$id=$_GET['id'];
   $sql="select * from agents where id='$id'";
      $res=mysqli_query($link,$sql);
      while($row=mysqli_fetch_array($res))
      {
 
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
      }
?>
 
<html>
<head>
<title>Editt Data | PHP Interview Questions </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form name="insert-data" action="" method="post">
<div class="panel panel-primary">
  <div class="panel-heading">Edit Data To Database | PHP Interview Questions</div>
  <div class="panel-body">
  <div class="col-lg-6 col-lg-push-3 text-center">
  <div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" value="<?php echo $name; ?>" name="name" id="usr">
</div>
<div class="form-group">
  <label for="pwd">Email:</label>
  <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" id="pwd">
</div>
<div class="form-group">
  <input type="submit" name='submit' class="form-control" id="pwd">
</div>
 
 
 
</form>
</div>
  </div>
</div>
 
 
</body>
</html>
 
<?php
 
if(isset($_POST['submit']))
{
 $name=mysqli_real_escape_string($link,$_POST['name']);
 $email=mysqli_real_escape_string($link,$_POST['email']);
 
 $sql="update agents set name='$name',email='$email' where id='$id'";
 mysqli_query($link,$sql);
 ?>
<script type="text/javascript">
 
alert("Your Data Sucuessfully Updated");
window.location="view-data.php";
 
 
</script>
 
 <?php
}
 
 
?>