<?php
// notifikasi error upload
if (isset($error)) {
    echo '<p class="alert alert-warning">';
    echo $error;
    echo '</p>';
}
// notofikasi error
echo validation_errors('<div class="alert alert-warning">', '</div>');

echo form_open_multipart(base_url('admin/produk/gambar/' . $produk->id_produk), ' class="form-horizontal"');
?>
<div class="container">
    <div class="form-group">
        <label class="col-md-2 control-label">Judul Gambar Produk</label>
        <div class="col-md-8">
            <input type="text" name="judul_gambar" class="form-control" placeholder="Judul Gambar Produk" value="<?php echo set_value('judul_gambar') ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Unggah Gambar Produk</label>
        <div class="col-md-4">
            <input type="file" name="gambar" class="form-control" placeholder="Gambar Produk" value="<?php echo set_value('gambar') ?>" required>
        </div>
        <div class="col-md-4">
            <button class="btn btn-success btn-lg" name="submit" type="submit">
                <i class="fa fa-save"></i> Simpan
            </button>
            <button class="btn btn-info btn-lg" name="reset" type="reset">
                <i class="fa fa-times"></i> Reset
            </button>
        </div>
    </div>

</div>
<?php echo form_close(); ?>

<?php
// notifikasi
if ($this->session->flashdata('sukses')) {
    echo '<p class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</p>';
}
?>
<table class="table table-bordered" id="example1">
    <thead>
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>
                <img src="<?php echo base_url('assets/upload/image/thumbs/' . $produk->gambar) ?>" class="img img-responsive img-thumbnail" width="60" alt="">

            </td>
            <td><?php echo $produk->nama_produk ?></td>
            <td class="text-center">
                <button type="button" class="btn btn-block btn-warning disabled">(Gambar Utama)</button>
                <!-- <h4 class="text-yellow">(GAMBAR UTAMA)</h4> -->
            </td>
        </tr>
        <?php $no = 2;
        foreach ($gambar as $gambar) { ?>
            <tr>
                <td><?php echo $no ?></td>
                <td>
                    <img src="<?php echo base_url('assets/upload/image/thumbs/' . $gambar->gambar) ?>" class="img img-responsive img-thumbnail" width="60" alt="">
                </td>
                <td><?php echo $gambar->judul_gambar ?></td>
                <td class="text-center">

                    <a href="<?php echo base_url('admin/produk/delete_gambar/' . $produk->id_produk . '/' . $gambar->id_gambar) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin di hapus?')">
                        <i class="fa fa-trash-o"></i> Hapus
                    </a>
                </td>
            </tr>
    </tbody>
<?php $no++;
        } ?>
</table>