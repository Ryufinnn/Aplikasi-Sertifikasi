<?php
include "fungsi/koneksi.php";
$page = $_GET[page];
$act = $_GET[act];
//if($page=='registrasi' and $act=='save')
//{
if(empty($_POST[total]) 
or empty($_POST[jumlah])
or empty($_POST[akademik]) 
or empty($_POST[ekskul]) 
or empty($_POST[organisasi]) 
or empty($_POST[rapor]) 

){
 echo"<script>alert('Silahkan Lengkapi Data Anda Terlebih Dahulu !');window.location.href='media.php?page=beasiswa'</script>";

} else {

mysql_query("insert into tbmatrik(id_acount,Kriteria1,Kriteria2,Kriteria3,Kriteria4,Kriteria5,Kriteria6)
 value('$_POST[id_acount]','$_POST[total]','$_POST[jumlah]','$_POST[akademik]','$_POST[ekskul]','$_POST[organisasi]','$_POST[rapor]')");
 echo"<script>alert('Terima Kasih Anda Telah Melakukan Registrasi, Silahkan Login untuk Masuk Ke Dalam Sistem !');window.location.href='./'</script>";
}

?>