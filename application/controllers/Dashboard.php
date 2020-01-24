<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['obat'] = $this->Obat_model->tampildata()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
    public function tambahkeranjang($id)
    {
        $obat = $this->Obat_model->find($id);
        $data = array(
            'id'      => $obat->idobat,
            'qty'     => 1,
            'price'   => $obat->harga,
            'name'    => $obat->namaobat

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
        redirect('dashboard/index');
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
        $this->cart->destroy();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('prosespesanan');
        $this->load->view('templates/footer');
    }
}
