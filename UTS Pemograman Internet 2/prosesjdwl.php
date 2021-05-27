<?php
include 'modeljdwl.php';
if (isset($_POST['submit_simpan'])) {
$id = $_POST['id'];
$jadwalid = $_POST['jadwalid'];
$kodedosen = $_POST['kodedosen'];
$hari = $_POST['hari'];
$thnakademik = $_POST['thnakademik'];
$semester= $_POST['semester'];
$kodemk= $_POST['kodemk'];
$sesi = $_POST['sesi'];
$jammasuk = $_POST['jammasuk'];
$jamkeluar = $_POST['jamkeluar'];
$kelas = $_POST['kelas'];
$ruang = $_POST['ruang'];
$status = $_POST['status'];
$kelassesi = $_POST['kelassesi'];
$model = new Model();
$model->insert($id, $jadwalid,$kodedosen,$hari,$thnakademik,$semester,$kodemk,$sesi,$jammasuk,$jamkeluar,$kelas,$ruang,$status,$kelassesi);
header ('location : indexjdwl.php');
}
if (isset($_POST['submit_edit'])) {
    id = $_POST['id'];
    $jadwalid = $_POST['jadwalid'];
    $kodedosen = $_POST['kodedosen'];
    $hari = $_POST['hari'];
    $thnakademik = $_POST['thnakademik'];
    $semester= $_POST['semester'];
    $kodemk= $_POST['kodemk'];
    $sesi = $_POST['sesi'];
    $jammasuk = $_POST['jammasuk'];
    $jamkeluar = $_POST['jamkeluar'];
    $kelas = $_POST['kelas'];
    $ruang = $_POST['ruang'];
    $status = $_POST['status'];
    $kelassesi = $_POST['kelassesi'];
    $model = new Model();
    $model->update($id, $jadwalid,$kodedosen,$hari,$thnakademik,$semester,$kodemk,$sesi,$jammasuk,$jamkeluar,$kelas,$ruang,$status,$kelassesi);
 header('location:indexjdwl.php');
}
if (isset($_GET['ID_Absen'])) {
 $ID_Absen = $_GET['ID_Absen'];
 $model = new Model();
 $model->delete($ID_Absen);
 header('location:indexjdwl.php');
}