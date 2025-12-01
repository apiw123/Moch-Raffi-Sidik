<?php
// BEGINNER
echo "<h3>BEGINNER</h3>";
?>

<form method="post" action="">
    <label>Masukkan Nama:</label><br>
    <input type="text" name="nama" required>
    <input type="submit" value="Kirim">
</form>

<?php
// Menampilkan hasil input jika form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    echo "<h4>Halo, $nama!</h4>";
}
?>