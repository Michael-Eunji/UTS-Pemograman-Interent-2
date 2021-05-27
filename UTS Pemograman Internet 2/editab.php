<?php
$ID_Absen = $_GET['ID_Absen'];
include 'modelab.php';
$model = new Model();
$data = $model->edit($ID_Absen);
?>
<!doctype html>
<html lang="en">
<head>
<title>Edit Absen Mahasiswa</title>
</head>
<body>
<h1>Edit Absen Mahasiswa</h1>
<a href="indexab.php">Kembali</a><br><br>
<form action="prosesab.php" method="post">
<label>ID_Absen</label><br>
<input type="text" name="ID_Absen" value="<?php echo $data->ID_Absen ?>"><br>
<label>Tgl_Absen</label><br>
<input type="text" name="Tgl_Absen" value="<?php echo $data->Tgl_Absen ?>"><br>
<label>Masuk</label><br>
<input type="number" name="Masuk" value="<?php echo $data->Masuk ?>"><br>
<label>Keluar</label><br>
<input type="number" name="Keluar" value="<?php echo $data->Keluar ?>"><br>
<label>KodeDosen</label><br>
<input type="number" name="KodeDosen" value="<?php echo $data->KodeDosen ?>"><br>
<label>Sesi</label><br>
<input type="text" name="Sesi" value="<?php echo $data->Sesi ?>"><br>
<label>KelasSesi</label><br>
<input type="text" name="KelasSesi" value="<?php echo $data->KelasSesi ?>"><br>
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>
</html>