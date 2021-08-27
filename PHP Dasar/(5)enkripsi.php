<?php
	/** Membuat fungsi enkripsi
	 *  
	 *  fungsi enkripsi memiliki pola +,-,+,-,...dst
	 *  jumlah in/decrement meningkat setiap huruf
	 *  pola enkripsi menjadi +1,-2,+3,-4...dst
	**/	
	function enkripsi(){
		$str_input = $_POST['input'];
		// Input akan di split array menjadi per huruf
		$input = str_split($str_input);
		$result = array();
		// Enkripsi setiap huruf dengan perulangan
		for ($i=1; $i <= sizeof($input) ; $i++) {
			// Penambahan dan pengurangan karakter menggunakan ascii
			// Setiap index genap maka akan dikurangi
			// Setiap index ganjil maka akan ditambah
			if($i%2==0){
				$ascii = ord($input[$i-1]);
				$ascii -= $i;
				array_push($result, chr($ascii));
			}
			else{
				$ascii = ord($input[$i-1]);
				$ascii += $i;
				array_push($result, chr($ascii));
			}
		}
		echo "Input : ".$str_input;
		echo "<br>Output : ".implode('', $result);
	}
	if(isset($_POST['submit'])){
		enkripsi();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fungsi Enkripsi</title>
</head>
<body>
	<form action="(5)enkripsi.php" method="POST">
		<input type="text" name="input">
		<input type="submit" name="submit" value="click">
	</form>
</body>
</html>