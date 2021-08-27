<?php
	/** Mencari unigram, bigram dan trigram
	 *  
	 *  Gunakan explode untuk memecah kalimat input menjadi array
	 *  Bagi menjadi beberapa bagian (unigram, bigram, trigram)
	 *  Implode setiap hasil dengan ', ' sebagai penyambung
	**/
	if(isset($_POST['input'])){
		$input = $_POST['input'];
		// Array untuk menyimpan bigram dan trigram
		$bigram = array();
		$trigram = array();
		// Memecah kalimat input menjadi array
		$array = explode(' ', $input);
		// Membuat unigram dengan meyatukan tiap kata dalam array input
		$unigram = implode(', ', $array);
		// Memecah array kalimat input menjadi per 2 kata (bigram)
		// Memecah array kalimat input menjadi per 3 kata (trigram)
		$bigram_chunk = array_chunk($array, 2);
		$trigram_chunk = array_chunk($array, 3);
		// Menyatukan seluruh bagian dari bigram_chunk kedalam array bigram kemudian disusun menjadi sebuah string dengan implode
		for ($i=0; $i <sizeof($bigram_chunk) ; $i++) { 
			array_push($bigram, implode(' ', $bigram_chunk[$i]));
		}
		$bigram = implode(', ', $bigram);
		// Menyatukan seluruh bagian dari trigram_chunk kedalam array trigram kemudian disusun menjadi sebuah string dengan implode
		for ($i=0; $i <sizeof($trigram_chunk) ; $i++) { 
			array_push($trigram, implode(' ', $trigram_chunk[$i]));
		}
		$trigram = implode(', ', $trigram);
		// Menampilkan hasil
		echo "Input : ".$input;
		echo "<br>Unigram : ".$unigram;
		echo "<br>Bigram : ".$bigram;
		echo "<br>Trigram : ".$trigram;
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mencari unigram, bigram, trigram</title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="input">
		<input type="submit">
	</form>
	<label>Contoh kalimat input : Jakarta adalah ibukota negara Republik Indonesia</label>
</body>
</html>