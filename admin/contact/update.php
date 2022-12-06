<?php
require_once(__DIR__."/../database/config.php");

  $id        = base64_decode($_GET['id']);
  $name      = $_POST['name'];
  $email     = $_POST['email'];
  $subject   = $_POST['subject'];
  $message   = $_POST['message'];
  $updetDate = date('Y-m-d h:i:s');
// echo $updetDate; die();
$sqlQuery = "UPDATE contact_us SET name = '$name', email = '$email', subject = '$subject', message = '$message', updated_at = '$updetDate' WHERE id = $id";
// echo $sqlQuery; die();
if ($conn->query($sqlQuery) === TRUE) {
  // echo "Record Updated successfully";
  header("Location:index.php");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>