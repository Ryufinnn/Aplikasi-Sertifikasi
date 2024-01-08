<?php
include "fungsi/koneksi.php";
$page = $_GET[page];
$act = $_GET[act];
$nama_file=$_FILES['fupload']['name'];
//if($page=='registrasi' and $act=='save')
//{
if(empty($_POST[nip]) 
or empty($_POST[nama])
or empty($_POST[jk]) 
or empty($_POST[tempat]) 
or empty($_POST[thn]) 
or empty($_POST[bln]) 
or empty($_POST[tgl])
or empty($_POST[usia]) 
or empty($_POST[pendidikan]) 
or empty($_POST[golongan])
or empty($_POST[bidang]) 

or empty($_POST[tugas]) 
or empty($_POST[masa]) 

){
 echo"<script>alert('Silahkan Lengkapi Data Anda Terlebih Dahulu !');window.location.href='media.php?page=registrasi'</script>";
}else{
$cek=mysql_query("select * from acount where nuptk='$_POST[nip]'");
$jumlah=mysql_num_rows($cek);
if ($jumlah)
{
 echo"<script>alert('Maaf, Nomor ini telah terdaftar !');window.location.href='./'</script>";
} else {

$usia=$_POST["usia"] ;
$masa=$_POST["masa"] ;

if ($usia >= 40  )
{
$nh = 'lulus' ;
}
else if (($usia >= 30)&&($masa >= 10) )
{
$nh = 'lulus' ;
}

else 
{
$nh = 'tidak' ;
}


mysql_query("insert into acount(nuptk,nama,jk,tempat,tgl_lahir,usia,pendidikan,golongan,bidang_studi,tmpt_tugas,masa_kerja,keterangan)
 value('$_POST[nip]','$_POST[nama]','$_POST[jk]','$_POST[tempat]','$_POST[thn]-$_POST[bln]-$_POST[tgl]','$_POST[usia]','$_POST[pendidikan]','$_POST[golongan]','$_POST[bidang]','$_POST[tugas]','$_POST[masa]','$nh')");
 echo"<script>alert('Terima Kasih Data Anda Telah Tersimpan!');window.location.href='./'</script>";
}
}
?>