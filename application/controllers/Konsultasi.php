<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi extends CI_Controller
{
    public function index()
    {
        $data = array(
            'idkonsultasi'   => set_value('idkonsultasi'),
            'pesan'          => set_value('pesan'),
            'gambar'         => set_value('gambar'),
            'waktu'          => set_value('waktu')
        );
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('konsultasi', $data);
        $this->load->view('templates/footer');
    }
    public function simpan()
    {
        $data = array(
            'idkonsultasi'   => $this->input->post('idkonsultasi'),
            'pesan'          => $this->input->post('pesan'),
            'gambar'         => $this->input->post('gambar'),
            'waktu'          => date('Y-m-d')
        );
        // print_r($data);
        $insert = $this->konsultasi->insert($data);
        redirect(site_url('konsultasi'));
    }
}
