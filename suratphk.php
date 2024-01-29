<?php 
$year = date("Y");
$datetime = date("d-m-Y");
include 'koneksi.php';

    // Mengambil data berdasarkan ID
    $sql = "SELECT * FROM phk ORDER BY id DESC LIMIT 1";  // Ganti "nama_tabel" dengan nama tabel Anda
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        // Tampilkan data yang diambil berdasarkan ID
        
    

    } else {
        echo "Data tidak ditemukan";
    }



 require_once 'vendor/autoload.php';

 $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('phk.docx');

  $templateProcessor->setValues(
    [
       
        'nama' => $data["nama_perusahaan"],
        'id' => $data["id"],
        'tahun' => $year,
        'tanggal' => $datetime

        
    ]
);








$pathToSave = $data["id"].'.docx'; 
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
        window.location.href = "index.html";
    }, 1000);
</script>