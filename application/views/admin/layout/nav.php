<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url('admin/dashbor') ?>" class="brand-link">
    <img src="<?= base_url('assets/admin/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Alodie Farma</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!--menu dashboard -->
        <li class="nav-item">
          <a href="<?= base_url('admin/dashbor') ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt text-info"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <!-- menu Produk-->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class=" nav-icon fas fa-sitemap"></i>
            <p>
              Obat
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/obat') ?>" class="nav-link">
                <i class="fas fa-table nav-icon"></i>
                <p>Data Obat</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/obat/tambah') ?>" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Tambah Obat</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/kategori') ?>" class="nav-link">
                <i class="fas fa-tags nav-icon"></i>
                <p>Kategori Obat</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- akhir menu Produk -->
        <!-- menu user -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class=" nav-icon fas fa-users"></i>
            <p>
              Pengguna
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/user') ?>" class="nav-link">
                <i class="fas fa-table nav-icon"></i>
                <p>Data Pengguna</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/user/tambah') ?>" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Tambah Pengguna</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- akhir menu pengguna -->
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?= $title ?></h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">