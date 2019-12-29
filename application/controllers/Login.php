<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    // halaman login
    public function index()
    {
        $data = array('title' => 'Login');
        $this->load->view('login/list', $data, false);
    }
}
