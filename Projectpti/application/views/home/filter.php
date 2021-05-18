<?php


if (isset($_POST["tanggalawal"], $_POST["tanggalakhir"])) {
    $connect = mysqli_connect("localhost", "root", "", "tkmelati");
    $output = '';
    $query = "
        SELECT * FROM keuangan
        WHERE tanggal BETWEEN  '" . $_POST["tanggalawal"] . "' AND '" . $_POST["tanggakhir"] . "'
    ";
    $result = mysqli_query($connect, $query);
    $output .= '
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
            <th>Tindakan</th>
        </tr>
    </thead>
    ';
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $output .= '
            <tr>
            <td>' . $row["id"] . '</td>
            <td>' . $row["tanggal"] . '</td>
            <td>' . $row["jenistransaksi"] . '</td>
            <td>' . $row["banyak"] . '</td>
            <td>' . $row["satuan"] . '</td>
            <td>' . $row["kategori"] . '</td>
            <td>' . $row["jeniskas"] . '</td>
            <td>' . $row["jumlah"] . '</td>
            <td>' . $row["last"] . '</td>
        </tr>
            ';
        }
    } else {
        $output .= '
            <tr>
                <td colspan="5"> no order found</td>
            </tr>
        ';
    }
    $output .= '</tables>';
    echo $output;
}
