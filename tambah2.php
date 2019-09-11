<?php?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<body bgcolor="#CCCCCC">
<h2><p align="center">TAMBAH DATA</p></h2>
<form method="post" action="aksi2.php">
<table width="546" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF">
  <!--DWLayoutTable-->
  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">NIP</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="NIP" type="text" size="10">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Nama</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="nama">
    </label></td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">Jenis kelamin</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <select name="jk">
      <option selected="selected">--Pilih--</option>
    <option>laki-laki</option>
    <option>Perempuan</option>
      </select>
    </label></td>
  </tr>
    <tr>
    <td height="27" align="right" valign="middle">Alamat</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="alamat" type="text" size="50">
    </label></td>
  </tr>

  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="tambah" value="TAMBAH"></td>
  </tr>

</table>
</form>

</body>
</html>