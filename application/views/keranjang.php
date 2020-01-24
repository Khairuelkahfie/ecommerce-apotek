<div class="container-fluid">
    <h4>Keranjang Belanja</h4>
    <table class="table table-borderd table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Nama Obat</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub Total</th>
        </tr>

        <?php
        $no = 1;
        foreach ($this->cart->contents() as $items) :
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $items['name'] ?></td>
                <td><?= $items['qty'] ?></td>
                <td align="right">Rp. <?= number_format($items['price'], 0, ',', '.') ?></td>
                <td align="right">Rp. <?= number_format($items['subtotal'], 0, ',', '.')  ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="4" align="center">
                <b>Total</b>
            </td>
            <td align="right"> Rp. <?= number_format($this->cart->total(), 0, ',', '.') ?></td>
        </tr>

    </table>
    <div align="right">
        <a href="<?= base_url('dashboard/hapuskeranjang') ?>">
            <div class="btn btn-sm btn-danger" onclick="confirm('apakah anda yakin akan menghapus ?')"> <i class="fa fa-trash"></i> Hapus Keranjang</div>
        </a>
        <a href="<?= base_url('dashboard/index') ?>">
            <div class="btn btn-sm btn-primary"> <i class="fas fa-cart-plus"></i> Tambah Belanja</div>
        </a>
        <a href="<?= base_url('dashboard/pembayaran') ?>">
            <div class="btn btn-sm btn-success"> <i class="fab fa-amazon-pay"></i> Pembayaran</div>
        </a>
    </div>
</div>