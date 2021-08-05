<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Deteksi Dermatitis</title>
  </head>
  <body>

  	<div class="container">

	<?php 

	include '../koneksi.php';
	session_start();
	if ($_SESSION['status'] != "login") {
		header("location:../index.php");
		# code...
	}
	$id = $_GET['id'];
	$data = mysqli_query($sql,"SELECT * FROM riwayat WHERE id = '$id' ");

	 ?>

	 <h1 class="text-center">Tabel Data Pasien Penyakit Dermatitis</h1>
	 
	 <nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="index.php"><h4>Hai, <?= $_SESSION['username']?></h4></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
		      </li>

		      <li class="nav-item ">
		        <a class="nav-link" href="grafik.php">Grafik</a>
		      </li>
		      <li class="nav-item">
		        <a href="../login/act_logout.php" class="nav-link " onclick="return confirm('Apakah anda ingin keluar?')">Keluar</a>
		      </li>
		      
		    </ul>
		  </div>
		</nav>
		<!-- Button trigger modal -->
<!-- Modal -->
	<?php 
		$jumlah_atopic = mysqli_query($sql,"SELECT * FROM riwayat WHERE kesimpulan='Dermatitis atopic'");
		$jumlah_iritan = mysqli_query($sql,"SELECT * FROM riwayat WHERE kesimpulan='Dermatitis kontak iritan'");
		$jumlah_alergi = mysqli_query($sql,"SELECT * FROM riwayat WHERE kesimpulan='Dermatitis kontak alergi'");
		$jumlah_Herves = mysqli_query($sql,"SELECT * FROM riwayat WHERE kesimpulan='Herves'");
		$jumlah_neuro = mysqli_query($sql,"SELECT * FROM riwayat WHERE kesimpulan='Neurodermatitis'");
					
	 ?>
	
	<div class="label mt-3">
		<b>Dermatitis atopic : <?php echo mysqli_num_rows($jumlah_atopic); ?></b>
		<b class="ml-3">Dermatitis Kontak iritan : <?php echo mysqli_num_rows($jumlah_iritan); ?></b>
		<b class="ml-3">Dermatitis Kontak Alergi : <?php echo mysqli_num_rows($jumlah_alergi); ?></b>
		<b class="ml-3">Herves : <?php echo mysqli_num_rows($jumlah_Herves); ?></b>
		<b class="ml-3">Neurodermatitis : <?php echo mysqli_num_rows($jumlah_neuro); ?></b>
	</div>
	 <table class="table mt-3">
	 	<thead class="thead-dark text-center">
	 		<tr>
		 		<th scope="col">No</th>
		 		<th scope="col">Nama</th>
		 		<th scope="col">Usia</th>
		 		<th scope="col">Jenis Kelamin</th>
		 		<th scope="col">Hasil diagnosa</th>
		 		<th scope="col">Kesimpulan</th>
		 		<th scope="col">Action</th>

		 	</tr>
	 	</thead>
	 	
		<?php $no = 1; foreach($data as $d) :?>
		<tbody class="">
	 	<tr >
	 		<td class="text-center" scope="row"><b><?= $no++  ?></b></td>
	 		<td class="text-center" scope="row" class="text-justify"><?= $d['nama']?></td>
	 		<td class="text-center" scope="row"><?= $d['usia']?></td>
	 		<td class="text-center" scope="row"><?= $d['jenkel']?></td>
	 		<td class="" scope="row"><?= $d['hasil']?></td>
	 		<td class="text-center" scope="row" class="text-justify"><?= $d['kesimpulan']?></td>
	 		<td class="text-center">
	 			
	 			<a href="delete.php?id=<?php echo $d['id']?>" class="badge badge-warning" onclick="return confirm('Apakah anda ingin menghapus data?')" >Hapus</a>
	 		</td>
	 	</tr>
	 	</tbody>
		<?php endforeach ?>
	 </table>

</body>
</html>



