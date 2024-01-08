<?php
session_start();
include"fungsi/koneksi.php";
require("fungsi/koneksi1.php");
include"fungsi/fungsi_kalender.php";
include"../fungsi/fungsi_indotgl.php";
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome SPK<?php echo $_GET['dir']."-".$_GET['module']; ?></title>
<link rel="shortcut icon" HREF="images/logo.png">
<link href="css.css" rel="stylesheet" type="text/css" />
<link href="css/helper.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/dropdown/themes/nvidia.com/default.advanced.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css.css">
<link rel="stylesheet" type="text/css" href="css/style6.css">
<style type="text/css">body, a:hover {cursor: url(http://cur.cursors-4u.net/cursors/cur-11/cur1026.ani) url(http://cur.cursors-4u.net/cursors/cur-11/cur1026.png),, progress;}</style>
<style type="text/css">
    body { font-family:tahoma; font-size:12px; }
    #container { width:450px; padding:20px 40px; margin:50px auto; border:0px solid #555; box-shadow:0px 0px 2px #555; }
    input[type="text"] { width:200px; }
    input[type="text"], textarea { padding:5px; margin:2px 0px; border: 1px solid #777; }
    input[type="submit"], input[type="reset"],input[type="button"] { padding: 3px 15px; margin:2px 0px; font-weight:bold; cursor:pointer; }
 	#error { border:1px solid red; background:#ffc0c0; padding:5px; }
</style>

	<link rel="stylesheet" href="galery/galery_files/vlb_files1/vlightbox1.css" type="text/css" />
		<link rel="stylesheet" href="galery/galery_files/vlb_files1/visuallightbox.css" type="text/css" media="screen" />
<script src="galery/galery_files/vlb_engine/jquery.min.js" type="text/javascript"></script>
		<script src="galery/galery_files/vlb_engine/visuallightbox.js" type="text/javascript"></script>
</head>
<body>
<center>
<div id="awal"><div class="box1">

<table width="100%" border="0" align="center" cellpadding="3" cellspacing="3" bgcolor="#FFFFFF">
   <tr>
    <td colspan="4" align="left" valign="top"><table width="100%" border="0" cellspacing="3" cellpadding="3" class="altrowstable">
    	<tr>
     	<td colspan="4" align="center"><img src="images/header1.jpg" width="1086" height="167" />    	</td>
    	</tr>
        <!--
   	 	<tr>
    	<td  colspan="2" align="center"><p class="wadah-mengetik">Welcome To E-Discussion SMAN 12 Padang</a></p></td>
      	</tr> -->
<!-----------------#header-------------->


<!------------------#Menu--------------->
<tr>
		<td colspan="4">
		<div class="fly">
   <div class="content">
       <ul id="nav" class="dropdown dropdown-horizontal" class="kotak_fixed">
            	<li><a href="./" ><img src="images/home.png" width='15' height='15' > Home</a></li>
          		
          		<li><a href="#"><img src="images/registrasi.png" width='15' height='15' > Data Master</a>
				<ul> <li><a href="./media.php?page=kriteria"> Data Kriteria</a></li>
				<li><a href="./media.php?page=registrasi">Data Guru</a></li>
				</ul>
				</li>
			   
				  <li><a href="./media.php?page=daftar"><img src="images/registrasi.png" width='15' height='15' > Penilaian</a></li>
				
				<li><a href="#"><img src="images/registrasi.png" width='15' height='15' >Laporan Penerimaan Sertifikasi</a>
				<ul><li><a href="./media.php?page=laporan">Sertifikasi Lulus</a></li>
				<li><a href="./media.php?page=laporan1"> Sertifikasi Tidak Lulus</a></li>
				</ul>
				
				</li>
							    
				<li><a href="./media.php?page=akun"><img src="images/settings.png" width='15' height='15' > Setting Akun</a></li>
			    <li><a href="logout.php" title="">&nbsp;&nbsp;&nbsp;<img src="images/logout.png" width='15' height='15' > &nbsp;Log Out</a></li>
              
		  </ul>
<!------------------#Sidebar--------------->

<!------------------#Content--------------->
<tr>
        <td width="80%" valign="top" align="justify" colspan="3">
<?
$page=$_GET[page];
if($page=='home'){
	if(empty($_SESSION[id_acount])){
	include"home.php";
	}else{
	include"home.php";
	}
}
else if($page=='profile'){
include"profile.php";
}
else if($page=='registrasi'){
include"registrasi.php";
}
else if($page=='laporansemua'){
include"laporan_semua.php";
}
else if($page=='preview_registrasi'){
include"preview_registrasi.php";
}
else if($page=='sejarah'){
include"sejarah.php";
}
else if($page=='analisa'){
include"spk.php";
}
else if($page=='daftar'){
include"daftar.php";
}
else if($page=='download'){
include"mod_download/download.php";
}
else if($page=='akun'){
include"mod_user.php";
}
else if($page=='status'){
include"status.php";
}
else if($page=='kategori'){
include"kategori.php";
}
else if($page=='subkategori'){
include"subkategori.php";
}
else if($page=='kriteria'){
include"kriteria.php";
}
else if($page=='proses'){
include"proses_registrasi.php";
}
else if($page=='laporan'){
include"laporan.php";
}
else if($page=='laporan1'){
include"laporan_tidak.php";
}
else if($page=='tambah_kriteria'){
include"tambah_kriteria.php";
}
?>
</div>
</div>
<!------------------#Footer--------------->
  <tr>
    <td colspan="2" align="center" valign="top" bgcolor="#0099FF"><div id="bawah">Copyright &copy; 2016 by: <a href="#">Sistem Pendukung Keputusan</a> <br />
    </div></td>
  </tr>
</table>
</div>
</div>
</body>
</html>
        <script src="javascript/modernizr.js"></script>
		<script>
			(function($){
				
				//cache nav
				var nav = $("#topNav");
				
				//add indicator and hovers to submenu parents
				nav.find("li").each(function() {
					if ($(this).find("ul").length > 0) {
						$("<span>").text("^").appendTo($(this).children(":first"));

						//show subnav on hover
						$(this).mouseenter(function() {
							$(this).find("ul").stop(true, true).slideDown();
						});
						
						//hide submenus on exit
						$(this).mouseleave(function() {
							$(this).find("ul").stop(true, true).slideUp();
						});
					}
				});
			})(jQuery);
		</script>
		
</html>
<?
if($_GET[savestatus]=='ok'){
$waktu = date("H:i d M Y");
if(empty($_POST[status]) or $_POST[status]=='Apa Yang Anda Pikirkan ?'){}
else{
mysql_query("INSERT INTO status(id_acount,status,waktu)VALUES('$_SESSION[id_acount]','$_POST[status]','$waktu')");
echo"<meta http-equiv='refresh' content='0;URL=./'>";
}
}

if($_GET[page]=='home' and $_GET[update]=='ok'){
$waktu = date("H:i d M Y");
if(empty($_POST[status]) or $_POST[status]=='Apa Yang Anda Pikirkan ?'){echo"<meta http-equiv='refresh' content='0;URL=./?page=home'>";}
else{
mysql_query("INSERT INTO status(id_acount,status,waktu)VALUES('$_SESSION[id_acount]','$_POST[status]','$waktu')");
echo"<meta http-equiv='refresh' content='0;URL=./?page=home'>";
}
}
?>
