<?php
session_start();
if (isset($_POST["submit"])) {
	$nama_admin = $_POST['nama_admin'];
	$password_admin = $_POST['password_admin'];
	
	if ($nama_admin=="") {
			$_SESSION["message"] = "nama admin harus diisi";
			header("location:index.php");
			exit();
		}elseif ($password_admin=="") {
			$_SESSION["message"] = "Password harus diisi";
			header("location:index.php");
		}else{
			include("koneksi.php");
			$result = $menyambung->query("SELECT * FROM tbadmin WHERE nama_admin LIKE '".$nama_admin."' AND password_admin LIKE '".$password_admin."'");
			if ($result->num_rows==1) {
				setcookie("id_admin",$result->fetch_assoc()["id_admin"]);
				header("location:admin/beranda.php?hal=home");
				exit();


				# code...
			}
			else{
				$_SESSION["message"] = "Akun ga ada";
			header("location:/tugasakhir");
			exit();
			}
		}


}
?>