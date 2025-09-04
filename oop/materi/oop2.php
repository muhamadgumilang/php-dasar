<?php

class kucing 
{
    public $nama;
    public $warna;
    public $jenis;

    // method khusus yang akan di panggil pertama kali / di awal 
    public function __construct($nama, $warna, $jenis)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->jenis = $jenis;
    }

    public function makan()
    {
        return "kucing sedang makan";
    }
}

$kucing1 = new kucing("Miko", "Abu-abu", "Anggora");
echo "Nama kucing :" . $kucing1->nama . "<br>";
echo "Warna kucing :" . $kucing1->warna . "<br>";
echo "Jenis kucing :" . $kucing1->jenis . "<br>";