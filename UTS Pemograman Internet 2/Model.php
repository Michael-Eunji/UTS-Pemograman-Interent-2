<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();
 }
public function insert($kodedosen, $nidn, $nipy, $namadosen, $kodeprodi)
{
 $sql = "INSERT INTO tbl_dosen (kodedosen, nidn, nipy, namadosen, kodeprodi) VALUES
('$kodedosen', '$nidn', '$nipy', '$namadosen', '$kodeprodi')";
$this->conn->query($sql);
}
public function tampil_data()
{
 $sql = "SELECT * FROM tbll_dosen";
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
 $sql = "SELECT * FROM tbll_dosen WHERE kodedosen='$ID_Absen'";
 $bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris = $obj;
 }
return $baris;
}
public function update($kodedosen, $nidn, $nipy, $namadosen, $kodeprodi)
{
 $sql = "UPDATE tbll_dosen SET kodedosen='$kodedosen', nidn='$nidn', nipy='$nipy', namadosen='$namadosen', kodeprodi='$kodeprodi', 
 WHERE kodedosen='$ID_Absen'";
 $this->conn->query($sql);
}
public function delete($ID_Absen)
{
 $sql = "DELETE FROM tbll_dosen WHERE kodedosen='$ID_Absen'";
 $this->conn->query($sql);
}
}
