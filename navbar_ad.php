 
 <!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>

<ul>
  <li><a href="halaman_admin.php">Home</a></li>
  <li><a href="data_siswa.php">Data Siswa</a></li>
  <li><a href="data_guru.php">Data Guru</a></li>
  <li><a href="data_nilai.php">Nilai Siswa</a></li>
  <li><a href="logg.php">LOG</a></li>
  <li style="float:right"><a class="active" href="logout.php">logout</a></li>
</ul>

</body>
</html>
</div>