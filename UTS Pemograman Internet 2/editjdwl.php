<?php
$ID_Absen = $_GET['ID_Absen'];
include 'modeljdwl.php';
$model = new Model();
$data = $model->edit($ID_Absen);
?>
<!doctype html>
<html lang="en">
<head>
<title>Edit Jadwal Kuliah</title>
</head>
<body>
<h1>Edit Jadwal Kuliah</h1>
<a href="indexjdwl.php">Kembali</a><br><br>
<form action="prosesjdwl.php" method="post">
<label>id</label><br>
<input type="text" name="id" value="<?php echo $data->id ?>"><br>
<label>jadwalid</label><br>
<input type="text" name="jadwalid" value="<?php echo $data->jadwalid ?>"><br>
<label>kodedosen</label><br>
<input type="text" name="kodedosen" value="<?php echo $data->kodedosen ?>"><br>
<label>hari</label><br>
<input type="text" name="hari" value="<?php echo $data->hari ?>"><br>
<label>thnakademik</label><br>
<input type="text" name="thnakademik" value="<?php echo $data->thnakademik ?>"><br>
<label>semester</label><br>
<input type="text" name="semester" value="<?php echo $data->semester ?>"><br>
<label>kodemk</label><br>
<input type="text" name="kodemk" value="<?php echo $data->kodemk ?>"><br>
<label>sesiK</label><br>
<input type="text" name="sesi" value="<?php echo $data->sesi ?>"><br>
<label>jammasuk</label><br>
<input type="text" name="jammasuk" value="<?php echo $data->jammasuk ?>"><br>
<label>jamkeluar</label><br>
<input type="text" name="jamkeluar" value="<?php echo $data->jamkeluar ?>"><br>
<label>kelas</label><br>
<input type="text" name="kelas" value="<?php echo $data->kelas ?>"><br>
<label>ruang</label><br>
<input type="text" name="ruang" value="<?php echo $data->ruang ?>"><br>
<label>status</label><br>
<input type="text" name="status" value="<?php echo $data->status ?>"><br>
<label>kelassesi</label><br>
<input type="text" name="kelassesi" value="<?php echo $data->kelassesi ?>"><br>
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>
</html>