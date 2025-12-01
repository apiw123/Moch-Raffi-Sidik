<?php
// Tugas Intermediate
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", 
          "Juli", "Agustus", "September", "Oktober", "November"];

$bulanTambahan = "Desember"; // variabel tambahan
$bulan[] = $bulanTambahan; // menambahkan ke array

echo "<h3>Daftar Bulan dalam Setahun:</h3>";
foreach ($bulan as $b) {
    echo $b . "<br>";
}
?>