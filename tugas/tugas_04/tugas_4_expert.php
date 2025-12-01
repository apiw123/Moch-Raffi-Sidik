<?php
// Tugas Expert
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];

echo "<h3>Hari dalam Seminggu:</h3>";

foreach ($hari as $h) {
    echo "<div style='display:inline-block; 
                     width:50px; 
                     padding:10px; 
                     margin:5px; 
                     background-color:pink; 
                     text-align:center; 
                     border:2px solid maroon; 
                     border-radius:8px;'>
            $h
          </div>";
}
?>