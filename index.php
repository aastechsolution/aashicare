<!DOCTYPE html>
<html lang="en">
  <?php
    require_once(__DIR__."/includes/header_assets.php");
  ?>
<body>
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

    <?php
      require_once(__DIR__."/includes/banner.php");
    ?>
    <!-- <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="left-content header-text" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="row">
                                <img src="assets/images/banner/image2.png" alt="Banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <hr>
    <?php
      require_once(__DIR__."/includes/features.php");
      require_once(__DIR__."/includes/about.php");
      require_once(__DIR__."/includes/product.php");
      require_once(__DIR__."/includes/counter2.php");
    ?>
<hr>
    <?php
      require_once(__DIR__."/includes/footer.php");
      require_once(__DIR__."/includes/footer_assets.php");
    ?>

</body>

</html>