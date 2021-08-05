<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script type="text/javascript" src="Chart.js"></script>
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
	$data = mysqli_query($sql,"SELECT * FROM riwayat");

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


		<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart" width="375"></canvas>
	</div>
	
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Dermatitis atopic", "Dermatitis kontak iritan", "Dermatitis kontak alergi","Herves", "Neurodermatitis"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_atopic = mysqli_query($sql,"SELECT * FROM riwayat WHERE kesimpulan='Dermatitis atopic'");
					echo mysqli_num_rows($jumlah_atopic);
					?>,
					<?php 
					$jumlah_iritan = mysqli_query($sql,"SELECT * FROM riwayat WHERE kesimpulan='Dermatitis kontak iritan'");
					echo mysqli_num_rows($jumlah_iritan);
					?>,
					<?php
					$jumlah_alergi = mysqli_query($sql,"SELECT * FROM riwayat WHERE kesimpulan='Dermatitis kontak alergi'");
					echo mysqli_num_rows($jumlah_alergi);
					?>,
					<?php
					$jumlah_Herves = mysqli_query($sql,"SELECT * FROM riwayat WHERE kesimpulan='Herves'");
					echo mysqli_num_rows($jumlah_Herves);
					?>,
					<?php
					$jumlah_neuro = mysqli_query($sql,"SELECT * FROM riwayat WHERE kesimpulan='Neurodermatitis'");
					echo mysqli_num_rows($jumlah_neuro);
					?>
					
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true,
							min: 0,
							max:15,
						    stepSize: 1
						}
					}]
				}
			}
		});
	</script>	
</body>
</html>



