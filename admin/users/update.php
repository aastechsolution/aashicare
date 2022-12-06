<?php
require_once(__DIR__."/../database/config.php");
$path = 'E:/xampp/htdocs/aashicare/admin/users/profileImage';
    // echo $path; die();
    if (isset($_FILES['profile_image'])) {
     // echo "<pre>";print_r($_FILES);
        $errors = array();
        $file_name  = $_FILES['profile_image']['name'];
        $file_size  = $_FILES['profile_image']['size'];
        $file_tmp   = $_FILES['profile_image']['tmp_name'];
        $file_type  = $_FILES['profile_image']['type'];
        $file_ext   = strtolower(end(explode('.', $_FILES['profile_image']['name'])));
        
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

  $id        = base64_decode($_GET['id']);
  $firstNam  = $_POST['first_name'];
  $lastNam   = $_POST['last_name'];
  $email     = $_POST['email'];
  $mobile    = $_POST['mobile'];
  $website   = $_POST['website'];
  $socalMeda = $_POST['social_media'];
  $address   = $_POST['address'];
  $profilImg = $file_name;
  $updetDate = date('Y-m-d h:i:s');
// echo $updetDate; die();
$sqlQuery = "UPDATE admin SET first_name = '$firstNam', last_name = '$lastNam', email = '$email', mobile = '$mobile', website = '$website', social_media = '$socalMeda', address = '$address', profile_image = '$profilImg', updated_at = '$updetDate' WHERE id = $id";
// echo $sqlQuery; die();
if ($conn->query($sqlQuery) === TRUE) {
  // echo "Record Updated successfully";
  header("Location:index.php");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>