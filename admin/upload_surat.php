<html>
<head>
<title>Blog Ri32.wordpress.com</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
<h2 align="center">Upload Files</h2>
<form enctype="multipart/form-data" action="upload.php" method="post">
<table class="datatable" align="center">
  <tr>
    <td width="29%" height="37" valign="middle"><font size="2" face="verdana">File</font></td>
    <td><input type="file" name="datafile" size="30" id="gambar" /></td>
  </tr>
  
  <tr>
    <td height="182"><font face="verdana" size="2">Keterangan</font></td>
    <td><textarea name="keterangan" cols="30" rows="10"></textarea></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td width="71%"><input name="submit" type="submit" value="Upload" />&nbsp;</td>
  </tr>
</table>
</form>
<? include "download.php";?>
</body>
</html>
