<?php

include "../koneksi.php";

$isbn = $_POST['isbn'];
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$tahun_terbit = $_POST['tahun_terbit'];
$stok = $_POST['stok'];
$ib = $_POST['ib'];

$edit = mysqli_query($menyambung,"UPDATE tbbuku SET judul_buku='$judul_buku',pengarang='$pengarang',tahun_terbit='$tahun_terbit', stok='$stok', ib='$ib' where isbn='$isbn' ");

echo "<script>window.alert('Buku Berhasil diUbah')</script>";
	echo "<meta http-equiv='refresh' content='0; url=beranda.php?hal=DataBuku'>";

?>