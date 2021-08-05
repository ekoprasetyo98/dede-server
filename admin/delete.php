<?php 
include '../koneksi.php';

$dataId = $_GET['id'];

$data = mysqli_query($sql,"DELETE FROM riwayat WHERE id = '$dataId' ");

if ($data) {
	# code...
	header("location:index.php");

}else{
	echo "gagal hapus";
}


 ?>