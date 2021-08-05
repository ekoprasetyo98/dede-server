<?php

include 'koneksi.php';



    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $jenkel = $_POST['jenkel'];
    $hasil = $_POST['hasil'];
    $kesimpulan = $_POST['kesimpulan'];
    
    $cek_user=mysqli_num_rows(mysqli_query($sql,"SELECT * FROM riwayat WHERE nama='$_POST[nama]'"));
    if ($cek_user > 0) {
      # code...
      $db = "UPDATE riwayat SET usia = '$usia', jenkel = '$jenkel', hasil = '$hasil', kesimpulan = '$kesimpulan' WHERE nama = '$nama'";

    }else{
      $db = "INSERT INTO riwayat SET nama = '$nama',usia = '$usia', jenkel = '$jenkel', hasil = '$hasil', kesimpulan = '$kesimpulan' ";
  
    }


    
   if (mysqli_query($sql, $db)) {
       # code...
    echo json_encode(array("Response_code" => 1, "Response_msg" =>"Success"));
   }else{
    echo json_encode(array("Response_code"=>0, "Response_msg" => "Failed"));
   }
   ?>