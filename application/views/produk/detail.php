<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
    <a href="<?php echo base_url() ?>" class="s-text16">
        Home
        <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
    </a>

    <a href="<?php echo base_url('produk') ?>" class="s-text16">
        Produk
        <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
    </a>

    <span class="s-text17">
        <?php echo $title ?>
    </span>
</div>

<!-- Product Detail -->
<div class="container bgwhite p-t-35 p-b-80">
    <div class="flex-w flex-sb">
        <div class="w-size13 p-t-30 respon5">
            <div class="wrap-slick3 flex-sb flex-w">
                <div class="wrap-slick3-dots"></div>

                <div class="slick3">

                    <div class="item-slick3" data-thumb="<?php echo base_url('assets/upload/image/thumbs/' . $produk->gambar) ?>">
                        <div class="wrap-pic-w">
                            <img src="<?php echo base_url('assets/upload/image/' . $produk->gambar) ?>" alt="<?php echo $produk->nama_produk ?>">
                        </div>
                    </div>

                    <?php if ($gambar) {
                        foreach ($gambar as $gambar) { ?>
                            <div class="item-slick3" data-thumb="<?php echo base_url('assets/upload/image/thumbs/' . $gambar->gambar) ?>">
                                <div class="wrap-pic-w">
                                    <img src="<?php echo base_url('assets/upload/image/' . $gambar->gambar) ?>" alt="<?php echo $gambar->judul_gambar ?>">
                                </div>
                            </div>
                    <?php }
                    } ?>

                </div>
            </div>
        </div>

        <div class="w-size14 p-t-30 respon5">
            <h4 class="product-detail-name m-text16 p-b-13">
                <?php echo $title ?>
            </h4>

            <!-- form untuk memproses belanjaan -->
            <?php echo form_open(base_url('belanja/add'));
            // elemen yang dibawa
            echo form_hidden('id', $produk->id_produk);
            // echo form_hidden('qty', 1);
            echo form_hidden('price', $produk->harga);
            echo form_hidden('name', $produk->nama_produk);
            // element rediret
            echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
            ?>

            <span class="m-text17">
                Rp. <?php echo number_format($produk->harga, '0', ',', '.') ?>
            </span>

            <p class="s-text8 p-t-10">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia voluptates earum delectus odio vero hic fuga qui, saepe rem quod deleniti laboriosam ducimus rerum alias. Voluptate delectus laboriosam ullam sint?
                <!-- <?php echo $kategori->kategori ?> -->
            </p>

            <!--  -->
            <div class="p-t-33 p-b-60">

                <div class="flex-r-m flex-w p-t-10">
                    <div class="w-size16 flex-m flex-w">
                        <div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
                            <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                            </button>

                            <input class="size8 m-text18 t-center num-product" type="number" name="qty" value="1">

                            <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </div>

                        <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                            <!-- Button -->
                            <button type="submit" value="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="p-b-45">
                <span class="s-text8 m-r-35">SKU: MUG-01</span>
                <span class="s-text8">Categories: Mug, Design</span>
            </div> -->

            <!--  -->
            <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                    Description
                    <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                    <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                </h5>

                <div class="dropdown-content dis-none p-t-15 p-b-23">
                    <p class="s-text8">
                        <?php echo $produk->keterangan ?>
                    </p>
                </div>
            </div>

            <!-- <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                    Additional information
                    <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                    <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                </h5>

                <div class="dropdown-content dis-none p-t-15 p-b-23">
                    <p class="s-text8">
                        Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
                    </p>
                </div>
            </div> -->

            <!-- <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                    Reviews (0)
                    <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                    <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                </h5>

                <div class="dropdown-content dis-none p-t-15 p-b-23">
                    <p class="s-text8">
                        Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
                    </p>
                </div>
            </div> -->
            <?php echo form_close();
            ?>
        </div>
    </div>
</div>


<!-- Relate Product -->
<section class="relateproduct bgwhite p-t-45 p-b-138">
    <div class="container">
        <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center">
                Related Products
            </h3>
        </div>

        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2">
                <?php foreach ($produk_related as $produk_related) { ?>
                    <div class="item-slick2 p-l-15 p-r-15">
                        <!-- form untuk memproses belanjaan -->
                        <?php echo form_open(base_url('belanja/add'));
                        // elemen yang dibawa
                        echo form_hidden('id', $produk_related->id_produk);
                        echo form_hidden('qty', 1);
                        echo form_hidden('price', $produk_related->harga);
                        echo form_hidden('name', $produk_related->nama_produk);
                        // element rediret
                        echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
                        ?>

                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                <img src="<?php echo base_url('assets/upload/image/' . $produk_related->gambar) ?>" alt="<?php echo $produk_related->nama_produk ?>">

                                <div class="block2-overlay trans-0-4">
                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>

                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                        <!-- Button -->
                                        <button type="submit" value="submit" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="block2-txt p-t-20">
                                <a href="<?php echo base_url('produk/detail/' . $produk_related->slug_produk) ?>" class="block2-name dis-block s-text3 p-b-5">
                                    <?php echo $produk_related->nama_produk ?>
                                </a>

                                <span class="block2-price m-text6 p-r-5">
                                    Rp. <?php echo number_format($produk_related->harga, '0', ',', '.') ?>
                                </span>
                            </div>
                        </div>
                        <?php echo form_close();
                        ?>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>
</section>