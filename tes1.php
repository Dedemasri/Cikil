<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="kuyy.php" method="post">
  <h2>Registrasi </h2>
  <label for="nama">nim:</label><br>
  <input type="text" id="nim" name="nim" required><br>
  <label for="tanggal_lahir">Tanggal Lahir:</label><br>
  <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br>
    suplayer:
<select name="suplayer">
<option value="-Pilih-">
<option value="Pelajar">Pelajar
<option value="Karyawan">Karyawan
<option value="Wirausaha">Wirausaha
<option value="Lain-lain">Lain-lain
</select>
<br>
    barang:
<select name="barang">
<option value="baju">baju
<option value="sepatu">sepatu
<option value="celana">celana
</select>
  <br>
  <label for="jenis_kelamin">Jenis Kelamin:</label><br>
  <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-Laki" required>
  <label for="laki_laki">Laki-Laki</label>
  <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
  <label for="perempuan">Perempuan</label><br>
  <label for="nama">note:</label><br>
  <input type="text" id="note" name="note" required><br>
  <br>
  <input type="submit" value="Submit">
  <input type="reset" value="Cancel">
</form>
</body>
</html>