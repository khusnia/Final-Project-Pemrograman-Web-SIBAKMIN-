<?php
include"../koneksi.php";
$nama           	= $_POST['nama'];
$email         		= $_POST['email'];
$kritik        		= $_POST['kritik'];

$sql="INSERT INTO tb_kritik (nama, email, kritik) VALUES ('$nama','$email','$kritik')";
mysqli_query($koneksi, $sql) or die (mysqli_error());
header("location:https://aegis18.000webhostapp.com/beranda/beranda.php#kritik")
?>