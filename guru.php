<?php
include "navbar_us.php";
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


<table id="customers" style="margin-left: 300px;">
  <tr>
    <th>Nip</th>
    <th>Nama</th>
    <th>jenis kelamin</th>
    <th>alamat</th>
   
    

  </tr>
<?php
	while($data	= mysqli_fetch_array($query)){ 
?> 
  <tr>
    <td><?php echo $data['NIP']; ?></td>
    <td><?php echo $data['nama'];?></td>
    <td><?php echo $data['jk']; ?></td>
    <td><?php echo $data['alamat']; ?></td>
    
  </tr>

<?php
}
?>
</table>
</body>
</html>