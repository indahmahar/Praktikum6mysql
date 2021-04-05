<?php
$servername = "localhost"; // menampilkan server database
$username = "root"; // menampilkan username
$password = ""; // menampilkan password
$dbname = "myDb"; // menampilkan nama database

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

$sql = "INSERT INTO buku_tamu (nama, email, alamat)
VALUES ('maharani','maharani@gmail.com','Segoro tambak Rt.03 Rw.03')";
$sql = "INSERT INTO buku_tamu (nama, email, alamat)
VALUES ('anto','anto@gmail.com','wonokromo Rt.02 Rw.02')";
$sql = "INSERT INTO buku_tamu (nama, email, alamat)
VALUES ('indah','indah@gmail.com','Tambak Cemandi Rt.03 Rw.02')";

if (mysqli_query($conn, $sql)) {
	echo "New Record created successfully";
} else {
	echo "Error: ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);
?>