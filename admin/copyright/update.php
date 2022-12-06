<?php
require_once(__DIR__."/../database/config.php");

  $id           = base64_decode($_GET['id']);
  $compnyNam    = $_POST['company_name'];
  $copyrghtYear = $_POST['copyright_year'];
  $updetDate = date('Y-m-d h:i:s');
// echo $updetDate; die();
$sqlQuery = "UPDATE copyright SET company_name = '$compnyNam', copyright_year = '$copyrghtYear', updated_at = '$updetDate' WHERE id = $id";
// echo $sqlQuery; die();
if ($conn->query($sqlQuery) === TRUE) {
  // echo "Record Updated successfully";
  header("Location:edit.php");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>