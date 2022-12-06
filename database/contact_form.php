<?php

require_once(__DIR__."/config.php");

  $firstName  = $_POST['f_name'];
  $lastName   = $_POST['l_name'];
  $email      = $_POST['email'];
  $subject    = $_POST['subject'];
  $message    = $_POST['message'];
  $ipAddress  = "1.1.1.1";

  // echo $firstName; die();

  $sql = "INSERT INTO contact_us (f_name, l_name, email, subject, message, ip_address, deleted_at)
  VALUES ('$firstName', '$lastName', '$email', '$subject', '$message', '$ipAddress', 0)";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    // Send Mail 

          $to = "amitrathauraxis333@gmail.com";
          $subject = "Testing";
          $txt = "Hello world!";
          $headers = "From: amitrathuarpsit@gmail.com";

          mail($to,$subject,$txt,$headers);
       
    header("Location:http://localhost/aashicare/contact.php");
    
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

mysqli_close($conn);



?>