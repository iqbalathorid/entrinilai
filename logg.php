<html>   
<body>  
<?php
//buka file
$file = fopen("log.txt","r+");
//membaca file
echo (fread($file,filesize("log.txt")));  

//tutup file
fclose($file);
?>
 </body>   
 </html>  