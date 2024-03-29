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
  <style>
    *,
    *::after,
    *::before{
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }
  
    .html{
        font-size: 62.5%;
    }
  
    .navbar input[type="checkbox"],
    .navbar .hamburger-lines{
        display: none;
    }
  
    .container{
        max-width: 1200px;
        width: 90%;
        margin: auto;
    }
  
    .navbar{
        box-shadow: 0px 5px 10px 0px #aaa;
        position: fixed;
        width: 100%;
        background: #fff;
        color: #000;
        opacity: 0.85;
        z-index: 100;
    }
  
    .navbar-container{
        display: flex;
        justify-content: space-between;
        height: 40px;
        align-items: center;
    }
  
    .menu-items{
        order: 2;
        display: flex;
    }
    .logo{
        order: 1;
        font-size: 1.5rem;
    }
  
    .menu-items li{
        list-style: none;
        margin-left: 1.5rem;
        font-size: 1.1rem;
    }
  
    .navbar a{
        color: #444;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease-in-out;
    }
  
    .navbar a:hover{
        color: #117964;
    }
  
    @media (max-width: 768px) {
  .navbar {
    flex-direction: column;
  }
  
  .navbar-container {
    height: auto;
  }
  .navbar .menu-items li a {
    font-size: 9px;
  }
  .menu-items {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap; /* Menjaga agar item tetap dalam satu baris */
    justify-content: center;
    background-color: #fff;
    opacity: 0.95;
    transition: all 0.3s;
    z-index: 100;
    position: static;
    margin-bottom: 0px;
  }
  
  .navbar input[type="checkbox"] {
    display: none;
  }

  .menu-items li {
    list-style: none;
    margin: 0;
    padding: 0px;
    text-align: center;
    border-bottom: 1px solid #ddd;
    flex: 1 0 auto; /* Lebar yang tetap, tidak melebar */
    display: flex;
    justify-content: right;
  }
  
  .menu-items li:last-child {
    border-bottom: none;
  }
  
  .menu-items li a {
    color: #444;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease-in-out;
    padding: 0px;
  }
  
  .menu-items li a:hover {
    color: #117964;
  }
  
  .navbar .logo {
    font-size: 10px;
    margin: 10px auto;
    margin-top:0px ;
    margin-left: 0px;
    margin-bottom: 0px;
  }
  .navbar .logo img {
    height: 0px; /* Atur tinggi logo sesuai keinginan */
  }
}
  
    @media (max-width: 500px){
        .navbar-container input[type="checkbox"]:checked ~ .logo{
            display: none;
        }
    }
    </style>
</head>
<body style="background-color: #F1F6F9;">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="navbar-container container">
        <ul class="menu-items">
            <li><a href="index.html">Menu Utama</a></li>
        </ul>
        <h1 class="logo"><img src="./login.png" style="height: 40px; padding-bottom: 0px; margin-right: 10px;"><b>Dinas Tenaga Kerja |</b> Kabupaten Jombang</h1>
    </div>
</nav>
  <!-- /.navbar -->

  

    <!-- Main content -->
    <section class="content" >
    <h2 style="padding-top: 90px; padding-left: 5px; font-size: 18pt;"> Laporan Rekrutmen</h2>
      <div class="container-fluid" style="padding-top: 30px;">
        <!-- Small boxes (Stat box) -->
        <form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
              <label for="namaPerusahaan" class="form-label">Nama Perusahaan</label>
              <input type="text" class="form-control" name="NamaPerusahaan" id="NamaPerusahaan" required>
            </div>
            <div class="mb-3">
              <label for="Alamat">Alamat</label>
              <input type="text" class="form-control" name="Alamat" id="Alamat" required>
            </div>
            <div class="mb-3">
              <label for="Alamat">Nomor Telepon</label>
              <input type="text" class="form-control" name="notel" id="notel" required>
            </div>
            <div class="mb-3">
              <label for="Alamat">NIB</label>
              <input type="text" class="form-control" name="NIB" id="NIB" required>
            </div>
            <div class="mb-3">
              <label for="Alamat">Bidang Usaha</label>
              <input type="text" class="form-control" name="Bidang" id="Bidang" required>
            </div>
          
        <div class="mb-3">
          <label for="jmlphk">Jumlah Lowongan</label>
          <input type="number" class="form-control" name="jumlahLowongan" required>
        </div>
        <div class="mb-3">
              <label for="Alamat">Jumlah Hadir Seleksi</label>
              <input type="text" class="form-control" name="jumlahHadir" required>
            </div>
            <div class="mb-3">
              <label for="Alamat">Jumlah Yang Diterima</label>
              <input type="text" class="form-control" name="jumlahDiterima" required>
            </div>
            <div class="mb-3">
              <label for="Alamat">Alasan Tidak Diterima</label>
            <textarea class="form-control input-textarea" name="Alasan" rows="5" placeholder=""></textarea>
            <div class="mb-3">
              <div class="form-group">
                <label for="pdf_file">Lampiran Surat Laporan Rekrutmen</label>
                <input type="file" class="form-control" name="filepdf" id="filepdf" accept=".pdf" required>
                <div class="form-text">*Format file berupa pdf</div>
              </div>
            </div>
        
        <input type="submit" value="Upload">
    </form>
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
