<?php
include 'koneksi.php';
$tgl_pengaduan = $_POST['tgl_pengaduan'];
$sebagai = $_POST['sebagai'];
$nama = $_POST['nama'];
$nomor_telp = $_POST['nomor_telp'];
$permasalahan = $_POST['permasalahan'];

$target_dir = "uploads/";
$target_file1 = $target_dir . basename($_FILES["doc_bipartit"]["name"]);
$uploadOk = 1;
$fileType1 = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
// Cek apakah file benar-benar file PDF
if ($fileType1 != "pdf") {
    echo "Hanya file PDF yang diperbolehkan.";
    $uploadOk = 0;
}


// Cek apakah file berhasil diunggah
if ($uploadOk == 0) {
    echo "File tidak berhasil diunggah.";
} else {
    if (move_uploaded_file($_FILES["doc_bipartit"]["tmp_name"], $target_file1)) {
        // Jika file berhasil diunggah, masukkan data ke database
    }else{
        $target_file1="";

    }
            // Jika file berhasil diunggah, masukkan data ke database
        $sql = "INSERT INTO user_pengaduan (tgl_pengaduan,sebagai,nama,nomor_telp,permasalahan,doc_bipartit)
        VALUES ('$tgl_pengaduan', '$sebagai','$nama','$nomor_telp','$permasalahan','$target_file1')";

        if ($conn->query($sql) === TRUE) {
            header("Location: buktipengaduan.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
}



$conn->close();
?>
