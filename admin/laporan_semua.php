
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-family: "Monotype Corsiva";
	color: #0000FF;
}
.style2 {
	font-family: "Times New Roman", Times, serif;
	font-size: 24px;
	font-weight: bold;
}
-->
</style>

<div id='judul_kontent'><p align="center" class="style2">DINAS PENDIDIKAN KABUPATEN SOLOK SELATAN</p>
</div>
<table id='theList' border=1 width='100%'>
<tr><th width="3%"><div align="center">No.</div></th>
<th><div align="center">NUPTK </div></th>
<th width="10%"><div align="center">Nama</div></th>
<th width="13%"><div align="center">Tempat Tugas</div></th>
<th width="12%"><div align="center">Pendidikan</div></th>
<th width="14%"><div align="center">Usia</div></th>
<th width="14%"><div align="center">Masa Kerja</div></th>
<th width="14%"><div align="center">Golongan</div></th>
<th width="14%"><div align="center">Keterangan</div></th>
</tr>
<?php
$sql = mysql_query("select * from acount ");
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
<td class='td' width='12%'><div align="left"><?echo" $r[nuptk]";?></div></td>
<td class='td'><div align="center"><?echo$r[nama];?></div></td>
<td class='td'><div align="center"><?echo$r[tmpt_tugas];?></div></td>
<td class='td'><div align="center"><?echo$r[pendidikan];?></div></td>

<td class='td'><div align="center"><?echo$r[usia];?></div></td>
<td class='td'><div align="center"><?echo$r[masa_kerja];?></div></td>
<td class='td'><div align="center"><?echo$r[golongan];?></div></td>
<td class='td'><div align="center"><?echo$r[keterangan];?></div></td>


</tr>
<?
$no++;
}
?>
</table>
<br><br>
<a href="cetak_semua.php" class="style1">Cetak Laporan</a><br>
<br>
<?
if($_GET[page]=='registrasi' and $_GET[act]=='delete'){
$sql=mysql_query("delete from acount where id_acount='$_GET[id]'");
echo"<script>window.location.href='?page=registrasi'</script>";
}

?>