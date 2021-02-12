<?php
 if($_GET['hal'] == 'beranda'){
 	include "beranda.php";
 }
 	else if($_GET['hal'] == 'home'){
 		include "home.php";
 	}
 	else if($_GET['hal'] == 'DataBuku'){
 		include "DataBuku.php";
 	}
 	else if($_GET['hal'] == 'DataAnggota'){
 		include "DataAnggota.php";
 	}
 	else if($_GET['hal'] == 'TambahBuku'){
 		include "TambahBuku.php";
 	}
 	else if($_GET['hal'] == 'InfoBuku'){
 		include "InfoBuku.php";
 	}
 	else if($_GET['hal'] == 'UbahBuku'){
 		include "UbahBuku.php";
 	}
 	else if($_GET['hal'] == 'TambahAnggota'){
 		include "TambahAnggota.php";
 	}
 	else if($_GET['hal'] == 'InfoAnggota'){
 		include "InfoAnggota.php";
 	}
 	else if($_GET['hal'] == 'UbahAnggota'){
 		include "UbahAnggota.php";
 	}
 	else if($_GET['hal'] == 'DataPeminjaman'){
 		include "DataPeminjaman.php";
 	}
 	else if($_GET['hal'] == 'Peminjaman'){
 		include "Peminjaman.php";
 	}
 	else if($_GET['hal'] == 'Laporan'){
 		include "Laporan.php";
 	}