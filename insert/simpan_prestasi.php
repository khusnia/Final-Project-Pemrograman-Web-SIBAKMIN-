<?php

include"../koneksi.php";
mysqli_connect($servername,$username,$password) or die(mysqli_error($koneksi));
	mysqli_select_db ($koneksi,$dbname) or die(mysqli_error($koneksi));


$nama 			= $_POST['nama'];
$angkatan 		= $_POST['angkatan'];
$jenis 			= $_POST['jenis'];
$lomba 		    = $_POST['lomba'];
$prestasi 		= $_POST['prestasi'];

$sql1 = "select * from tb_total where angkatan = '$angkatan'";
$query = mysqli_query($koneksi, $sql1);
$tampil = $query->fetch_array();

$jumlah = $tampil['jumlah'] + 1;
echo $jumlah;
$sql11="UPDATE tb_total SET jumlah ='$jumlah' WHERE angkatan='$angkatan'";
mysqli_query($koneksi, $sql11) or die (mysqli_error($koneksi));

$sql="insert tb_prestasi set nama='$nama', angkatan='$angkatan', jenis='$jenis', lomba='$lomba', prestasi='$prestasi'";
mysqli_query($koneksi, $sql) or die (mysqli_error($koneksi));

// header("location:beranda/beranda.php");
?>