<?php
include "fungsi/koneksi.php";
$page = $_GET[page];
$act = $_GET[act];
$nama_file=$_FILES['fupload']['name'];
//if($page=='registrasi' and $act=='save')
//{
if(empty($_POST[kriteria]) 
or empty($_POST[des])


){
 echo"<script>alert('Silahkan Lengkapi Data Anda Terlebih Dahulu !');window.location.href='media.php?page=tambah_kriteria'</script>";
}else{
$cek=mysql_query("select * from kriteria where kriteria='$_POST[kriteria]'");
$jumlah=mysql_num_rows($cek);
if ($jumlah)
{
 echo"<script>alert('Maaf, Kriteria ini telah terdaftar !');window.location.href='./'</script>";
} else {


mysql_query("insert into kriteria(kriteria,des)
 value('$_POST[kriteria]','$_POST[des]')");
 echo"<script>alert('Terima Kasih Data Anda Telah Tersimpan!');window.location.href='./'</script>";
}
}
?>