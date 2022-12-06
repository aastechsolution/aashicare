<?php
  require_once(__DIR__."/../admin/database/config.php");
?>
<?php
$sqlQuery = "SELECT id, admin_id, name, title, sub_title, home_about_description, description, cms_image FROM cms where id = 1 AND deleted_at = 0 ORDER BY id DESC";
$result = mysqli_query($conn, $sqlQuery);    
?>
<div id="about" class="about-us section">
  <div class="container"> this is demo purpose use
    <?php
      foreach ($result as $k=> $row) {
    ?>
    <div class="row">
      <div class="col-lg-6">
        <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img src="../../aashicare/assets/images/background/abuts.jpeg" alt="About">
        </div>
      </div>
      <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="section-heading">
          <h1><?php echo $row['name'] ?></h1>
          <h2><?php echo $row['title'] ?></h2>
        </div>
        <p><?php echo $row['home_about_description'] ?></div>
      </div>
      <?php 
        } 
      ?>  
    </div>
  </div>
</div>