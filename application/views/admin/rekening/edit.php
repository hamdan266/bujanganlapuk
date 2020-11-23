<p>
    <a href="<?php echo base_url('admin/rekening') ?>" class="btn btn-success btn-lg">
        <i class="fab fa-accessible-icon">Back</i>
    </a>
</p>
<?php
echo validation_errors('<div class="alert alert-warning">', '</div>');

echo form_open(base_url('admin/rekening/edit/' . $rekening->id_rekening), ' class="form-horizontal"');
?>
<div class="container">

    <div class="form-group">
        <label class="col-md-2 control-label">Nama bank</label>
        <div class="col-md-5">
            <input type="text" name="nama_bank" class="form-control" placeholder="Nama bank.." value="<?php echo $rekening->nama_bank ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Nomor rekening</label>
        <div class="col-md-5">
            <input type="number" name="nomor_rekening" class="form-control" placeholder="Nomor rekening" value="<?php echo $rekening->nomor_rekening ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Nama pemilik rekening</label>
        <div class="col-md-5">
            <input type="text" name="nama_pemilik" class="form-control" placeholder="Nama pemilik rekening" value="<?php echo $rekening->nama_pemilik ?>" required>
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