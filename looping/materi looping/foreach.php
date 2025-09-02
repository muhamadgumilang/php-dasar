<?php
$buah = ["Apel", "Jeruk", "Mangga", "Pisang"];

foreach ($buah as $b) {
    echo "Buah: $b <br>";
}

// contoh 2 array 
$siswa = [
    ["nama" => "Andi", "kelas" => "XI RPL"],
    ["nama" => "Budi", "kelas" => "X TKJ"],
    ["nama" => "Citra", "kelas" => "XI MM"],
];

foreach ($siswa as $data) {
    echo "Nama: " . $data["nama"] . " - Kelas: " . $data["kelas"] . "<br>";
}

// contoh nested foreach nested
$nilai = [
    "Andi" => ["Matematika" => 80, "IPA" => 90, "Bahasa" => 85],
    "Budi" => ["Matematika" => 75, "IPA" => 88, "Bahasa" => 79],
    "Citra" => ["Matematika" => 92, "IPA" => 81, "Bahasa" => 87],
];

foreach ($nilai as $nama => $mapel) {
    echo "Nilai $nama:<br>";
    foreach ($mapel as $pelajaran => $angka) {
        echo "- $pelajaran: $angka <br>";
    }
    echo "<br>";
}



?>

