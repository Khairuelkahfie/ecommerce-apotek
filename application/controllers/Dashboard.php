<?php


class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['obat'] = $this->Obat_model->tampildata()->result();
        $this->load->view('template/header');
        $this->load->view('halamanutama', $data);
        $this->load->view('template/footer');
    }

    public function tambahkeranjang($id)
    {
        $obat = $this->Obat_model->find($id);
        $data = array(
            'id'      => $obat->idobat,
            'qty'     => 1,
            'price'   => $obat->harga,
            'name'    => $obat->namaobat,
            'tgl'    => $obat->tglpesan
        );
        $this->cart->insert($data);
        redirect('dashboard');
    }
    public function detailkeranjang()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }
    public function hapuskeranjang()
    {
        $this->cart->destroy();
        redirect('dashboard/detailkeranjang');
    }
    public function pembayaran()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }
    public function prosespesanan()
    {
        $proses = $this->Invoice_model->index();
        if ($proses) {
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('prosespesanan');
            $this->load->view('templates/footer');
        } else {
            echo "Maaf Pesanan Anda Gagal Di proses";
        }
    }
    public function detail($idobat)
    {
        $data['obat'] = $this->Obat_model->detailobat($idobat);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detailobat', $data);
        $this->load->view('templates/footer');
    }
}
