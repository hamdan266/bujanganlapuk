<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(<?php echo base_url() ?>/assets/templatee/images/heading-pages-01.jpg);">
    <h2 class="l-text2 t-center">
        <?php echo $title ?>
    </h2>
</section>

<!-- content page -->
<section class="bgwhite p-t-66 p-b-60">
    <div class="container">

        <div class="col">
            <!-- <form class="leave-comment"> -->

            <h4 class="m-text26 p-b-36 p-t-15">
                Send us your message
            </h4>
            <?php if ($this->session->flashdata('sukses')) {
                echo    '<div class="alert alert-warning">';
                echo    $this->session->flashdata('sukses');
                echo    '</div>';
            } ?>
            <p class="alert alert-success">Sudah memiliki akun? Silahkan <a href="<?php echo base_url('masuk') ?>" class="btn btn-info btn-sm">Login..</a> </p>

            <?php
            // display error
            echo validation_errors('<div class="alert alert-warning">', '</div>');

            echo form_open(base_url('registrasi')); ?>

            <div class="bo4 of-hidden size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="nama_pelanggan" placeholder="Nama Lengkap.." value="<?php echo set_value('nama_pelanggan') ?>" required>
            </div>

            <div class="bo4 of-hidden size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="email" name="email" placeholder="Email" value="<?php echo set_value('email') ?>" required>
            </div>

            <div class="bo4 of-hidden size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="password" placeholder="Password" value="<?php echo set_value('password') ?>" required>
            </div>

            <div class="bo4 of-hidden size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="telepon" placeholder="Telepon" value="<?php echo set_value('telepon') ?>" required>
            </div>

            <textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="alamat" placeholder="alamat" value="<?php echo set_value('alamat') ?>"></textarea>
            <div class="w-size25">
                <!-- Button -->
                <button type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                    Registrasi
                </button><br>
                <button type="reset" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                    Reset
                </button>
            </div><br>


            <?php echo form_close(); ?>
            <!-- </form> -->
        </div>
    </div>
    </div>
</section>