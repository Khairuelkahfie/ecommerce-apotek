<?php
// notifikasi error 
echo validation_errors('<div class="alert alert-warning">', '</div>');

// form open 
echo form_open(base_url('admin/kategori/tambah'), 'class="form-horizontal"');
?>
<div class="form-group row">
    <label class="col-md-2 col-form-label">Nama Kategori</label>
    <div class="col-md-5">
        <input type="text" name="namaktegori" class="form-control" placeholder="Nama Kategori" value="<?= set_value('namaktegori') ?>">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2 col-form-label">Urutan</label>
    <div class="col-md-5">
        <input type="number" name="urutan" class="form-control" placeholder="Urutan Kategori" value="<?= set_value('ururtan') ?>" required>
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