<?php
include 'modelmatkul.php';
if (isset($_POST['submit_simpan'])) {
 $kodemk = $_POST['kodemk'];
 $namamk = $_POST['namamk'];
 $sks = $_POST['sks'];
 $smt = $_POST['smt'];
 $kodeprodi = $_POST['kodeprodi'];
 $model = new Model();
 $model->insert($kodemk, $namamk, $sks, $smt, $kodeprodi);
header ('location : indexmatkul.php');
}
if (isset($_POST['submit_edit'])) {
    $kodemk = $_POST['kodemk'];
    $namamk = $_POST['namamk'];
    $sks = $_POST['sks'];
    $smt = $_POST['smt'];
    $kodeprodi = $_POST['kodeprodi'];
    $model = new Model();
    $model->update($kodemk, $namamk, $sks, $smt, $kodeprodi);
   header ('location : indexmatkul.php');
}
if (isset($_GET['ID_Absen'])) {
 $ID_Absen = $_GET['ID_Absen'];
 $model = new Model();
 $model->delete($ID_Absen);
 header('location:indexmatkul.php');
}