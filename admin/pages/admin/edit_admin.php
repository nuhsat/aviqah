<?php
    include "../../db_connect.php";

    if($_GET['id']){
        $id = $_GET['id'];
      
        $sql = "SELECT * FROM admin WHERE id_admin = {$id}";
        $result = $connect->query($sql);
      
        $data = $result->fetch_assoc();
      
        $connect->close();
    }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Edit Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<?php include "../sidebar.php"?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Admin
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Admin</h3>
            </div>
            <!-- /.box-header
            <!-- form start -->
            <form role="form" action="php_action/edit.php" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama Admin</label>
                  <input type="text" class="form-control" id="nama" name="nama"  value="<?php echo $data['nama_admin']?>" required>
                </div>
                <div class="form-group">
                  <label for="email">Email Admin</label>
                  <input type="email" class="form-control" id="email" name="email"  value="<?php echo $data['email_admin']?>" required>
                </div>
                <div class="form-group">
                  <label for="password">Password Lama</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Jika Tidak ingin diganti Passwordnya, Kosongkan saja">
                </div>
                <div class="form-group">
                  <label for="passwordnew">Password Baru</label>
                  <input type="password" class="form-control" id="passwordnew" name="passwordnew" placeholder="Jika Tidak ingin diganti Passwordnya, Kosongkan saja">
                </div>
                <div class="form-group">
                  <input type="radio" id="superadmin" name="superadmin" value="0" <?php if($data['super_admin']=="0") echo "checked";?>> Admin <br>
                  <input type="radio" id="superadmin" name="superadmin" value="1" <?php if($data['super_admin']=="1") echo "checked";?>> Superadmin <br>
                </div>     
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <input type="hidden" name="id" value="<?php echo $data['id_admin']?>" />
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
