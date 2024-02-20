<?php
include "koreksi.php"

($jajan) = "INSERT INTO  toko_buku(nama_distributor,alamt,telpon) values(
'".$_POST['nama_distributor']."',
'".$_POST['Alamat']."',
'".$_POST['Telpon']."',
)";

$koneksi->query ($jajan);
?> 