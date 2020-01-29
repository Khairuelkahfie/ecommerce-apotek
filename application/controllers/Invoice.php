<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
{
    public function index()
    {
        $data['invoice'] = $this->Invoice_model->tampil();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/invoice', $data);
        $this->load->view('template/footer');
    }
    public function detail($idinvoice)
    {
        $data['invoice'] = $this->Invoice_model->ambilidinvoice($idinvoice);
        $data['pesanan'] = $this->Invoice_model->ambilidpesanan($idinvoice);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/detailinvoice', $data);
        $this->load->view('template/footer');
    }
}
