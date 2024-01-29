<?php 
include 'koneksi.php';
$year = date("Y");
$datetime = date("d-m-Y");
    // Menghubungkan ke database (sama dengan file sebelumnya)
    
    if(isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
    // Mengambil data berdasarkan ID
        $sql = "SELECT * FROM user_pengaduan  WHERE id_pengaduan=$id";  // Ganti "nama_tabel" dengan nama tabel Anda
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            // Tampilkan data yang diambil berdasarkan ID
            
        

        } else {
            echo "Data tidak ditemukan";
        }
    }



 require_once 'vendor/autoload.php';

 $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('buktiphi.docx');

  $templateProcessor->setValues(
    [
       
        'id' => $data["id_pengaduan"],
        'tahun' => $year,
        'tgl_pengaduan' => $datetime,
        'sebagai'=> $data["sebagai"],
        'nama' => $data["nama"],
        'nomor_telp' => $data["nomor_telp"],
        'permasalahan' => $data["permasalahan"]
        
        
    ]
);








$pathToSave = $data["id_pengaduan"].'.docx'; 
$templateProcessor->saveAs($pathToSave);



















?>
<script>
     var fileName = "<?php echo $pathToSave; ?>"; // Ambil nilai dari variabel PHP
    // Setelah file berhasil dihasilkan dan disimpan
    // Ganti 'nama_file.docx' sesuai dengan nama file yang sesuai
    var downloadLink = document.createElement("a");
    downloadLink.href = fileName;
    downloadLink.download = fileName;
    downloadLink.click();
    
    // Setelah file diunduh, arahkan kembali ke halaman "phk.php"
    setTimeout(function() {
        window.location.href = "admin-daftar-pengaduan.php";
    }, 1000);
</script>