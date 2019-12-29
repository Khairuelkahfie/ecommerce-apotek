<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    // load model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }
    // data  user
    public function index()
    {
        $user = $this->User_model->listing();
        $data = array(
            'title' => 'User',
            'user'  => $user,
            'isi'   => 'admin/user/list'
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    // tambah user
    public function tambah()
    {
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
            'username',
            'Username',
            'required|min_length[6]|max_length[32]|is_unique[users.username]',
            array(
                'required'          => '%s harus di isi',
                'min_length'        => '%s minimal 6 karakter',
                'max_length'        => '%s maksimal 32 karakter',
                'is_unique'         => '%s sudah Ada. Buat Username Baru.'
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
                'title' => 'User',
                'isi'   => 'admin/user/tambah'
            );
            $this->load->view('admin/layout/wrapper', $data, FALSE);
            //masuk database 
        } else {
            $i = $this->input;
            $data = array(
                'nama'      => $i->post('nama'),
                'email'     => $i->post('email'),
                'username'  => $i->post('username'),
                'password'  => $i->post('password'),
                'role'      => $i->post('role')
            );
            $this->User_model->tambah($data);
            $this->session->set_flashdata('sukses', 'Data Telah Ditambah');
            redirect(base_url('admin/user'), 'refresh');
        }
    }
    // edit data
    public function edit($iduser)
    {
        $user = $this->User_model->detail($iduser);
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
                'title' => 'User',
                'user' => $user,
                'isi'   => 'admin/user/edit'
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
                'password'  => $i->post('password'),
                'role'      => $i->post('role')
            );
            $this->User_model->edit($data);
            $this->session->set_flashdata('sukses', 'Data Telah Diedit');
            redirect(base_url('admin/user'), 'refresh');
        }
    }
    // hapus data
    public function delete($iduser)
    {
        $data = array('iduser' => $iduser);
        $this->User_model->delete($data);
        $this->session->set_flashdata('sukses', 'Data Telah Dihapus');
        redirect(base_url('admin/user'), 'refresh');
    }
}
