<?php
$ID_Absen= $_GET['ID_Absen'];
include 'model.php';
$model = new Model();
$data = $model->edit($ID_Absen);
?>
<!doctype html>
<html lang="en">
<head>
<title>Edit Data Dosen</title>
</head>
<body>
<h1>Edit Data Dosen</h1>
<a href="indexx.php">Kembali</a><br><br>
<form action="proses.php" method="post">
<label>KodeDosen</label><br>
<input type="text" name="kodedosen" value="<?php echo $data->kodedosen ?>"><br>
<label>NIDN</label><br>
<input type="text" name="nidn" value="<?php echo $data->nidn ?>"><br>
<label>NIPY</label><br>
<input type="text" name="nipy" value="<?php echo $data->nipy ?>"><br>
<label>NamaDosen</label><br>
<input type="text" name="namadosen" value="<?php echo $data->namadosen ?>"><br>
<label>KodeProdi</label><br>
<input type="text" name="kodeprodi" value="<?php echo $data->kodeprodi ?>">
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>
</html>
