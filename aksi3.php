<?php
include('koneksi.php');
if(isset($_POST['tambahh'])){ //['ttambah'] merupakan name dari button di form tambah
	$nis	= $_POST['nis'];
	$nama	= $_POST['nama'];
	$nl1	= $_POST['nilai1'];
	$nl2	= $_POST['nilai2'];
	
	


	
	$sql	= 'insert into nilai (nis,nama,nilai1,nilai2) values ("'.$nis.'","'.$nama.'","'.$nl1.'","'.$nl2.'")';
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: data_nilai.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}
	else{
		echo 'Gagal';
	}
}


//edit data
if(isset($_POST['teditt'])){
	$nis    = $_POST['nis'];
	$nama	= $_POST['nama'];
	$nl1	= $_POST['nilai1'];
	$nl2	= $_POST['nilai2'];

	$sql	= 'update nilai set nilai1="'.$nl1.'", nilai2="'.$nl2.'", $nama="'.$nama.'" where nis="'.$nis.'"';
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: data_nilai.php');
	}
	else{
		echo 'Gagal';
	}
}

?>
if isset()