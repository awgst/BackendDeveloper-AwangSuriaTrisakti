<?php
	/** Nilai ujian
	 *  
	 *  Explode string $nilai agar menjadi array
	 *  Cari rata-rata, top 7 dan last 7
	 *  Tampilkan hasil
	**/
	// Input
	$nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
	// Konversi array
	$array = explode(' ', $nilai);
	// Mencari rata-rata
	$avg = array_sum($array) / count($array);
	// Mengurutkan terbesar -> terkecil
	rsort($array);
	// Ambil 7 terdepan
	$top7 = implode(' ', array_slice(array_unique($array), 0, 7));
	// Mengurutkan terkecil -> terbesar
	asort($array);
	// Ambil 7 terdepan
	$last7 = implode(' ', array_slice(array_unique($array), 0, 7));
	// Menampilkan hasil
	echo "Nilai : ".$nilai;
	echo "<br>Rata-rata : ".$avg;
	echo "<br>7 Nilai tertinggi : ".$top7;
	echo "<br>7 Nilai terendah : ".$last7;
?>