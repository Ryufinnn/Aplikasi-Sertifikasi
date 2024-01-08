<?php
	include "../koneksi/koneksi.php";
	session_start(); 
	//periksa apakah user telah login atau memiliki session 
	if(!isset($_SESSION['user']) || !isset($_SESSION['pass'])) { 
		?>
		<script language=’javascript’>
			alert(‘Anda belum login. Please login dulu’); 
			document.location=’login.php’
        </script>
		<?php 
	}else{
?>
<html>
<head>
<title>Halaman Guru</title>
<style type="text/css">
	body{
	font-size:9px;
	}
	a:link{
	font-style:normal;
	color:#000000;
	}
	a:hover{
	font-style:italic;
	color:#00CC00;
	}
	td{
	text-align:center;
	}
	th{
	text-align:center;
	}
</style>

</head>
<body bgcolor="#FFFF99">

	<table width="100%" border="0">
  <tr>
    <th scope="col"><div id="judul1"><table width="100%" border="0">
    </table></div></th>
  </tr>
  <tr>
    <td><table width="100%" border="0" bgcolor="#79CBD5">
      <tr>
        <th width="110" align="left" valign="top" bgcolor="#CCCCCC" scope="col"> <div align="left" id="menu">
            <table width="200" border="0">
			  <tr>
                <th align="left" valign="top" ><a href="guru.php?link=home">Home</a></th>
              </tr>
              <tr>
                <th align="left" valign="top" ><a href="guru.php?link=soal">Input Soal</a></th>
              </tr>
			   <tr>
                <th align="left" valign="top" ><a href="guru.php?link=view_soal">Lihat Soal</a></th>
              </tr>
              <tr>
                <th align="left" valign="top"><a href="guru.php?link=nilai">Lihat Nilai</a></th>
              </tr>
              <tr>
                <th align="left" valign="top"><a href="../logout.php">Log Out</a></th>
              </tr>
            </table>
        </div>
            <p>&nbsp;</p></th>
        <th rowspan="2" align="left" valign="top" bgcolor="#FFFFFF"scope="col"><?php include "link.php" ?></th>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0">
      <tr>
        <th background="../image/bg_guest.png" scope="col">&nbsp;</th>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<?php } ?>