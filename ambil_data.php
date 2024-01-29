<?php
if (isset($_GET["id"])) {
    include 'koneksi.php';

    // Mengambil data berdasarkan ID
    $id = $_GET["id"];
    $sql = "SELECT * FROM reg_tbl WHERE id = $id";  // Ganti "nama_tabel" dengan nama tabel Anda
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        // Tampilkan data yang diambil berdasarkan ID
        echo "NO: " . $data["id"] . "<br>";
        echo "No_surat: " . $data["NO_SURAT"] . "<br>";
        echo "Nama_perusahaan: " . $data["NAMA_PERUSAHAAN"] . "<br>";

    } else {
        echo "Data tidak ditemukan";
    }

    $conn->close();
} else {
    echo "ID tidak ditemukan";
}
?>
