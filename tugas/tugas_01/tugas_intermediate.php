<?php
$nama = "Moch raffi Sidik";
$umur = 16;
$digit = str_split((string)$umur);
$hasil_penjumlahan = array_sum($digit);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Intermediate</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #fffde7;
      padding: 30px;
    }
    .card {
      background: #fff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      max-width: 500px;
      margin: auto;
    }
    h2 {
      color: #f9a825;
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>🛠 Intermediate</h2>
    <p><strong>Nama:</strong> <?= $nama ?></p>
    <p><strong>Umur:</strong> <?= $umur ?> tahun</p>
    <p><strong>Penjumlahan digit umur:</strong> <?= $digit[0] . " + " . $digit[1] . " = " . $hasil_penjumlahan ?></p>
  </div>
</body>
</html>