<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1> Demo Koneksi database MySQL</h1>
	<?php 
	$con = mysqli_connect("localhost","root","","test"); //mengecek koneksi database yang sudah ada di laptop kita
		
		if (mysqli_connect_error()) {
			echo "Failed to connect MySQL :". mysqli_connect_error(); //jika terjadi kesalahan database maka akan tampil gagal terkoneksi dengan database
			exit();
		}
	 ?>
</body>
</html>