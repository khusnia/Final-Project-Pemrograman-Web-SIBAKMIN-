<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<h2>Silahkan Login Untuk Mengakses Halaman</h2>
	<br/>
	<?php

	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<div align='center'><font color='#ff0000'>Login gagal! username dan password salah!</div></font>";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	
	?>
	<br/>
	<br/>
	<form method="post" action="cek_login.php">
		<table class="login">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN" class="tombol"></td>
				<td></td>
			</tr>
		</table>	
		<p align="center">*untuk pembuatan id harap hubungi Admin.</p>		
	</form>
</body>
</html>