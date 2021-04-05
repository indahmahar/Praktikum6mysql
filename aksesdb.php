<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	$servername = "localhost"; //nama server database kita
	$username = "root"; //nama userame database kita
	$password = ""; //password database kita
	$dbname = "myDB";//nama database kita

	//membuat suatu koneksi databse
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed". mysqli_connect_error());
	} //mengecek suatu koneksi database yang kita buat
	$sql = "SELECT kode, negara, champion FROM liga"; //menselecksi suatu from yakni from liga yang dimana terdapat row kode, negara, dan champion
	$result = mysqli_query($conn, $sql); //pengecekan ulang query

	if (mysqli_num_rows($result) > 0) { 
		//Output data yang terdapat pada tabel yang kita select atau tampilkan
		while($row = mysqli_fetch_assoc($result)) {
			echo "kode : ". $row["kode"]. "- Negara : ". $row["negara"]. "". $row["champion"]. "<br>";
		}
	}else {
		echo "0 results";
	}
	mysqli_close($conn);
?>
</body>
</html>