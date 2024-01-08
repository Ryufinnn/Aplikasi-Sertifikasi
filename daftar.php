<?php $sql=mysql_query("select * from acount where id_acount='$_SESSION[id_acount]'");
$r=mysql_fetch_array($sql);
?>
<form method='post' action='daftaraksi.php'>
<table width='400' class='form'>
<img src='images/user.ico' class='daftar' width='30' height='30'><h3> Mendaftar</h3><hr>
<tr><td>Id</td><td><input type='text' name='id_acount' value='<?echo $_SESSION[id_acount];?>' ></td></tr>
<tr><td>Total Penghasilan Orang Tua</td><td><select name='total'><option value=''>Pilih </option><option value='1'>>= Rp.1000000</option><option value='5'>>= Rp.500000</option></td></tr>
<tr><td>Jumlah Tanggungan	</td><td><select name='jumlah'><option value=''>Pilih </option><option value='1'>1 Anak</option><option value='3'>2 Anak</option><option value='5'>>= 3 Anak</option></td></tr>
<tr><td>Bidang Akademik</td><td><select name='akademik'><option value=''>Pilih </option><option value='5'>Pintar (Ranking 10 Besar)</option><option value='3'>Sedang (Rangking 11-19)</option><option value='1'>Cukup (Rangking 20-30)</option></td></tr>
							<tr><td>Ekskul	</td><td><select name='ekskul'><option value=''>Pilih </option><option value='4'>Olahraga</option><option value='5'>Pramuka</option><option value='3'>Kesenian</option><option value='2'>Sains & IT</option><option value='1'>Rohis</option></td></tr>
							<tr><td>Organisasi	</td><td><select name='organisasi'><option value=''>Pilih </option><option value='5'>Aktif</option><option value='2'>Non Aktif</option></td></tr>
							<tr><td>Rata-Rata Rapor</td><td><select name='rapor'><option value=''>Pilih </option><option value='1'>  Nilai<=50</option><option value='2'>50< Nilai   <60 </option><option value='3'>60< Nilai <70 </option> <option value='4'>70< Nilai  <80 </option><option value='5'>80< Nilai  <100</option></td></tr>
							<tr><td></td><td> &nbsp;<br><button><img src="images/sign.png" width='15' height='15' >Simpan</button></td></tr>
</tr>
</table>
</form>
