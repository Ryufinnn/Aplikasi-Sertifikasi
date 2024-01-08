
<body onLoad="javascript:window:print()">
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-family: "Monotype Corsiva";
	color: #0000FF;
}
-->
</style>

<div id='judul_kontent'>
  <h2 align="center"> DAFTAR NAMA TIDAK LULUS SERTIFIKASI </h2>
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
include "fungsi/koneksi.php";
$sql = mysql_query("select * from acount where keterangan LIKE '%tidak%'");
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
<td class='td'><div align="center"><?echo$r[keterangan];?> lulus</div></td>


</tr>
<?
$no++;
}
?>
</table>
<br>
<br>
<br>
	<?php
echo "<table align='right'>";
$tgl = date('d M Y');
echo "<tr><td>Solok Selatan, $tgl</td></tr>";
echo "<tr><td>Mengetahui,</td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "<tr><td>Kepala Dinas Pendidikan Kabupaten Solok Selatan</td></tr>";

?>