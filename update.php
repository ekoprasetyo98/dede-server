<?php 
include 'koneksi.php';
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $jenkel = $_POST['jenkel'];
    $hasil = $_POST['hasil'];
    $kesimpulan = $_POST['kesimpulan'];
    
     $db = "UPDATE riwayat SET nama = '$nama',usia = '$usia', jenkel = '$jenkel', hasil = '$hasil', kesimpulan = '$kesimpulan' WHERE id = '$id' ";
 if (mysqli_query($sql  , $db)) {
		echo json_encode(array("Response_code" => 1, "Response_msg"=>"Success"));
	}
	else {
		echo json_encode(array("Response_code" => 0, "Response_msg"=>"Failed"));
	}


 ?>