<?php

class siswa
{
    public $nama1;
    public $umur;
    public $jenis_kelamin;
    
    public function __construct($nama1, $umur, $jenis_kelamin)
    {
        $this->nama1 = $nama1;
        $this->umur = $umur;
        $this->jenis_kelamin = $jenis_kelamin;
    }

    public function nongkrong()
    {
        return "sedang nongkrong di warung";
    }
}

$budi = new siswa("Budi", "16 Tahun", "laki-laki");
echo "Namanya adalah :" . $budi->nama1 . "<br>";
echo "Umur dia adalah :" . $budi->umur . "<br>";
echo "jenis kelamin :" . $budi->jenis_kelamin . "<br>";

echo "<hr>";

$dadan = new siswa("dadan", "17 Tahun", "laki-laki");
echo "Namanya adalah :" . $dadan->nama1 . "<br>";
echo "Umur dia adalah :" . $dadan->umur . "<br>";
echo "jenis kelamin :" . $dadan->jenis_kelamin . "<br>";

echo "<hr>";

$rehan = new siswa("rehan", "16 Tahun", "laki-laki");
echo "Namanya adalah :" . $rehan->nama1 . "<br>";
echo "Umur dia adalah :" . $rehan->umur . "<br>";
echo "jenis kelamin :" . $rehan->jenis_kelamin . "<br>";

echo "<hr>";

$maryana = new siswa("maryana", "16 Tahun", "perempuan");
echo "Namanya adalah :" . $maryana->nama1 . "<br>";
echo "Umur dia adalah :" . $maryana->umur . "<br>";
echo "jenis kelamin :" . $maryana->jenis_kelamin . "<br>";