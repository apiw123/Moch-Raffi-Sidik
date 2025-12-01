<?php
// EXPERT
echo "<h3>EXPERT</h3>";

// Membuat array associative multi dimensi
$dataSiswa = [
    [
        "NIS" => 201,
        "Nama" => "Andi Pratama",
        "Alamat" => "Jl. Kenanga No.3",
        "Telp" => "081345678901",
        "JenisKelamin" => "Laki-laki"
    ],
    [
        "NIS" => 202,
        "Nama" => "Dewi Lestari",
        "Alamat" => "Jl. Melati No.8",
        "Telp" => "082345678902",
        "JenisKelamin" => "Perempuan"
    ],
    [
        "NIS" => 203,
        "Nama" => "Rizky Ananda",
        "Alamat" => "Jl. Dahlia No.12",
        "Telp" => "083345678903",
        "JenisKelamin" => "Laki-laki"
    ]
];

// Menampilkan setiap data siswa
foreach ($dataSiswa as $siswa) {
    echo "NIS: " . $siswa["NIS"] . "<br>";
    echo "Nama Lengkap: " . $siswa["Nama"] . "<br>";
    echo "Alamat Rumah: " . $siswa["Alamat"] . "<br>";
    echo "No Telp/WA: " . $siswa["Telp"] . "<br>";
    echo "Jenis Kelamin: " . $siswa["JenisKelamin"] . "<br><br>";
}
?>