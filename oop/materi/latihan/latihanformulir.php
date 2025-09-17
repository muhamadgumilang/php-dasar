<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <legend>Kasir Indomaret</legend>
   <fieldset>
   <form action="" method="post">
    <table border="1">
    <tr>
        <td><label for="">Nama Barang :</label></td>
        <td><input type="text" name="nama_barang" required></td>
    </tr>
    <tr>
        <td><label for="">Harga Satuan :</label></td>
        <td><input type="number" name="harga" required></td>
    </tr>
    <tr>
        <td><label for="">Jumlah</label></td>
        <td><input type="number" name="jumlah" required></td>
    </tr>
    <tr>
        <td><label for="">Diskon</label></td>
        <td><input type="number" name="diskon" min="0" max="100" required></td>
    </tr>
    <tr>
        <td><input type="submit" name="submit" value="Hitung total"></td>
    </tr>
    </table>
   </form>
   </fieldset>

    <?php 
        class transaksi
        {
            public $nama_barang; 
            public $harga;
            public $jumlah;

            public function __construct($nama_barang, $harga, $jumlah)
            {
                $this->nama_barang = $nama_barang;
                $this->harga       = $harga;
                $this->jumlah      = $jumlah;
            }

            public function namabarang()
            {
                return $this->nama_barang;
            }

            public function hargasatuan()
            {
                return $this->harga;
            }
            public function jumlah()
            {
                return $this->jumlah;
            }
        }


        class barangnormal extends transaksi 
        {
            public function hitungtotal()
            {
                return $this->harga * $this->jumlah;
            }

            public function diskon()
            {
                return 0;
            }
        }

        class barangdiskon extends transaksi
        {
            public function __construct($nama_barang, $harga, $jumlah, $diskon) {
                parent::__construct($nama_barang, $harga, $jumlah);
                $this->diskon = $diskon;
            }

            public function hitungtotal() 
            {
                $subtotal = $this->harga * $this->jumlah;
                $potongan = $subtotal * ($this->diskon / 100);
                return $subtotal - $potongan;
            }
        }

        if (isset($_POST['submit'])) {
            $nama_barang   = $_POST['nama_barang'];
            $harga         = $_POST['harga'];
            $jumlah        = $_POST['jumlah'];
            $diskon        = $_POST['diskon'];

            if ($diskon > 0) {
                $barang = new barangdiskon($nama_barang, $harga, $jumlah, $diskon);
            } else {
                $barang = new barangnormal($nama_barang, $harga, $jumlah);
            }

            echo "<h3> Hasil Transaksi :</h3>";
            echo "Nama Barang :" . $barang->namabarang() . "<br>";
            echo "Harga satuan :" . number_format($barang->hargasatuan(), 0, ',', '.') . "<br>";
            echo "Jumlah :" . $barang->jumlah() . "<br>";
            echo "Diskon :" . $barang->diskon . "%<br>";
            echo "Total Harga :" . number_format($barang->hitungtotal(), 0, ',', '.') . "<br>";
        }
    ?>
</body>
</html>