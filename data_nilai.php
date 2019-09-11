<?php?>
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
$sql	= 'select * from nilai_siswaa';
$query	= mysqli_query($db_link,$sql);
?>
<a href="tambah3.php" style="margin-left: 300px;">TAMBAH</a>

<table id="customers" style="margin-left: 300px;">
  <tr>
    <th>Nis</th>
    <th>Nama</th>
    <th>UTS</th>
    <th>UAS</th>
    <th>Rata-rata</th>
    <th>Keterangan</th>
    <th>aksi</th>
    

  </tr>
<?php
	while($data	= mysqli_fetch_array($query)){ 
?> 
  <tr>
    <td><?php echo $data['nis']; ?></td>
    <td><?php echo $data['nama'];?></td>
    <td><?php echo $data['nilai1']; ?></td>
    <td><?php echo $data['nilai2']; ?></td>
    <td><?php echo $data['rata2']; ?></td>
    <td><?php if($data['rata2']>70){
    	echo"LULUS";
    }else{
    	echo "TIDAK LULUS";
    } ?></td>
    <td p align="center" bgcolor="#FFFFFF">
	 <a href="edit3.php?ni=<?php echo $data['nis'];?>" title="Edit siswa ini">  edit  </a>
  <a href="delete3.php?ni=<?php echo $data['nis'];?>" onclick="return confirm('Yakin mau di hapus?');"> hapus </a>
  </td>
  </tr>

<?php
}
?>
</table>
</body>
</html>