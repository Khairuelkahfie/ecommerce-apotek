<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    // halaman login
    public function index()
    {
        // validasi
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required',
            array('required' => '%s harus disi')
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            array('required' => '%s harus disi')

        );

        if ($this->form_validation->run()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // proses login simple login
            //print_r($password);
            $this->simple_login->login('$username', '$password');
        }
        // end validasi
        $data = array('title' => 'Login');
        $this->load->view('login/list', $data, false);
    }
}
