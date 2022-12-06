<?php
  require_once(__DIR__."/admin/database/config.php");
?>
<!DOCTYPE html>
<html lang="en">

  <?php
    require_once(__DIR__."/includes/header_assets.php");
  ?>

<body class="productBG">
<p>gor git purpose send the data</p>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <?php
      require_once(__DIR__."/includes/navigation.php");
    ?>
    <!-- ***** Header Area End ***** -->

    <div class="header-text" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    
    </div>
    <hr>
<?php
  $sqlQuery = "SELECT id, admin_id, name, title, sub_title, description, cms_image FROM cms where id = 1 AND deleted_at = 0 ORDER BY id DESC";
  $result = mysqli_query($conn, $sqlQuery);    
?>    
    <div id="about" class="about-us section">
      <div class="container">
        <?php
          foreach ($result as $k=> $row) {
        ?>
        <div class="row aboutUs">
          <div class="col-lg-12 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="section-heading">
              <h1><?php echo $row['name'] ?></h1>
              <h3><?php echo $row['title'] ?></h3>
            </div>
            <p><?php echo $row['description'] ?></p>
          </div>
        </div>
        <?php 
          } 
        ?>
      </div>
    </div>

<hr>
    <?php
      require_once(__DIR__."/includes/footer.php");
      require_once(__DIR__."/includes/footer_assets.php");
    ?>

</body>

</html>