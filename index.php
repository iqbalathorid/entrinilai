<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Multi User Level Dengan PHP dan MySQLi - www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

 
	<?php
	// lokasi file log
define('LOG','log.txt');
function write_log($log){  
 $time = @date('[Y-d-m:H:i:s]');
 $op=$time.' '.'Action for '.$log."\n".PHP_EOL;
 $fp = @fopen(LOG, 'a');
 $write = @fwrite($fp, $op);
 @fclose($fp);
}

write_log("login user");
?>
	
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			
		</form>
		
	</div>
 
 
</body>
</html>
