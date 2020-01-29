<div class="container-fluid">
    <?php foreach ($obat as $obt) : ?>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary"><?= $obt->namaobat ?></h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 col-sm-5">
                        <div class="col-md">
                            <div class="row">
                                <div class="card shadow mb-4">
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-pie">
                                            <img src="<?= base_url('assets/img/obat/') . $obt->gambar ?>" alt="" class="card-img-top">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <div class="row my-3">
                            <div class="col-md-4">Nama</div>
                            <div class="col-md-4"><?= $obt->namaobat ?></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-4">Kategori</div>
                            <div class="col-md-4"><?= $obt->kategori ?></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-4">Harga</div>
                            <div class="col-md-4"><strong> <b> Rp.<?= number_format($obt->harga, 0, ',', '.')  ?></b></strong></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-4">Stock</div>
                            <div class="col-md-4"><?= $obt->stock ?></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-4">Indikasi</div>
                            <div class="col-md-4"><?= $obt->indikasi ?></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-4">Perhatian</div>
                            <div class="col-md-4"><?= $obt->perhatian ?></div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-4">
                                <a href="<?= base_url('Dashboard/tambahkeranjang/') . $obt->idobat ?>" class="btn btn-sm btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-cart-plus"></i>
                                    </span>
                                    <span class="text">Tambah Keranjang</span>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="<?= base_url('Dashboard/index') ?>" class="btn btn-sm btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-backward"></i>
                                    </span>
                                    <span class="text">Kembali</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <table>
                            <tr>
                                <th>
                                    <h4>Keterangan</h4>
                                </th>
                            </tr>
                            <tr>
                                <td> <?= $obt->keterangan ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table>
                            <tr>
                                <th>
                                    <h4>Komposisi</h4>
                                </th>
                            </tr>
                            <tr>
                                <td> <?= $obt->komposisi ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>