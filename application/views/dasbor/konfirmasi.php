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
                        <tbody>
                            <tr>
                                <td>Tanggal</td>
                                <td><?php echo date('d-m-Y', strtotime($header_transaksi->tanggal_transaksi)) ?></td>
                            </tr>
                            <tr>
                                <td>Jumlah total</td>
                                <td><?php echo number_format($header_transaksi->jumlah_transaksi) ?></td>
                            </tr>
                            <tr>
                                <td>Status bayar</td>
                                <td><?php echo $header_transaksi->status_bayar ?></td>
                            </tr>
                            <tr>
                                <td>bukti bayar</td>
                                <td><?php if ($header_transaksi->bukti_bayar != "") { ?><img src="<?php echo base_url('assets/upload/image/' . $header_transaksi->bukti_bayar) ?>" class="img img-thumbnail" width="200">
                                    <?php } else {
                                        echo 'Belum ada bukti bayar';
                                    } ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <?php
                    // error upload
                    if (isset($error)) {
                        echo '<p class="alert alert-warning">' . $error . '</p>';
                    }
                    // notifikasi error
                    echo validation_errors('<p class="alert alert-warning">', '</p>');
                    // Form Open
                    echo form_open_multipart(base_url('dasbor/konfirmasi/' . $header_transaksi->kode_transaksi));
                    ?>

                    <table class="table">
                        <tbody>
                            <tr>
                                <td width="40%">Pembayaran ke rekening</td>
                                <td>
                                    <select name="id_rekening" class="form-control">
                                        <?php foreach ($rekening as $rekening) { ?>
                                            <option value="<?php echo $rekening->id_rekening ?>" <?php if ($header_transaksi->id_rekening == $rekening->id_rekening) {
                                                                                                        echo "selected";
                                                                                                    } ?>>
                                                <?php echo $rekening->nama_bank ?> (No. Rekening :
                                                <?php echo $rekening->nomor_rekening ?> a.n <?php
                                                                                            echo $rekening->nama_pemilik ?>)
                                            </option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal bayar</td>
                                <td>
                                    <input type="text" name="tanggal_bayar" class="form-control-lg" placeholder="dd-mm-yyyy" value="<?php if (isset($_POST['tanggal_bayar'])) {
                                                                                                                                        echo set_value('tanggal_bayar');
                                                                                                                                    } elseif ($header_transaksi->tanggal_bayar != "") {
                                                                                                                                        echo $header_transaksi->tanggal_bayar;
                                                                                                                                    } else {
                                                                                                                                        echo date('d-m-Y');
                                                                                                                                    } ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Jumlah pembayaran</td>
                                <td>
                                    <input type="number" name="jumlah_bayar" class="form-control-lg" placeholder="Jumlah pembayaran" value="<?php
                                                                                                                                            if (isset($_POST['jumlah_bayar'])) {
                                                                                                                                                echo set_value('jumlah_bayar');
                                                                                                                                            } elseif ($header_transaksi->jumlah_bayar != "") {
                                                                                                                                                echo $header_transaksi->jumlah_bayar;
                                                                                                                                            } else {
                                                                                                                                                echo $header_transaksi->jumlah_transaksi;
                                                                                                                                            } ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Dari bank..</td>
                                <td>
                                    <input type="text" name="nama_bank" class="form-control" value="<?php echo $header_transaksi->nama_bank ?>" placeholder="Nama bank (Misal : Bank BCA)">
                                </td>
                            </tr>
                            <tr>
                                <td>Dari nomor rekening</td>
                                <td>
                                    <input type="text" name="rekening_pembayaran" class="form-control" value="<?php echo $header_transaksi->rekening_pembayaran ?>" placeholder="Nomor Rekening (Misal : 23323******)">
                                </td>
                            </tr>
                            <tr>
                                <td>Nama pemilik rekening</td>
                                <td>
                                    <input type="text" name="rekening_pelanggan" class="form-control" value="<?php echo $header_transaksi->rekening_pelanggan ?>" placeholder="Nama Pemilik Rekening (Misal : Hamdan Junaedi)">
                                </td>
                            </tr>
                            <tr>
                                <td>Upload Bukti Bayar</td>
                                <td>
                                    <input type="file" name="bukti_bayar" class="form-control" placeholder="Upload bukti pembayaran (Misal : bukti_bayar.jpg)">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-success btn-lg" type="submit" name="submit">
                                            <i class="fa fa-upload"></i> Submit
                                        </button>
                                        <button class="btn btn-info btn-lg" type="reset" name="reset">
                                            <i class="fa fa-times"></i> Reset
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                <?php
                    // FORM CLOSE
                    echo form_close();
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