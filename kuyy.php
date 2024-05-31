<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nim = $_POST["nim"];
  $tanggal_lahir = $_POST["tanggal_lahir"];
  $suplayer = $_POST["suplayer"];
  $barang= $_POST["barang"];
  $jenis_kelamin = $_POST["jenis_kelamin"];
  $note = $_POST["note"];

  echo "nim: $nim<br>";
  echo "suplayer: $suplayer<br>";
  echo "barang: $barang<br>";
  echo "Jenis Kelamin: $jenis_kelamin<br>";
  echo "note: $note<br>";
}
?>
</tr>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
</form>