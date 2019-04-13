<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= site_url('admin')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      </ol>
    </section>
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3>150</h3>

                    <p>Pesanan Baru</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-shopping-cart"></i>
                  </div>
                  <a href="<?= site_url('pesanan')?>" class="small-box-footer">Semua Pesanan <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                  <div class="inner">
                    <h3>200</h3>

                    <p>Produk</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-archive"></i>
                  </div>
                  <a href="<?= site_url('produk')?>" class="small-box-footer">Semua Produk <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>
    </section>

</div>
<!-- /.content-wrapper -->