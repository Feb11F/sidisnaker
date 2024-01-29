<?php
include 'koneksi.php';

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM user_pengaduan WHERE id_pengaduan = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
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
            <li><a href="admin-dashboard.html">Menu Utama</a></li>
        </ul>
        <h1 class="logo"><img src="./login.png" style="height: 40px; padding-bottom: 0px; margin-right: 10px;"><b>Dinas Tenaga Kerja |</b> Kabupaten Jombang</h1>
    </div>
</nav>
  <!-- /.navbar -->

  
    <!-- Main content -->
    <section class="content">
    <h2 style="padding-top: 90px; padding-left: 5px; font-size: 18pt;"> Detail Pengaduan Perselisihan Hubungan Industrial (PHI)</h2>
      <div class="container-fluid" style="padding-top: 30px;">
        <!-- Small boxes (Stat box) -->
          <table class="table table-bordered">
            <tr>
              <th class="col-lg-3"> Nomor Pengaduan  </th>
              <td style="font-size: 12pt;"><?php echo $row['id_pengaduan']; ?> </td>
            </tr>
            <tr>
              <th> Tanggal Pengaduan  </th>
              <td style="font-size: 12pt;"><?php echo $row['tgl_pengaduan']; ?></td>
            </tr>
            <tr>
              <th> Sebagai </th>
              <td style="font-size: 12pt;"><?php echo $row['sebagai']; ?> </td>
            </tr>
            <tr>
              <th> Nama  </th>
              <td style="font-size: 12pt;"><?php echo $row['nama']; ?> </td>
            </tr>
            <tr>
              <th> Nomor Telepon  </th>
              <td style="font-size: 12pt;"><?php echo $row['nomor_telp']; ?> </td>
            </tr>
            <tr> 
              <th colspan=2> Permasalahan :</th>
            </tr>
            <tr>
                <td colspan=2 style="font-size: 12pt;"><?php echo $row['permasalahan']; ?> </td>
            </tr>
          
          </table>
          <?php 
          echo "<td><a href='admin-bukti-pengaduan.php?id=" . $row["id_pengaduan"] . "' class='btn btn-success'>Cetak</a></td>";
            ?>
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
<?php
    } else {
        echo "Data not found.";
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>