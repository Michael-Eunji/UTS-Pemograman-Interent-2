<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();
 }
 
public function insert($id, $jadwalid,$kodedosen,$hari,$thnakademik,$semester,$kodemk,$sesi,$jammasuk,$jamkeluar,$kelas,$ruang,$status,$kelassesi)
{
 $sql = "INSERT INTO tbl_jdwl (id,jadwalid,kodedosen,hari,thnakademik,semester,kodemk,sesi,jammasuk,jamkeluar,kelas,ruang,status,kelassesi) VALUES
('$id', '$jadwalid','$kodedosen','$hari','$thnakademik','$semester','$kodemk','$sesi','$jammasuk','$jamkeluar','$kelas','$ruang','$status','$kelassesi')";
$this->conn->query($sql);
}

public function tampil_data()
{
 $sql = "SELECT * FROM tbl_jdwl";
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
 $sql = "SELECT * FROM tbl_jdwl WHERE id='$ID_Absen'";
 $bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris = $obj;
 }
 return $baris;
}
public function update($id, $jadwalid,$kodedosen,$hari,$thnakademik,$semester,$kodemk,$sesi,$jammasuk,$jamkeluar,$kelas,$ruang,$status,$kelassesi)
{
 $sql = "UPDATE tbl_jdwl SET id='$id', jadwalid='$jadwalid',kodedosen='$kodedosen',hari='$hari',thnakademik='$thnakademik',semester='$semester',kodemk='$kodemk',sesi='$sesi',jammasuk='$jammasuk',jamkeluar='$jamkeluar',kelas='$kelas',ruang='$ruang',status='$status',kelassesi='$kelassesi'
WHERE id='$ID_Absen'";
 $this->conn->query($sql);
} 
public function delete($ID_Absen)
{
 $sql = "DELETE FROM tbl_jdwl WHERE id='$ID_Absen'";
 $this->conn->query($sql);
}
}
