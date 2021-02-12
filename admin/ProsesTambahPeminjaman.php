<?php
include "../koneksi.php";
$id_pinjam = $_POST['id_pinjam'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$isbn = $_POST['isbn'];
$tgl_kembali = $_POST['tgl_kembali'];
$id_anggota = $_POST['id_anggota'];
$status = "Pinjam";


$simpan = mysqli_query($menyambung,"INSERT INTO tbpeminjaman VALUES('$id_pinjam','$tgl_pinjam','$isbn','$tgl_kembali','$id_anggota','$status')");

$qstok = mysqli_fetch_array(mysqli_query($menyambung,"SELECT isbn from tbpeminjaman where id_pinjam = '$id_pinjam'"));

//mengurangi stok
$stok = mysqli_query($menyambung,"UPDATE tbbuku SET stok = stok - 1 where isbn = '$qstok[isbn]'");


echo "<script>window.alert('Data Peminjaman Berhasil')</script>";
	echo "<meta http-equiv='refresh' content='0; url=beranda.php?hal=DataPeminjaman'>";



?>