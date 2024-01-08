<?php
	//Gunakan Koneksi
	include("fungsi/koneksi.php");
	//Buat array bobot { C1 = 35%; C2 = 25%; C3 = 25%; dan C4 = 15%.}
	$bobot = array(5, 3, 2, 1, 0, 0);

	//Buat fungsi tampilkan nama
	function getNama($id){
		$q =mysql_query("SELECT * from acount where id_acount = '$id'");
		$d = mysql_fetch_array($q);
		return $d['nm_belakang'];
	}
	
	//Setelah bobot terbuat select semua di tabel Matrik
	$sql = mysql_query("SELECT * FROM tbmatrik");
	//Buat tabel untuk menampilkan hasil
	
	echo "<H3>Matrik Awal</H3>
	<table width=500 style='border:1px; #ddd; solid; border-collapse:collapse' border=1>
		<tr>
			<td>No</td><td>Nama</td><td>C1</td><td>C2</td><td>C3</td><td>C4</td><td>C5</td><td>C6</td>
		</tr>
		";
	$no = 1;
	while ($dt = mysql_fetch_array($sql)) {
		echo "<tr>
			<td>$no</td><td>".getNama($dt['id_acount'])."</td><td>$dt[Kriteria1]</td><td>$dt[Kriteria2]</td><td>$dt[Kriteria3]</td><td>$dt[Kriteria4]</td><td>$dt[Kriteria5]</td><td>$dt[Kriteria6]</td>
		</tr>";
	$no++;
	}
	echo "</table>";

	//Lakukan Normalisasi dengan rumus pada langkah 2
	//Cari Max atau min dari tiap kolom Matrik
	$crMax = mysql_query("SELECT min(Kriteria1) as maxK1, 
						max(Kriteria2) as maxK2,
						max(Kriteria3) as maxK3,
						max(Kriteria4) as maxK4,
						max(Kriteria5) as maxK5,
						max(Kriteria6) as maxK6
			FROM tbmatrik");
	$max = mysql_fetch_array($crMax);
	

	//Hitung Normalisasi tiap Elemen
	$sql2 = mysql_query("SELECT * FROM tbmatrik");
	//Buat tabel untuk menampilkan hasil
	echo" <br>";
	echo "<H3>Matrik Normalisasi</H3>
	<table width=500 style='border:1px; #ddd; solid; border-collapse:collapse' border=1>
		<tr>
			<td>No</td><td>Nama</td><td>C1</td><td>C2</td><td>C3</td><td>C4</td><td>C5</td><td>C6</td>
		</tr>
		";
	$no = 1;
	while ($dt2 = mysql_fetch_array($sql2)) {
		echo "<tr>
			<td>$no</td><td>".getNama($dt2['id_acount'])."</td><td>".round($max['maxK1']/$dt2['Kriteria1'],2)."</td><td>".round($dt2['Kriteria2']/$max['maxK2'],2)."</td><td>".round($dt2['Kriteria3']/$max['maxK3'],2)."</td><td>".round($dt2['Kriteria4']/$max['maxK4'],2)."</td><td>".round($dt2['Kriteria5']/$max['maxK5'],2)."</td><td>".round($dt2['Kriteria6']/$max['maxK6'],2)."</td>
		</tr>";
	$no++;
	}
	echo "</table>";

	//Proses perangkingan dengan rumus langkah 3
	$sql3 = mysql_query("SELECT * FROM tbmatrik");
	//Buat tabel untuk menampilkan hasil
	echo" <br>";
	echo "<H3>Hasil Analisa</H3>
	<table width=500 style='border:1px; #ddd; solid; border-collapse:collapse' border=1>
		<tr>
			<td>No</td><td>Nama</td><td>Rangking</td>
		</tr>
		";
	$no = 1;
	//Kita gunakan rumus (Normalisasi x bobot)
	while ($dt3 = mysql_fetch_array($sql3)) {
		echo "<tr>
			<td>$no</td><td>".getNama($dt3['id_acount'])."</td>
			<td>"
			.round((($max['maxK1']/$dt3['Kriteria1'])*5)+
			(($dt3['Kriteria2']/$max['maxK2'])*3)+
			(($dt3['Kriteria3']/$max['maxK3'])*2)+
			(($dt3['Kriteria4']/$max['maxK4'])*1)+
			(($dt3['Kriteria5']/$max['maxK5'])*0)+
			(($dt3['Kriteria6']/$max['maxK6'])*0),2)."</td>
		</tr>";
	$no++;
	}
	echo "</table>";
	echo " <br>";
	echo " <a  href='media.php?page=proses ' onclick='return confirm('Anda yakin untuk menghapus data ini ?')'>
 <button style='width:60px;text-align:center;'>SIMPAN</button>";
	

echo " <br>";
echo " <br>";
?>