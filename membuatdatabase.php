<?php 
	$servername = "localhost"; //nama server database kita
	$username = "root"; //username database
	$password = ""; //password database kita

	// membuat koneksi ke database anda
	$conn = mysqli_connect($servername, $username, $password);
	
	if (!$conn) {
		die("Connection failed :". mysqli_connect_error());
	}// mengecek koneksi database anda apakah tehubung atau tidak

	
	$sql = "CREATE DATABASE myDB"; // sql membuat database
	if (mysqli_query($conn, $sql)) { //jika koneksi berhasil maka database akan terbuat
		echo "Database created successfuly";
	} else {  //jika koneksi eror maka databse akan memperingatkan eror pembuatan database
		echo "Error creating database" . mysqli_error($conn);
	}

	mysqli_close($conn); //keluar dari koneksi
 ?>