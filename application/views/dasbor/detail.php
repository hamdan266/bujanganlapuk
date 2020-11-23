<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-3 p-b-50">
                <div class="leftbar p-r-20 p-r-0-sm">
                    <?php include('menu.php') ?>
                </div>
            </div>

            <div class="col-sm-6 col-md-9 col-lg-9 p-b-50">

                <h4><?php echo $title ?></h4>
                <hr>
                <p>Berikut adalah riwayat belanja anda</p><br>
                <?php
                // kalau ada transaksi, tampilkan tabel
                if ($header_transaksi) {
                ?>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th width="20%">Kode Transaksi</th>
                                <th><?php echo $header_transaksi->kode_transaksi ?></th>
                            </tr>
                        </thead>
                        <thead>
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
                        </thead>
                    </table>
                    <hr>
                    <table class="table table-bordered" width="100%">
                        <thead>
                            <tr>
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

                <?php
                    // kalau tidak ada tmpilkan notif
                } else { ?>
                    <p class="alert success">
                        <i class="fa fa-warning"></i>Belum ada data transaksi
                    </p>
                <?php } ?>
            </div>
        </div>
    </div>
</section>