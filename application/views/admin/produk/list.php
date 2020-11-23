<p>
    <a href="<?php echo base_url('admin/produk/tambah') ?>" class="btn btn-success btn-lg">
        <i class="fa fa-plus">Tambah Produk</i>
    </a>
</p>

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
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($produk as $produk) { ?>
            <tr>
                <td><?php echo $no ?></td>
                <td>
                    <img src="<?php echo base_url('assets/upload/image/thumbs/' . $produk->gambar) ?>" class="img img-responsive img-thumbnail" width="60" alt="">
                </td>
                <td><?php echo $produk->nama_produk ?></td>
                <td><?php echo $produk->nama_kategori ?></td>
                <td><?php echo number_format($produk->harga, '0', ',', '.') ?></td>
                <td><?php echo $produk->status_produk ?></td>
                <td class="text-center">
                    <a href="<?php echo base_url('admin/produk/gambar/' . $produk->id_produk) ?>" class="btn btn-success btn-xs">
                        <i class="fa fa-image"></i> Gambar (<?php echo $produk->total_gambar ?>)
                    </a>

                    <a href="<?php echo base_url('admin/produk/edit/' . $produk->id_produk) ?>" class="btn btn-warning btn-xs">
                        <i class="fa fa-edit"></i> Edit
                    </a>
                    <?php include('delete.php') ?>
                    <!-- <a href="<?php echo base_url('admin/produk/delete/' . $produk->id_produk) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Hapus Data?')">
                        <i class="fa fa-trash-o"></i> Hapus
                    </a> -->
                </td>
            </tr>
    </tbody>
<?php $no++;
        } ?>
</table>