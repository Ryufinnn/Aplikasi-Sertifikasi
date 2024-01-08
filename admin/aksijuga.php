<?php
	session_start();
	include "fungsi/koneksi.php";
	
	$act=$_GET[act];
	$link=$_GET[link];
	
	//input soal guru
	if($link=='soal' AND $act=='input'){
		mysql_query("INSERT INTO tsoal VALUES ('$_POST[IdSoal]',
											   '$_POST[matpel]',
											   '$_POST[nip]',
											   '$_POST[input_soal]',
											   '$_POST[jawaban_A]',
											   '$_POST[jawaban_B]',
											   '$_POST[jawaban_C]',
											   '$_POST[jawaban_D]',
											   '$_POST[jawaban_benar]'
												)");
												
		header('location:media.php?page=input');
	}
	//hapus soal guru
	elseif($link=='soal' AND $act=='hapus'){
		mysql_query("DELETE FROM tsoal where IdSoal='$_GET[id]'");
		header('location:media.php?page=lihat');
	}
	
	//hapus nilai siswa
	elseif($link=='nilai' AND $act=='hapus'){
		mysql_query("DELETE FROM tnilai where IdNilai='$_GET[id]'");
	}
?>