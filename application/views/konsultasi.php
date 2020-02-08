<div class="container">
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-primary">Konsultasi Ke Apotek Alodiefarma</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample">
            <form action="<?= base_url('Konsultasi/simpan') ?> " method="POST" enctype='multipart/form-data'></form>
            <div class="card-body">
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Pesan" value="<?= $pesan; ?>"></textarea>
                    <input type="text " value="<?= $gambar ?>">>
                    <!-- <input type="file" value="<?= $gambar ?>"> -->
                </div>
                <div class="tombol float-right mb-3">
                    <button type="submit" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Kirim</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>