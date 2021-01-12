<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(<?php echo base_url() ?>/assets/templatee/images/a/b1.png);">
    <h2 class="l-text2 t-center">
        <?php echo $title ?>
    </h2>
</section>

<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
    <div class="container">
        <!-- Cart item -->
        <div class="container-table-cart pos-relative">
            <div class="wrap-table-shopping-cart bgwhite">
                <br>

                <?php if ($this->session->flashdata('sukses')) {
                    echo    '<div class="alert alert-warning">';
                    echo    $this->session->flashdata('sukses');
                    echo    '</div>';
                } ?>
                <table class="table-shopping-cart">
                    <tr class="table-head">
                        <th class="column-1">Gambar</th>
                        <th class="column-2">Produk</th>
                        <th class="column-3" width="30%">Harga</th>
                        <th class="column-4 p-l-70" width="15%">Jumlah</th>
                        <th class="column-5" width="15%">Sub Total</th>
                        <th class="column-6 p-l-70" width="20%">Action</th>
                    </tr>
                    <?php

                    // loopinng data keranjang belanja
                    foreach ($keranjang as $keranjang) {
                        // ambil data produk
                        $id_produk = $keranjang['id'];
                        $produk = $this->produk_model->detail($id_produk);
                        // Form update
                        echo form_open(base_url('belanja/update_cart/' . $keranjang['rowid']));
                    ?>
                        <tr class="table-row">
                            <td class="column-1">
                                <div class="cart-img-product b-rad-4 o-f-hidden">
                                    <img src="<?php echo base_url('assets/upload/image/thumbs/' . $produk->gambar) ?>" alt="<?php echo $keranjang['name'] ?>">
                                </div>
                            </td>
                            <td class="column-2"><?php echo $keranjang['name'] ?></td>
                            <td class="column-3">Rp. <?php echo number_format($keranjang['price'], '0', ',', '.') ?></td>
                            <td class="column-4">
                                <div class="flex-w bo5 of-hidden w-size17">
                                    <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                        <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                    </button>

                                    <input class="size8 m-text18 t-center num-product" type="number" name="qty" value="<?php echo $keranjang['qty'] ?>">

                                    <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                        <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </td>
                            <td class="column-5">Rp.
                                <?php
                                $sub_total  = $keranjang['price'] * $keranjang['qty'];
                                echo number_format($sub_total, '0', ',', '.');
                                ?>
                            </td>
                            <td class="column-6">
                                <button type="submit" name="update" class="btn btn-success btn-sm">
                                    <i class="fa fa-edit"></i> Update
                                </button>
                                <a href="<?php echo base_url('belanja/hapus/' . $keranjang['rowid']) ?>" class="btn btn-warning btn-sm">
                                    <i class="fa fa-trash-o"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php
                        // eho formclose
                        echo form_close();
                        // endloping
                    }

                    ?>

                </table>

            </div>
        </div>

        <div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">



            <div class="size10 trans-0-4 m-t-10 m-b-10">
                <!-- Button -->
                <a href="<?php echo base_url('belanja/hapus') ?>" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                    Clear Cart
                </a>
            </div>

            <div class="flex-w flex-m w-full-sm">
                <!-- TOTAL -->
                <span class="m-text22 w-size1 w-full-sm">
                    Total:
                </span>

                <span class="m-text21 w-size w-full-sm">
                    Rp. <?php echo number_format($this->cart->total(), '0', ',', '.') ?>
                </span>
            </div>

            <div class="size15 trans-0-4">
                <!-- Button -->
                <a href="<?php echo base_url('belanja/checkout') ?>" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                    Proceed to Checkout
                </a>
                <br><br><br><br><br><br>
            </div>
        </div>
        <!-- Total -->
    </div>
</section>