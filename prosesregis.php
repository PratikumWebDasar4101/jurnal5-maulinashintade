<?php
session_start();
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$email = $_POST['email'];
if (isset($_POST['submit'])) {
	$nim   = isset($_POST['nim']) ? $_POST['nim'] : "";
	$nama  = isset($_POST['nama']) ? $_POST['nama'] : "";
	$email = isset($_POST['email']) ? $_POST['email'] : "";	
}
echo "Nim   : " .$nim;
echo "<br>";
echo "Nama  : " .$nama;
echo "<br>";
echo "Email : " .$email;
 ?>
