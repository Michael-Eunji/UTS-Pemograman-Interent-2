<?php
include 'modelprodi.php';
if (isset($_POST['submit_simpan'])) {
 $kodeprodi= $_POST['kodeprodi'];
 $namaprodi = $_POST['namaprodi'];
 $model = new Model();
 $model->insert($kodeprodi, $namaprodi);
header ('location : indexprodi.php');
}
if (isset($_POST['submit_simpan'])) {
    $kodeprodi= $_POST['kodeprodi'];
    $namaprodi = $_POST['namaprodi'];
    $model = new Model();
    $model->update($kodeprodi, $namaprodi);
   header ('location : indexprodi.php');
}
if (isset($_GET['ID_Absen'])) {
 $ID_Absen = $_GET['ID_Absen'];
 $model = new Model();
 $model->delete($ID_Absen);
 header('location:indexprodi.php');
}