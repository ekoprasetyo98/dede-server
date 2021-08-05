<?php 
include '../koneksi.php';

if (isset($_POST['submit'])) {
	# code...
	$username = $_POST['username'];
	$password = $_POST['password'];
} 
// var_dump($username,$password); die();
$data = mysqli_query($sql,"SELECT*FROM admin WHERE username = '$username' AND password = '$password' " );

$cek = mysqli_num_rows($data);

if ($cek>0) {
	# code...
	session_start();
	$_SESSION['username'] 	= 		$username;
	$_SESSION['status']   	= 		'login';
	header("location:../admin/index.php");
}else{
	header("location:../index.php");
}


 ?>