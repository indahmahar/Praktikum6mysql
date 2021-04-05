<?php
// menyertakan file koneksi database
include_once("tugas3config.php");
 
// Periksa apakah formulir dikirimkan untuk pembaruan pengguna, lalu alihkan ke beranda setelah pembaruan
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
		
	// update data user
	$result = mysqli_query($mysqli, "UPDATE pegawai SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");
	
	// Alihkan ke beranda untuk menampilkan pengguna yang diperbarui dalam daftar
	header("Location: tugas3index.php");
}
?>
<?php
// Menampilkan data pengguna yang dipilih berdasarkan id
// Mendapatkan id dari url
$id = $_GET['id'];
 
// Data pengguna Fetech berdasarkan id
$result = mysqli_query($mysqli, "SELECT * FROM pegawai WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))//mendapatkan data dari fetetch di simpan ke array
{
	$name = $user_data['name'];
	$email = $user_data['email'];
	$mobile = $user_data['mobile'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="tugas3index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="tugas3edit.php"> <!--Membuat sebuah form dan sebuah method post-->
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td> <!--membuat input type text dan menampilkan varibel dalam betuk php-->
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td> <!--membuat input type text dan menampilkan varibel dalam betuk php-->
			</tr>
			<tr> 
				<td>Mobile</td>
				<td><input type="text" name="mobile" value=<?php echo $mobile;?>></td> <!--membuat input type text dan menampilkan varibel dalam betuk php-->
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td><!--menyembunyikan suatu get-->
				<td><input type="submit" name="update" value="Update"></td> <!--membuat suatu input bertipe submit-->
			</tr>
		</table>
	</form>
</body>
</html>