<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
	.tengah{
    margin: 0 auto;
    width:40% /* value of your choice which suits your alignment */
	}
	
</style>

	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>

<body>
	<form method="POST" action="cek-login.php" class="tengah p-5">
		<h2 class="text-center mt-5">LOGIN</h2>
		<div class="form-group">
			<label for="exampleInputEmail1">Username</label>
			<input type="text" name="username" maxlength="15" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			<small id="emailHelp" class="form-text text-muted">*Isi dengan Teliti</small>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" name="password" maxlength="12" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
		</div>
		<div class="text-center">
		<button type="submit" class="btn btn-primary mr-2 px-4">Login</button>
	</div>
	</form>
</body>
</html>