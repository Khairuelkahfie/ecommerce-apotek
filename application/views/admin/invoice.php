<div class="container-fluid">
    <h4></h4>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Invoice Pemesanan Produk</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>IdInvoice</th>
                            <th>Nama Pemesan</th>
                            <th>Alamat Pengiriman</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Batas Pembayaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($invoice as $invoice) : ?>
                            <tr>
                                <td><?= $invoice->idinvoice ?></td>
                                <td><?= $invoice->nama ?></td>
                                <td><?= $invoice->alamat ?></td>
                                <td><?= $invoice->tglpesan ?></td>
                                <td><?= $invoice->batasbayar ?></td>
                                <td>
                                    <a href="<?= base_url('invoice/detail/' . $invoice->idinvoice) ?>" class="btn btn-primary btn-circle" title="Detail invoice"><i class="far fa-eye"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>