<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
    <style media="print" type="text/css">
      body{
        font-family: Arial;
        font-size: 12px;
      }
      .cetak{
        width: 19cm;
        height: 27cm;
        padding: 1cm;
      }
      table{
        border: solid thin #000;
        border-collapse: collapse;
      }
      td, th{
        padding: 3mm 6mm;
        text-align: left;
        vertical-align: top;
      }
      th{
        background-color: #f5f5f5;
        font-weight: bold;
      }
      h1{
        text-align: center;
        font-size: 18px;
        text-transform: uppercase;
      }
    </style>
    <style type="text/css" media="screen">
    body{
      font-family: Arial;
      font-size: 12px;
    }
    .cetak{
      width: 19cm;
      height: 27cm;
      padding: 1cm;
    }
    table{
      border: solid thin #000;
      border-collapse: collapse;
    }
    td, th{
      padding: 3mm 6mm;
      text-align: left;
      vertical-align: top;
    }
    th{
      background-color: #f5f5f5;
      font-weight: bold;
    }
    h1{
      text-align: center;
      font-size: 18px;
      text-transform: uppercase;
    }
    </style>
  </head>
  <body onload="print()">
    <div class="cetak">
      <h1>DETAIL TRANSAKSI <?php echo $site->namaweb ?></h1>
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <td width="20%">NAMA PELANGGAN</td>
            <td>: <?php echo $header_transaksi->nama_pelanggan ?></td>
          </tr>
          <tr>
            <td width="20%">KODE TRANSAKSI</td>
            <td>: <?php echo $header_transaksi->kode_transaksi ?></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>TANGGAL</td>
            <td>: <?php echo date('d-m-y', strtotime($header_transaksi->tanggal_transaksi)); ?></td>
          </tr>
          <tr>
            <td>JUMLAH TOTAL</td>
            <td>: <?php echo number_format($header_transaksi->jumlah_transaksi) ?></td>
          </tr>
          <tr>
            <td>STATUS BAYAR</td>
            <td>: <?php echo $header_transaksi->status_bayar ?></td>
          </tr>
          <tr>
            <td>BUKTI BAYAR</td>
            <td>:
              <?php if($header_transaksi->bukti_bayar == "") {echo "Belum ada";} else { ?>
              <img src="<?php echo base_url('assets/upload/image/'.$header_transaksi->bukti_bayar); ?>" class="img img-thumbnail" width="150">
              <?php } ?>
            </td>
          </tr>
          <tr>
            <td>TANGGAL BAYAR</td>
            <td>: <?php echo date('d-m-Y', strtotime($header_transaksi->tanggal_bayar)) ?></td>
          </tr>
          <tr>
            <td>JUMLAH BAYAR</td>
            <td>: <?php echo number_format($header_transaksi->jumlah_bayar,'0',',','.') ?></td>
          </tr>
          <tr>
            <td>PEMBAYARAN DARI</td>
            <td>: <?php echo $header_transaksi->nama_bank ?> (No. Rek <?php echo $header_transaksi->rekening_pembayaran ?> - <?php echo $header_transaksi->rekening_pelanggan ?>)</td>
          </tr>
          <tr>
            <td>PEMBAYARAN KE REKENING</td>
            <td>: <?php echo $header_transaksi->nama_bank ?> (No. Rek <?php echo $header_transaksi->rekening_pembayaran ?> - <?php echo $header_transaksi->rekening_pelanggan ?>)</td>
          </tr>
          <tr>
        </tbody>
      </table><hr>

      <table class="table table-bordered table-hover" width="100%">
        <thead>
          <tr class="bg-success">
            <th>NO</th>
            <th>KODE</th>
            <th>NAMA PRODUK</th>
            <th>JUMLAH</th>
            <th>HARGA</th>
            <th>SUB TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; foreach($transaksi as $transaksi){ ?>
          <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $transaksi->kode_produk ?></td>
            <td><?php echo $transaksi->nama_produk ?></td>
            <td><?php echo number_format($transaksi->jumlah) ?></td>
            <td><?php echo number_format($transaksi->harga) ?></td>
            <td><?php echo number_format($transaksi->total_harga) ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
