<?php
    class BMI
    {
        public $tanggal_lahir;
        public $berat;
        public $tinggi;

        public function __construct($tanggal_lahir, $berat, $tinggi)
        {
            $this->tanggal_lahir = $tanggal_lahir;
            $this->berat         = $berat;
            $this->tinggi        = $tinggi;
        }

        public function hasilBMI()
        {
            $tinggi_m = $this->tinggi / 100;
            $bmi      = $this->berat / ($tinggi_m * $tinggi_m);
            return round($bmi, 1);
        }

        public function umur()
        {
            $tanggal_lahir = new DateTime($this->tanggal_lahir);
            $sekarang      = new DateTime("today");
            if ($tanggal_lahir > $sekarang) {
                exit("0 tahun");
            }
            $y = $sekarang->diff($tanggal_lahir)->y;
            return $y . " tahun";
        }

        public function keteranganBMI()
        {
            $bmi = $this->hasilBMI();
            if ($bmi < 18.5) {
                return "Kekurangan berat badan";
            } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
                return "Normal (ideal)";
            } elseif ($bmi >= 25.0 && $bmi <= 29.9) {
                return "Kelebihan berat badan";
            } else {
                return "Obesitas";
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Berat Badan</label>
        <input type="text" name="berat" placholder="Berat Badan (kg)"><br>
        <label for="">Tinggi Badan</label>
        <input type="text" name="tinggi" placholder="Tinggi Badan (cm)">
        <br>
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tl" placeholder="Tanggal Lahir">
        <br>
        <button type="submit">Simpan</button>
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $bmi = new BMI($_POST['tl'], $_POST['berat'], $_POST['tinggi']);
            echo "Umur Anda : " . $bmi->umur() . "<br>";
            echo "Hasil BMI Anda : " . $bmi->hasilBMI();
            echo "<br> Keterangan : " . $bmi->keteranganBMI();
        }
    ?>
</body>
</html>