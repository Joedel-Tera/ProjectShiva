<?php
session_start();
include_once 'headertop.php';?>
<?php require 'db.php';?>

<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */

// Set session variables to be used on profile.php page
$_SESSION['property_type'] = $_POST['property_type'];
$_SESSION['property_category'] = $_POST['property_category'];
$_SESSION['location'] = $_POST['location'];
// $_SESSION['postal'] = $_POST['postal'];
$_SESSION['price'] = $_POST['price'];
$_SESSION['negotiable'] = $_POST['negotiable'];
$_SESSION['property_size'] = $_POST['property_size'];
$_SESSION['property_title'] = $_POST['property_title'];
$_SESSION['bedrooms'] = $_POST['bedrooms'];
$_SESSION['bathrooms'] = $_POST['bathrooms'];
$_SESSION['garages'] = $_POST['garages'];
$_SESSION['storey'] = $_POST['storey'];
$_SESSION['additional'] = $_POST['additional'];
$_SESSION['latitude'] = $_POST['latitude'];
$_SESSION['longitude'] = $_POST['longitude'];
$_SESSION['reservationFee'] = $_POST['reservationFee'];


// Escape all $_POST variables to protect against SQL injections
$property_type = $mysqli->escape_string($_POST['property_type']);
$property_category = $mysqli->escape_string($_POST['property_category']);
$location = $mysqli->escape_string($_POST['location']);
// $postal = $mysqli->escape_string($_POST['postal']);
$price = $mysqli->escape_string($_POST['price']);
$negotiable = $mysqli->escape_string($_POST['negotiable']);
$property_size = $mysqli->escape_string($_POST['property_size']);
$property_title = $mysqli->escape_string($_POST['property_title']);
$bedrooms = $mysqli->escape_string($_POST['bedrooms']);
$bathrooms = ($_POST['bathrooms']);
$garages = $mysqli->escape_string($_POST['garages']);
$storey = $mysqli->escape_string($_POST['storey']);
$additional = $mysqli->escape_string($_POST['additional']); 
$first_name = $mysqli->escape_string($_POST['first_name']);
$date_now = date('m-d-Y');
$lat = $_POST['latitude'];
$long = $_POST['longitude'];
$userId = $_POST['userId'];
$fee = $_POST['reservationFee'];


if(isset($_POST['btn_save'])) {

    $file_tmp  = $_FILES['featured']['tmp_name'];
    $filetmp = $file_tmp;
    $file_path = "featured/" . $_FILES["featured"]["name"];
    move_uploaded_file($filetmp, $file_path);

    $sql2 = "INSERT INTO properties (property_type, property_category, location, price, negotiable, property_size, property_title, bedrooms, bathrooms, garages, storey, additional, first_name, featured, date_created, latitude, longitude, agent_id, reservationFee)" 
    . "VALUES ('$property_type', '$property_category', '$location', '$price', '$negotiable', '$property_size', '$property_title', '$bedrooms', '$bathrooms', '$garages', '$storey', '$additional', '$first_name', '$file_path', '$date_now', $lat, $long, $userId, $fee)";
    
    if(!$mysqli->query($sql2)){
      echo '<script type="text/javascript">alert("Ooops something went wrong")</script>';
      die();
    } else {
      $last_id = $mysqli->query('SELECT MAX(id) AS last FROM properties');
      $row = $last_id->fetch_assoc();

      // you should really be checking for upload errors
      foreach ($_FILES['files']['error'] as $err) {
         switch ($err) {
            case UPLOAD_ERR_NO_FILE:
                echo 'No file sent.';
                exit;
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                echo 'Exceeded filesize limit.';
                exit;
          }
      }

      if (count($_FILES['files']['tmp_name']) == 0) {
        echo '<script type="text/javascript">alert("Please upload a photo")</script>';
      } else {
        for ($x=0; $x<count($_FILES['files']['tmp_name']); $x++ ) {
          $file_name = $_FILES['files']['name'][$x];
          $file_size = $_FILES['files']['size'][$x];
          $file_tmp  = $_FILES['files']['tmp_name'][$x];

          $t = explode(".", $file_name);
          $t1 = end($t);
          $file_ext = strtolower(end($t));

          $ext_boleh = array("jpg", "jpeg", "png", "gif", "bmp");

          if(in_array($file_ext, $ext_boleh)) {
              $filetmp = $file_tmp;
              $file_path = "properties/" . $file_name;
              move_uploaded_file($filetmp, $file_path);

              
          $sql1 = "INSERT INTO media (gallery, pid)" 
              . "VALUES ('".$file_path."', '".$row['last']."')";
          $mysqli->query($sql1);
        } // endfor
      }
      header("location: agent-panel-listings.php");
    } 
  }
}
?>

<?php include_once 'footer.php'; ?>