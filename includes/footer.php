<?php
  require_once(__DIR__."/../database/config.php");
?>
<?php
$sqlQuery = "SELECT id, company_name, copyright_year FROM copyright where deleted_at = 0 ORDER BY id DESC";
$result = mysqli_query($conn, $sqlQuery);

foreach ($result as $k=> $row) {
?>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <p>Copyright © <?php echo $row['copyright_year'] ?> <a href="#"><?php echo $row['company_name'] ?></a>. All Rights Reserved. 
        
        <br>Powered by <a rel="nofollow" href="#" title="Aashi Personal Care"><?php echo $row['company_name'] ?></a></p>
      </div>
    </div>
  </div>
</footer>
<?php 
  } 
?>