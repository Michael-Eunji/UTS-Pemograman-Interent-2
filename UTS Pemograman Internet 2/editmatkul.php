<?php
$ID_Absen = $_GET['ID_Absen'];
include 'modelmatkul.php';
$model = new Model();
$data = $model->edit($ID_Absen);
?>
<!doctype html>
<html lang="en">
<head>
<title>Edit Data Matkul</title>
</head>
<body>
<h1>Edit Data Matkul</h1>
<a href="indexmatkul.php">Kembali</a><br><br>
<form action="prosesmatkul.php" method="post">
<label>KodeMk</label><br>
<input type="text" name="kodemk" value="<?php echo $data->kodemk ?>"><br>
<label>NamaMk</label><br>
<input type="text" name="namamk" value="<?php echo $data->namamk ?>"><br>
<label>SMS</label><br>
<input type="text" name="sks" value="<?php echo $data->sks ?>"><br>
<label>SMT</label><br>
<input type="text" name="smt" value="<?php echo $data->smt ?>"><br>
<label>KodeProdi</label><br>
<input type="number" name="kodeprodi" value="<?php echo $data->kodeprodi ?>"><br>
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>
</html>
