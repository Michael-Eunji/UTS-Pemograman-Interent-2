<?php
include 'modelab.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
<title>Cetak Data Absen</title>
<style>
h1 {
text-align: center;
}
table,
td,
th {
border: 1px solid #ddd;
text-align: left;
}
table {
border-collapse: collapse;
width: 100%;
}
th,
td {
padding: 15px;
}
</style>
</head>
<body>
<h1>Laporan Absen Mahasiswa</h1>
<table>
<thead>
<tr>
<th>No.</th>
<th>ID_Absen</th>
<th>Tgl_Absen</th>
<th>Masuk</th>
<th>Keluar</th>
<th>KodeDosen</th>
<th>Sesi</th>
<th>KelasSesi</th>
</tr>
</thead>
<tbody>
<?php
$result = $model->tampil_data();
if ( !empty($result) ) {
foreach ($result as $data): ?>
<tr>
<td><?=$index++ ?></td>
<td><?=$data->ID_Absen ?></td>
<td><?=$data->Tgl_Absen ?></td>
<td><?=$data->Masuk ?></td>
<td><?=$data->Keluar ?></td>
<td><?=$data->KodeDosen ?></td>
<td><?=$data->Sesi ?></td>
<td><?=$data->KelasSesi ?></td>
</tr>
<?php endforeach;
} else{ ?>
<tr>
<td colspan="9">Belum ada data pada tabel absen
mahasiswa.</td>
</tr>
<?php } ?>
</tbody>
</table>
<script>
window.print();
</script>
</body>
</html>