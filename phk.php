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
    <h2 style="padding-top: 90px; padding-left: 5px; font-size: 18pt;"> Laporan PHK</h2>
      <div class="container-fluid" style="padding-top: 30px;">
        <!-- Small boxes (Stat box) -->
        <form action="process_upload.php" method="post" enctype="multipart/form-data">
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
              <label for="Alamat">Bidang Usaha</label>
              <input type="text" class="form-control" name="bidang" id="bidang" required>
            </div>
            <div class="form-group">
            <label for="bulan">Laporan dimulai Bulan</label>
            <select class="form-control" id="bulanAwal" name="bulanAwal">
            <option value=""></option>
              <option value="01">Januari</option>
              <option value="02">Februari</option>
              <option value="03">Maret</option>
              <option value="04">April</option>
              <option value="05">Mei</option>
              <option value="06">Juni</option>
              <option value="07">Juli</option>
              <option value="08">Agustus</option>
              <option value="09">September</option>
              <option value="10">Oktober</option>
              <option value="11">November</option>
              <option value="12">Desember</option>
            </select>
          </div>
          <div class="form-group">
            <label for="bulan">Laporan Sampai Bulan</label>
            <select class="form-control" id="bulanAkhir" name="bulanAkhir">
            <option value=""></option>
              <option value="01">Januari</option>
              <option value="02">Februari</option>
              <option value="03">Maret</option>
              <option value="04">April</option>
              <option value="05">Mei</option>
              <option value="06">Juni</option>
              <option value="07">Juli</option>
              <option value="08">Agustus</option>
              <option value="09">September</option>
              <option value="10">Oktober</option>
              <option value="11">November</option>
              <option value="12">Desember</option>
            </select>
          </div>
        <div class="mb-3">
          <label for="jmlphk">Jumlah PHK</label>
          <input type="number" class="form-control" name="jmlphk" required>
        </div>
    <div class="row">
      <div class="col-md-3">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="kategori[]" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Meninggal dunia</label>
          </div>
          <input type="text" class="form-control mb-2" name="jk1" placeholder="isi dengan jumlah karyawan PHK dengan alasan tersebut">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="kategori[]" id="exampleCheck2">
            <label class="form-check-label" for="exampleCheck2">Berakhir Masa Kerja Berdasarkan Perjanjian Kerja</label>
          </div>
          <input type="text" class="form-control" name="jk2" placeholder="isi dengan jumlah karyawan PHK dengan alasan tersebut">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="kategori[]" id="exampleCheck2">
            <label class="form-check-label" for="exampleCheck2">Mengundurkan Diri</label>
          </div>
          <input type="text" class="form-control" name="jk3" placeholder="isi dengan jumlah karyawan PHK dengan alasan tersebut">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="kategori[]" id="exampleCheck2">
            <label class="form-check-label" for="exampleCheck2">Penyebab Lain Selain Pilihan 1 sd 3 Yang Tidak Mendapatkan Jaminan Kesehatan Paling Lama 6 Bulan</label>
          </div>
          <input type="text" class="form-control" name="jk4" placeholder="isi dengan jumlah karyawan PHK dengan alasan tersebut">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="kategori[]" id="exampleCheck2">
            <label class="form-check-label" for="exampleCheck2">PHK Karena Perubahan Status ,Penggabungan atau Peleburan Perusahaan , dan Pengusaha tidak Bersedia Menerima Pekerja/Buruh di Perusahaannya </label>
          </div>
          <input type="text" class="form-control" name="jk5" placeholder="isi dengan jumlah karyawan PHK dengan alasan tersebut">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="kategori[]" id="exampleCheck2">
            <label class="form-check-label" for="exampleCheck2">PHK Yang Sudah Ada Putusan Pengadilan Hubungan Industrial</label>
          </div>
          <input type="text" class="form-control" name="jk6" placeholder="isi dengan jumlah karyawan PHK dengan alasan tersebut">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="kategori[]" id="exampleCheck2">
            <label class="form-check-label" for="exampleCheck2">PHK Karena Perusahaan Mengalami Kerugian Pailit Atau Perusahaan Mengalami Kerugian</label>
          </div>
          <input type="text" class="form-control" name="jk7" placeholder="isi dengan jumlah karyawan PHK dengan alasan tersebut">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="kategori[]" id="exampleCheck2">
            <label class="form-check-label" for="exampleCheck2">Pekerja Yang Mengalami Sakit Berkepanjangan , Mengalami Sakit Berkepanjangan,Mengalami Cacat Akibat Kecelakaan Kerja dan Tidak Dapat Melakukan Pekerjaannya Setelah Melampau Batas 12(dua belas) bulan</label>
          </div>
          <input type="text" class="form-control"  name="jk8" placeholder="isi dengan jumlah karyawan PHK dengan alasan tersebut">
          <!-- Tambahkan lebih banyak checkbox dan input field di sini jika diperlukan -->
    </div>
  </div>
            <div class="mb-3">
              <div class="form-group">
                <label for="pdf_file">Lampiran Surat Laporan PHK</label>
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
