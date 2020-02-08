<div id="content-wrapper">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand-md navbar-light bg-white topbar static-top ">
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
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            <li class="nav-item m-2">
                                <a class="btn btn-outline-primary" href="">
                                    <span class="text">Login</span>
                                </a>
                            </li>
                            <li class="nav-item m-2">
                                <a href="" class="btn btn-outline-primary">
                                    <span class="icon">
                                        <span class="text">
                                            Daftar
                                        </span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End of Topbar -->
        <!-- menu -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top">
            <div class="container">
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link menu" href="<?= base_url('dashboard') ?>">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link menu" href="">Obat<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link menu" href="<?= base_url('dashboard/detailkeranjang') ?>">Keranjang <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link menu" href="">Konsultasi<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link menu" href="">About<span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>