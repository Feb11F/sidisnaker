<?php
// Koneksi ke database
include 'koneksi.php';
// Ambil data dari form
$namaPerusahaan = $_POST['NamaPerusahaan'];
$alamat = $_POST['Alamat'];
$bidang = $_POST['bidang'];
$tanggalMulai = $_POST['bulanAwal'];
$tanggalAkhir = $_POST['bulanAkhir'];
$jmlphk = $_POST['jmlphk'];
$nomor = $_POST['notel'];

$k1 = $_POST['jk1'];
$k2 = $_POST['jk2'];
$k3 = $_POST['jk3'];
$k4 = $_POST['jk4'];
$k5 = $_POST['jk5'];
$k6 = $_POST['jk6'];
$k7 = $_POST['jk7'];
$k8 = $_POST['jk8'];

// Proses upload file PDF
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["filepdf"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Cek apakah file benar-benar file PDF
if ($fileType != "pdf") {
    echo "Hanya file PDF yang diperbolehkan.";
    $uploadOk = 0;
}

// Cek apakah file berhasil diunggah
if ($uploadOk == 0) {
    echo "File tidak berhasil diunggah.";
} else {
    if (move_uploaded_file($_FILES["filepdf"]["tmp_name"], $target_file)) {
        // Jika file berhasil diunggah, masukkan data ke database
        $sql = "INSERT INTO phk (nama_perusahaan,alamat_perusahaan,nomor_telepon,bidang_usaha,jumlah_phk,meninggal_dunia , berakhir_masa_kerja , mengundurkan_diri, Penyebab_lain, phk_karena_perubahan_status,phk_yang_sudah_ada_putusan_pengadilan , phk_karena_perusahaan_rugi , pekerja_yang_mengalami_sakit_berkepanjangan,dokumen_phk,laporan_dimulai,laporan_diakhiri) 
        VALUES ('$namaPerusahaan', '$alamat','$nomor','$bidang','$jmlphk','$k1','$k2','$k3','$k4','$k5','$k6','$k7','$k8','$target_file','$tanggalMulai','$tanggalAkhir')";

        if ($conn->query($sql) === TRUE) {
            header("Location: buktilapor.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Terjadi kesalahan saat mengunggah file.";
    }
}



$conn->close();
?>
