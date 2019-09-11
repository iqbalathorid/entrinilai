<?php
include('koneksi.php');
if(isset($_POST['ttambah'])){ //['ttambah'] merupakan name dari button di form tambah
	$nis	= $_POST['nis'];
	$nama	= $_POST['nama'];
	$jk	= $_POST['jk'];
	$alamat	= $_POST['alamat'];
	$ttl	= $_POST['ttl'];
	


	
	$sql	= 'insert into siswa (nis,nama,jk,alamat,ttl) values ("'.$nis.'","'.$nama.'","'.$jk.'","'.$alamat.'","'.$ttl.'")';
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: data_siswa.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}
	else{
		echo 'Gagal';
	}
}


//edit data
if(isset($_POST['tedit'])){
	$nama	= $_POST['nama'];
	$jk	= $_POST['jk'];
	$alamat	= $_POST['alamat'];
	$nis	= $_POST['nis'];
	$sql	= 'update siswa set nama="'.$nama.'", alamat="'.$alamat.'", jk="'.$jk.'" where nis="'.$nis.'"';
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: data_siswa.php');
	}
	else{
		echo 'Gagal';
	}
}

?>
