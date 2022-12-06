<?php
  require_once(__DIR__."/../admin/database/config.php");
?>
<?php
$sqlQuery = "SELECT id, admin_id, name, title, sub_title, objective, mission, description, cms_image FROM cms where id = 5 AND deleted_at = 0 ORDER BY id DESC";
$result = mysqli_query($conn, $sqlQuery);    
?>
<?php
  foreach ($result as $k=> $row) {
?>
<div id="features" class="features section">
  <div class="welcomePage">
    <div class="row">
      <div class="col-lg-12">
        <div class="skills-content">
          <div class="row">
            <div class="col-lg-12">
              <div class="part1">
                <img src="../../aashicare/assets/images/background/wel.avif" alt="">
              </div>
              <div class=" part2 text_welcome">
              <div>
                  <h1><?php echo $row['title'] ?></h1>
                    <div>
                      <p><?php echo $row['description'] ?></p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="features-content">
          <div class="row">
            <div class="col-lg-6">
              <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                <div class="first-number number">
                  <h2>Objective</h2>
                </div>
                <div class="icon"></div>
                <div class="line-dec"></div>
                <p><?php echo $row['objective'] ?></p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="features-item second-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="second-number number">
                  <h2>Mission</h2>
                </div>
                <div class="icon"></div>
                <div class="line-dec"></div>
                <p><?php echo $row['mission'] ?></p>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php 
 } 
?>