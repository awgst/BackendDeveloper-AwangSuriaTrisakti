<?php
	function generate(){
		/** Membuat tabel hitam putih
		 *  
		 *  Tabel warna putih adalah tabel dengan angka kelipatan 3
		 *  Tabel warna putih juga memiliki angka 4 dan kelipatan 8
		 *  Tabel warna putih juga memiliki angka 8 dan kelipatan 8
		**/	

		$angka = 0;
		$putih1 = 4;
		$putih2 = 8;
		for ($i=1; $i <= 8; $i++) { 
			echo "<tr>";
			for ($j=1; $j <=8 ; $j++) { 
				$angka++;
				if ($angka%3==0) {
					echo "<td style='width:50px;height:50px;'>".$angka."</td>";
				}
				else{
					if($angka==$putih1 || $angka==$putih2){
						echo "<td style='width:50px;height:50px;'>".$angka."</td>";		
					}
					else{
						echo "<td style='width:50px;height:50px;background-color: black; color: white;'>".$angka."</td>";	
					}
					
				}
			}
			$putih1=$putih1+8;
			$putih2=$putih2+8;
			echo "</tr>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hitam putih</title>
</head>
<body>
	<table cellspacing="0px" cellpadding="0px" style="text-align: center;">
		<?php
			generate();
		?>
	</table>
</body>
</html>