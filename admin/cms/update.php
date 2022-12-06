<?php
require_once(__DIR__."/../database/config.php");
session_start();
  $path = 'E:/xampp/htdocs/aashicare/admin/cms/cmsImages';
    // echo $path; die();
    if (isset($_FILES['cms_image'])) {
     // echo "<pre>";print_r($_FILES);
        $errors = array();
        $file_name  = $_FILES['cms_image']['name'];
        $file_size  = $_FILES['cms_image']['size'];
        $file_tmp   = $_FILES['cms_image']['tmp_name'];
        $file_type  = $_FILES['cms_image']['type'];
        $file_ext   = strtolower(end(explode('.', $_FILES['cms_image']['name'])));
        
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
  $id               = base64_decode($_GET['id']);
  $name             = $_POST['name'];
  $title            = $_POST['title'];
  $subTitle         = $_POST['sub_title'];
  $description      = $_POST['description'];
  $homAbutDecrpton  = $_POST['home_about_description'];
  $objective        = $_POST['objective'];
  $mission          = $_POST['mission'];
  $cmsImage         = $file_name;
  $ipAddress        = "1.1.1.1";
  $updetDate        = date('Y-m-d h:i:s');
  // echo $id; die();

$sqlQuery = "UPDATE cms SET name = '$name', title = '$title', sub_title = '$subTitle', cms_image = '$cmsImage', home_about_description = '$homAbutDecrpton', objective = '$objective', mission = '$mission', description = '$description', updated_at = '$updetDate' WHERE id = $id";
// echo $sqlQuery; die();
if ($conn->query($sqlQuery) === TRUE) {
  $_SESSION['product'] = "Record Updated successfully";
  if($id == 1) {
    header("Location:about.php");
  } elseif ($id == 2) {
    header("Location:services.php");
  } elseif ($id == 3) {
    header("Location:term_condition.php");
  } elseif ($id == 4) {
    header("Location:privacy_policy.php");
  } elseif ($id == 5) {
    header("Location:features.php");
  } 

} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>