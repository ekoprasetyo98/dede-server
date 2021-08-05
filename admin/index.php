
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

	$data = mysqli_query($sql,"SELECT*FROM riwayat");

	 ?>
	 <nav class="navbar navbar-expand-lg navbar-light bg-light">
	 	<div class="container">
		  <a class="navbar-brand" href="#"><h4>Hai, <?= $_SESSION['username']?></h4></a>
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
		      <form action="index.php" method="get" class="form-inline my-2 my-lg-0">
			      <input class="form-control mr-sm-2" type="text" name="keyword" id="keyword" autocomplete="off" autofocus="" placeholder="Search" aria-label="Search">
			      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari" id="tombol-cari" >Search</button>
			  </form>
		      
		    </ul>
		  </div>
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
	<form action="deleteAll.php" method="post">
		<button class="btn btn-danger" type="submit" name="hapus" onclick="return confirm('Hapus data yang dipilih?')">Hapus data</button>
	
	 <table class="table mt-3">
	 	<thead class="thead-dark text-center">
	 		<tr>
		 		<th scope="col">No</th>
		 		<th scope="col">Nama</th>
		 		<th scope="col">Hasil diagnosa</th>
		 		<th scope="col">Action</th>

		 	</tr>
	 	</thead>
	 	
		<?php $no = 1; foreach($data as $d) :?>
		<tbody class="text-center">
	 	<tr>
	 		<td scope="row"> <input type="checkbox" name="pilih[]" value="<?php echo $d['id']; ?>"> <b><?= $no++  ?></b></td>
	 		<td scope="row" class="text-justify"><?= $d['nama']?></td>
	 		<td scope="row" class="text-justify"><?= $d['kesimpulan']?></td>
	 		<td>
	 			<a href="detail.php?id=<?php echo $d['id']?>" class="badge badge-primary">Detail</a>
	 			<a href="delete.php?id=<?php echo $d['id']?>" class="badge badge-warning" onclick="return confirm('Apakah anda ingin menghapus data?')" >Hapus</a>
	 		</td>
	 	</tr>
	 	</tbody>

		<?php endforeach ?>
		
	 </table>

	 </form>

	 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <?php 
					include '../koneksi.php';
					$id = $_GET['detailId'];
					$data = mysqli_query($sql,"SELECT * FROM riwayat WHERE id = '$id' ");
					 ?>
					<?php $no = 1; foreach($data as $d) :?>
					<?php echo $d['nama'] ?>
					<?php endforeach ?>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>
	 
	 	
	 
	 </div>
 <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

    <!-- Optional JavaScript; choose one of the two! -->

