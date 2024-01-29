<?php 
include 'koneksi.php';
if (isset($_POST['submit']))
{
    $submit = mysqli_query($conn , "INSERT INTO user_pengaduan (tgl_pengaduan,nama_pekerja,nama_perusahaan,permasalahan,doc_bipartit,doc_gaji,doc_kartu_pekerja,doc_kontrak_kerja,doc_peraturan_perusahaan,bukti_permasalahan)
        Values ('$_POST[tgl_pengaduan]',
                '$_POST[nama_pekerja]',
                '$_POST[nama_perusahaan]',
                '$_POST[permasalahan]',
                '$_POST[doc_bipartit]',
                '$_POST[doc_gaji]',
                '$_POST[doc_kartu_pekerja]',
                '$_POST[doc_kontrak_kerja]',
                '$_POST[doc_peraturan_perusahaan]',
                '$_POST[bukti_permasalahan]')
            ");
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
  
    @media (max-width: 768px){
        .navbar{
            opacity: 0.95;
        }
  
        .navbar-container input[type="checkbox"],
        .navbar-container .hamburger-lines{
            display: block;
        }
  
        .navbar-container{
            display: block;
            position: relative;
            height: 64px;
        }
  
        .navbar-container input[type="checkbox"]{
            position: absolute;
            display: block;
            height: 32px;
            width: 30px;
            top: 20px;
            left: 20px;
            z-index: 5;
            opacity: 0;
            cursor: pointer;
        }
  
        .navbar-container .hamburger-lines{
            display: block;
            height: 28px;
            width: 35px;
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 2;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
  
        .navbar-container .hamburger-lines .line{
            display: block;
            height: 4px;
            width: 100%;
            border-radius: 10px;
            background: #333;
        }
        
        .navbar-container .hamburger-lines .line1{
            transform-origin: 0% 0%;
            transition: transform 0.3s ease-in-out;
        }
  
        .navbar-container .hamburger-lines .line2{
            transition: transform 0.2s ease-in-out;
        }
  
        .navbar-container .hamburger-lines .line3{
            transform-origin: 0% 100%;
            transition: transform 0.3s ease-in-out;
        }
  
        .navbar .menu-items{
            padding-top: 100px;
            background: #fff;
            height: 100vh;
            max-width: 300px;
            transform: translate(-150%);
            display: flex;
            flex-direction: column;
            margin-left: -40px;
            padding-left: 40px;
            transition: transform 0.5s ease-in-out;
            box-shadow:  5px 0px 10px 0px #aaa;
            overflow: scroll;
        }
  
        .navbar .menu-items li{
            margin-bottom: 1.8rem;
            font-size: 1.1rem;
            font-weight: 500;
        }
  
        .logo{
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 1.5rem;
        }
  
        .navbar-container input[type="checkbox"]:checked ~ .menu-items{
            transform: translateX(0);
        }
  
        .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line1{
            transform: rotate(45deg);
        }
  
        .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line2{
            transform: scaleY(0);
        }
  
        .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line3{
            transform: rotate(-45deg);
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
            <li><a href="user-dashboard.html">Menu Utama</a></li>
        </ul>
        <h1 class="logo"><img src="./login.png" style="height: 40px; padding-bottom: 0px; margin-right: 10px;"><b>Dinas Tenaga Kerja |</b> Kabupaten Jombang</h1>
    </div>
</nav>
  <!-- /.navbar -->

 

    <!-- Main content -->
    <section class="content">
    <h2 style="padding-top: 90px; padding-left: 5px; font-size: 18pt;"> Pengaduan Perselisihan Hubungan Industrial (PHI)</h2>
      <div class="container-fluid" style="padding-top: 30px;">
      <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <a href="user-mekanisme.html" class="small-box-footer">Panduan <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        <!-- Small boxes (Stat box) -->
          <form action="user-pengaduan-form-up-baru.php" id="form" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
            <div class="row mb-3 ">
                <label for="tgl_pengaduan" class="col-sm-2 col-form-label"><b> Tanggal Pengaduan </b></label>
                  <div class="col-sm-12 mt-3">
                    <input type="date" class="form-control" id="tgl_pengaduan" name="tgl_pengaduan" required>
                  </div>
            </div>
            <div class="mb-3 ">
              <label for="sebagai" class="form-label">Sebagai</label>
                <select class="form-control" id="sebagai" name="sebagai">
                <option value=""></option>
                  <option value="Pekerja">Pekerja</option>
                  <option value="Perusahaan">Perusaahaan</option>
                </select>
            </div>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
              <label for="nomor_telp" class="form-label">Nomor WA Yang Dapat Dihubungi</label>
              <input type="text" class="form-control" id="nomor_telp" name="nomor_telp" required>
            </div>
            <div class="mb-3">
              <label for="permasalahan">Permasalahan</label>
              <textarea class="form-control" id="permasalahan" name="permasalahan" style="height: 100px"></textarea>
            </div>
            <div class="mb-3">
              <div class="form-group">
                <label for="doc_bipartit">Lampiran Bukti Hasil Pertemuan Bipartit <i>( Pertemuan Antara Pekerja Dengan Perusahaan )</i></label>
                <input type="file" class="form-control" name="doc_bipartit" id="doc_bipartit" accept=".pdf" >
                <span id="errorMessage" style="color: red;"></span>
                <div class="form-text">*Format file berupa pdf</div>
              </div>
            </div>
            <button type="submit" name="submit" value="" class="btn btn-primary">Kirim</button>
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
<script>
        function validateForm() {
            var fileInput = document.getElementById('doc_bipartit');
            var errorMessage = document.getElementById('errorMessage');
            
            if (fileInput.value === '') {
                errorMessage.innerHTML = 'Anda harus mengunggah file bukti hasil bipartit ( pertemuan antara pekerja dengan perusahaan ).';
                return false; // Menghentikan pengiriman formulir jika file tidak diisi
            } else {
                errorMessage.innerHTML = ''; // Menghapus pesan kesalahan jika file telah dipilih
                return true; // Melanjutkan pengiriman formulir
            }
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
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
