<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <a href="<?= base_url('admin/obat/tambah') ?>" class="btn btn-sm btn-primary mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Obat</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Obat</th>
                            <th>Keterangan</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th colspan="3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($obat as $obat) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $obat->namaobat ?></td>
                                <td><?= $obat->keterangan ?></td>
                                <td><?= $obat->kategori ?></td>
                                <td><?= $obat->harga ?></td>
                                <td><?= $obat->stock ?></td>
                                <td>
                                    <a href="<?= base_url('admin/obat/detail/' . $obat->idobat) ?>" class="btn btn-primary btn-circle" title="Detail Obat"><i class="far fa-eye"></i></a>
                                    <a href="<?= base_url('admin/obat/edit/' . $obat->idobat) ?>" class="btn btn-warning btn-circle" title="Edit Obat"><i class="far fa-edit"></i></a>
                                    <a href="<?= base_url('admin/obat/hapus/' . $obat->idobat) ?>" class="btn btn-danger btn-circle" onclick="confirm('anda yakin akan menghapus ?')" title="Hapus Obat"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php }; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>