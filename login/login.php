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
<body>
	<form class="tengah p-5">
		<h2 class="text-center mt-5">LOGIN</h2>
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			<small id="emailHelp" class="form-text text-muted">*Isi dengan Teliti</small>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
		</div>
		<div class="text-center">
		<button type="submit" class="btn btn-primary mr-2">Login</button>
		<button type="submit" class="btn btn-success">Register</button>
	</div>
	</form>
</body>
</html>