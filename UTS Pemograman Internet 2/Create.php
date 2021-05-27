<!doctype html>
<html lang="en">
<head>
<title>Tambah Data Dosen</title>
</head>
<body>
<h1>Tambah</h1>
<a href="indexx.php">Kembali</a><br><br>
<form action="proses.php" method="post">
<label>KodeDosen</label><br>
<input type="text" name="kodedosen"><br>
<label>NIDN</label><br>
<input type="number" name="nidn"><br>
<label>NIPY</label><br>
<input type="number" name="nipy"><br>
<label>NamaDosen</label><br>
<input type="text" name="namadosen"><br>
<label>KodeProdi</label><br>
<input type="number" name="kodeprodi">
<br><br>
<button type="submit" name="submit_simpan">Submit</button>
<button type="reset">Reset</button>
</form>
</body>
</html>
