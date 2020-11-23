<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <style type="text/css" media="print">
        body {
            font-family: Arial;
            font-size: 12px;
        }

        .cetak {
            width: 19cm;
            height: 27cm;
            padding: 1cm;
        }

        table {
            border: solid thin #000;
            border-collapse: collapse;
        }

        td,
        th {
            padding: 3mm 6mm;
            text-align: left;
            vertical-align: top;
        }

        th {
            background-color: #F5F5F5;
            font-weight: bold;
        }

        h1 {
            text-align: center;
            font-size: 18px;
            text-transform: uppercase;
        }
    </style>
    <style type="text/css" media="screen">
        body {
            font-family: Arial;
            font-size: 12px;
        }

        .cetak {
            width: 19cm;
            height: 27cm;
            padding: 1cm;
        }

        table {
            border: solid thin #000;
            border-collapse: collapse;
        }

        td,
        th {
            padding: 3mm 6mm;
            text-align: left;
            vertical-align: top;
        }

        th {
            background-color: #F5F5F5;
            font-weight: bold;
        }

        h1 {
            text-align: center;
            font-size: 18px;
            text-transform: uppercase;
        }
    </style>
</head>

<body onload="print()">
    <div class="cetak">
        <h1>Detail Transaksi <?php echo $site->namaweb ?></h1>
        <table class="table table-bordered">
            <thead>
                <tr class="bg-success">
                    <th width="20%">Nama pelanggan</th>
                    <th><?php echo $header_transaksi->nama_pelanggan ?></th>
                </tr>
                <tr class="bg-success">
                    <th width="20%">Kode Transaksi</th>
                    <th><?php echo $header_transaksi->kode_transaksi ?></th>
                </tr>
                <tr>
                    <th>Tanggal</th>
                    <th><?php echo date('d-m-Y', strtotime($header_transaksi->tanggal_transaksi)) ?></th>
                </tr>
                <tr>
                    <th>Jumlah total</th>
                    <th><?php echo number_format($header_transaksi->jumlah_transaksi) ?></th>
                </tr>
                <tr>
                    <th>Status bayar</th>
                    <th><?php echo $header_transaksi->status_bayar ?></th>
                </tr>
                <tr>
                    <th>Bukti bayar</th>
                    <th><?php if ($header_transaksi->bukti_bayar == "") {
                            echo 'Belum ada';
                        } else { ?> <img src="<?php echo base_url('assets/upload/image/' . $header_transaksi->bukti_bayar) ?>" class="img img-thumbnail" width="200">
                        <?php } ?>
                    </th>
                </tr>
                <tr>
                    <th>Tanggal bayar</th>
                    <th><?php echo date('d-m-Y', strtotime($header_transaksi->tanggal_bayar)) ?></th>
                </tr>
                <tr>
                    <th>Jumlah bayar</th>
                    <th>Rp. <?php echo number_format($header_transaksi->jumlah_bayar, '0', ',', '.') ?></th>
                </tr>
                <tr>
                    <th>Pembayaran dari</th>
                    <th><?php echo $header_transaksi->nama_bank ?>No. Rek <?php echo $header_transaksi->rekening_pembayaran ?> a.n <?php echo $header_transaksi->rekening_pelanggan ?> </th>
                </tr>
                <tr>
                    <th>Pembayaran ke rekening</th>
                    <th><?php echo $header_transaksi->bank ?>No. Rek <?php echo $header_transaksi->nomor_rekening ?> a.n <?php echo $header_transaksi->nama_pemilik ?></th>
                </tr>
            </thead>
        </table>
        <hr>
        <table class="table table-bordered" width="100%">
            <thead>
                <tr class="bg-success">
                    <th>No.</th>
                    <th>Kode</th>
                    <th>Nama produk</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Sub Total</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($transaksi as $transaksi) { ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $transaksi->kode_produk ?></td>
                        <td><?php echo $transaksi->nama_produk ?></td>
                        <td><?php echo number_format($transaksi->jumlah) ?></td>
                        <td><?php echo number_format($transaksi->harga) ?></td>
                        <td><?php echo number_format($transaksi->total_harga) ?></td>
                    </tr>
                <?php $i++;
                } ?>
            </tbody>
        </table>
    </div>
</body>

</html>