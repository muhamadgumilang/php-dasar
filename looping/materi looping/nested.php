<?php

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<hr>";

for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<hr>";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j >= $i; $j--) {
        echo "&nbsp";
    }
    for ($k = 1; $k <= $i; $k++) {
    echo "*";
    }
    echo "<br>";
}
?>