<?php
include 'modeljdwl.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
<title>Cetak Jadwal Kuliah</title>
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
<h1>Laporan Jadwal Kuliah</h1>
<table>
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
</tr>
<?php endforeach;
} else{ ?>
<tr>
<td colspan="9">Belum ada data pada tabel jadwal kuliah.</td>
</tr>
<?php } ?>
</tbody>
</table>
<script>
window.print();
</script>
</body>
</html>