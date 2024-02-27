<?php
 include "koreksi.php";

     $jajan = "INSERT INTO penjualan (id_pasok,id_distributor,id_buku,jumlah,tanggal)value(
    '".$_POST['id_pasok']."',
    '".$_POST['id_distributor']."',
    '".$_POST['id_buku']."',
    '".$_POST['jumlah']."',
    '".$_POST['tanggal']."'
   

    )";

    $koneksi->query($jajan);

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
    <label for="id_pasok" class="form-label"> id_pasok</label>
    <input type="text" class="form-control" id="id_pasok" name="id_pasok"value="<?=$p['id_pasok'] ?>">
  </div>
  <div class="mb-3">
    <label for="id_distributor " class="form-label"> id_distributor</label>
    <input type="text" class="form-control" id="id_distributor" name="id_distributor"value="<?=$p['di_distributor'] ?>">
  </div>
  <div class="mb-3">
    <label for="id_buku" class="form-label"> id_buku</label>
    <input type="number" class="form-control" id="id_buku" name="id_buku"value="<?=$p['id_buku'] ?>">
  </div>
  <div class="mb-3">
    <label for="jumlah" class="form-label"> jumlah</label>
    <input type="number" class="form-control" id="jumlah" name="jumlah"value="<?=$p['jumlah'] ?>">
  </div>
  <div class="mb-3">
    <label for="tanggal" class="form-label"> tanggal</label>
    <input type="number" class="form-control" id="tanggal" name="tanggal" value="<?=$p['tanggal'] ?>">
  </div>
  <button type="submit" class="btn btn-primary">submit</button>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>