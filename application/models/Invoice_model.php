<?php
class Invoice_model extends CI_Model
{
    public $tabel = 'invoice';
    public $id = 'idinvoice';
    public $order = 'ASC';

    public function index()
    {
        date_default_timezone_get('Asia/Jakarta');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');

        $invoice = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'tglpesan'  => date('Y-m-d H:i:s'),
            'batasbayar'    => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
        );
        //print_r($invoice);
        $this->db->insert($this->tabel, $invoice);
        $idinvoice = $this->db->insert_id();

        foreach ($this->cart->contents() as $item) {
            $data = array(
                'idinvoice' => $idinvoice,
                'idobat'    => $item['id'],
                'namaobat'  => $item['name'],
                'jumlah'    => $item['qty'],
                'harga'     => $item['price']
            );
            $this->db->insert('transaksi', $data);
        }
        return TRUE;
    }

    public function tampil()
    {
        $result = $this->db->get($this->tabel);
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    public function ambilidinvoice($idinvoice)
    {
        $result = $this->db->where('idinvoice', $idinvoice)->limit(1)->get($this->tabel);
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }
    public function ambilidpesanan($idinvoice)
    {
        $result = $this->db->where($this->id, $idinvoice)->get('transaksi');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
