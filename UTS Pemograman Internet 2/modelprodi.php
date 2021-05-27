<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();
 }
 
public function insert($kodeprodi, $namaprodi)
{
 $sql = "INSERT INTO tbl_prodi (kodeprodi,namaprodi) VALUES
('$kodeprodi', '$namaprodi)";
$this->conn->query($sql);
}

public function tampil_data()
{
 $sql = "SELECT * FROM tbl_prodi";
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
 $sql = "SELECT * FROM tbl_prodi WHERE kodeprodi='$ID_Absen'";
 $bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris = $obj;
 }
 return $baris;
}
public function update($kodeprodi, $namaprodi)
{
 $sql = "UPDATE tbl_prodi SET namaprodi='$namaprodi'
WHERE kodeprodi='$ID_Absen'";
 $this->conn->query($sql);
} 
public function delete($ID_Absen)
{
 $sql = "DELETE FROM tbl_prodi WHERE kodeprodi='$ID_Absen'";
 $this->conn->query($sql);
}
}
