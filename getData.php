<?php
include 'config.php';

$sel = mysqli_query($con,"select * from warga_penduduk");
$data = array();

while ($row = mysqli_fetch_array($sel)) {
 $data[] = array("docnum"=>$row['docnum'],"nama"=>$row['nama'],"lokasi"=>$row['lokasi'],"ttl"=>$row['ttl']);
}
echo json_encode($data);
?>