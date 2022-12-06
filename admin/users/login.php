<?php
require_once(__DIR__."/../database/config.php");
session_start();
$userName    = $_POST['user_name'];
$password    = $_POST['password'];
$loginStats  = $_POST['login_status'];
// echo $id; die();
$selectQuery = "SELECT id, user_name, password, login_status FROM admin where deleted_at = 0";
$resultAdmin = mysqli_query($conn, $selectQuery);    
  foreach ($resultAdmin as $k=> $row) {
    $user['id']           = $row['id'];
    $user['user_name']    = $row['user_name'];
    $user['password']     = $row['password'];
    $user['login_status'] = $row['login_status'];
  }
  // echo $user['password']; die();   
if(isset($user['user_name']) == $userName) {
  if(isset($user['password']) == $password) {
    if($loginStats != '') {
      $updateQuery   = "UPDATE admin SET login_status = '$loginStats' WHERE user_name = '$userName' AND password = '$password'";
      // echo $updateQuery; die();
      if ($conn->query($updateQuery) === TRUE) {
        header("Location:../dashboard.php");
      } else {
        echo "Error login user record: " . $conn->error;
      }
    } else {
      $_SESSION['user'] = "Please confirm your login status by checked ";
      header("Location:../index.php");
    }
  } else {
    $_SESSION['user'] = "User Password Does Not Match";
    header("Location:../index.php");
  }
} else {
  $_SESSION['user'] = "User Email Does Not Exist";
  header("Location:../index.php");
}
$conn->close();
?>