<?php
include 'koneksi.php';
            
if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $sql = "SELECT * FROM user_pengaduan where id_pengaduan = $id ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              
                while ($row = $result->fetch_assoc()) {
                  echo '<tr>';
        
                  echo $row["tgl_pengaduan"] 
                  echo '<td>' . $row["sebagai"] . '</td>';
                  echo '<td>' . $row["nama"] . '</td>';
                  echo '<td>' . $row["nomor_telp"] . '</td>';
                  echo '<td>' . $row["permasalahan"] . '</td>';
                  echo '<td><a href="' . $row["doc_bipartit"]. '">Download</a></td>';
                  echo '<td><a href="' . $row["doc_gaji"] . '">Download</a></td>';
                  echo '<td><a href="' . $row["doc_kartu_pekerja"]. '">Download</a></td>';
                  echo '<td><a href="' . $row["doc_kontrak_kerja"]. '">Download</a></td>';
                  echo '<td><a href="' . $row["doc_peraturan_perusahaan"]. '">Download</a></td>';
                  echo '<td><a href="' . $row["bukti_permasalahan"]. '">Download</a></td>';
                  echo '<td><a class="btn btn-warning" href="admin-detail-pengaduan.php">Detail</a></td>';
                  echo '</tr>';
                }

                echo '</table>';
              } else {
                echo "Tidak ada data.";
            }
        }
        
            $conn->close();
          
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dinas Tenaga Kerja | Kabupaten Jombang</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
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
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
 

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

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
                <a href="./admin-dashboard.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu Utama</p>
                </a>
              </li>
           
            </ul>
          </li>
        
        </ul>
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
          <div class="col-sm-8">
            <h1 class="m-0">Detail Pengaduan Perselisihan Hubungan Industrial</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" style="margin-top: 30px;">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
          <table class="table table-bordered">
            <tr>
              <th class="col-lg-3"> Nama Perusahaan  </th>
              <td style="font-size: 20pt;"> </td>
            </tr>
            <tr>
              <th> Alamat Perusahaan  </th>
              <td style="font-size: 20pt;"> </td>
            </tr>
            <tr>
              <th> Nama Pekerja / Buruh / <br>
              Serikat Pekerja / Serikat Buruh  </th>
              <td style="font-size: 20pt;"> </td>
            </tr>
            <tr>
              <th> Alamat  </th>
              <td style="font-size: 20pt;"> </td>
            </tr>
            <tr>
              <th> Tanggal Pertemuan  </th>
              <td style="font-size: 20pt;"> </td>
            </tr>
            <tr> 
              <th> Tempat Pertemuan  </th>
              <td style="font-size: 20pt;"> </td>
            </tr>
            <tr>
              <th> Pokok Masalah / Alasan Perselisihan  </th>
              <td></td>
            </tr>
            <tr>
              <th> Pendapat Pekerja / Pengusaha  </th>
              <td></td>
            </tr>
            <tr>
              <th> Kesimpulan / Hasil Pertemuan  </th>
              <td></td>
            </tr>
          
          </table>
                <a href="admin-cetak-risalah.html"> <button type="button" class="btn btn-success">Cetak</button></a>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
          
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Dinas Tenaga Kerja |</strong>
    Kabupaten Jombang
    <div class="float-right d-none d-sm-inline-block">
      
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

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
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
