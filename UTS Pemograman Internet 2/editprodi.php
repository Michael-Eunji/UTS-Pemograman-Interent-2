<?php
$ID_Absen = $_GET['ID_Absen'];
include 'modelprodi.php';
$model = new Model();
$data = $model->edit($ID_Absen);
?>
<!doctype html>
<html lang="en">
<head>
<title>Edit Data Prodi Mahasiswa</title>
</head>
<body>
<h1>Edit Data Prodi Mahasiswa</h1>
<a href="indexprodi.php">Kembali</a><br><br>
<form action="prosesprodi.php" method="post">
<label>KodeProdi</label><br>
<input type="text" name="kodeprodi" value="<?php echo $data->kodeprodi ?>"><br>
<label>NamaProdi</label><br>
<input type="text" name="namaprodi" value="<?php echo $data->namaprodi?>"><br>
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>
</html>
