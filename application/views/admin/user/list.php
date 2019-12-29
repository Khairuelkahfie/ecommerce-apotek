<a href="<?= base_url('admin/user/tambah') ?>" class="btn btn-success btn-md mb-2"><i class="far fa-plus-square"></i> Tambah user
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
            <th>Nama</th>
            <th>Email</th>
            <th>Username</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($user as $user) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $user->nama ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->username ?></td>
                <td><?= $user->role ?></td>
                <td>
                    <a href="<?= base_url('admin/user/edit/' . $user->iduser) ?>" class="btn btn-warning btn-xs " title="edit user"><i class="fa fa-edit"></i> Edit</a>
                    <a href="<?= base_url('admin/user/delete/' . $user->iduser) ?>" class="btn btn-danger btn-xs " onclick="return confirm('Yakin ingin Menghapus data ini ?')" title="hapus user"><i class="fas fa-trash"></i> Hapus</a>
                </td>

            </tr>
        <?php } ?>
    </tbody>

</table>