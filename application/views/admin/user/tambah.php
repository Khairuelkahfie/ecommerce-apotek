<?php
// notifikasi error 
echo validation_errors('<div class="alert alert-warning">', '</div>');

// form open 
echo form_open(base_url('admin/user/tambah'), 'class="form-horizontal"');
?>
<div class="form-group row">
    <label class="col-md-2 col-form-label">Nama Pengguna</label>
    <div class="col-md-5">
        <input type="text" name="nama" class="form-control" placeholder="Nama Pengguna" value="<?= set_value('nama') ?>">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2 col-form-label">Email</label>
    <div class="col-md-5">
        <input type="email" name="email" class="form-control" placeholder="Email Pengguna" value="<?= set_value('email') ?>" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label">Username</label>
    <div class="col-md-5">
        <input type="text" name="username" class="form-control" placeholder="Username" value="<?= set_value('username') ?>" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label">Password</label>
    <div class="col-md-5">
        <input type="password" name="password" class="form-control" placeholder="Password" value="<?= set_value('password') ?>" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label">Role</label>
    <div class="col-md-5">
        <select name="role" id="" class="form-control">
            <option value="Admin">Admin</option>
            <option value="Admin">Pelanggan</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <div class="col-md-5">
        <button class="btn btn-success btn-md " name="submit" type="submit">
            <i class="fa fa-save"></i> Simpan
        </button>
        <button class="btn btn-info btn-md " name="reset" type="reset">
            <i class="fa fa-times"></i> Reset
        </button>
    </div>
</div>


<?php echo form_close();


?>