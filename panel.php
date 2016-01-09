<?php
session_start();
include 'serv.php';

if(isset($_SESSION['user'])) {?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>


<div class="col-md-4"></div>

<div class="col-md-4">
<img src="logym.JPEG" alt="" class="img-circle">
      
</div>
<div class="col-md-4"></div>
      </div>


<img src="logym.jpeg" alt="" class="img-circle">
  <a href="logout.php"><button>Salir</button></a>
</div>
</body>
</html>
<?php
}else{
	echo '<script> window.location="index.php"; </script>';
}
?>