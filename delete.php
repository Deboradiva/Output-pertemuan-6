<?php
require 'Fungsi.php';

$id_mhs = $_GET['id_mhs'];
if(hapus($id_mhs) < 0 ){
    echo "
        <script>
            alert('Data gagal');
            document.location.href = 'data_mhs.php';
        </script>
        ";
}else{
    echo "
        <script>
            alert('Data berhasil');
            document.location.href = 'data_mhs.php';
        </script>
        ";
}
?>