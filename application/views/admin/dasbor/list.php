<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php echo $this->dasbor_model->total_produk()->total; ?><sup style="font-size: 20px"> Produk</sup></h3>

                    <p>Data Produk</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="http://localhost/blp/admin/produk" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?php echo $this->dasbor_model->total_pelanggan()->total; ?><sup style="font-size: 20px"> Customer</sup></h3>

                    <p>Customer</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <a href="http://localhost/blp/admin/transaksi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3><?php echo $this->dasbor_model->total_header_transaksi()->total; ?></h3>

                    <p>Transaksi</p>
                </div>
                <div class="icon">
                    <i class="fa fa-pie-chart"></i>
                </div>
                <a href="http://localhost/blp/admin/transaksi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-blue">
                <div class="inner">
                    <h3><?php echo number_format($this->dasbor_model->total_berita()->total) ?></h3>

                    <p>Berita</p>
                </div>
                <div class="icon">
                    <i class="fa fa-list-alt"></i>
                </div>
                <a href="http://localhost/blp/admin/transaksi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?php echo number_format($this->dasbor_model->total_rekening()->total) ?></h3>

                    <p>Rekening</p>
                </div>
                <div class="icon">
                    <i class="fa fa-credit-card"></i>
                </div>
                <a href="http://localhost/blp/admin/rekening" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><sup style="font-size: 20px">Rp.</sup><?php echo number_format($this->dasbor_model->total_transaksi()->total) ?></h3>

                    <p>Nilai Transaksi</p>
                </div>
                <div class="icon">
                    <i class="fa fa-usd"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->


</section>
<!-- /.content -->