<?php

include "../koneksi.php";

$id_anggota = $_GET['id_anggota'];
$hapus = mysqli_query($menyambung, "DELETE FROM tbanggota where id_anggota = '$id_anggota'");

echo "<script>window.alert('Data Berhasil Dihapus')</script>";
echo "<meta http-equiv='refresh' content='0; url=beranda.php?hal=DataAnggota'>";

?>