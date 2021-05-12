<?php

require_once __DIR__ . '/vendor/autoload.php';

$keuangan = query("SELECT * FROM keuangan");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laporan Keuangan</title>
</head>
<body>
    <h1>Laporan Keuangan</h1>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Jenis Transaksi</th>
                <th>Jumlah Barang</th>
                <th>Harga Satuan</th>
                <th>Kategori</th>
                <th>Jenis Kas</th>
                <th>Jumlah</th>
                <th>Tanggal Pembaruan</th>
            </tr>
        </thead>';

$no = 1;   
foreach ($keuangan as $keu) {
    $html .=  '<tbody>
    <tr>
        <td>'. $no++ .'</td>
        <td>'. $keu["tanggal"] .'</td>
        <td>'. $keu["jenistransaksi"] .'</td>
        <td>'. $keu["banyak"] .'</td>
        <td>'. $keu["satuan"] .'</td>
        <td>'. $keu["kategori"] .'</td>
        <td>'. $keu["jeniskas"] .'</td>
        <td>'. $keu["jumlah"] .'</td>
        <td>'. $keu["last"] .'</td>
    </tr>
    </tbody>';
}
    
    
    
$html .=  '</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('LaporanKeuangan.pdf', \Mpdf\Output\Destination::DOWNLOAD);

?>