<?php
include "navbar_ad.php";
include "koneksi.php";
 ?>
 <br>
 <br>
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 60%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

    <br>
    <?php
$sql	= 'select * from guru';
$query	= mysqli_query($db_link,$sql);
?>
<a href="tambah2.php" style="margin-left: 300px;">TAMBAH</a>

<table id="customers" style="margin-left: 300px;">
  <tr>
    <th>Nip</th>
    <th>Nama</th>
    <th>jenis kelamin</th>
    <th>alamat</th>
    <th>aksi</th>
    

  </tr>
<?php
	while($data	= mysqli_fetch_array($query)){ 
?> 
  <tr>
    <td><?php echo $data['NIP']; ?></td>
    <td><?php echo $data['nama'];?></td>
    <td><?php echo $data['jk']; ?></td>
    <td><?php echo $data['alamat']; ?></td>
    <td p align="center" bgcolor="#FFFFFF">
	 <a href="edit2.php?ni=<?php echo $data['NIP'];?>" title="Edit siswa ini">  edit  </a>
  <a href="delete2.php?ni=<?php echo $data['NIP'];?>" onclick="return confirm('Yakin mau di hapus?');"> hapus </a>
  </td>
  </tr>

<?php
}
?>
</table>
</body>
</html>