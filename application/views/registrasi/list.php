<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(<?php echo base_url() ?>/assets/templatee/images/heading-pages-01.jpg);">
    <h2 class="l-text2 t-center">
        <?php echo $title ?>
    </h2>
</section>

<!-- Cart -->
<section class="bgwhite p-t-70 p-b-100">
    <div class="container">
        <!-- Cart item -->
        <div class="pos-relative">
            <div class="bgwhite">
                <h1><?php echo $title ?></h1>
                <hr>
                <div class="clearfix"></div>
                <br><br>

                <?php if ($this->session->flashdata('sukses')) {
                    echo    '<div class="alert alert-warning">';
                    echo    $this->session->flashdata('sukses');
                    echo    '</div>';
                } ?>
                <p class="alert alert-success">Sudah memiliki akun? Silahkan <a href="<?php echo base_url('masuk') ?>" class="btn btn-info btn-sm">Login..</a> </p>

                <div class="col-md-12">
                    <?php
                    // display error
                    echo validation_errors('<div class="alert alert-warning">', '</div>');
                    echo form_open(base_url('registrasi'), 'class="leave-comment"'); ?>

                    <table class="table">
                        <thead>
                            <tr>
                                <th width="25%">Nama</th>
                                <th><input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama lengkap" value="<?php echo set_value('nama_pelanggan') ?>" required></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Email</td>
                                <td><input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo set_value('email') ?>" required></td>
                            </tr>
                            <tr>
                                <td>password</td>
                                <td><input type="password" name="password" class="form-control" placeholder="password" value="<?php echo set_value('password') ?>" required></td>
                            </tr>
                            <tr>
                                <td>Telepon</td>
                                <td><input type="text" name="telepon" class="form-control" placeholder="telepon" value="<?php echo set_value('telepon') ?>" required></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo set_value('alamat') ?></textarea></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button class="btn btn-success btn-lg" type="submit">
                                        <i class="fa fa-save"></i> Submit
                                    </button>
                                    <button class="btn btn-info btn-lg" type="reset">
                                        <i class="fa fa-times"></i> Reset
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <?php echo form_close(); ?>
                </div>

            </div>
        </div>

        <div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
            <div class="flex-w flex-m w-full-sm">
            </div>
        </div>
        <!-- Total -->
    </div>
</section>