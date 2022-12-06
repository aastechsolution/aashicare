<?php
require_once(__DIR__."/../database/config.php");

$id = base64_decode($_GET['id']);
// echo $id; die();
// $sql = "DELETE FROM admin WHERE id = $id";
$sql = "UPDATE admin SET deleted_at = 1 WHERE id = $id";

if ($conn->query($sql) === TRUE) {
  // echo "Record deleted successfully";
  header("Location:index.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>