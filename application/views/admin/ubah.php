<!-- Basic Card Example -->
<div class="card shadow m-5">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ubah Data Obat</h6>
    </div>
    <div class="card-body">
        <?php
        foreach ($obat as $obat) { ?>
            <form class="user" action="<?= base_url('admin/obat/simpanedit') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="namaobat" class="col-sm-2 col-form-label">Nama Obat</label>
                    <div class="col-sm-5">
                        <input type="text" name="namaobat" class="form-control form-control-user" id="namaobat" value="<?= $obat->namaobat ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-5">
                        <input type="text" name="keterangan" class="form-control form-control-user" id="keterangan" value="<?= $obat->keterangan ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-5">
                        <select class="form-control" id="kategori" name="kategori">
                            <option hidden><?= $obat->kategori ?></option>
                            <option value="Kapsul">Kapsul</option>
                            <option value="Tablet">Tablet</option>
                            <option value="Botol">Botol</option>
                            <option value="Kaplet">Kaplet</option>
                            <option value="Tetes">Tetes</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-5">
                        <input type="number" required name="harga" class="form-control form-control-user" id="harga" value="<?= $obat->harga ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                    <div class="col-sm-5">
                        <input type="number" required name="stock" class="form-control form-control-user" id="stock" value="<?= $obat->stock ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="komposisi" class="col-sm-2 col-form-label">Komposisi</label>
                    <div class="col-sm-5">
                        <input type="text" name="komposisi" class="form-control form-control-user" id="komposisi" required value="<?= $obat->komposisi ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="indikasi" class="col-sm-2 col-form-label">Indikasi</label>
                    <div class="col-sm-5">
                        <input type="text" name="indikasi" class="form-control form-control-user" id="indikasi" required value="<?= $obat->indikasi ?>">
                    </div>
                </div>
                <!-- <div class="form-group row">
                <label for="dosis" class="col-sm-2 col-form-label">Dosis</label>
                <div class="col-sm-5">
                    <input type="text" name="dosis" class="form-control form-control-user" id="dosis" required>
                </div>
            </div> -->
                <div class="form-group row">
                    <label for="perhatian" class="col-sm-2 col-form-label">Perhatian</label>
                    <div class="col-sm-5">
                        <input type="text" name="perhatian" class="form-control form-control-user" id="perhatian" required value="<?= $obat->perhatian ?>">
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-5">
                        <input type="file" name="gambar" id="gambar" value="<?= $obat->gambar ?>">
                    </div>
                </div> -->
                <div class="form-group row">
                    <div class="col-sm-7">
                        <button type="submit" class="btn btn-success btn-icon-split float-right">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Simpan</span>
                        </button>
                    </div>
                </div>

            </form>
        <?php }; ?>
    </div>
</div>