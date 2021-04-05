	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myDb";

	//membuat koneksi
	$conn = mysqli_connect($servername, $username, $password,$dbname);

	//cek koneksi
	if(!$conn){ //jika bukan tampilkan coneksi gagal dan error
		die("connection failed: " . mysqli_connect_error());
	}
	//mebuat tabel baru
	$sql = "CREATE TABLE buku_tamu(
	id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	nama VARCHAR(200) NOT NULL,
	email VARCHAR(50) NOT NULL,
	alamat TEXT
)";

	if(mysqli_query($conn,$sql)){ //jika query berhasil tampilkan sukses
		echo "table created successfully";
	}else{ //atau gagal tampilkan error
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);//mysql keluar
	?>