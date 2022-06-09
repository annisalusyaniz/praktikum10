<?php
// Create database connection using config file
include_once("koneksi.php");
 
// Fetch all users data from database
$result = mysqli_query($koneksi, "SELECT * FROM tb_siswa ORDER BY id_siswa DESC");
?>
 
<html>
<head>    
    <title>Employees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
 
<body class="bg-light">
<a href="addsiswa.php">Add Siswa</a><br/>
<a href="reportdataexcel.php">Cetak Siswa</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Nama</th> <th>Kelas</th> <th>Alamat</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['kelas']."</td>";
        echo "<td>".$user_data['alamat']."</td>";           
    }
    ?>
    </table>
</body>
</html>