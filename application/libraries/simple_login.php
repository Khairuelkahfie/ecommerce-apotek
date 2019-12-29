<?php
defined('BASEPATH') or exit('No direct script access allowed');
class simple_login
{
    protected $CI;
    public function __construct()
    {
        $this->CI = &get_instance();
        // load data model user
        $this->CI->load->model('User_model');
    }
    // login    
    public function login($username, $password)
    {
        $cek = $this->CI->User_model->login($username, $password);
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
        } else {
            // kalau tidak ada, maka suruh login lagi
        }
    }
    // cek login
    public function ceklogin()
    {
        # code...
    }
    public function logout()
    {
        # code...
    }
}
