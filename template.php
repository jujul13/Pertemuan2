<?php //filename: template.php
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kalbis Institute</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" 
	integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" 
	crossorigin="anonymous">
	<style>
		#header{background:#00FF00;}
		#sidebar{background:yellow;}
		#footer{background:cyan;}
	</style>
</head>
<body>

<div id="header"><h3>TIKKI | Teknik Informatika Kalbis Institute</h3></div>
<div id="sidebar">
	<a href="template.php?page=mahasiswa">Mahasiswa |</a>
	<a href="template.php?page=dosen">Dosen |</a>
	<a href="template.php?page=mata_kuliah">Mata Kuliah</a>
	
</div>

<div id="konten"> DATA MAHASISWA & DOSEN KALBIS INSTITUTE

<?php 
include ($_GET['page'] . ".php");


?>

</div>

<div id="footer">&copy; 2017 Kalbis Institute</div>

</body>
</html>