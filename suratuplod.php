<?php 


// Ambil data dari form
$Nomorsurat = $_POST['nomorsurat'];
$Namaperusahaan = $_POST['namaperusahaan'];
$Awalan = $_POST['awalan'];
$Tengah = $_POST['tengah'];
$Akhir = $_POST['akhir'];
$Namakaryawansatu = $_POST['namakaryawansatu'];
$Namakaryawandua = $_POST['namakaryawandua'];
$Dari = $_POST['dari'];
$Selesai = $_POST['selesai'];
$tgl = $_POST['tercatattgl'];
 require_once 'vendor/autoload.php';

 $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('template.docx');

  $templateProcessor->setValues(
    [
       
        'nama_perusahaan' => $Nomorsurat,
        'nomor_surat' => $Namaperusahaan,
        'karyawan_satu' => $Awalan,
        'karyawan_dua' => $Tengah,
        'dari' => $Akhir,
        'selesai' => $Namakaryawansatu,
        'awalan' => $Namakaryawandua,
        'tengah' => $Dari,
        'akhir' => $Selesai,
        'tgl_catatan' => $tgl
        
    ]
);








$pathToSave = $Namaperusahaan.'.docx'; 
$templateProcessor->saveAs($pathToSave);

















?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dinas Tenaga Kerja | Kabupaten Jombang</title>
</head>
</html>
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