<!DOCTYPE html>
<html><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style>
    .line-title{
      border: 0;
      border-style: inset;
      border-top: 1px solid #000;
    }
  </style>
</head><Body>
	<table style="width: 100%;">
    <tr>
      <td align="center">
        <span style="line-height: 1.6; font-weight: bold; ">
    <h2><b>LAPORAN DATA KEUANGAN TK MELATI PUTIH</b></h2>
        </span>
      </td>
    </tr>
	 <hr class="line-title"> 
  </table>
    <table class="table table-bordered" cellpadding="20">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Jenis Transaksi</th>
                <th scope="col">Jumlah Barang</th>
                <th scope="col">Harga Satuan</th>
                <th scope="col">Kategori</th>
                <th scope="col">Jenis Kas</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Tanggal Pembaruan</th>
            </tr>
            <?php
            $no = 1;
            foreach ($keuangan as $keu) : ?>
                <tr>
                    <td align="center" scope="row"><?php echo $no++; ?></td>
                    <td align="center" scope="row"><?php echo $keu['tanggal']; ?></td>
                    <td align="center" scope="row"><?php echo $keu['jenistransaksi']; ?></td>
                    <td align="center" scope="row"><?php echo $keu['banyak']; ?></td>
                    <td align="center" scope="row"><?php echo $keu['satuan']; ?></td>
                    <td align="center" scope="row"><?php echo $keu['kategori']; ?></td>
                    <td align="center" scope="row"><?php echo $keu['jeniskas']; ?></td>
                    <td align="center" scope="row"><?php echo $keu['jumlah']; ?></td>
                    <td align="center" scope="row"><?php echo $keu['last']; ?></td>

                </tr>
            <?php endforeach; ?>


    </table>
</Body></html>