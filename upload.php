<?php
include 'koneksi.php';

// Ambil data dari form
$namaPerusahaan = $_POST['NamaPerusahaan'];
$alamat = $_POST['Alamat'];
$nomor = $_POST['notel'];
$nib = $_POST['NIB'];
$bidang = $_POST['Bidang'];
$jml = $_POST['jumlahLowongan'];
$jmh = $_POST['jumlahHadir'];
$jmd = $_POST['jumlahDiterima'];
$alasan = $_POST['Alasan'];

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
        $sql = "INSERT INTO rekrutmen (nama_perusahaan, alamat,nomor_telepon,NIB,Bidang_usaha,jumlah_lowongan,jumlah_hadir_seleksi,jumlah_yang_diterima,alasan_tidak_diterima, lampiran_laporan) 
                VALUES ('$namaPerusahaan','$alamat','$nomor','$nib','$bidang','$jml','$jmh','$jmd','$alasan','$target_file')";

        if ($conn->query($sql) === TRUE) {
            header("Location: buktilapor_rek.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Terjadi kesalahan saat mengunggah file.";
    }
}

$conn->close();
?>
