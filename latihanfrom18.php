<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <fieldset>
        <legend>
            FORM
        </legend>
        <form action= "" method="POST">    
        <label for="">nama</label> 
        <input type="text" name="nama" id="" required>
        <br>
         <label for="">tanggal lahir</label>
        <input type="date" name="tanggal_lahir" id="" required> 
        <br>
        <label for ="">jenis kelamin</label> 
        <input type="radio" name="jenis_kelamin" value="laki-laki"required>laki-laki
        <input type="radio" name="jenis_kelamin" value="perempuan" required>perempuan
        <br>
        <label for="">tinggi badan</label>
        <input type="number" name="tinggi_badan" id="" required>
        <br>
            <label for="">berat badan</label>
        <input type="number" name="berat_badan" id="" required>
        <br>
        <label for="">BMI/IMT</label>   
        <input type="number" name="bmi" id="">
        <br>
        <input type="submit" value="submit">
        </form>   
</fieldset>

<?php
class biodata {
    public $nama;
    public $tanggal_lahir;
    public $jenis_kelamin;
    public $tinggi_badan;
    public $berat_badan;
    public $bmi;

    public function __construct($a, $b, $c, $d, $e, $f)
    {
        $this->nama = $a;
        $this->tanggal_lahir = $b;
        $this->jenis_kelamin = $c;
        $this->tinggi_badan = $d;
        $this->berat_badan = $e;
        $this->bmi = $f;
    }
    public function tampilkan()
    {
        return "nama: " . $this->nama . "<br>" .
               "tanggal lahir: " . $this->tanggal_lahir . "<br>" .
               "jenis kelamin: " . $this->jenis_kelamin . "<br>" .
               "tinggi badan: " . $this->tinggi_badan . "<br>" .
               "berat badan: " . $this->berat_badan . "<br>";
                "BMI/IMT: " . round($this->bmi, 2) . "<br>";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['nama'];
    $b = $_POST['tanggal_lahir'];
    $c = $_POST['jenis_kelamin'];
    $d = $_POST['tinggi_badan'];
    $e = $_POST['berat_badan'];
    $f = $_POST['bmi'];

    $biodata = new biodata($a, $b, $c, $d, $e, $f);
    echo $biodata->tampilkan();
}
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tinggi_badan = $_POST['tinggi_badan'];
    $berat_badan = $_POST['berat_badan'];

    if ($tinggi_badan > 0) {
        $bmi = $berat_badan / (($tinggi_badan / 100) ** 2);
        echo "BMI/IMT: " . round($bmi, 2) . "<br>";

        if ($bmi < 18.5) {
            echo "Keterangan: Kekurangan berat badan";
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            echo "Keterangan: Normal (ideal)";
        } elseif ($bmi >= 25 && $bmi < 29.9) {
            echo "Keterangan: Kelebihan berat badan";
        } else {
            echo "Keterangan: Kegemukan (obesitas)";
        }
    } else {
        echo "Tinggi badan harus lebih besar dari nol.";
    }
    }
?>
 
</body>
</html>