<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>


<body bgcolor="#CCCCCC">
<h2>
<p align="center">EDIT DATA
<?php
	include('koneksi.php');
	if(isset($_GET['ni'])){
		$ni		= $_GET['ni'];
		$query	= mysqli_query($db_link,'select * from siswa where nis = "'.$ni.'"');
		$data  	= mysqli_fetch_array($query);
		$nama	= $data['nama'];
    $alamat = $data['alamat'];
		$jk	= $data['jk'];
		$ttl	= $data['ttl'];
	
		
		
	}
	else{
	$nama = '';
	$jk = '';
	$alamat = '';
	$ttl='';


	}
?>
</p></h2>
<form method="post" name="frm" action="aksi.php">
<table width="546" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">
  <!--DWLayoutTable-->
  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">NIS</td>
    <td align="center" valign="top">:</td>
    <td valign="middle">
      <input type="text" name="nis" value="<?php echo $_GET['ni']; ?>" readonly="readonly"> 
    </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Nama</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="nama" value="<?php echo $nama; ?>">
    </label></td>
  </tr>

    <tr>
    <td height="27" align="right" valign="middle">Jenis Kelamin</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <select name="jk">
      <option selected="selected">--Pilih--</option>
    <option>laki-laki</option>
    <option>perempuan</option>
      </select>
    </label></td>
  </tr>

    <tr>
    <td height="27" align="right" valign="middle">Alamat</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="alamat" type="text" size="50" value="<?php echo $alamat; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">TTL</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="ttl" type="text" size="50" value="<?php echo $ttl; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="tedit" value="EDIT"></td>
  </tr>
</table>
</form>

</body>
</html>