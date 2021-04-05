<?php
// menyertakan file koneksi database
include_once("tugas3config.php");
 
// Mendapatkan id dari URL untuk menghapus pengguna 
$id = $_GET['id'];
 
// Hapus baris pengguna dari tabel berdasarkan id yang diberikan
$result = mysqli_query($mysqli, "DELETE FROM pegawai WHERE id=$id");
 
// Setelah menghapus redirect ke Home, sehingga daftar pengguna terbaru akan ditampilkan.
header("Location:tugas3index.php");
?>