<?php
  require_once(__DIR__."/../database/config.php");
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <?php
      require_once(__DIR__."/../includes/header_assets1.php");
  ?>
<body class="hold-transition sidebar-mini">
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
            <h1>Products List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="col-sm-12">
                  <?php print_r($_SESSION);?>
                  <div class="float-sm-right">
                    <a href="create.php" class="btn btn-info">Add Product</a>
                  </div> 
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="text-center">
                  <tr>
                    <th>SN.</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Create Date</th>
                    <th>Update Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
<?php
  $sql = "SELECT id, product_name, product_description, product_image, created_at, updated_at FROM products where deleted_at = 0 ORDER BY id DESC";
  $result = mysqli_query($conn, $sql);    
    foreach ($result as $k=> $list) {
      $creDate     = new DateTime($list['created_at']);
      $createdDate = $creDate->format('Y-m-d');
      $upDate      = new DateTime($list['updated_at']);
      $updatedDate = $upDate->format('Y-m-d');
?>  
      <tr>
        <td><?php echo $k+1 ?></td>
        <td><?php echo $list['product_name'] ?></td>
        <td><?php echo $list['product_description'] ?></td>
        <td style="width: 20px; height: 20px">
          <img class="profile-user-img img-fluid img-circle" src="./productImages/<?php echo $list['product_image']; ?>" alt="Product Image">
        </td>
        <td><?php echo $createdDate ?></td>
        <td><?php echo $updatedDate ?></td>
        <td>
          <a href="view.php?id=<?php echo base64_encode($list['id']) ?>" class="btn btn-primary"><span class="fa fa-eye fa-sm"></span></a>&emsp;
          <a href="edit.php?id=<?php echo base64_encode($list['id']) ?>" class="btn btn-info"><span class="fa fa-edit fa-sm"></span></a>&emsp;
          <a href="delete.php?id=<?php echo base64_encode($list['id']) ?>" class="btn btn-danger"><span class="fa fa-trash fa-sm"></span></a>
        </td>
      </tr>
<?php 
  } 
?>
                
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
      session_unset();
      session_destroy();
  ?>
</body>
</html>
