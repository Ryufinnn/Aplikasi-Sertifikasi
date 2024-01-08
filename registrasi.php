<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-size: 18px;
}
-->
</style>
<form method='post' action='proses_registrasi.php' >
<table width='400' class='altrowstable1' >
<h3><img src='images/user.ico' class='daftar' width='30' height='30'>Mendaftar</h3><hr>
<tr><td>Nuptk</td><td><input type='text' name='nip'></td></tr>
<tr><td>Nama Lengkap</td><td><input type='text' name='nama'></td></tr>

<tr><td>Jenis Kelamin		</td><td><select name='jk'><option value=''>Pilih Jenis Kelamin</option><option value='Laki-Laki'>Laki-Laki</option><option value='Perempuan'>Perempuan</option></td></tr>
<tr><td>Tempat Lahir			</td><td><input type='text' name='tempat'></td></tr>
<tr><td>Tanggal Lahir		</td><td>
							<select name='tgl'>
							<option value=''>Tanggal</option>
							<?
							for($i=1;$i<=31;$i++){
							echo"<option value='$i'>$i</option>";
							}
							?>										
							</select>
							
							<select name='bln'>
							<option value=''>Bulan</option>
							<?
							$nm_bulan=array(1 =>'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November','Desember');
							for($i=1;$i<=12;$i++){
							echo"<option value='$i'>$nm_bulan[$i]</option>";
							}
							?>										
							</select>
							
							<select name='thn'>
							<option value=''>Tahun</option>
							<?
							for($i=1970;$i<=2000;$i++){
							echo"<option value='$i'>$i</option>";
							}
							?>										
							</select>
							</td></tr>
							<tr><td>Usia	</td><td><input type='text' name='usia'> Tahun</td></tr>
							<tr><td>Pendidikan	</td><td><select name='pendidikan'><option value=''>Pilih </option><option value='S1'>S1</option><option value='S2'>S2</option></td></tr>
							<tr><td>Golongan	</td><td><input type='text' name='golongan'></td></tr>
							<tr><td>Bidang Studi	</td><td><input type='text' name='bidang'></td></tr>
							<tr><td>Tempat Tugas	</td><td><input type='text' name='tugas'></td></tr>
							<tr><td>Masa Kerja	</td><td><input type='text' name='masa'> Tahun</td></tr>
							
							
							
							
<tr><td></td><td> &nbsp;<br><button><img src="images/sign.png" width='15' height='15' >Daftar</button></td></tr>


</tr>
</table>

<center><br/>
<a href='media.php?page=upload' class="log-twitter style1">Upload File Pendukung <u>Disini</u></a>
</center>
</form>
