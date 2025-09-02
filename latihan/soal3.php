<?php
$totalbelanja = 600000;
$discon = 0;

if ($totalbelanja >= 500000) {
    $discon = 0.2 * $totalbelanja;
} elseif ($totalbelanja >= 250000) {
    $discon = 0.1 * $totalbelanja;
} else {
    $discon = 0;
}

echo "Total:" . $totalbelanja . "<br>" ;
echo "Discount :" . $discon . "<br>";
echo "Total After Discount :" . ($totalbelanja - $discon) . "<br>";
