<?php
include "../koreksi.php";
$sql = "select * from penjualan where id_penjualan = " .$_GET['id'];
$hasil = $koneksi->query($sql);

$p = ($hasil->fetch_assoc());


if (isset($_POST['id_penjualan'])) 

{

  $sql = "update penjualan set 
      id_penjualan = '" . $_POST['id_penjualan'] . "',
      id_buku = '" . $_POST['id_buku'] . "',
      id_kasir = '" . $_POST['id_kasir'] . "',
      jumlah = '" . $_POST['jumlah'] . "',
      total = '" . $_POST['total'] . "',
      tanggal = '" . $_POST['tanggal'] . "'
  ";

  $koneksi->query($sql);

  header('location:tabelpenjualan.php');

}


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
    <label for="penjualan" class="form-label"> penjualan</label>
    <input type="text" class="form-control" id="penjualan" name="penjualan"value="<?=$p['penjualan'] ?>">
  </div>
  <div class="mb-3">
    <label for="id_buku " class="form-label"> id_buku</label>
    <input type="text" class="form-control" id="id_buku" name="id_buku"value="<?=$p['id_buku'] ?>">
  </div>
  <div class="mb-3">
    <label for="id_kasir" class="form-label"> id_kasir</label>
    <input type="number" class="form-control" id="id_kasir" name="id_kasir"value="<?=$p['id_kasir'] ?>">
  </div>
  <div class="mb-3">
    <label for="jumlah" class="form-label"> jumlah</label>
    <input type="number" class="form-control" id="jumlah" name="jumlah"value="<?=$p['jumlah'] ?>">
  </div>
  <div class="mb-3">
    <label for="total" class="form-label"> total</label>
    <input type="number" class="form-control" id="total" name="total" value="<?=$p['total'] ?>">
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