<?php
$totalbelanja = "250000";
if ($totalbelanja >= 50000) {
    echo "Selamat Anda Mendapatkan Diskon 50%";
} elseif ($totalbelanja >= 250000) {
    echo "Selamat Anda Mendapatkan Diskon 25%";
}
else {
    echo "Maaf Anda Tidak Mendapatkan Diskon";
}

