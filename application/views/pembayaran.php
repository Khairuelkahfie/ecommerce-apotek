<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-6">
            <div class="btn btn-sm btn-success">
                <?php $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h5>Total Belanja Anda adalah : Rp" . number_format($grand_total, 0, ',', '.');

                ?>
            </div>
            <br> <br>
            <h3>Input Alamat Pengiriman dan Pembayran</h3>

            <form action="<?= base_url('dashboard/prosespesanan') ?>" method="post" class="user">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control  form-control-user">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control  form-control-user">
                </div>
                <div class="form-group">
                    <label for="notelp">NO. Telp </label>
                    <input type="text" name="notelp" placeholder="NO. Telp Anda" class="form-control  form-control-user">
                </div>
                <div class="form-group">
                    <label for="">Jasa Pengiriman</label>
                    <select name="" id="" class="form-control">
                        <option value="">Jek Kita</option>
                        <option value=""> Gesit</option>
                    </select>
                </div>
                <div class=" form-group">
                    <label for="">Jasa Pembayaran</label>
                    <select name="" id="" class="form-control">
                        <option value="">BCA - XXXXXXXXX</option>
                        <option value="">BNI - XXXXXXXXX</option>
                        <option value="">BRI - XXXXXXXXX</option>
                    </select>
                </div>
                <BUtton type=" submit" class="btn btn-sm btn-primary">Pesan</BUtton>
            </form>
        <?php
                } else {
                    echo "Keranjang Belanja Anda Masih Kosong";
                }

        ?>
        </div>

        <div class="col-md-2">

        </div>
    </div>
</div>