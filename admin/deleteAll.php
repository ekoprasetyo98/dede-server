<?php 
include '../koneksi.php';

$data = $_POST['pilih'];
$jumlah_dipilih = count($data);
 
for($x=0;$x<$jumlah_dipilih;$x++){
	mysqli_query($sql,"DELETE FROM riwayat WHERE id='$data[$x]'");
}
 
header("location:index.php");

 ?>