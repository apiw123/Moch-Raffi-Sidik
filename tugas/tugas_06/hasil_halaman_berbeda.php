<?php
// INTERMEDIATE - Hasil Tampilkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $kelas = htmlspecialchars($_POST['kelas']);

    echo "<h3>Hasil Input</h3>";
    echo "Nama: $nama <br>";
    echo "Kelas: $kelas <br>";
} else {
    echo "Akses langsung tidak diizinkan!";
}
?>