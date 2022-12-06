<?php
  require_once(__DIR__."/../database/config.php");
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
            <h1>Contact List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li> -->
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
                <h3 class="card-title">All Queries of contact page</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="text-center">
                  <tr>
                    <th>SN.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Create Date</th>
                    <th>Update Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
<?php
  $sql = "SELECT id, f_name, l_name, email, subject, message, created_at, updated_at FROM contact_us where deleted_at = 0 ORDER BY id DESC";
  $result = mysqli_query($conn, $sql);    
    foreach ($result as $k=> $list) {
      $creDate     = new DateTime($list['created_at']);
      $createdDate = $creDate->format('Y-m-d');
      $upDate      = new DateTime($list['updated_at']);
      $updatedDate = $upDate->format('Y-m-d');
?>  
      <tr>
        <td><?php echo $k+1 ?></td>
        <td><?php echo $list['f_name'] ." ". $list['l_name'] ?></td>
        <td><?php echo $list['email'] ?></td>
        <td><?php echo $list['subject'] ?></td>
        <td><?php echo $list['message'] ?></td>
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
  ?>
</body>
</html>
