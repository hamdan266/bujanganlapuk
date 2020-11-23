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
            <!-- 
            <h4 class="m-text26 p-b-36 p-t-15">
                Send us your message
            </h4> -->
            <?php if ($this->session->flashdata('sukses')) {
                echo    '<div class="alert alert-warning">';
                echo    $this->session->flashdata('sukses');
                echo    '</div>';
            } ?>
            <p class="alert alert-success">Registrasi telah dilakukan, <a href="<?php echo base_url('masuk') ?>" class="btn btn-info btn-sm">Login</a> / Checkout <a href="<?php echo base_url('belanja/checkout') ?>" class="btn btn-warning btn-sm"><i class="fa fa-shopping-cart"></i> Check Out</a> </p>


        </div>
    </div>
    </div>
</section>