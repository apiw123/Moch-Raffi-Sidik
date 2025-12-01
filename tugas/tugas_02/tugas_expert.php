<?php
// TUGAS 02 - EXPERT
// Membuat tabel angka 0–7 dengan ketentuan warna silver untuk angka pertama genap

echo "<h2>Tabel Angka 0–7</h2>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";

for ($i = 0; $i <= 7; $i++) {
    // Jika angka pertama genap, beri warna silver
    if ($i % 2 == 0) {
        echo "<tr style='background-color:silver;'>";
    } else {
        echo "<tr>";
    }

    // Kolom kedua juga dari 0–7
    for ($j = 0; $j <= 7; $j++) {
        echo "<td>$i,$j</td>";
    }

    echo "</tr>";
}

echo "</table>";
?>