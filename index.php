<?php
	session_start();
	include 'serv.php';
	if(isset($_SESSION['user'])){
	echo '<script> window.location="panel.php"; </script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>login Admin</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>

<div class="row">

<div class="col-md-4"></div>

<div class="col-md-4">

			<h1 class="h1" style="color:black">Login</h1>
			<form method="post" action="validar.php">
				<input type="text" class="form-control" name="user" autocomplete="off" required><br><br>
				<input type="password" class="form-control" name="pw" autocomplete="off" required><br><br>
				<input type="submit" class="btn btn-success" name="login" value="Entrar">
			</form>
</div>
<div class="col-md-4"></div>
			</div>

			<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>