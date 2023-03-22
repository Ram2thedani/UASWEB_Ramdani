<?php
include "config.php";
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
  <title>AdminLTE 3 | User Profile</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
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
                <a href="index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="siswa.php" class="nav-link active">
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
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Siswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Data Siswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Tabel Siswa -->
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
                    <th>RFID</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = "SELECT * FROM siswa";
                    $data = $conn->prepare($query);
                    $data->execute();

                    while($siswa = $data->fetch()){

                    ?>
                  <tr>
                    <td><?php echo $siswa['RFID'] ?></td>
                    <td><?php echo $siswa['NAMA'] ?></td>
                    <td><?php echo $siswa['KELAS'] ?></td>
                    <td><a name="" id="" class="btn btn-warning" href="editsiswa.php?id=<?php echo $siswa['RFID'] ?>" role="button">Edit</a> 
                    <a href="hapus.php?id=<?php echo $siswa['RFID'] ?>" name="bthapus" id="" class="btn btn-danger" role="button">Hapus</a></td>
                  </tr>
                  <?php } ?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
<!-- disable enter -->


<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

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
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->

<!-- modal tambah -->
<div class="modal" tabindex="-1" role="dialog" id="modaltambah">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="">      
  <div class="form-group">
    <label for="RFID">Nomor RFID</label>
    <input type="text" class="form-control has-validation" id="RFID" name="RFID" placeholder="No. RFID" onKeyPress="return keyPressed(event)">
  </div>
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
  </div>
  <div class="form-group>
      <label for="kelas">Kelas</label>
      <select id="kelas" name="kelas" class="form-control">
        <option selected>Pilih kelas...</option>
        <option>X RPL 1</option>
        <option>XI RPL 1</option>
        <option>XII RPL 1</option>
        <option>X RPL 2</option>
        <option>XI RPL 2</option>
        <option>XII RPL 2</option>
        <option>X RPL 3</option>
        <option>XI RPL 3</option>
        <option>XII RPL 3</option>
        <option>X RPL 4</option>
        <option>XI RPL 4</option>
        <option>XII RPL 4</option>
        <option>X RPL 5</option>
        <option>XI RPL 5</option>
        <option>XII RPL 5</option>
        <option>X TPM 1</option>
        <option>XI TPM 1</option>
        <option>XII TPM 1</option>
        <option>X TPM 2</option>
        <option>XI TPM 2</option>
        <option>XII TPM 2</option>
        <option>X TPM 3</option>
        <option>XI TPM 3</option>
        <option>XII TPM 3</option>
        <option>X TPM 4</option>
        <option>XI TPM 4</option>
        <option>XII TPM 4</option>
      </select>
    </div>
   

      </div>
      <div class="modal-footer">
        <input type="submit" name="tambah" class="btn btn-primary"></input>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  </form>
</div>

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
<!-- /modal tambah -->

<!-- modal edit -->
<div class="modal" tabindex="-1" role="dialog" id="modaledit">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ubah Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="">      
  <div class="form-group">
    <label for="RFID">Nomor RFID</label>
    <input type="text" class="form-control has-validation" id="RFID" name="RFID" placeholder="No. RFID" onKeyPress="return keyPressed(event)">
  </div>
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
  </div>
  <div class="form-group>
      <label for="kelas">Kelas</label>
      <select id="kelas" name="kelas" class="form-control">
        <option selected>Pilih kelas...</option>
        <option>X RPL 1</option>
        <option>XI RPL 1</option>
        <option>XII RPL 1</option>
        <option>X RPL 2</option>
        <option>XI RPL 2</option>
        <option>XII RPL 2</option>
        <option>X RPL 3</option>
        <option>XI RPL 3</option>
        <option>XII RPL 3</option>
        <option>X RPL 4</option>
        <option>XI RPL 4</option>
        <option>XII RPL 4</option>
        <option>X RPL 5</option>
        <option>XI RPL 5</option>
        <option>XII RPL 5</option>
        <option>X TPM 1</option>
        <option>XI TPM 1</option>
        <option>XII TPM 1</option>
        <option>X TPM 2</option>
        <option>XI TPM 2</option>
        <option>XII TPM 2</option>
        <option>X TPM 3</option>
        <option>XI TPM 3</option>
        <option>XII TPM 3</option>
        <option>X TPM 4</option>
        <option>XI TPM 4</option>
        <option>XII TPM 4</option>
      </select>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- /modal edit -->

<!-- modal hapus -->
<div class="modal" tabindex="-1" role="dialog" id="modalhapus">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Yakin untuk menghapus?</p>
      </div>
      <div class="modal-footer">
        <form action="hapus.php" method="post">
          <input type="hidden" name="hapusid" id="hapusid"
        <button type="submit" name="bthapus" class="btn btn-primary">Hapus</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /modal hapus -->
</body>
</html>
