<!doctype html>
<html lang="en">
<head>
<title>Tambah Data Mata Kuliah</title>
</head>
<body>
<h1>Tambah</h1>
<a href="indexmatkul.php">Kembali</a><br><br>
<form action="prosesmatkul.php" method="post">
<label>KodeMk</label><br>
<input type="number" name="kodemk"><br>
<label>NamaMk</label><br>
<input type="text" name="namamk"><br>
<label>SKS</label><br>
<input type="number" name="sks"><br>
<label>SMT</label><br>
<input type="number" name="smt"><br>
<label>KodeProdi</label><br>
<input type="number" name="kodeprodi"><br>
<br><br>
<button type="submit" name="submit_simpan">Submit</button>
<button type="reset">Reset</button>
</form>
</body>
</html>
