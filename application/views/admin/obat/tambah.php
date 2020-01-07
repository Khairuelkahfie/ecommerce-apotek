<?php
// notifikasi error 
echo validation_errors('<div class="alert alert-warning">', '</div>');

// form open 
echo form_open_multipart(base_url('admin/obat/tambah'), 'class="form-horizontal"');
?>
<div class="form-group row">
    <label class="col-md-2 col-form-label">Nama Obat</label>
    <div class="col-md-5">
        <input type="text" name="namaobat" class="form-control" placeholder="Nama Pengguna" value="<?= set_value('namaobat') ?>">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2 col-form-label">Kode Obat</label>
    <div class="col-md-5">
        <input type="text" name="kodeobat" class="form-control" placeholder="Kode Obat" value="<?= set_value('kodeobat') ?>" required>
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2 col-form-label">Kategori Obat</label>
    <div class="col-md-5">
        <select name="idkategori" id="" class="form-control">
            <?php foreach ($kategori as $kategori) { ?>
                <option value="<?= $kategori->idkategori ?>">
                    <?= $kategori->namaktegori ?>
                </option>
            <?php } ?>
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2 col-form-label">Harga Obat</label>
    <div class="col-md-5">
        <input type="number" name="harga" class="form-control" placeholder="Harga Obat" value="<?= set_value('harga') ?>" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label">Stok Obat</label>
    <div class="col-md-5">
        <input type="number" name="stok" class="form-control" placeholder="Stok Obat" value="<?= set_value('stok') ?>" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label">Keterangan Obat</label>
    <div class="col-md-5">
        <textarea type="text" name="keterangan" class="form-control" placeholder="Keterangan Obat" required>
            <?= set_value('keterangan') ?>
        </textarea>
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2 col-form-label">Satuan Obat</label>
    <div class="col-md-5">
        <input type="number" name="satuan" class="form-control" placeholder="Satuan Obat" value="<?= set_value('satuan') ?>" required>
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2 col-form-label">Status Obat</label>
    <div class="col-md-5">
        <select name="status" id="" class="form-control">
            <option value="Publish">Publikasikan</option>
            <option value="Draft">Simapan Sebagai Draft</option>
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2 col-form-label">Gambar Obat</label>
    <div class="col-md-5">
        <input type="file" name="gambar" class="form-control" placeholder="Satuan Obat" required>
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