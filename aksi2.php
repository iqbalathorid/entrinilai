
<?php
include('koneksi.php');
if(isset($_POST['tambah'])){ //['ttambah'] merupakan name dari button di form tambah
	$nip	= $_POST['NIP'];
	$nama	= $_POST['nama'];
	$jk	= $_POST['jk'];
	$alamat	= $_POST['alamat'];
	


	
	$sql	= 'insert into guru (NIP,nama,jk,alamat) values ("'.$nip.'","'.$nama.'","'.$jk.'","'.$alamat.'")';
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: data_guru.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}
	else{
		echo 'Gagal';
	}
}


//edit data
if(isset($_POST['ttedit'])){
	$nama	= $_POST['nama'];
	$jk	= $_POST['jk'];
	$nip	= $_POST['NIP'];
	$sql	= 'update guru set nama="'.$nama.'", alamat="'.$alamat.'", jk="'.$jk.'" where NIP="'.$nip.'"';
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: data_guru.php');
	}
	else{
		echo 'Gagal';
	}
}

?>
