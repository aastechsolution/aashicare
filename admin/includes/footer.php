<?php
  require_once(__DIR__."/../../admin/database/config.php");
?>
<?php
$sqlQuery = "SELECT id, company_name, copyright_year FROM copyright where deleted_at = 0 ORDER BY id DESC";
$result = mysqli_query($conn, $sqlQuery);    

foreach ($result as $k=> $row) {
?>
<footer class="main-footer">
  <strong>Copyright &copy; <?php echo $row['copyright_year'] ?> <a href="#"><?php echo $row['company_name'] ?></a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Powered By</b> <?php echo $row['company_name'] ?>
  </div>
</footer>
<?php 
  } 
?> 