<?php
require_once(__DIR__."/../database/config.php");
session_start();

$check = $_SESSION['id'];
// echo $check; die();
$selectQuery = "SELECT id FROM admin where id = '$check'";
$result = mysqli_query($conn, $selectQuery);    
  foreach ($result as $k=> $row) {
    $user['id'] = $row['id'];
  }
if(!isset($user['id'])) {
  header("Location:../index.php");
}

?>

