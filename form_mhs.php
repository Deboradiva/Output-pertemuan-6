<?php
require 'Fungsi.php';
$result_mhs = mhs("SELECT * FROM tbl_prodi");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Data Mahasiswa</h2>
  <form action="action.php" method="POST">
    <div class="mb-3 mt-3">
      <label for="nama_mhs">Nama Mahasiswa:</label>
      <input type="text" class="form-control" id="nama_mhs" placeholder="Masukkan Nama" name="nama_mhs">
    </div>
    <div class="mb-3">
      <label for="alamat_mhs">Alamat Mahasiswa:</label>
      <input type="text" class="form-control" id="alamat_mhs" placeholder="Masukkan Alamat Mahasiswa" name="alamat_mhs">
    </div>
    <br>
    <label for="nama_prodi" class="form-label">Prodi :</label>
    <select class="form-select" id="nama_prodi" name="nama_prodi">
        <?php foreach ($result_mhs as $baris) :?>
        <option value="<?php echo $baris['id_prodi'];?>"><?php echo $baris['nama_prodi'];?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>

</body>
</html>