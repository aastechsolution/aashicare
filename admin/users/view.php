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
            <h1>User Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
<?php
  $id = base64_decode($_GET['id']);
  $sqlQuery = "SELECT id, first_name, last_name, email, mobile, website, social_media, address, user_name, password, profile_image, created_at, updated_at FROM admin where id = $id";
  $result = mysqli_query($conn, $sqlQuery);
  // print_r($result); die();
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      // echo $row["id"]; die();
?>
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="./profileImage/<?php echo $row['profile_image']; ?>" alt="User profile picture">

                </div>

                <h3 class="profile-username text-center"><?php echo $row['first_name']." ".$row['last_name'] ?></h3>

                <p class="text-muted text-center">Admin</p>

                <button class="btn btn-primary btn-block"><b>Profile Picture</b></button>
              </div>
              <!-- /.card-body -->
            </div>
            
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Setting</a></li>
                </ul>
              </div><!-- /.card-header -->
        <form class="form-horizontal" method="post" action="update.php?id=<?php echo base64_encode($row['id']) ?>" enctype="multipart/form-data">    
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name'] ?>">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name'] ?>">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Mobile</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="mobile" value="<?php echo $row['mobile'] ?>">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Website</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="website" value="<?php echo $row['website'] ?>">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Social Media</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="social_media" value="<?php echo $row['social_media'] ?>">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">User Name</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="user_name" value="<?php echo $row['user_name'] ?>" readonly>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="password" value="<?php echo md5($row['password']) ?>" readonly>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Profile Image</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" name="profile_image" value="<?php echo $row['profile_image'] ?>"><?php echo $row['profile_image'] ?>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="address"> <?php echo $row['address'] ?></textarea>
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Update Profile</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
        </form>       
            </div>
            <!-- /.card -->
          </div>
<?php 
  }
    } else {
      echo "0 results";
    }
?>           
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
