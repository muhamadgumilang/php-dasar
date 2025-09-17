<?php
class hewan {
    public $warna = "Oren", $umur;
    public function makan()
    {
        return "Hewan Sedang Makan";
    }
}

class kucing extends hewan
{
    public function suara()
    {
        return "Meong Meong";
    }
}

$kucing = new kucing();
echo $kucing->warna;
echo "<br>";