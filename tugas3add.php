<html>
<head>
	<title>Add pegawai</title>
</head>
 
<body>
	<a href="tugas3index.php">Go to Home</a> <!--membuat link kembali ke index-->
	<br/><br/>
 
	<form action="tugas3add.php" method="post" name="form1"> <!--membuat form dan sebuah method post--> 
		<table width="25%" border="0"><!--membuat table-->
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td> <!--membuat input type text-->
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td> <!--membuat input type text-->
			</tr>
			<tr> 
				<td>Mobile</td>
				<td><input type="text" name="mobile"></td> <!--membuat input type text-->
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td> <!--membuat input type submit-->
			</tr>
		</table>
	</form>
	<?php
	// memeriksa Jika formulir dikirim, masukkan data formulir ke tabel pengguna.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		
		// sertakan file koneksi database
		include_once("tugas3config.php");
				
		// Masukkan data pengguna ke dalam tabel
		$result = mysqli_query($mysqli, "INSERT INTO pegawai(name,email,mobile) VALUES('$name','$email','$mobile')");
		
		// Tampilkan pesan ketika pengguna menambahkan
		echo "User added successfully. <a href='tugas3index.php'>View Users</a>";
	}
	?>
</body>
</html>