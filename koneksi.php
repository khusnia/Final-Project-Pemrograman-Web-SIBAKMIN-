<?php
$servername = "localhost";
$username = "id13809066_aegis18";
$password = "A7@8daR~Hx\#ng}-";
$dbname = "id13809066_db_member";

$koneksi = mysqli_connect($servername,$username,$password) or die(mysqli_error());
	mysqli_select_db ($koneksi,$dbname) or die(mysqli_error($koneksi));
?>