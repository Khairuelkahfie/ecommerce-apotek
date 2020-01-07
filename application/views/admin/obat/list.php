<a href="<?= base_url('admin/obat/tambah') ?>" class="btn btn-success btn-md mb-2"><i class="far fa-plus-square"></i> Tambah user
</a>

<?php
// notifikasi
if ($this->session->flashdata('sukses')) {
    echo '<p class= "alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';
}
?>

<table class="table table-bordered " id="example1">
    <thead>
        <tr>
            <th>NO</th>
            <th>Gambar</th>
            <th>Nama Obat</th>
            <th>Kategori</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Status Obat</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($obat as $obat) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td>
                    <img src="<?= base_url('assets/obat/gambar/') . $obat->gambar ?>" alt="" class="img img-responsive img-thumbnail" width="60">
                </td>
                <td><?= $obat->namaobat ?></td>
                <td><?= $obat->namaktegori ?></td>
                <td><?= $obat->keterangan ?></td>
                <td><?= number_format($obat->harga, '0', ',', '.')  ?></td>
                <td><?= $obat->stok ?></td>
                <td><?= $obat->statusobat ?></td>
                <td>
                    <a href="<?= base_url('admin/obat/edit/' . $obat->idobat) ?>" class="btn btn-warning btn-xs " title="edit obat"><i class="fa fa-edit"></i> Edit</a>
                    <a href="<?= base_url('admin/obat/delete/' . $obat->idobat) ?>" class="btn btn-danger btn-xs " onclick="return confirm('Yakin ingin Menghapus data ini ?')" title="hapus user"><i class="fas fa-trash"></i> Hapus</a>
                </td>

            </tr>
        <?php } ?>
    </tbody>

</table>