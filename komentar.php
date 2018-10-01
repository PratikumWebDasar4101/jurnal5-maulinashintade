<form method="post">
 	<center><h2>Masukkan Komentar Anda</h2></center>
 	<center><b>Komentar : </b><textarea name="komentar" rows="5" cols="40"></textarea></center><br>
 	<center><input type="submit" name="submit" value="Kirim"></center>
 </form>

 <?php 
if (isset($_POST['submit'])) {
	$komentar = $_POST['komentar'];

	$count = explode(" ", $komentar);
	if (count($count) < 5) {
		echo "Jumlah kata di komentar tidak sampai 5 kata";
	}else{
		echo "Jumlah kata di komentar : ".count($count)."kata";
	}
}

 ?>
