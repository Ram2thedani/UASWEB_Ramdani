<?php
include ("config.php");
if (isset($_POST["signup"])) {
    try {
        $query = "INSERT INTO user VALUES('$_POST[username]', '$_POST[password]')";
        $data = $conn->prepare($query);
        $data->execute();
    
        echo '<script type="text/javascript">
           window.onload = function () { alert("Selamat, anda sudah terdaftar"); } 
    </script>';
    header("location: login.php");
    } catch (\Throwable $th) {
        echo '<script type="text/javascript">
           window.onload = function () { alert("Maaf username sudah digunakan,, silahkan log in jika anda sudah terdaftar"); } 
    </script>';
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#">Tools Management System</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"></p>

      <form method="post">
        <div class="input-group mb-3">
          <input name="username" type="text" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          
            <button type="submit" name="signup" class="btn btn-primary btn-block">Daftar</button>
         
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

    
      <p class="mb-0">
        <a href="login.php" class="text-center">Sudah punya akun?</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
