<?php 
$error_nim = "";
if (isset($_POST['submit'])) {
	$nim 	= htmlspecialchars(stripcslashes(trim(($_POST['nim']))));
	if ($nim == "") {
		$error_nim = "Harus 10 digit";
	}else{
		if (strlen($nim)<>10 && !is_numeric($nim)) {
			$error_nim = "Harus 10 digit dan Berupa Angka";
		}
		else{
			header('Location: prosesregis.php');
		}
	}
}
$error_nama = "";
if (isset($_POST['submit'])) {
	$nama 	= htmlspecialchars(stripcslashes(trim(($_POST['nama']))));
	if ($nama == "") {
		$error_nama = "Maksimal 25 digit";
	}else{
		if (strlen($nama)>25 && !is_string($nama)) {
			$error_nama = "Maksimal 25 digit dan Berupa Huruf";
		}
		else{
			header('Location: prosesregis.php');
		}
	}
}
 ?>
 <h2><center>Registrasi Mahasiswa</center></h2>
 <form action="prosesregis.php" method="post">
	<center>
		<table>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="number" name="nim" pattern="\d*" maxlength="10" placeholder="Masukkan Nim Anda" required></td>
				<td><div style="color: red"><?php echo $error_nim;?></div></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" minlength="3" maxlength="25" placeholder="Masukkan Nama Anda" required></td>
				<td><div style="color: red"><?php echo $error_nama;?></div></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" pattern="[a-z0-9._-]+@+[a-z]+.com"  placeholder="example@gmail.com" required></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="submit" value="Kirim"></td>
			</tr>
		</table>
	</center>
</form>
</body>
</html>
