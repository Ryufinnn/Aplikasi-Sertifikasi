<form method='post' action='proses_registrasi.php'>
<table width='400' class='altrowstable1' >
<h3><img src='images/user.ico' class='daftar' width='30' height='30'>Mendaftar</h3><hr>
<tr><td>Nis	</td><td><input type='text' name='nm_depan'></td></tr>
<tr><td>Nama Siswa	</td><td><input type='text' name='nm_belakang'></td></tr>
<tr><td>Kelas</td><td><input type='text' name='kelas'></td></tr>
<tr><td>Username			</td><td><input type='text' name='email'></td></tr>
<tr><td>Kata Sandi Baru		</td><td><input type='password' name='pass'></td></tr>
<tr><td>Jenis Kelamin		</td><td><select name='jk'><option value=''>Pilih Jenis Kelamin</option><option value='Laki-Laki'>Laki-Laki</option><option value='Perempuan'>Perempuan</option></td></tr>
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
							for($i=1990;$i<=2015;$i++){
							echo"<option value='$i'>$i</option>";
							}
							?>										
							</select>
							</td></tr>
							<tr><td>No Hp	</td><td><input type='text' name='nohp'></td></tr>
							<tr><td>Alamat	</td><td><input type='text' name='alamat'></td></tr>
							<tr><td>Nama Ayah	</td><td><input type='text' name='nama_a'></td></tr>
							<tr><td>Pekerjaan Ayah	</td><td><select name='pekerjaan_a'><option value=''>Pilih </option><option value='PNS'>PNS</option><option value='DOSEN'>DOSEN</option><option value='GURU'>GURU</option><option value='BURUH'>BURUH</option><option value='WIRASWASTA'>WIRASWASTA</option><option value='dll'>DLL</option></td></tr>
							<tr><td>Penghasilan Ayah	</td><td><select name='penghasilan_a'><option value=''>Pilih </option><option value='>= Rp.1000000'>>= Rp.1000000</option><option value='>= Rp.500000'>>= Rp.500000</option></td></tr>
							<tr><td>Nama Ibu	</td><td><input type='text' name='nama_i'></td></tr>
							<tr><td>Pekerjaan Ibu	</td><td><select name='pekerjaan_i'><option value=''>Pilih </option><option value='PNS'>PNS</option><option value='DOSEN'>DOSEN</option><option value='GURU'>GURU</option><option value='BURUH'>BURUH</option><option value='WIRASWASTA'>WIRASWASTA</option><option value='dll'>DLL</option></td></tr>
							<tr><td>Penghasilan Ibu	</td><td><select name='penghasilan_i'><option value=''>Pilih </option><option value='>= Rp.1000000'>>= Rp.1000000</option><option value='>= Rp.500000'>>= Rp.500000</option></td></tr>
							<tr><td>Jumlah Saudara	</td><td><select name='jumlah'><option value=''>Pilih </option><option value='1 Orang'>1 Orang</option><option value='2 Orang'>2 Orang</option><option value='3 Orang'>3 Orang</option><option value='4 Orang'>4 Orang</option><option value='5 Orang'>5 Orang</option></td></tr>
							<tr><td>Ekskul	</td><td><select name='ekskul'><option value=''>Pilih </option><option value='Basket'>Basket</option><option value='Futsal'>Futsal</option><option value='Pramuka'>Pramuka</option><option value='Paskibraka'>Paskibraka</option><option value='PMR'>PMR</option><option value='dll'>dll</option></td></tr>
							<tr><td>Organisasi	</td><td><select name='organisasi'><option value=''>Pilih </option><option value='Osis'>Osis</option><option value='MPS'>MPS</option><option value='DPS'>DPS</option><option value='Tidak Ada'>Tidak Ada</option></td></tr>
							<tr><td>Rata-Rata Rapor</td><td><input type='text' name='rapor'></td></tr>
<tr><td></td><td> &nbsp;<br><button><img src="images/sign.png" width='15' height='15' >Daftar</button></td></tr>
</tr>
</table>
</form>
