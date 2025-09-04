<?php
$nilai = [
    "andi" => ["matematika" => 80,],
    "Budi" => ["matematika" => 70, ],
    "Citra" => ["matematika" => 92,],
];
 foreach ($nilai as $nama => $mapel) {
    echo "Nilai $nama:<br>";
    foreach ($mapel as $pelajaran => $angka) {
        echo "- $pelajaran: $angka <br>";
        if ($angka >= 75) {
            echo "-selamat anda lulus";
        } else {
            echo "-anda tidak lulus";
        }
        
    }
    echo "<br>";
    echo "<br>";
 }