<?php?>
<?php
include('koneksi.php');
$ni	= $_GET['ni'];

$sql 	= 'delete from guru where NIP="'.$ni.'"';
$query	= mysqli_query($db_link,$sql);
header('location: data_guru.php');
?>