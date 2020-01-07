<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Obat extends CI_Controller
{
    // load model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Obat_model');
        $this->load->model('Kategori_model');
    }
    // data  obat
    public function index()
    {
        $obat = $this->Obat_model->listing();
        $data = array(
            'title' => 'Obat',
            'obat'  => $obat,
            'isi'   => 'admin/obat/list'
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    // tambah obat
    public function tambah()
    {
        // ambil data kategori 
        $kategori = $this->Kategori_model->listing();

        // validasi input
        $valid = $this->form_validation;
        $valid->set_rules(
            'nama',
            'Nama Obat',
            'required',
            array('required' => '%s harus di isi')
        );
        $valid->set_rules(
            'email',
            'Email',
            'required|valid_email',
            array(
                'required' => '%s harus di isi',
                'valid_email' => '%s tidak valid'
            )
        );
        $valid->set_rules(
            'username',
            'Obatname',
            'required|min_length[6]|max_length[32]|is_unique[users.username]',
            array(
                'required'          => '%s harus di isi',
                'min_length'        => '%s minimal 6 karakter',
                'max_length'        => '%s maksimal 32 karakter',
                'is_unique'         => '%s sudah Ada. Buat Obatname Baru.'
            )
        );

        $valid->set_rules(
            'password',
            'Password',
            'required',
            array('required' => '%s harus di isi')
        );

        if ($valid->run() === false) {
            // end validasi 
            $data = array(
                'title' => 'Obat',
                'kategori' => $kategori,
                'isi'   => 'admin/obat/tambah'
            );
            $this->load->view('admin/layout/wrapper', $data, FALSE);
            //masuk database 
        } else {
            $i = $this->input;
            $data = array(
                'nama'      => $i->post('nama'),
                'email'     => $i->post('email'),
                'username'  => $i->post('username'),
                'password'  => SHA1($i->post('password')),
                'role'      => $i->post('role')
            );
            $this->Obat_model->tambah($data);
            $this->session->set_flashdata('sukses', 'Data Telah Ditambah');
            redirect(base_url('admin/obat'), 'refresh');
        }
    }
    // edit data
    public function edit($iduser)
    {
        $obat = $this->Obat_model->detail($iduser);
        // validasi input
        $valid = $this->form_validation;
        $valid->set_rules(
            'nama',
            'Nama Lengkap',
            'required',
            array('required' => '%s harus di isi')
        );
        $valid->set_rules(
            'email',
            'Email',
            'required|valid_email',
            array(
                'required' => '%s harus di isi',
                'valid_email' => '%s tidak valid'
            )
        );
        $valid->set_rules(
            'password',
            'Password',
            'required',
            array('required' => '%s harus di isi')
        );

        if ($valid->run() === false) {
            // end validasi 
            $data = array(
                'title' => 'Obat',
                'obat' => $obat,
                'isi'   => 'admin/obat/edit'
            );
            $this->load->view('admin/layout/wrapper', $data, FALSE);
            //masuk database 
        } else {
            $i = $this->input;
            $data = array(
                'iduser'    => $iduser,
                'nama'      => $i->post('nama'),
                'email'     => $i->post('email'),
                'username'  => $i->post('username'),
                'password'  => SHA1($i->post('password')),
                'role'      => $i->post('role')
            );
            $this->Obat_model->edit($data);
            $this->session->set_flashdata('sukses', 'Data Telah Diedit');
            redirect(base_url('admin/obat'), 'refresh');
        }
    }
    // hapus data
    public function delete($iduser)
    {
        $data = array('iduser' => $iduser);
        $this->Obat_model->delete($data);
        $this->session->set_flashdata('sukses', 'Data Telah Dihapus');
        redirect(base_url('admin/obat'), 'refresh');
    }
}
