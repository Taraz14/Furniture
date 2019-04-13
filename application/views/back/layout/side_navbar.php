<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('assets/dist/img/dp.jpg')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Pradhana</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?= site_url('admin')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li>
          <a href="<?= site_url('produk')?>">
            <i class="fa fa-archive"></i> <span>Stock</span>
          </a>
        </li>
        <li>
          <a href="<?= site_url('pesanan')?>">
            <i class="fa fa-shopping-cart"></i>
            <span>List Pesanan</span>
          </a>
        </li>

        <li>
          <a href="<?= site_url('members')?>">
            <i class="fa fa-users"></i>
            <span>Members</span>
          </a>
        </li>
        <li>
          <a href="<?= site_url('transaksi')?>">
            <i class="fa fa-edit"></i> <span>Transaksi</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
