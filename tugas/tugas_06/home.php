<?php
session_start();

// Cek apakah sudah login
if (!isset($_SESSION['username'])) {
    echo "<p style='color:red;'>Akses ditolak! Silakan login terlebih dahulu.</p>";
    echo "<a href='tugas_6_expert.php'>Kembali ke Login</a>";
    exit();
}
?>

<h3>Selamat Datang di Homepage</h3>
<p>Halo, <?php echo $_SESSION['username']; ?>! Anda berhasil login.</p>
<a href="logout.php">Logout</a>