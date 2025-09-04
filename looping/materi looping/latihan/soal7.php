<?php
$film = [
    ["judul" => "liom king", "rating" => 9.0],
    ["judul" => "anime", "rating" => 9.9],
    ["judul" => "drakor", "rating" => 8.1],
    ["judul" => "dracin", "rating" => 7.0],
    ["judul" => "kartun", "rating" => 8.5],
];

echo "daftar film dengan rating 8 ke atas;<br>";

foreach ($film as $f) {
    if ($f["rating"] >= 8) {
      echo "-" . $f["judul"] . " (rating; " . $f["rating"]. ")<br>";
    }
}