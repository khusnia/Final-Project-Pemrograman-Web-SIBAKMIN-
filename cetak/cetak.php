<?php 
include "../koneksi.php"; 

$sql="SELECT * from tb_prestasi order by id;"; 

$qry=mysqli_query($koneksi, $sql) or die(mysqli_error()); 

echo "<table width='75%' cellpadding='5' cellspacing='5' border='1'> 
<tr> 
	<th>No</th> 
	<th>Nama</th> 
	<th>Angkatan</th>
	<th>Jenis Prestasi</th> 
	<th>Nama Lomba</th> 
	<th>Prestasi</th>"; 
$no=1; 
while($hasil=mysqli_fetch_row($qry)){ 
echo "
<tr> 
<td>$no</td> 
<td>$hasil[1]</td> 
<td>$hasil[2]</td> 
<td>$hasil[3]</td> 
<td>$hasil[4]</td> 
<td>$hasil[5]</td> 
</tr>"; 
$no++; 
} 
echo "</table>"; 
?> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<title>Cetak</title>
<br>
<br>
<a href="../beranda/beranda.php" class="btn btn-danger btn-lg" tabindex="-1" role="button" aria-disabled="true">Logout</a>
<a href="../insert/insert.php" class="btn btn-warning btn-lg" tabindex="-1" role="button" aria-disabled="true">Kembali</a>
<a href="reportpdf.php" class="btn btn-secondary btn-lg" tabindex="-1" role="button" aria-disabled="true">Cetak PDF</a>
<a href="reportexcel.php" class="btn btn-success btn-lg" tabindex="-1" role="button" aria-disabled="true">Cetak Excel</a>
