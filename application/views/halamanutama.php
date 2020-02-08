<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column fixed-top">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand-md navbar-light bg-white topbar static-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?= base_url('assets/img/') ?>Logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    Alodie Farma
                </a>
                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-5 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Silahkan Anda Mencari ...!" aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="<?= base_url('dashboard/detailkeranjang') ?>" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-shopping-cart fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <?php $keranjang = $this->cart->total_items() ?>
                            <span class="badge badge-danger badge-counter"><?= $keranjang ?></span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Daftar Belanja
                            </h6>
                            <?php
                            $no = 1;
                            foreach ($this->cart->contents() as $items) :
                            ?>
                                <div class="">
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <span class="font-weight-bold"><?= $items['name'] ?></span>
                                    </a>
                                </div>


                            <?php endforeach; ?>

                        </div>
                    </li>
                    <!-- Menu Login DAN DAFTAR-->
                    <li class="nav-item dropdown no-arrow my-2 mx-">
                        <ul class="nav navbar-nav">
                            <?php if ($this->session->userdata('email')) { ?>
                                <li class="nav-item m-2">
                                    <a class="btn btn-outline-primary" href="<?= base_url('auth/logout') ?>">
                                        <span class="text">Logout</span>
                                    </a>
                                </li>
                            <?php } else { ?>
                                <li class="nav-item m-2">
                                    <a href="<?= base_url('auth') ?>" class="btn btn-outline-primary">
                                        <span class="icon">
                                            <span class="text">
                                                Login
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item m-2">
                                    <a href="#" class="btn btn-outline-primary">
                                        <span class="icon">
                                            <span class="text">
                                                Daftar
                                            </span>
                                        </span>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End of Topbar -->
        <!-- menu -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link menu" href="<?= base_url('dashboard') ?>">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link " href="">Obat<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link " href="<?= base_url('dashboard/detailkeranjang') ?>">Keranjang <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link " href="<?= base_url('konsultasi') ?>">Konsultasi<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link " href="">About<span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>



<!-- isi -->
<div id="carouselExampleCaptions" class="carousel slide mb-3 mt-5" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url('assets/img/slide/'); ?>slide1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">

            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/img/slide/'); ?>slide1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">

            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/img/slide/'); ?>slide1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">

            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container">
    <div class="text-center mb-3">
        <h3>Produks</h3>
    </div>
    <div class="row text-center">
        <?php foreach ($obat as $obt) : ?>
            <div class="card ml-4 mb-3" style="width: 15rem;">
                <img class="m-1" src="<?= base_url('assets/img/obat/') . $obt->gambar ?>" class="card-img-top" style="height : 12rem;" alt="...">
                <div class="card-body mt-1 ">
                    <h5 class="card-title mb-1"><?= $obt->namaobat ?></h5>
                    <p class="card-text mb-3"> Rp. <?= number_format($obt->harga, 0, ',', '.') ?></p>
                    <div class="button">
                        <a href="<?= base_url('Dashboard/tambahkeranjang/') . $obt->idobat ?>" class="btn btn-sm btn-primary">Tambah</a>
                        <a href="<?= base_url('Dashboard/detail/') . $obt->idobat ?>" class="btn btn-sm btn-success">Detail</a>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- Footer -->
<footer class="sticky-footer bg-white static-top shadow">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Alodie Farma <?= date('Y') ?></span>
        </div>
    </div>
</footer>


<!-- akhir isi -->