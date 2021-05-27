<?php
include 'model.php';
if (isset($_POST['submit_simpan'])) {
 $kodedosen = $_POST['kodedosen'];
 $nipn = $_POST['nipn'];
 $nipy = $_POST['nipy'];
 $namadosen = $_POST['namadosen'];
 $kodeprodi = $_POST['kodeprodi'];
 $model = new Model();
 $model->insert($kodedosen, $nipn, $nipy, $namadosen, $kodeprodi);
header ('location : indexx.php');
}
if (isset($_POST['submit_edit'])) {
    $kodedosen = $_POST['kodedosen'];
    $nipn = $_POST['nipn'];
    $nipy = $_POST['nipy'];
    $namadosen = $_POST['namadosen'];
    $kodeprodi = $_POST['kodeprodi'];
 $model = new Model();
 $model->update($kodedosen, $nipn, $nipy, $namadosen, $kodeprodi);
 header('location:indexx.php');
}
if (isset($_GET['ID_Absen'])) {
 $ID_Absen = $_GET['ID_Absen'];
 $model = new Model();
 $model->delete($ID_Absen);
 header('location:indexx.php');
}