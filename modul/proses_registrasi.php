<?php
include "fungsi/koneksi.php";
$page = $_GET[page];
$act = $_GET[act];
//if($page=='registrasi' and $act=='save')
//{
if(empty($_POST[nm_depan]) 
or empty($_POST[nm_belakang])
or empty($_POST[kelas]) 
or empty($_POST[email]) 
or empty($_POST[pass]) 
or empty($_POST[jk]) 
or empty($_POST[thn]) 
or empty($_POST[bln]) 
or empty($_POST[tgl])
or empty($_POST[nohp]) 
or empty($_POST[alamat]) 
or empty($_POST[nama_a])
or empty($_POST[pekerjaan_a]) 
or empty($_POST[penghasilan_a]) 
or empty($_POST[nama_i]) 
or empty($_POST[pekerjaan_i]) 
or empty($_POST[penghasilan_i]) 
or empty($_POST[jumlah]) 
or empty($_POST[ekskul])
or empty($_POST[organisasi]) 
or empty($_POST[rapor])  
){
 echo"<script>alert('Silahkan Lengkapi Data Anda Terlebih Dahulu !');window.location.href='media.php?page=registrasi'</script>";
}else{
$cek=mysql_query("select * from acount where email='$_POST[email]'");
$jumlah=mysql_num_rows($cek);
if ($jumlah)
{
 echo"<script>alert('Maaf, Email ini sudah terdaftar,silahkan masukan email yang lain !');window.location.href='./'</script>";
} else {

mysql_query("insert into acount(nm_depan,nm_belakang,kelas,email,password,jk,tgl_lahir,nohp,alamat,nama_a,pekerjaan_a,penghasilan_a,nama_i,pekerjaan_i,penghasilan_i,jumlah,ekskul,organisasi,rapor)
 value('$_POST[nm_depan]','$_POST[nm_belakang]','$_POST[kelas]','$_POST[email]','$_POST[pass]','$_POST[jk]','$_POST[thn]-$_POST[bln]-$_POST[tgl]','$_POST[nohp]','$_POST[alamat]','$_POST[nama_a]','$_POST[pekerjaan_a]','$_POST[penghasilan_a]','$_POST[nama_i]','$_POST[pekerjaan_i]','$_POST[penghasilan_i]','$_POST[jumlah]','$_POST[ekskul]','$_POST[organisasi]','$_POST[rapor]')");
 echo"<script>alert('Terima Kasih Anda Telah Melakukan Registrasi, Silahkan Login untuk Masuk Ke Dalam Sistem !');window.location.href='./'</script>";
}
}
?>