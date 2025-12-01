<?php
function expert($umur) {
    $digits = str_split($umur); // pecah jadi array [1,6]
    $hasil = array_sum($digits); // jumlahkan
    return "Jumlah angka umur saya " . $hasil;
}

echo expert(16);
?>