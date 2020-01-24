<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Obat_model', 'obat');
    }
    public function index()
    {
        $data['obat'] = $this->Obat_model->tampildata()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/obat', $data);
        $this->load->view('template/footer');
    }
    public function tambah()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/formobat');
        $this->load->view('template/footer');
    }
    public function simpan()
    {
        $namaobat   = $this->input->post('namaobat');
        $keterangan = $this->input->post('keterangan');
        $kategori   = $this->input->post('kategori');
        $harga      = $this->input->post('harga');
        $stock      = $this->input->post('stock');
        $komposisi  = $this->input->post('komposisi');
        $indikasi   = $this->input->post('indikasi');
        //$dosis      = $this->input->post('$dosis');
        $perhatian  = $this->input->post('perhatian');
        $gambar     = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './assets/img/obat';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal diupload";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'namaobat'      => $namaobat,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'harga'         => $harga,
            'stock'         => $stock,
            'komposisi'     => $komposisi,
            'indikasi'      => $indikasi,
            //'dosis'         => $dosis,
            'perhatian'     => $perhatian,
            'gambar'        => $gambar
        );
        // print_r($data);
        $this->obat->tambah($data);
        redirect('admin/obat');
    }
    public function edit($idobat)
    {
        $where = array('idobat' => $idobat);
        $data['obat'] = $this->obat->ubah($where)->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/ubah', $data);
        $this->load->view('template/footer');
    }
    public function simpanedit()
    {
        $idobat         = $this->input->post('idobat');
        $namaobat       = $this->input->post('namaobat');
        $keterangan     = $this->input->post('keterangan');
        $kategori       = $this->input->post('kategori');
        $harga          = $this->input->post('harga');
        $stock          = $this->input->post('stock');
        $komposisi      = $this->input->post('komposisi');
        $indikasi       = $this->input->post('indikasi');
        $perhatian       = $this->input->post('perhatian');
        $data = array(
            'namaobat'  => $namaobat,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'harga'         => $harga,
            'stock'         => $stock,
            'komposisi'         => $komposisi,
            'indikasi'         => $indikasi,
            'perhatian'         => $perhatian
        );
        $where = array(
            'idobat'    => $idobat
        );
        //print_r($data);
        $this->obat->update($where, $data, 'obat');
        redirect('admin/obat');
    }

    public function hapus($id)
    {
        $this->_hapusgambar($id);
        $this->obat->hapus($id);
        redirect("admin/obat");
    }

    private function _hapusgambar($id)
    {
        $obat = $this->obat->ambilid($id);
        if ($obat->gambar != "default.png") {
            $filename = explode(".", $obat->gambar)[0];
            return array_map('unlink', glob(FCPATH . "asset/img/obat/$filename.*"));
        }
    }
}
