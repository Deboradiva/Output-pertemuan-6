<?php
$koneksi = mysqli_connect("localhost","root","","tugas4");
if (isset($_POST["submit"])){
    $nama_mhs = $_POST["nama_mhs"];
    $alamat_mhs = $_POST["alamat_mhs"];
    $id_prodi = $_POST["nama_prodi"];

    $query = "INSERT INTO tbl_mhs VALUE ('','$id_prodi', '$nama_mhs', '$alamat_mhs')";

    mysqli_query($koneksi,$query);

    if(mysqli_affected_rows($koneksi)>0){
        echo "
        <script>
            alert('Data berhasil');
            document.location.href = 'data_mhs.php';
        </script>
        ";

    }
}
?>