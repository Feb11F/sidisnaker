
<?php
include 'koneksi.php';

            // Query untuk mengambil jumlah data dari database (ganti sesuai tabel dan kolom Anda)
            $sql = "SELECT COUNT(DISTINCT nama_perusahaan) AS jumlah_data_unik FROM phk;";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // Jika data ditemukan, ambil jumlahnya
              $row = $result->fetch_assoc();
              $totalData = $row["jumlah_data_unik"];
            } else {
              $totalData = 0;
            }

                        // Query untuk mengambil jumlah data dari database (ganti sesuai tabel dan kolom Anda)
            $sql2 = "SELECT COUNT(id) AS jumlah_laporan FROM phk;";
            $result2 = $conn->query($sql2);

            if ($result2->num_rows > 0) {
              // Jika data ditemukan, ambil jumlahnya
              $row2 = $result2->fetch_assoc();
              $totalData2 = $row2["jumlah_laporan"];
            } else {
              $totalData2 = 0;
            }

                                    // Query untuk mengambil jumlah data dari database (ganti sesuai tabel dan kolom Anda)
            $sql3 = "SELECT SUM(jumlah_phk) AS jumlah_phk FROM phk;";
            $result3 = $conn->query($sql3);

            if ($result3->num_rows > 0) {
              // Jika data ditemukan, ambil jumlahnya
              $row3 = $result3->fetch_assoc();
              $totalData3 = $row3["jumlah_phk"];
            } else {
              $totalData3 = 0;
            }
                                    // Query untuk mengambil jumlah data dari database (ganti sesuai tabel dan kolom Anda)
            $sql4 = "SELECT SUM(meninggal_dunia) AS jumlah_meninggal FROM phk;";
            $result4 = $conn->query($sql4);

            if ($result4->num_rows > 0) {
              // Jika data ditemukan, ambil jumlahnya
              $row4 = $result4->fetch_assoc();
              $totalData4 = $row4["jumlah_meninggal"];
            } else {
              $totalData4 = 0;
            }
                                                // Query untuk mengambil jumlah data dari database (ganti sesuai tabel dan kolom Anda)
            $sql5 = "SELECT SUM(berakhir_masa_kerja) AS bmk FROM phk;";
            $result5 = $conn->query($sql5);

            if ($result5->num_rows > 0) {
              // Jika data ditemukan, ambil jumlahnya
              $row5 = $result5->fetch_assoc();
              $totalData5 = $row5["bmk"];
            } else {
              $totalData5 = 0;
            }
                                                // Query untuk mengambil jumlah data dari database (ganti sesuai tabel dan kolom Anda)
            $sql6 = "SELECT SUM(mengundurkan_diri) AS md FROM phk;";
            $result6 = $conn->query($sql6);

            if ($result6->num_rows > 0) {
              // Jika data ditemukan, ambil jumlahnya
              $row6 = $result6->fetch_assoc();
              $totalData6 = $row6["md"];
            } else {
              $totalData6 = 0;
            }
                                                // Query untuk mengambil jumlah data dari database (ganti sesuai tabel dan kolom Anda)
            $sql7 = "SELECT SUM(penyebab_lain) AS pl FROM phk;";
            $result7 = $conn->query($sql7);

            if ($result7->num_rows > 0) {
              // Jika data ditemukan, ambil jumlahnya
              $row7 = $result7->fetch_assoc();
              $totalData7 = $row7["pl"];
            } else {
              $totalData7 = 0;
            }
                                                // Query untuk mengambil jumlah data dari database (ganti sesuai tabel dan kolom Anda)
            $sql8 = "SELECT SUM(phk_karena_perubahan_status) AS perubahan_status FROM phk;";
            $result8 = $conn->query($sql8);

            if ($result8->num_rows > 0) {
              // Jika data ditemukan, ambil jumlahnya
              $row8 = $result8->fetch_assoc();
              $totalData8 = $row8["perubahan_status"];
            } else {
              $totalData8 = 0;
            }
                                                            // Query untuk mengambil jumlah data dari database (ganti sesuai tabel dan kolom Anda)
            $sql9 = "SELECT SUM(phk_yang_sudah_ada_putusan_pengadilan) AS perubahan_putusan FROM phk;";
            $result9 = $conn->query($sql9);

            if ($result9->num_rows > 0) {
              // Jika data ditemukan, ambil jumlahnya
              $row9 = $result9->fetch_assoc();
              $totalData9 = $row9["perubahan_putusan"];
            } else {
              $totalData9 = 0;
            }
                                                            // Query untuk mengambil jumlah data dari database (ganti sesuai tabel dan kolom Anda)
            $sql10 = "SELECT SUM(phk_karena_perusahaan_rugi) AS perusahaan_rugi FROM phk;";
            $result10 = $conn->query($sql10);

            if ($result10->num_rows > 0) {
              // Jika data ditemukan, ambil jumlahnya
              $row10 = $result10->fetch_assoc();
              $totalData10 = $row10["perusahaan_rugi"];
            } else {
              $totalData10 = 0;
            }
                                                            // Query untuk mengambil jumlah data dari database (ganti sesuai tabel dan kolom Anda)
            $sql11 = "SELECT SUM(pekerja_yang_mengalami_sakit_berkepanjangan) AS sakit FROM phk;";
            $result11 = $conn->query($sql11);

            if ($result11->num_rows > 0) {
              // Jika data ditemukan, ambil jumlahnya
              $row11 = $result11->fetch_assoc();
              $totalData11 = $row11["sakit"];
            } else {
              $totalData11 = 0;
            }
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
        flex-wrap: nowrap;
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
        flex: 1 0 auto;
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
      .logo {
      order: 1;
      font-size: 1.5rem;
    }
         /* New styles for logo */
         .logo-container {
      text-align: center;
      margin-top: 20px;
      margin-bottom: 20px;
      margin-left: 80px;
    }
      .navbar .logo {
        font-size: 10px;
        margin: 10px auto;
        margin-top: 0px;
        margin-left: 0px;
        margin-bottom: 0px;
      }
      .navbar .logo img {
        height: 0px;
      }}

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
    <section class="content" >
    <h2 style="padding-top: 90px; padding-left: 5px; font-size: 18pt;"> Rekap Laporan PHK</h2>
      <div class="container-fluid" style="padding-top: 30px;">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $totalData; ?></h3>

                <p>jumlah perusahaan pelapor</p>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $totalData2; ?></h3>

                <p>Jumlah Laporan </p>
              </div>
              <a href="Data_lapor_phk.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3><?php echo $totalData3; ?></h3>

                <p>Jumlah PHK</p>
              </div>
              
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
                    <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box ">
              <div class="inner">
              <h3><?php echo $totalData4; ?></h3>

                <p>Meninggal dunia</p>
              </div>
              
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box ">
              <div class="inner">
              <h3><?php echo $totalData5; ?></h3>

                <p>Berakhir Masa Kerja</p>
              </div>
              
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box ">
              <div class="inner">
              <h3><?php echo $totalData6; ?></h3>

                <p>Mengundurkan Diri</p>
              </div>
              
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
                   <!-- ./col -->
                   <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box ">
              <div class="inner">
              <h3><?php echo $totalData7; ?></h3>

                <p>Penyebab Lain</p>
              </div>
              
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
                             <!-- ./col -->
                             <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box ">
              <div class="inner">
              <h3><?php echo $totalData8; ?></h3>

                <p>PHK Karena Perubahan Status</p>
              </div>
              
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
                             <!-- ./col -->
                             <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box ">
              <div class="inner">
              <h3><?php echo $totalData9; ?></h3>

                <p>PHK Yang Sudah Ada Putusan Pengadilan</p>
              </div>
              
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
                             <!-- ./col -->
                             <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box ">
              <div class="inner">
              <h3><?php echo $totalData10; ?></h3>

                <p>PHK Karena Perusaahaan Merugi</p>
              </div>
              
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
                             <!-- ./col -->
                             <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box ">
              <div class="inner">
              <h3><?php echo $totalData11; ?></h3>

                <p>Sakit Berkepanjangan</p>
              </div>
              
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
        </div>
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
