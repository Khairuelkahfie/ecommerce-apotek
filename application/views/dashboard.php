<div class="container-fluid">
  <div id="carouselExampleCaptions" class="carousel slide mb-2" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= base_url('assets/img/slide/'); ?>slide1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('assets/img/slide/'); ?>slide1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('assets/img/slide/'); ?>slide1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="row text-center">
    <?php foreach ($obat as $obt) : ?>
      <div class="card ml-4 mb-3" style="width: 15rem;">
        <img class="m-1" src="<?= base_url('assets/img/obat/') . $obt->gambar ?>" class="card-img-top" style="height : 12rem;" alt="...">
        <div class="card-body mt-1 ">
          <h5 class="card-title mb-1"><?= $obt->namaobat ?></h5>
          <p class="card-text mb-3"> Rp. <?= number_format($obt->harga, 0, ',', '.') ?></p>
          <div class="button">
            <a href="<?= base_url('Dashboard/tambahkeranjang/') . $obt->idobat ?>" class="btn btn-sm btn-primary">Tambah</a>
            <a href="<?= base_url('Dashboard/detail/') . $obt->idobat ?>" class="btn btn-sm btn-success">Detail</a>
          </div>

        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>