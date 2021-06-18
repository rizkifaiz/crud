<?php
require 'function.php';

//ambil data di url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query( "SELECT * FROM tbl_mahasiswa1 WHERE id = $id" )[0];

//cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    
    // cek apakah data berhasil di ubah atau tidak
    if( !empty($_POST) ) {
        ubah($_POST);
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else{
        echo "
            <script>
                alert('data gagal diubah');
                document.location.href = 'index.php';
            </script>
        ";
    }   

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>ubahh data mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="date" name="nrp" id="nrp" required
                value="<?= $mhs["nrp"];?>" >
            </li>
            <li>
                <label for="nama">NAMA : </label>
                <input type="text" name="nama" id="nama" required
                value="<?= $mhs["nama"];?>" >
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email"
                value="<?= $mhs["email"];?>" >
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required
                value="<?= $mhs["jurusan"];?>" >
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" 
                value="<?= $mhs["gambar"];?>" >
            </li>
            <li>
                <button type="submit" name="submit">ubah data</button>
            </li>
        </ul>
    
    </form>

</body>
</html>