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
            Perusahaan Technova
        </legend>
        <form action="" method="post">
            <label for="">Nama</label>
            <input type="text" name="nama" required>
            <br>
            <label for="">No ID Karyawan</label>
            <input type="number" name="karyawan" required>
            <br>
            <label for="">Gaji Pokok</label>
            <input type="Number" name="gaji" required>
            <br>
            <label for="">Status karyawan</label>
            <select name="status" id="">
                <option value="tetap">Tetap</option>
                <option value="kontrak">Kontrak</option>
            </select>
            <br>
            <label for=""></label>
            <input type="submit" value="submit">

        </form>
    </fieldset>
</body>
</html>