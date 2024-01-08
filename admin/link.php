<?php
	$link=$_GET['link'];
	if($link=="soal"){
		include "g_soal.php";
	}else if($link=="nilai"){
		include "g_view_nilai.php";
	}
	else if($link=='view_soal'){
		include "g_view_soal.php";
	}
	else if($link=='home'){
		echo "<center>selamat datang guru, gunakan menu yang ada untuk mengakses web<center>";
	}
?>
