<?php
require 'function.php';
$mahasiswa = query("SELECT * FROM tbl_mahasiswa1");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<h1>daftar Mahasiswa</h1>

<a href="tambah.php"><button>tambah data</button></a>
<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php $i = 1 ?>
    <?php foreach( $mahasiswa as $row ) : ?>   
        <tr>
            <td><?php echo $i ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
                <a href="hapus.php?id=<?= $row["id"]; ?> " onclick="return confirm('yakin?')">hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50px" height="50px"</td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>   
        </tr>
        
        <?php $i++; ?>
    <?php  endforeach; ?>
</table>

</body>    
</body>
</html>