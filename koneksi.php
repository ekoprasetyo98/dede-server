<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "pasiendb";

$sql = new mysqli($server, $user, $password, $db);

// if ($sql->connect_error) {
// 	# code...
// 	die("koneksi gagal".$sql->connect_error);
// }else{
// 	echo "berhasil";
// }

?>
