<?php
$nama = "Moch Raffi Sidik";
$alamat = "Jl. Kenangan No. 27";
$jk = "Laki-laki";
$hp = "081234567890";

// Hitung jumlah karakter
$totalString = strlen($nama) + strlen($alamat) + strlen($jk) + strlen($hp);

// Jumlahkan angka dari no HP
$angkaHp = preg_replace("/[^0-9]/", "", $hp);
$jumlahAngka = array_sum(str_split($angkaHp));

// Total nilai
$nilai = $totalString + $jumlahAngka;

// Logika pengecekan
$hasilCek = "";
if ($nilai < 30 && $nilai % 2 == 1) {
  $hasilCek = "✅ Nilai < 30 dan ganjil";
} elseif ($nilai > 30 || $nilai % 2 == 2) {
  $hasilCek = "✅ Nilai > 30 atau genap";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Expert</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #e8f5e9;
      padding: 30px;
    }
    .card {
      background: #fff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      max-width: 600px;
      margin: auto;
    }
    h2 {
      color: #388e3c;
    }
    pre {
      background: #f1f8e9;
      padding: 10px;
      border-radius: 5px;
      overflow-x: auto;
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>🧠 Expert</h2>
    <p><strong>Nama:</strong> <?= $nama ?></p>
    <p><strong>Alamat:</strong> <?= $alamat ?></p>
    <p><strong>Jenis Kelamin:</strong> <?= $jk ?></p>
    <p><strong>No. HP:</strong> <?= $hp ?></p>
    <p><strong>Total Nilai:</strong> <?= $nilai ?></p>
    <p><strong>Logika Cek:</strong> <?= $hasilCek ?></p>

    <h3>🔍 Debug (vardump):</h3>
    <pre>
<?php
var_dump($totalString);
var_dump($jumlahAngka);
var_dump($nilai);
?>
    </pre>
  </div>
</body>
</html>