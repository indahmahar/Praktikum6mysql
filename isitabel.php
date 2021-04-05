<?php 
	$servername = "localhost"; //nama server database kita
	$username = "root"; //username database
	$password = ""; //password database
	$dbname = "myDB"; //database saya

	//membuat suatu koneksi databse
	$conn = mysqli_connect($servername,$username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: ". mysqli_connect_error());
	} //mengecek suatu koneksi database yang kita buat
	$sql = "INSERT INTO liga (kode, negara, champion) 
	VALUES ('Jer','Jerman','4')"; //mengisi tabel liga dengan jerman
	$sql = "INSERT INTO liga(kode, negara, champion) VALUES ('Spa','Spanyol','3')"; // mengisi tabel liga dengan spanyol
	$sql = "INSERT INTO liga(kode, negara, champion) VALUES ('Eng','English','3')"; // mengisi tabel liga dengan english
	if (mysqli_query($conn, $sql)) { //jika pengisian table terhubung maka akan tersimpan record rersebut
		echo "New Record created successfully";
	} else {// jika eror maka akan memunculkan mysql eror
		echo "Error" . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn); //akan keluar dari koneksi
 ?>