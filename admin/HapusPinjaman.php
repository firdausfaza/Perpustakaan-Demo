<?php

include "../koneksi.php";

$pinjam = $_GET['id'];
$aqstok = mysqli_fetch_array(mysqli_query($menyambung,"SELECT isbn from tbpeminjaman where id_pinjam = '$pinjam'"));

//mengurangi stok
$stoking = mysqli_query($menyambung,"UPDATE tbbuku SET stok = stok + 1 where isbn = '$aqstok[isbn]'");

$hapus = mysqli_query($menyambung, "DELETE FROM tbpeminjaman where id_pinjam = '$pinjam'");




echo "<script>window.alert('Data Berhasil Dihapus')</script>";
echo "<meta http-equiv='refresh' content='0; url=beranda.php?hal=DataPeminjaman'>";

?>