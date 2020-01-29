<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Invoice Pemesanan Produk</h6>
            <button class="btn btn-success btn-icon-split mt-2">
                <span class="icon text-white-50">
                    No. Invoice
                </span>
                <span class="text"><?= $invoice->idinvoice ?></span>
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id Obat</th>
                            <th>Nama Obat</th>
                            <th>Jumlah Pesanan</th>
                            <th>Harga Satuan</th>
                            <th>Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        foreach ($pesanan as $pesan) :
                            $subtotal = $pesan->jumlah * $pesan->harga;
                            $total += $subtotal;
                        ?>
                            <tr>
                                <td><?= $pesan->idobat ?></td>
                                <td><?= $pesan->namaobat ?></td>
                                <td><?= $pesan->jumlah ?></td>
                                <td><?= number_format($pesan->harga, 0, ',', '.') ?></td>
                                <td><?= number_format($subtotal, 0, ',', '.') ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="4" align="right"> TOTAL</td>
                            <td align="right">Rp.<?= number_format($total, 0, ',', '.') ?></td>
                        </tr>
                    </tbody>
                </table>
                <a href="<?= base_url('invoice/index') ?>" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-backward"></i>
                    </span>
                    <span class="text">Kembali</span>
                </a>
            </div>
        </div>
    </div>
</div>