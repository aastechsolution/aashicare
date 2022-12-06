<?php
  require_once(__DIR__."/admin/database/config.php");
?>
<!DOCTYPE html>
<html lang="en">

  <?php
    require_once(__DIR__."/includes/header_assets.php");
  ?>

<body class="productBG">
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
    <div  class="our-services section" data-wow-duration="1s" data-wow-delay="1s">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
              <h1>Spiritual Care Product</h1>
            </div>
          </div>
        </div>
      </div>
<?php
  $sqlQuery = "SELECT id, product_name, product_description, product_image FROM products where deleted_at = 0 ORDER BY id DESC";
  $result = mysqli_query($conn, $sqlQuery);    
?>      
      <div class="container-fluid">
        <div class="row product">
          <div class="col-lg-12 items">
            <?php
              foreach ($result as $k=> $list) {
            ?>
            <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="row">
                <div class="col-lg-4">
                  <span class="center">
                    <img src="./admin/products/productImages/<?php echo $list['product_image']; ?>" alt="">
                  </span>
                    <span class="text-success text-center h3"><?php echo $list['product_name'] ?></span>
                </div>
                <div class="col-lg-8">
                  <div class="right-content">
                    <h4><?php echo $list['product_name'] ?></h4>
                    <p><?php echo $list['product_description'] ?></p>
                  </div>
                </div>
              </div>
            </div>
            <?php 
              } 
            ?> 
          </div>
        </div>
      </div>     
    </div>

<hr>
    <?php
      require_once(__DIR__."/includes/footer.php");
      require_once(__DIR__."/includes/footer_assets.php");
    ?>

</body>

</html>