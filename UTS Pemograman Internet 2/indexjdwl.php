<?php
include 'modeljdwl.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
<title>Data Matakuliah </title>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<div>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><b>Pemrograman Internet</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="indexmatkul.php">Matkul</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indexx.php">Dosen</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="indexab.php">Absen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indexjdwl.php">Jadwal</a>
      </li> <li class="nav-item">
      <a class="nav-link" href="indexprodi.php">Prodi</a>
      </li>
    </ul>
    </form>
  </div>
</nav>
<h1>Data Matakuliah</h1>
<a href="createjdwl.php">Tambah Data</a>
<br>
<a href="printjdwl.php" target="_blank">Cetak Data</a>
<br><br>
<table border="1">
<thead>
<tr>
<th>No.</th>
<th>id</th>
<th>jadwalid</th>
<th>kodedosen</th>
<th>hari</th>
<th>thnakademik</th>
<th>semester</th>
<th>kodemk</th>
<th>sesi</th>
<th>jammasuk</th>
<th>jamkeluar</th>
<th>kelas</th>
<th>ruang</th>
<th>status</th>
<th>kelassesi</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
$result = $model->tampil_data();
if ( !empty($result) ) {
foreach ($result as $data): ?>
<tr>
<td><?=$index++ ?></td>
<td><?=$data->id ?></td>
<td><?=$data->jadwalid ?></td>
<td><?=$data->kodedosen?></td>
<td><?=$data->hari?></td>
<td><?=$data->thnakademik ?></td>
<td><?=$data->semester?></td>
<td><?=$data->kodemk ?></td>
<td><?=$data->sesi ?></td>
<td><?=$data->jammasuk ?></td>
<td><?=$data->jamkeluar ?></td>
<td><?=$data->kelas?></td>
<td><?=$data->ruang ?></td>
<td><?=$data->status ?></td>
<td><?=$data->kelassesi ?></td>
<td>
<a name="edit" id="edit"
href="editjdwl.php?ID_Absen=<?=$data->id ?>">Edit</a>
<a name="hapus" id="hapus"
href="prosesjdwl.php?ID_Absen=<?=$data->id ?>">Delete</a>
</td>
</tr>
<?php endforeach;
} else{ ?>
<tr>
<td colspan="9">Belum ada data pada tabel jadwal kuliah.</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</body>
</html>