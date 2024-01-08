<?php
include "fungsi/koneksi.php";
$page = $_GET[page];
$act = $_GET[act];
//if($page=='registrasi' and $act=='save')
//{else{
$cek=mysql_query("select * from acount where email='$_POST[email]'");
$jumlah=mysql_num_rows($cek);
if ($jumlah)
{
 echo"<script>alert('Maaf, Email ini sudah terdaftar,silahkan masukan email yang lain !');window.location.href='./'</script>";
} else {

mysql_query("insert into acountt(nm_depan,nm_belakang,kelas,email,password,jk,tgl_lahir,nohp,alamat,nama_a,pekerjaan_a,nama_i,pekerjaan_i)
 value('$_POST[nm_depan]','$_POST[nm_belakang]','$_POST[kelas]','$_POST[email]','$_POST[pass]','$_POST[jk]','$_POST[thn]-$_POST[bln]-$_POST[tgl]','$_POST[nohp]','$_POST[alamat]','$_POST[nama_a]','$_POST[pekerjaan_a]','$_POST[nama_i]','$_POST[pekerjaan_i]')");
 echo"<script>alert('Terima Kasih Data Anda Telah Tersimpan');window.location.href='./'</script>";
}

?>