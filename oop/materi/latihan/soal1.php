<?php

class kerangka
{
    public $nama;
    public $warna;
    public $merk;

    // method khusus yang akan di panggil pertama kali / di awal 
    public function __construct($nama, $warna, $merk)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->merk = $merk;
    }

    public function motor()
    {
        return "125 cc";
    }
}

$motor = new kerangka("Rx King", "Hitam", "yamaha");
echo "Nama Motor :" . $motor->nama . "<br>";
echo "Warna Motor :" . $motor->warna . "<br>";
echo "Jenis Motor :" . $motor->merk . "<br>";