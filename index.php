<?php
session_start();
include ("config.php");
if (!isset($_SESSION["username"])) {
  header("location:login.php");
}

if (isset($_POST["tambah"])) {
  $query = "INSERT INTO siswa VALUES('$_POST[RFID]', '$_POST[nama]', '$_POST[kelas]')";
  $data = $conn->prepare($query);
  $data->execute();


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="siswa.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="barang.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barang</p>
                </a>
              </li>
              
            </ul>
          </li>
          <ul>
          <li class="nav-item">
            <div class="nav-link">
            <a class="btn btn-danger" onclick="yesno()">
            <i class="fa-sharp fa-solid fa-right-from-bracket"></i>
              <p>Logout</p>
            </a>
            </div>
          </li>
          </ul>
        </ul>
        
        <ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Data Siswa</h3>

                <p>Kelola Data Siswa</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="siswa.php" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Data Barang</h3>

                <p>Kelola Data Barang</p>
              </div>
              <div class="icon">
                <i class="ion ion-hammer"></i>
              </div>
              <a href="barang.php" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          
        </div>
        <!-- /.row -->

<!-- tabel peminjaman -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><a name="" id="" class="btn btn-primary" href="#" data-toggle="modal" data-target="#modaltambah" role="button">Tambah</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID Peminjaman</th>
                    <th>Nama Siswa</th>
                    <th>Barang Yg Dipinjam</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = "SELECT * FROM peminjaman INNER JOIN siswa ON peminjaman.RFID = siswa.RFID INNER JOIN barang ON 
                    peminjaman.ID_BARANG = barang.ID_BARANG";
                    $data = $conn->prepare($query);
                    $data->execute();

                    while($pinjam = $data->fetch()){

                    ?>
                  <tr>
                    <td><?php echo $pinjam['ID_PINJAM'] ?></td>
                    <td><?php echo $pinjam['NAMA'] ?></td>
                    <td><?php echo $pinjam['NAMA_BARANG'] ?></td>
                    <td>
                      <!-- <a name="btedit" id="btedit" class="btn btn-warning" href="editpeminjaman.php?id=<?php echo $pinjam['ID_PINJAM'] ?>" role="button">Edit</a>  -->
                    <a href="hapuspinjam.php?id=<?php echo $pinjam['ID_PINJAM']?>&idbrg=<?php echo $pinjam['ID_BARANG']?>" name="bthapus" id="" class="btn btn-danger" role="button">Kembalikan</a></td>
                  </tr>
                  <?php } 
                  
                 ?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


<!-- modal tambah -->
<div class="modal" tabindex="-1" role="dialog" id="modaltambah">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="pinjam.php">      
  <div class="form-group">
    <label for="RFID">Nomor RFID</label>
    <select id="kelas" name="RFID" class="form-control" >
        <option selected>Tap ID card anda...</option>

        <?php
                    $query = "SELECT * FROM siswa";
                    $data = $conn->prepare($query);
                    $data->execute();

                    while($peminjam = $data->fetch()){

                        echo "<option value='" . $peminjam['RFID'] . "'>" . $peminjam['RFID'] ."</option>";
                    }

                    
         ?>

      </select>
    <!-- <input type="text" class="form-control has-validation" id="RFID" name="RFID" placeholder="No. RFID" onKeyPress="return keyPressed(event)"> -->
  </div>
  <div class="form-group>
      <label for="kelas">Barang Yang Akan Dipinjam</label>
      <select id="kelas" name="idbarang" class="form-control" >
        <option selected>Pilih Barang...</option>

        <?php
                    $query = "SELECT * FROM barang WHERE STOK > 0";
                    $data = $conn->prepare($query);
                    $data->execute();

                    while($brg = $data->fetch()){

                        echo "<option value='" . $brg['ID_BARANG'] . "'>" . $brg['NAMA_BARANG'] . " (Stok: ". $brg['STOK'] . ")</option>";
                    }

                    
         ?>

      </select>
    </div>
   

      </div>
      <div class="modal-footer">
        <input type="submit" name="pinjam" class="btn btn-primary"></input>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  </form>
</div>


<!-- modal edit -->
<div class="modal" tabindex="-1" role="dialog" id="modaledit">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="pinjam.php">      
  <div class="form-group">
    <input type="hidden" id="idpinjam" name="idpinjam">
    <label for="RFID">Nomor RFID</label>
    <select id="RFID" name="RFID" class="form-control" >
        <option selected>Tap ID card anda...</option>

        <?php
                    $query = "SELECT * FROM siswa";
                    $data = $conn->prepare($query);
                    $data->execute();

                    while($peminjam = $data->fetch()){

                        echo "<option value='" . $peminjam['RFID'] . "'>" . $peminjam['RFID'] . "</option>";
                    }

                    
         ?>

      </select>
    <!-- <input type="text" class="form-control has-validation" id="RFID" name="RFID" placeholder="No. RFID" onKeyPress="return keyPressed(event)"> -->
  </div>
  <div class="form-group>
      <label for="barang">Barang Yang Akan Dipinjam</label>
      <select id="barang" name="idbarang" class="form-control" >
        <option selected>Pilih Barang...</option>

        <?php
                    $query = "SELECT * FROM barang WHERE STOK > 0";
                    $data = $conn->prepare($query);
                    $data->execute();

                    while($brg = $data->fetch()){

                        echo "<option value='" . $brg['ID_BARANG'] . "'>" . $brg['NAMA_BARANG'] . "</option>";
                    }

                    
         ?>

      </select>
    </div>
   

      </div>
      <div class="modal-footer">
        <input type="submit" name="pinjam" class="btn btn-primary"></input>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  </form>
</div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script>
function yesno() {
  let text = "Anda yakin untuk logout?";
  if (confirm(text) == true) {
    window.location = 'logout.php';
  } else {
    
  }
  document.getElementById("demo").innerHTML = text;
}
</script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script>
$(document).on("click", "#btedit", function(){
  let id = $(this).data('id');
  let nama = $(this).data('nama');
  let brg = $(this).data('brg');


  $(".modal-body #idpinjam").val(id);
  $(".modal-body #RFID").val(nama);
  $(".modal-body #barang").val(brg);
})

</script>
<script src="dist/js/pages/dashboard.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script type="text/javascript">
function keyPressed(e)
{
     var key;      
     if(window.event)
          key = window.event.keyCode; //IE
     else
          key = e.which; //firefox      

     return (key != 13);
}
</script>
</body>
</html>
