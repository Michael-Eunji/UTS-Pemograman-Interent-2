<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();
 }
 
public function insert($ID_Absen, $Tgl_Absen, $Masuk, $Keluar, $KodeDosen, $Sesi, $KelasSesi)
{
  $sql = "INSERT INTO tbll_ab (ID_Absen, Tgl_Absen, Masuk, Keluar,KodeDosen, Sesi, KelasSesi ) VALUES
('$ID_Absen', '$Tgl_Absen', '$Masuk', '$Keluar','$KodeDosen', '$Sesi','$KelasSesi')";
$this->conn->query($sql);
}
public function tampil_data()
{
 $sql = "SELECT * FROM tbll_ab";
 $bind = $this->conn->query($sql);
 while  ($obj = $bind->fetch_object()) {
 $baris[] = $obj;
 }
 if(!empty($baris)){
 return $baris;
 }
}
public function edit($ID_Absen)
{
 $sql = "SELECT * FROM tbll_ab WHERE ID_Absen='$ID_Absen'";
 $bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris = $obj;
 }
 return $baris;
}
public function update($ID_Absen, $Tgl_Absen, $Masuk, $Keluar,$KodeDosen, $Sesi, $KelasSesi)
{
$sql = "UPDATE tbll_ab SET Tgl_Absen='$Tgl_Absen', Masuk='$Masuk', Keluar='$Keluar',KodeDosen='$KodeDosen',Sesi='$Sesi',KelasSesi='$KelasSesi'
WHERE ID_Absen='$ID_Absen'";
 $this->conn->query($sql);
}
public function delete($ID_Absen)
{
 $sql = "DELETE FROM tbll_ab WHERE ID_Absen='$ID_Absen'";
 $this->conn->query($sql);
}
}
