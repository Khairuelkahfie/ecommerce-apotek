<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
    // halaman utama homepage
    public function index()
    {
        $data = array(
            'title' => 'Alodie Farma',
            'isi'   => 'home/list'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
