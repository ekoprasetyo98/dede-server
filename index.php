<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<title>login admin</title>
	<style type="text/css">
		body{
			background: #76b852;
		}

		.container{
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .box{
            background-color: #fff;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;
            border-radius: 10px;
            padding: 40px;
        }

        form{
            padding: 40px;
        }

        .btn{
            border-radius: 30px;
        }

		
	</style>
</head>
<body>
	<div class="container">
		<div class="row p-4">
			<div class="col-12 col-md-6 col-lg-6">
                
            </div>

			<div class="col-12 col-md-6 col-lg-6">
				<div class="box p-4">	
				<h4 class="text-center mb-3">Login Admin</h4>
				<form action="login/act_login.php" method="post">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Username</label>
				    <input type="text" required="" minlength="5" placeholder="Masukan username" class="form-control" name="username" aria-describedby="emailHelp">
				  </div>

				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" minlength="5" required="" placeholder="Masukan password" class="form-control" name="password">
				  </div>
				  
				  <button name="submit" type="submit" class="btn btn-success w-100">Login</button>
				  
				</form>
				</div>
			</div>

		</div>
		
	</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>

