<a href="<?= base_url('admin/kategori/tambah') ?>" class="btn btn-success btn-md mb-2"><i class="far fa-plus-square"></i> Tambah Kategori
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
            <th>Nama Kategori</th>
            <th>Urutan</th>
            <th>TGL Upadate</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($kategori as $kate) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $kate->namaktegori ?></td>
                <td><?= $kate->urutan ?></td>
                <td><?= $kate->tglupdate ?></td>
                <td>
                    <a href="<?= base_url('admin/kategori/edit/' . $kate->idkategori) ?>" class="btn btn-warning btn-xs " title="edit user"><i class="fa fa-edit"></i> Edit</a>
                    <a href="<?= base_url('admin/kategori/delete/' . $kate->idkategori) ?>" class="btn btn-danger btn-xs " onclick="return confirm('Yakin ingin Menghapus data ini ?')" title="hapus user"><i class="fas fa-trash"></i> Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>

</table>