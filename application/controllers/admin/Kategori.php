<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kategori extends CI_Controller
{
    // load model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model');
    }
    // data  kategori
    public function index()
    {
        $kategori = $this->Kategori_model->listing();
        $data = array(
            'title' => 'Kategori',
            'kategori'  => $kategori,
            'isi'   => 'admin/kategori/list'
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    // tambah kategori
    public function tambah()
    {
        // validasi input
        $valid = $this->form_validation;
        $valid->set_rules(
            'namaktegori',
            'Nama Kategori',
            'required|is_unique[kategori.namaktegori]',
            array(
                'required' => '%s harus di isi',
                'is_unique' => '%s sudah ada. Buat Kategori Baru!'
            ),
            'urutan',
            'Urutan',
            'required',
            array(
                'required' => '%s harus di isi'
            )
        );
        if ($valid->run() === false) {
            // end validasi 
            $data = array(
                'title' => 'Kategori',
                'isi'   => 'admin/kategori/tambah'
            );
            $this->load->view('admin/layout/wrapper', $data, FALSE);
            //masuk database 
        } else {
            $i = $this->input;
            $data = array(
                'namaktegori'   => $i->post('namaktegori'),
                'urutan'        => $i->post('urutan')
            );
            $this->Kategori_model->tambah($data);
            $this->session->set_flashdata('sukses', 'Data Telah Ditambah');
            redirect(base_url('admin/kategori'), 'refresh');
        }
    }
    // edit data
    public function edit($idkategori)
    {
        $kategori = $this->Kategori_model->detail($idkategori);
        // validasi input
        $valid = $this->form_validation;
        $valid->set_rules(
            'namaktegori',
            'Nama Kategori',
            'required',
            array('required' => '%s harus di isi'),
            'urutan',
            'Urutan',
            'required',
            array('required' => '%s harus di isi')
        );
        if ($valid->run() === false) {
            // end validasi 
            $data = array(
                'title' => 'Kategori',
                'kategori' => $kategori,
                'isi'   => 'admin/kategori/edit'
            );
            $this->load->view('admin/layout/wrapper', $data, FALSE);
            //masuk database 
        } else {
            $i = $this->input;
            $data = array(
                'idkategori'    => $idkategori,
                'namaktegori'   => $i->post('namaktegori'),
                'urutan'        => $i->post('urutan')
            );
            $this->Kategori_model->edit($data);
            $this->session->set_flashdata('sukses', 'Data Telah Diedit');
            redirect(base_url('admin/kategori'), 'refresh');
        }
    }
    // hapus data
    public function delete($idkategori)
    {
        $data = array('idkategori' => $idkategori);
        $this->Kategori_model->delete($data);
        $this->session->set_flashdata('sukses', 'Data Telah Dihapus');
        redirect(base_url('admin/kategori'), 'refresh');
    }
}
