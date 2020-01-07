<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Simple_login
{
    protected $CI;
    public function __construct()
    {
        $this->CI = &get_instance();
        // load data model user
        $this->CI->load->model('user_model');
    }
    // login    
    public function login($username, $password)
    {
        $cek = $this->CI->user_model->login($username, $password);
        // jika ada data usernya, maka createe session login
        if ($cek) {
            $iduser = $cek->iduser;
            $nama   = $cek->nama;
            $role   = $cek->role;
            // create session 
            $this->CI->session->set_userdata('iduser', $iduser);
            $this->CI->session->set_userdata('nama', $nama);
            $this->CI->session->set_userdata('username', $username);
            $this->CI->session->set_userdata('role', $role);
            // redirect ke halaman admin yang di proteksi
            redirect(base_url('admin/dashbor'), 'refresh');
        } else {
            // kalau tidak ada atau username dan password salah, maka suruh login lagi
            $this->CI->session->set_flashdata('warning', 'username atau password salah');
            redirect(base_url('login'), 'refresh');
        }
    }
    // cek login
    public function ceklogin()
    {
        // memeriksa apakah session  sudah ada atau belum, jika belum alihkan ke halaman  login
        if ($this->CI->session->userdata('username') == "") {
            $this->CI->session->set_flashdata('warning', 'anda belum login');
            redirect(base_url('login'), 'refresh');
        }
    }
    public function logout()
    {
        // membuang semua session yang telah di set pada saat loogin
        $this->CI->session->unset_userdata('iduser');
        $this->CI->session->unset_userdata('nama');
        $this->CI->session->unset_userdata('username');
        $this->CI->session->unset_userdata('role');
        // setelah session di buang, maka redirect ke login
        $this->CI->session->set_flashdata('sukses', 'anda berhasil logout');
        redirect(base_url('login'), 'refresh');
    }
}
