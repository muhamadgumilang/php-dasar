<?php
class kendaraan
{
    public $merk, $warna;

    public function __construct($merk, $warna)
    {
        $this->merk   =$merk;
        $this->warna  =$warna;
    }

    public function jalan()
    {
        return "Kendaraan Berjalan";
    }
}

class mobil extends kendaraan
{
    public $jumlah_pintu;
    public function __construct ($merk, $warna, $jumlah_pintu)
    {
        parent::__construct($merk, $warna);
        $this->jumlah_pintu = $jumlah_pintu;
    }

    public function info()
    {
        return "Merk         :" . $this->merk . "<br>";
               "warna        :" . $this->warna . "<br>";
               "jumlah Pintu :" . $this->jumlah_pintu . "br";
    }
}

$mobil = new mobil ("Toyota", "Biru", "4");
echo $mobil->info();
echo $mobil->jalan();