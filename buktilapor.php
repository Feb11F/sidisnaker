<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bukti Pelaporan</title>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="bg-gray-100">
<div class="container mx-auto p-4">
  <div class="bg-white rounded-lg shadow-md p-8">
    <div class="text-center">
      <img class="mx-auto mb-4 w-32 h-32" src="login.png" alt="Logo Perusahaan">
      <h1 class="text-2xl font-semibold">Bukti Pelaporan</h1>
      <p id="tanggal"   class="mt-2 text-gray-500">Tanggal: </p>
    </div>
    <div class="mt-6">
        
      <p class="text-base">Terima kasih atas pelaporan Anda. Berikut adalah rincian laporan:</p>
      <ul class="list-disc list-inside mt-2">
        <li>Jenis Pelaporan: Laporan PHK</li>
        <li id="tanggal-pelaporan">Tanggal Pelaporan: </li>
        <?php
        include 'koneksi.php'; // Meng-include file koneksi.php
        $query = "SELECT * FROM phk ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>ID: " . $row['id'] . "</li>";
        }

        // Jangan lupa menutup koneksi setelah selesai
        mysqli_close($conn);
        ?>
        <li>Status: Ditinjau</li>
      </ul>
    </div>
    <div class="mt-6 text-center">
    <a class="btn btn-primary" href="suratphk.php">Cetak Bukti</a>
    </div>
  </div>
</div>
</body>
</html>

<script>
  const tanggalElement = document.getElementById('tanggal');
  const tanggalPelaporanElement = document.getElementById('tanggal-pelaporan');
  const now = new Date();
  const options = { year: 'numeric', month: 'long', day: 'numeric' };
  tanggalElement.textContent = 'Tanggal: ' + now.toLocaleDateString('id-ID', options);
  tanggalPelaporanElement.textContent = 'Tanggal Pelaporan: ' + now.toLocaleDateString('id-ID', options);
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

