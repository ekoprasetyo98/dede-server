<?php 
include 'koneksi.php';

$data = "SELECT * FROM riwayat";
$result_count = $sql->query($data);
if ($result_count->num_rows > 0) {
	# code...
	while ( $row = $result_count->fetch_assoc()) {
		# code...
		$id[] = $row;
	}

	echo json_encode(array("Response_code" => 1, "result" => $id));
}else{
	echo json_encode(array("Response_code" => 0, "Data" => "kososng"));
}
 

 ?>