<?php
include "../koreksi.php";

$sql = 'SELECT * FROM toko_buku WHERE id_distributor='.$_GET['id'];

$hasil = $koneksi->query($sql);

$p = ($hasil->fetch_assoc());


if(isset($_POST['alamat']))

{

  $sql = "UPDATE toko_buku SET 
      nama_distributor = '".$_POST['nama_distributor']."',
      alamat = '".$_POST['alamat']."',
      telepon = '".$_POST['telepon']."'
      WHERE id_distributor=".$_GET['id'];

  $koneksi->query($sql);
  header('location:tabeldistributor.php');
};

?> 

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
  <form action ="distributor.php" method="post">
  <div class="mb-3">
    <label for="id_distributor" class="form-label"> id_distributor</label>
    <input type="text" class="form-control" id="id_distributor" name="id_distributor" value="<?=$p['id_distributor'] ?>">
  </div>
  <div class="mb-3">
    <label for="nama_distributor" class="form-label"> nama_distributor</label>
    <input type="text" class="form-control" id="nama_distributor" name="nama_distributor" value="<?=$p['nama_distributor'] ?>">
  </div>
  <div class="mb-3">
    <label for="alamat " class="form-label"> alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$p['alamat'] ?>">
  </div>
  <div class="mb-3">
    <label for="telepon" class="form-label"> telepon</label>
    <input type="number" class="form-control" id="telepon" name="telepon" value="<?=$p['telepon'] ?>">
  </div>
  <button type="submit" class="btn btn-primary">submit</button>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>