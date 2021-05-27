<!doctype html>
<html lang="en">
<head>
<title>Tambah Data Absen</title>
</head>
<body>
<h1>Tambah</h1>
<a href="indexab.php">Kembali</a><br><br>
<form action="prosesab.php" method="post">
<label>ID_Absen</label><br>
<input type="text" name="ID_Absen"><br>
<label>Tgl_Absen</label><br>
<input type="text" name="Tgl_Absen"><br>
<label>Masuk</label><br>
<input type="number" name="Masuk"><br>
<label>Keluar</label><br>
<input type="number" name="Keluar"><br>
<label>KodeDosen</label><br>
<input type="number" name="Kodedosen"><br>
<label>Sesi</label><br>
<input type="text" name="Sesi"><br>
<label>KelasSesi</label><br>
<input type="text" name="KelasSesi"><br>
<br><br>
<button type="submit" name="submit_simpan">Submit</button>
<button type="reset">Reset</button>
</form>
</body>
</html>
