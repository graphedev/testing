<!DOCTYPE html>

<html>
	<head>
		<title>Graphe International Theological Seminary</title>
		<link type="text/css" rel="stylesheet" href="stylesheet.css" />
	</head>
	
	<body>
		<form action="entrymahasiswa.php" method="post" />
		<p>Nama Depan: <input type="text" name="firstname" /> </p>
		<p>Nama Belakang: <input type="text" name="lastname" /> </p>
		<p>Tanggal Lahir: <input type="date" name="birthdate" /> </p>
		<p>Nomor Telpon: <input type="text" name="phonenumber" /> Deskripsi: <input type="text" name="description" /> </p>
		<p>NIM: <input type="text" name="NIM" /> </p>
		<p>Tanggal Masuk: <input type="date" name="entrydate"/> </p>
		
		<p>Program: <input type="text" name="program" /> </p>
		<input type="submit" value="Submit" />
		</form>
		<?php
			phpinfo();
		?>
	
	</body>
	
	
</html>
