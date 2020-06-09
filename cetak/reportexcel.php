<?php
include('../koneksi.php');
require '../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama');
$sheet->setCellValue('C1', 'Angkatan');
$sheet->setCellValue('D1', 'Jenis Prestasi');
$sheet->setCellValue('E1', 'Nama Lomba');
$sheet->setCellValue('F1', 'Prestasi');

$query = mysqli_query($koneksi,"select * from tb_prestasi");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query))
{
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['nama']);
	$sheet->setCellValue('C'.$i, $row['angkatan']);
	$sheet->setCellValue('D'.$i, $row['jenis']);	
	$sheet->setCellValue('E'.$i, $row['lomba']);
	$sheet->setCellValue('F'.$i, $row['prestasi']);
	$i++;
}
 
$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i = $i - 1;
$sheet->getStyle('A1:F'.$i)->applyFromArray($styleArray);
 
 
$writer = new Xlsx($spreadsheet);
$writer->save('Data Prestasi.xlsx');

header("location:cetak.php");
?>
<title>Exporting To Excel</title>