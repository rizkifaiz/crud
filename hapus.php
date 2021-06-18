<?php
require 'function.php';

$id = $_GET["id"];

if($id > 0 ){
    hapus($id);
    echo "
        <script>
            alert('data berhasil dihapus');
            document.location.href = 'index.php';
        </script>
    ";
}else {
    echo "
        <script>
            alert('data gagal dihapus');
            document.location.href = 'index.php';
        </script>
    ";
}

?>