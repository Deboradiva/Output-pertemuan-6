<?php
$koneksi= mysqli_connect("localhost","root","","tugas4");
function mhs($mhs){
    global $koneksi;
    $result = mysqli_query($koneksi,$mhs);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
  }

function hapus($id_mhs){
  global $koneksi;
  $query="DELETE from tbl_mhs where id_mhs='$id_mhs'";
  mysqli_query($koneksi, $query);
}
?>