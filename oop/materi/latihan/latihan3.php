<?php
class penggajian 
{
  public $nama, $no_id, $jabatan, $gp, $status_k, $status_kk;
  public function __construct($a, $b, $c, $d, $e, $f)
  {
    $this->nama = $a;
    $this->no_id = $b;
    $this->gp = $c;
    $this->jabatan = $d;
    $this->status_k = $e;
    $this->status_kk = $f;
  }

  public function tunjanganjabatan()
  {
    if ($this->jabatan == "manager") {
      return $this->gp * 0.2;
    } elseif ($this->jabatan == "supervisor" || $this->jabatan == "staff") {
      return $this->gp * 0.15;
    } else {
      return 0;
    }
  }

  public function tunjangantransport()
  {
    // Tunjangan transport hanya untuk karyawan tetap
    if ($this->status_k == "tetap") {
      return 500000;
    } else {
      return 0;
    }
  }

  public function tunjanganmenikah()
  {
    // Tunjangan menikah hanya untuk yang status_kk == "menikah"
    if ($this->status_kk == "menikah") {
      return 1000000;
    } else {
      return 0;
    }
  }

  public function gajikotor()
  {
    return $this->gp + $this->tunjanganjabatan() + $this->tunjanganmenikah() + $this->tunjangantransport();
  }

  public function pajak()
  {
    return $this->gajikotor() * 0.05;
  }

  public function gajibersih()
  {
    return $this->gajikotor() - $this->pajak();
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
      <label for="">Nama karyawan</label>
      <input type="text" name="nama" id="">
      <br>
      <label for="">No id</label>
      <input type="text" name="no_id" id="">
      <br>
      <label for="">Gaji karyawan</label>
      <input type="number" name="gp" id="">
      <br>
      <label for="">Status karyawan</label>
      <select name="status" id="">
        <option value="tetap">Tetap</option>
        <option value="kontrak">Kontrak</option> 
      </select>
      <br>
      <label for="">Jabatan</label>
      <select name="jabatan" id="">
        <option value="manager">Manager</option>
        <option value="supervisor">Supervisor</option>
        <option value="staff">Staff</option>
        <option value="karyawan">Karyawan</option> 
      </select>
      <br>
      <label for="">Status menikah</label>
      <select name="status_kk" id="">
        <option value="menikah">Menikah</option>
        <option value="belum menikah">Belum menikah</option> 
      </select>
      <br>
      <button type="submit">Simpan</button>
    </form>
<?php
$gaji = null;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $a = isset($_POST['nama']) ? $_POST['nama'] : '';
  $b = isset($_POST['no_id']) ? $_POST['no_id'] : '';
  $c = isset($_POST['gp']) ? (int)$_POST['gp'] : 0;
  $d = isset($_POST['jabatan']) ? $_POST['jabatan'] : '';
  $e = isset($_POST['status']) ? $_POST['status'] : '';
  $f = isset($_POST['status_kk']) ? $_POST['status_kk'] : '';

  $gaji = new penggajian($a, $b, $c, $d, $e, $f);
}
?>

<?php if ($gaji !== null) : ?>
<table border="1">
  <tr>
    <th>Nama</th>
    <th>No_id</th>
    <th>Status karyawan</th>
    <th>Gaji pokok</th>
    <th>Jabatan</th>
    <th>Status menikah</th>
  </tr>
  <tr>
    <td><?php echo $gaji->nama; ?></td>
    <td><?php echo $gaji->no_id; ?></td>
    <td><?php echo $gaji->status_k; ?></td>
    <td><?php echo number_format($gaji->gp, 0, ',', '.'); ?></td>
    <td><?php echo $gaji->jabatan; ?></td>
    <td><?php echo $gaji->status_kk; ?></td>
  </tr>
  <tr>
    <th>Tunjangan jabatan</th>
    <td colspan="5">
      Rp.<?php echo number_format($gaji->tunjanganjabatan(), 0, ',', '.'); ?>    
    </td>
  </tr>
  <tr>
    <th>Tunjangan transport</th>
    <td colspan="5">
      Rp.<?php echo number_format($gaji->tunjangantransport(), 0, ',', '.'); ?>    
    </td>
  </tr>
  <tr>
    <th>Tunjangan menikah</th>
    <td colspan="5">
      Rp.<?php echo number_format($gaji->tunjanganmenikah(), 0, ',', '.'); ?>    
    </td>
  </tr>
  <tr>
    <th>Gaji kotor</th>
    <td colspan="5">
      Rp.<?php echo number_format($gaji->gajikotor(), 0, ',', '.'); ?>    
    </td>
  </tr>
  <tr>
    <th>Pajak (5%)</th>
    <td colspan="5">
      Rp.<?php echo number_format($gaji->pajak(), 0, ',', '.'); ?>    
    </td>
  </tr>
  <tr>
    <th>Gaji bersih</th>
    <td colspan="5">
      Rp.<?php echo number_format($gaji->gajibersih(), 0, ',', '.'); ?>    
    </td>
  </tr>
</table>
<?php endif; ?>

</body>
</html>