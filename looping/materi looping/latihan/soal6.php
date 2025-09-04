<?php

$stok = [
    ["buku", 16],
    ["pensil", 8],
    ["penghapus", 6],
    ["pengserut", 9],
    ["pulpen", 2],
];

foreach ($stok as $item ) {
    if ($item[1] < 5 ) {
        echo "Stok $item[0] Hampir Habis adalah (Tinggal tersisa $item[1]) <br>";
    }
}