<?php

include 'koneksi.php';



    $nama = "aaa";
    $usia = "sasas";
    $jenkel = "asas";
    $hasil = "qwqwq";
    


    $db = "INSERT INTO riwayat SET nama = '$nama',usia = '$usia', jenkel = '$jenkel', hasil = '$hasil' ";

   if (mysqli_query($sql, $db)) {
       # code...
    echo json_encode(array("Response_code" => 1, "Response_msg" =>"Success"));
   }else{
    echo json_encode(array("Response_code"=>0, "Response_msg" => "Failed"));
   }
   ?>