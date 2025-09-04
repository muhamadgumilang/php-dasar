<?php
class kucing {
    
    // properties atau attribute
    public $warna = "oren";
    public $jumlah_kaki = 4;

    // method atau fungsi
    public function bersuara() 
    {
        return "Meong meong";
    }

    public function berburu()
    {
        return "Kucing Berburu Tikus";
    }
}

// inisiasi (pembuatan object)

$kucing1 = new kucing();
echo "Warna kucing 1:" . $kucing1->warna . "<br>";
echo "Jumlah kaki kucing 1:" . $kucing1->jumlah_kaki . "<br>";
echo "Suara kucing 1:" . $kucing1 -> bersuara() . "<br>";