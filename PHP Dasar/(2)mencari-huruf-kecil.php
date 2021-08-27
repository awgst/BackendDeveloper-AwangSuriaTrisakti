<?php
	/** Mencari jumlah huruf kecil
	 *  
	 *  Cari [a-z] dengan menggunakan fungsi preg_match_all
	 *  Hasil fungsi tersebut jumlah karakter yang sesuai
	 *  Tampilkan hasil jumlah huruf kecil
	**/
	if (isset($_POST['input'])) {
		$input = $_POST['input'];
		// Menghitung jumlah huruf kecil di kalimat input
		$result = preg_match_all('/[a-z]/', $input, $matches);
		// Menampilkan hasil
		echo "Input : ".$input;
		echo "<br>Jumlah huruf kecil : ".$result;
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mencari Huruf Kecil</title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="input">
		<input type="submit">
	</form>
</body>
</html>