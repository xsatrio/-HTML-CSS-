<?php
// Name    : Satrio Mukti Prayoga
// NIM     : 211351137
// Class   : IF Malam B
$user = $_POST['USER'];
$pass = $_POST['PASS'];
if ($user=="admin" && $pass=="admin123") {
	echo "sukses";
	header('location:dashboard.php');
}else {
	echo "gagal";
	header('location:login.php');
}
?>