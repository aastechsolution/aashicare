<?php
require_once(__DIR__."/../database/config.php");
session_start();
  $path = 'E:/xampp/htdocs/aashicare/admin/products/productImages';
    // echo $path; die();
    if (isset($_FILES['product_image'])) {
     // echo "<pre>";print_r($_FILES);
        $errors = array();
        $file_name  = $_FILES['product_image']['name'];
        $file_size  = $_FILES['product_image']['size'];
        $file_tmp   = $_FILES['product_image']['tmp_name'];
        $file_type  = $_FILES['product_image']['type'];
        $file_ext   = strtolower(end(explode('.', $_FILES['product_image']['name'])));
        
        $extensions = array("pdf","jpeg","png","jpg");
        
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "extension not allowed, please choose a PDF and Image file.";
        }
        
     /*  if ($file_size > 2097152) {
            $errors[] = 'File size must be excately 2 MB';
        }
            */
        if (empty($errors) == true)
        {
            $upload =   move_uploaded_file($file_tmp, "$path/" . $file_name);
            // echo $upload; die();
                
        } else {
                // echo '<script>alert("File size must be excately 2 MB");</script>';
        }
    }

  $prodctName       = $_POST['product_name'];
  $prodctDscrpton   = $_POST['product_description'];
  $produtImag       = $file_name;
  $ipAddress        = "1.1.1.1";

  $sqlQuery = "INSERT INTO products (product_name, product_description, product_image, ip_address, deleted_at)
  VALUES ('$prodctName', '$prodctDscrpton', '$produtImag', '$ipAddress', 0)";
  // echo $sqlQuery; die();

  if ($conn->query($sqlQuery) === TRUE) {
    // echo "Record Added successfully";
    
 
    $_SESSION['product'] = "Record Added successfully";
    header("Location:index.php");
    exit();
  } else {
    echo "Error adding record: " . $conn->error;
  }

$conn->close();
?>