
<?php
if($_SESSION[email]==null)
	{
	echo "<script>alert('Silahkan Login Terlebih dahulu');window.location='media.php?page=home'</script>";
	}
?>
<style type="text/css">
<!--
.style1 {font-family: "Times New Roman", Times, serif;
font-size: 14px;}

-->
</style>

<div id='judul_kontent'><h1><img src='images/registrasi.png' width='30' height='30'> Data Kriteria</h1>
</div>
 <a  href="media.php?page=tambah_kriteria">
 <button style="width:60px;text-align:center;">Tambah</button></a>
 
<table id='theList' border=1 width='76%'>
<tr><th width="11%"><div align="center">No.</div></th>
<th><div align="center">KRITERIA</div></th>
<th width="31%"><div align="center" >NILAI</div></th>
<th>Aksi</th></tr>
<?php
$sql = mysql_query("select * from kriteria order by id asc");
$no=1;
while($r = mysql_fetch_array($sql)){
if($r[aktif]==1){
$status="Online";
}else{
$status="Offline";
}
?>
<tr>
<td class='td' align='center'><div align="center"><?echo$no;?></div></td>
<td class='td' width='30%'><div align="left" class="style1"><?echo" $r[kriteria]";?></div></td>
<td class='td'><div align="center" class="style1"><?echo$r[des];?></div></td>
<td class='td' align='center' width='28%'>
 <a  href='?page=kriteria&act=delete&id=<?echo$r[id];?>' onclick="return confirm('Anda yakin untuk menghapus data ini ?')">
 <button style='width:60px;text-align:center;'>Delete</button></a> 
 </td>
</tr>
<?
$no++;
}
?>
</table>

<?
if($_GET[page]=='kriteria' and $_GET[act]=='delete'){
$sql=mysql_query("delete from kriteria where id='$_GET[id]'");
echo"<script>window.location.href='?page=kriteria'</script>";
}

?>