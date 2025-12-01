<?php
// INTERMEDIATE
echo "<h3>INTERMEDIATE</h3>";

// Membuat array numerik multi dimensi
$siswa = [
    [101, "Rafi Sidiq", "Jl. Merdeka No.10", "081234567890", "Laki-laki"],
    [102, "Siti Aisyah", "Jl. Mawar No.5", "082134567891", "Perempuan"],
    [103, "Budi Santoso", "Jl. Anggrek No.7", "083234567892", "Laki-laki"]
];

// Menampilkan data siswa
foreach ($siswa as $data) {
    echo "NIS: " . $data[0] . "<br>";
    echo "Nama Lengkap: " . $data[1] . "<br>";
    echo "Alamat Rumah: " . $data[2] . "<br>";
    echo "No Telp/WA: " . $data[3] . "<br>";
    echo "Jenis Kelamin: " . $data[4] . "<br><br>";
}
?>