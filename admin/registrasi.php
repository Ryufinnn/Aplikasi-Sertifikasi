<?php
if($_SESSION[email]==null)
	{
	echo "<script>alert('Silahkan Login Terlebih dahulu');window.location='media.php?page=home'</script>";
	}
?>
<div id='judul_kontent'><h1><img src='images/registrasi.png' width='30' height='30'> Data Guru</h1></div>
<table id='theList' border=1 width='100%'>
<tr><th width="3%"><div align="center">No.</div></th>
<th><div align="center">NuPTK </div></th>
<th width="10%"><div align="center">Nama</div></th>
<th width="13%"><div align="center">Jenis Kelamin</div></th>
<th width="12%"><div align="center">Tempat, Tanggal Lahir</div></th>
<th width="12%"><div align="center">Pendidikan</div></th>
<th width="14%"><div align="center">Golongan</div></th>
<th>Aksi</th></tr>
<?php
$sql = mysql_query("select * from acount order by id_acount asc");
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
<td class='td'><div align="center"><?echo$r[jk];?></div></td>
<td class='td'><div align="center"><?echo"$r[tempat], $r[tgl_lahir]";?></div></td>
<td class='td'><div align="center"><?echo$r[pendidikan];?></div></td>
<td class='td'><div align="center"><?echo$r[golongan];?></div></td>

<td class='td' align='center' width='24%'>
 <a  href='?page=registrasi&act=delete&id=<?echo$r[id_acount];?>' onclick="return confirm('Anda yakin untuk menghapus data ini ?')">
 <button style='width:60px;text-align:center;'>Delete</button></a> </td>
</tr>
<?
$no++;
}
?>
</table>

<?
if($_GET[page]=='registrasi' and $_GET[act]=='delete'){
$sql=mysql_query("delete from acount where id_acount='$_GET[id]'");
echo"<script>window.location.href='?page=registrasi'</script>";
}

?>