<!DOCTYPE html>
<html>
<head>
    <title>Form Upload File PDF</title>
</head>
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
<body>
    <h2>Form Upload File PDF</h2>
    <form action="process_upload.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
              <label for="namaPerusahaan" class="form-label">Nama Perusahaan</label>
              <input type="text" class="form-control" name="NamaPerusahaan" id="NamaPerusahaan" required>
            </div>
            <div class="mb-3">
              <label for="Alamat">Alamat</label>
              <input type="text" class="form-control" name="Alamat" id="Alamat" required>
            </div>
            <div class="row mb-3 ">
              <label for="tanggalMulai" class="col-sm-2 col-form-label"><b> laporan dimulai tanggal </b></label>
                <div class="col-sm-12 mt-3">
                  <input type="date" class="form-control" id="tanggalMulai" name="tanggalMulai" required>
                </div>
          </div>
          <div class="row mb-3 ">
            <label for="tanggalAkhir" class="col-sm-2 col-form-label"><b> laporan sampai tanggal </b></label>
              <div class="col-sm-12 mt-3">
                <input type="date" class="form-control" id="tanggalAkhir" name="tanggalAkhir" required>
              </div>
        </div>
        <div class="mb-3">
          <label for="jmlphk">Jumlah PHK</label>
          <input type="number" class="form-control" name="jmlphk" required>
        </div>
        <div class="mb-3">
          <label for="jmlrk">Jumlah Rekrutmen</label>
          <input type="text" class="form-control" name="jmlrk" required>
        </div>
            <div class="mb-3">
              <div class="form-group">
                <label for="pdf_file">Lampiran Dokumen PHK</label>
                <input type="file" class="form-control" name="filepdf" id="filepdf" accept=".pdf" required>
                <div class="form-text">*Format file berupa pdf</div>
              </div>
            </div>
        
        <input type="submit" value="Upload">
    </form>
</body>
</html>
