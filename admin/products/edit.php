<?php
  require_once(__DIR__."/../database/config.php");
?>
<!DOCTYPE html>
<html lang="en">
  <?php
      require_once(__DIR__."/../includes/header_assets1.php");
  ?>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php
      require_once(__DIR__."/../includes/navigation1.php");
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
      require_once(__DIR__."/../includes/aside1.php");
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Product Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Update Details</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>

<?php
  $id = base64_decode($_GET['id']);
  $sqlQuery = "SELECT id, product_name, product_description, product_image FROM products where id = $id";
  $result = mysqli_query($conn, $sqlQuery);
  // print_r($result); die();
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      // echo $row["id"]; die();     
?> 
      <form class="form-horizontal" method="post" action="update.php?id=<?php echo base64_encode($row['id']) ?>" enctype="multipart/form-data">
        <div class="card-body">
          <div class="row mt-4">
            <div class="col">
              <div class="form-group row col-md-12">
                <div class="col-md-6">
                  <label class="col-form-label">Product Name</label>
                  <input type="text" class="form-control" name="product_name" value="<?php echo $row['product_name']; ?>">
                </div>

                <div class="col-md-6">
                  <label class="col-form-label">Product Image</label>
                  <input type="file" class="form-control" name="product_image" value="<?php echo $row['product_image']; ?>">
                  <?php echo $row['product_image']; ?>
                </div>
              </div>
            
              <div class="col-md-12">
                  <div class="card card-outline card-info">
                    <div class="card-header">
                      <label class="col-form-label">Product Description</label>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <textarea id="summernote" name="product_description"><?php echo $row['product_description']; ?></textarea>
                    </div>
                  </div>
              </div>
            
            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-success">Update</button>
              </div>
            </div>
            </div>
          </div>
        </div>  
      </form>          
<?php 
  }
    } else {
      echo "0 results";
    }
?>          
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
      require_once(__DIR__."/../includes/footer.php");
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
  <?php
      require_once(__DIR__."/../includes/footer_assets1.php");
  ?>
</body>
</html>
