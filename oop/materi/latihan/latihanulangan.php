<?php
class Bioskop
{
    public $jumlah, $hari, $kursi;
    public $hargaDasar = 50000;
    public $biayaWeekend = 10000;
    public $biayaVIP = 20000;

    public function __construct($jumlah, $hari, $kursi)
    {
        $this->jumlah = $jumlah;
        $this->hari = $hari;
        $this->kursi = $kursi;
    }

    public function hargaPerTiket()
    {
        $harga = $this->hargaDasar;
        if ($this->hari == "Sabtu" || $this->hari == "Minggu") {
            $harga += $this->biayaWeekend;
        }
        if ($this->kursi == "VIP") {
            $harga += $this->biayaVIP;
        }
        return $harga;
    }

    public function totalHarga()
    {
        return $this->hargaPerTiket() * $this->jumlah;
    }

    public function pajak()
    {
        return $this->totalHarga() * 0.05;
    }

    public function totalBayar()
    {
        return $this->totalHarga() + $this->pajak();
    }
}

$tiket = null;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $jumlah = ($_POST['jumlah']) ? (int)$_POST['jumlah'] : 0;
    $hari = ($_POST['hari']) ? $_POST['hari'] : "";
    $kursi = ($_POST['kursi']) ? $_POST['kursi'] : "";

    $tiket = new Bioskop($jumlah, $hari, $kursi);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title> Tiket Bioskop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <form method="post">
        <div class="card col-md-6 mx-auto p-4 shadow">
            <h4 class="text-center mb-4">Bioskop</h4>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah Tiket</label>
                <input type="number" class="form-control" name="jumlah" id="jumlah" min="1" required>
            </div>

            <div class="mb-3">
                <label for="hari" class="form-label">Hari</label>
                <select class="form-select" name="hari" id="hari" required>
                    <option value="" selected disabled>Pilih Hari</option>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="kursi" class="form-label">Jenis Kursi</label>
                <select class="form-select" name="kursi" id="kursi" required>
                    <option value="" selected disabled>Pilih Jenis Kursi</option>
                    <option value="Reguler">Reguler</option>
                    <option value="VIP">VIP</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary w-100">Hitung</button>
        </div>
    </form>

    <?php if ($tiket !== null): ?>
        <div class="card col-md-8 mx-auto mt-4 p-4 shadow">
            <h5 class="mb-3 text-center">Detail Pembayaran</h5>
            <table class="table table-bordered">
                <thead class="table-light">
                <tr>
                    <th>Jumlah Tiket</th>
                    <th>Hari</th>
                    <th>Jenis Kursi</th>
                    <th>Harga per Tiket</th>
                    <th>Total Harga</th>
                    <th>Pajak (5%)</th>
                    <th>Total Bayar</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?= $tiket->jumlah ?></td>
                    <td><?= $tiket->hari ?></td>
                    <td><?= $tiket->kursi ?></td>
                    <td>Rp <?= number_format($tiket->hargaPerTiket(), 0, ',', '.') ?></td>
                    <td>Rp <?= number_format($tiket->totalHarga(), 0, ',', '.') ?></td>
                    <td>Rp <?= number_format($tiket->pajak(), 0, ',', '.') ?></td>
                    <td>Rp <?= number_format($tiket->totalBayar(), 0, ',', '.') ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>