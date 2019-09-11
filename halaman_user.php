<?php ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman User</title>
</head>
<body>
	<?php 
	include "navbar_us.php";
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<h1>Halaman user</h1>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda dapat meilihat nilai anda di sini </b>.</p>
	
 
	<br/>
	<br/>
</body>
</html>