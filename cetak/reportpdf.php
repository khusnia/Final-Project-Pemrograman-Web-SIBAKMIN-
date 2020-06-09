<?php
include('../koneksi.php');
require_once("../dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi,"select * from tb_prestasi");
$html = '<center><h3>Daftar Prestasi Mahasiswa</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>No</th>
 <th>Nama</th>
 <th>Angkatan</th>
 <th>Jenis Prestasi</th>
 <th>Nama Lomba</th>
 <th>Prestasi</th>
 </tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['nama']."</td>
 <td>".$row['angkatan']."</td>
 <td>".$row['jenis']."</td>
 <td>".$row['lomba']."</td>
 <td>".$row['prestasi']."</td>
 </tr>";
 $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'potrait');
$dompdf->render();
$dompdf->stream('laporan_prestasi.pdf');

header("location:cetak.php");
?>