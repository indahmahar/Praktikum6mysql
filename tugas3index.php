<?php
// membuat database connection menggunakan config file
include_once("tugas3config.php");
 
// mengambil semua data pengguna dari database
$result = mysqli_query($mysqli, "SELECT * FROM pegawai ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="tugas3add.php">Add New Pegawai</a><br/><br/> <!--membuat link href menuju file add.php-->
 
    <table width='80%' border=1>  <!--membuat table dan table row -->
    <tr>
        <th>Name</th> <th>Mobile</th> <th>Email</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)){ //megambil semua data by user_data         
        echo "<tr>";//membuat table row
        echo "<td>".$user_data['name']."</td>"; //menampilkan secara table data nama
        echo "<td>".$user_data['mobile']."</td>"; //menampilkan secara table data mobile
        echo "<td>".$user_data['email']."</td>";   //menampilkan secara table data email
        echo "<td><a href='tugas3edit.php?id=$user_data[id]'>Edit</a> | <a href='tugas3delete.php?id=$user_data[id]'>Delete</a></td></tr>"; //eksekusi file edit dan delet link href
    }
    ?>
    </table>
</body>
</html>