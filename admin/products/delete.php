<?php
require_once(__DIR__."/../database/config.php");
session_start();
$id = base64_decode($_GET['id']);
// echo $id; die();
// $sql = "DELETE FROM products WHERE id = $id";
$sql = "UPDATE products SET deleted_at = 1 WHERE id = $id";

if ($conn->query($sql) === TRUE) {
  // echo "Record deleted successfully";
  $_SESSION['product'] = "Record Deleted successfully";
  header("Location:index.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>