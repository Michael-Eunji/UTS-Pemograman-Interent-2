<?php
include 'modelab.php';
if (isset($_POST['submit_simpan'])) {
 $ID_Absen = $_POST['ID_Absen'];
 $Tgl_Absen = $_POST['Tgl_Absen'];
 $Masuk = $_POST['Masuk'];
 $Keluar = $_POST['Keluar'];
 $KodeDosen = $_POST['KodeDosen'];
 $Sesi = $_POST['Sesi'];
 $KelasSesi = $_POST['KelasSesi'];
 $model = new Model();
 $model->insert($ID_Absen, $Tgl_Absen, $Masuk, $Keluar,$KodeDosen,$Sesi,$KelasSesi);
header ('location : indexab.php');
}
if (isset($_POST['submit_edit'])) {
    $ID_Absen = $_POST['ID_Absen'];
    $Tgl_Absen = $_POST['Tgl_Absen'];
    $Masuk = $_POST['Masuk'];
    $Keluar = $_POST['Keluar'];
    $KodeDosen = $_POST['KodeDosen'];
    $Sesi = $_POST['Sesi'];
    $KelasSesi = $_POST['KelasSesi'];
    $model = new Model();
    $model->update($ID_Absen, $Tgl_Absen, $Masuk, $Keluar,$KodeDosen,$Sesi,$KelasSesi);
 header('location:indexab.php');
}
if (isset($_GET['ID_Absen'])) {
 $ID_Absen = $_GET['ID_Absen'];
 $model = new Model();
 $model->delete($ID_Absen);
 header('location:indexab.php');
}