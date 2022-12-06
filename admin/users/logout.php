<?php
require_once(__DIR__."/../database/config.php");
session_start();

if(session_destroy()) {
  header("Location:../index.php");
}

$conn->close();
?>