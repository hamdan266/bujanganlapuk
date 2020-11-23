<p>
    <a href="<?php echo base_url('admin/rekening') ?>" class="btn btn-success btn-lg">
        <i class=""> Back</i>
    </a>
</p>
<?php
echo validation_errors('<div class="alert alert-warning">', '</div>');

echo form_open(base_url('admin/rekening/tambah'), ' class="form-horizontal"');
?>
<div class="container">
    <div class="form-group">
        <label class="col-md-2 control-label">Nama bank</label>
        <div class="col-md-5">
            <input type="text" name="nama_bank" class="form-control" placeholder="Nama bank" value="<?php echo set_value('nama_bank') ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Nomor Rekening</label>
        <div class="col-md-5">
            <input type="number" name="nomor_rekening" class="form-control" placeholder="Nomor rekening" value="<?php echo set_value('nomor_rekening') ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Nama pemilik Rekening(atas nama)</label>
        <div class="col-md-5">
            <input type="text" name="nama_pemilik" class="form-control" placeholder="Nama pemilik Rekening(atas nama)" value="<?php echo set_value('nama_pemilik') ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label"></label>
        <div class="col-md-5">
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