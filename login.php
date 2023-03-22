<?php
session_start();
include "config.php";
if(isset($_POST["login"])){
  if ($_POST["username"]=="" or $_POST["password"]=="") {
    echo "<center><h1>Username dan password harus diisi</h1></center>";
  }else {
    $username=$_POST["username"];
    $password=$_POST["password"];
    $query=$conn->prepare("SELECT * FROM user WHERE USERNAME=? && PASSWORD=?");
    $query->execute(array($username,$password));
    $control=$query->fetch(PDO::FETCH_OBJ);
    if($control>0){
      $_SESSION["username"]=$username;
      header("Location:index.php");
    }
    echo "<center><h1>Username atau password salah</h1></center>";
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
      <p class="login-box-msg">Sign in to start your session</p>

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
          
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
         
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

    
      <p class="mb-0">
        <a href="register.php" class="text-center">Belum punya akun?</a>
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
