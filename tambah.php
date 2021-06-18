<?php
require 'function.php';

// koneksi ke dbse
$conn = mysqli_connect("localhost", "root", "", "mahasiswa");
//cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    

    
    // cek apakah data berhasil di tambahkan atau tidak
if(!empty($_POST)) { //apabila tidak kosong
    tambah($_POST);
    echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
    ";
} else{
    echo "
        <script>
            alert('data gagal ditambahkan');
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
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="date" name="nrp" id="nrp" required>
            </li>
            <li>
                <label for="nama">NAMA : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah data</button>
            </li>
        </ul>
    
    </form>

</body>
</html>