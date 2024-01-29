<?php
// Koneksi ke database
$servername = "localhost";
$username = "id21182852_root";
$password = "Kuhaku11@";
$dbname = "id21182852_db_pengaduan";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>