<?php
    include 'koneksi.php';

    // Query untuk mengambil data dari database
    $sql = "SELECT * FROM phk";
    $result = $conn->query($sql);
    ?>
<!DOCTYPE html>
<html>
<head>
  <title>Rekap Data Laporan PHK</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php
?>
<div class="container mt-4" id="myTable">
  <h2 >Data Laporan PHK</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>Nama Perusahaan</th>
        <th>Alamat</th>
        <th>Bidang Usaha</th>
        <th>Laporan Dimulai Bulan</th>
        <th>Laporan Sampai Bulan</th>
        <th>Jumlah PHK</th>
        <th>File PDF</th>

      </tr>
    </thead>
    <tbody>
    <?php
        // Koneksi ke database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "magang";
    
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }
    
        // Query untuk mengambil data dari database
        $sql = "SELECT * FROM phk";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
    
            while ($row = $result->fetch_assoc()) {
            '<tr>';
                echo '<td>' . $row["id"] . '</td>';
                echo '<td>' . $row["nama_perusahaan"] . '</td>';
                echo '<td>' . $row["alamat_perusahaan"] . '</td>';
                echo '<td>' . $row["bidang_usaha"] . '</td>';
                echo '<td>' . $row["laporan_dimulai"] . '</td>';
                echo '<td>' . $row["laporan_diakhiri"] . '</td>';
                echo '<td>' . $row["jumlah_phk"] . '</td>';
                echo '<td><a href="' . $row["dokumen_phk"] . '">Download PDF</a></td>';
                echo '</tr>';
            }
    
            echo '</table>';
        } else {
            echo "Tidak ada data.";
        }
    
        $conn->close();
      ?>
    </tbody>
  </table>
</div>
<button onclick="exportToExcel()">Export to</button>


<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
<script>
function exportToExcel() {
    const table = document.getElementById('myTable'); // Ganti dengan ID tabel Anda
    const wb = XLSX.utils.table_to_book(table);
    const wbout = XLSX.write(wb, { bookType: 'xlsx', bookSST: true, type: 'binary' });

    function s2ab(s) {
        const buf = new ArrayBuffer(s.length);
        const view = new Uint8Array(buf);
        for (let i = 0; i < s.length; i++) {
            view[i] = s.charCodeAt(i) & 0xFF;
        }
        return buf;
    }

    saveAs(new Blob([s2ab(wbout)], { type: 'application/octet-stream' }), 'table.xlsx');
}

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>