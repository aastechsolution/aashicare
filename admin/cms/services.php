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
            <h1>Services Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Service</li>
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
  $id = 2; // Services
  $sqlQuery = "SELECT id, name, title, sub_title, description, cms_image FROM cms where id = $id";
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
                  <label class="col-form-label">Name</label>
                  <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
                </div>

                <div class="col-md-6">
                  <label class="col-form-label">Title</label>
                  <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>">
                </div>
              </div>

              <div class="form-group row col-md-12">
                <div class="col-md-6">
                  <label class="col-form-label">Sub Title</label>
                  <input type="text" class="form-control" name="sub_title" value="<?php echo $row['sub_title']; ?>">
                </div>

                <div class="col-md-6">
                  <label class="col-form-label">Image</label>
                  <input type="file" class="form-control" name="cms_image" value="<?php echo $row['cms_image']; ?>">
                  <?php echo $row['cms_image']; ?>
                </div>
              </div>
            
              <div class="col-md-12">
                  <div class="card card-outline card-info">
                    <div class="card-header">
                      <label class="col-form-label">Description</label>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <textarea id="summernote" name="description"><?php echo $row['description']; ?></textarea>
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
