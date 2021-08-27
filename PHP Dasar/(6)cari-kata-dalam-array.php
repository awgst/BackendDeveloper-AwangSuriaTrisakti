<?php
	/** Mencari kata dalam array
	 *  
	 *  Membuat fungsi untuk mencari kata dalam array
	 *  Loop setiap huruf di input dan tentukan 
	 *  Apakah huruf tsb terdapat dalam array
	**/
	function cari($arr, $input){
		// Split input
		$input = str_split($input);
		// Menyimpan hasil
		$result = false;
		$index = -1;
		// Loop setiap huruf dalam kata input
		for ($i=0; $i <sizeof($input) ; $i++) { 
			$result = false;
			for ($j=0; $j < sizeof($arr) ; $j++) { 
				// Cek apakah huruf tsb ada didalam array
				// Jika ada maka result akan true
				if(in_array($input[$i], $arr[$j])){
					if (array_search($input[$i], $arr[$j])==$index) {
						$result = true;	
					}
					$index = array_search($input[$i], $arr[$j]);
					$result = true;
				}
			}
			// Jika result masih false maka perulangan selesai
			// Karena ada huruf yang tidak ada di array
			if ($result==false) {
				break;
			}
		}
		return $result;
	}
	
	$arr = array(
		array('f','g','h', 'i'),
		array('j','k','p', 'q'),
		array('r','s','t', 'u'),
	);

	if (cari($arr, 'ghiq')) {
		echo "true";
	}
	else{
		echo "false";
	}
?>