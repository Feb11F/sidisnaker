<?php 
$year = date("Y");
$datetime = date("d-m-Y");
include 'koneksi.php';

    // Mengambil data berdasarkan ID
    $sql = "SELECT * FROM user_pengaduan ORDER BY id_pengaduan DESC LIMIT 1";  // Ganti "nama_tabel" dengan nama tabel Anda
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        // Tampilkan data yang diambil berdasarkan ID
        
    

    } else {
        echo "Data tidak ditemukan";
    }



 require_once 'vendor/autoload.php';

 $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('phi.docx');

  $templateProcessor->setValues(
    [
       
        'nama' => $data["nama"],
        'id' => $data["id_pengaduan"],
        'tahun' => $year,
        'tanggal' => $datetime

        
    ]
);








$pathToSave = $data["id_pengaduan"].'.docx'; 
$templateProcessor->saveAs($pathToSave);












// Check if the file exists
if (file_exists($pathToSave)) {
    // Send appropriate headers
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($pathToSave) . '"');
    header('Content-Length: ' . filesize($pathToSave));
    
    // Read the file and send its content
    readfile($pathToSave);
    exit;
} else {
    echo "File not found.";
}






?>
