<?php?>
<?php
include('koneksi.php');
$ni	= $_GET['ni'];

$sql 	= 'delete from nilai where nis="'.$ni.'"';
$query	= mysqli_query($db_link,$sql);
header('location: data_nilai.php');
?>