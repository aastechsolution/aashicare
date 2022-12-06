<?php
  require_once(__DIR__."/admin/database/config.php");
?>
<?php
$sqlQuery = "SELECT id, email, mobile, website, social_media, address FROM admin where deleted_at = 0 ORDER BY id DESC";
$result = mysqli_query($conn, $sqlQuery);    
?>

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

    <div class="header-text" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    
    </div>

    <hr>
    <div id="contact" class="contact-us section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
            <form id="contact" action="database/contact_form.php" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-lg-6 offset-lg-3">
                  <div class="section-heading">
                    <h6>Contact Us</h6>
                    <h2>Fill Out The Form Below To <span>Get</span> In <em>Touch</em> With Us</h2>
                  </div>
                </div>
              </form>
              <?php
                foreach ($result as $k=> $row) {
              ?>    
                <div class="col-lg-12">
                  <div class="contact-info">
                    <ul>
                      <li>
                        <div class="icon">
                          <img src="assets/images/contact-icon-01.png" alt="email icon">
                        </div>
                        <a href="#"><?php echo $row['email'] ?></a>
                      </li>
                      <li>
                        <div class="icon">
                          <img src="assets/images/web.jpg" alt="phone">
                        </div>
                        <a href="<?php echo $row['website'] ?>" target="_blank"><?php echo $row['website'] ?></a>
                      </li>
                      <li>
                        <div class="icon">
                          <img src="assets/images/facebook.png" alt="facebook">
                        </div>
                        <a href="<?php echo $row['social_media'] ?>" target="_blank"><?php echo $row['social_media'] ?></a>
                      </li>
                      <li>
                        <div class="icon">
                          <img src="assets/images/contact-icon-02.png" alt="mobile">
                        </div>
                        <a href="#"><?php echo $row['mobile'] ?></a>
                      </li>
                      <li>
                        <div class="icon">
                          <img src="assets/images/contact-icon-03.png" alt="location">
                        </div>
                        <a href="#"><?php echo $row['address'] ?></a>
                      </li>
                    </ul>
                  </div>
                </div>
              <?php 
                } 
              ?>  
              </div>
            </form>
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