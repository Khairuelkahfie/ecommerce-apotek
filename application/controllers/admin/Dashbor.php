<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashbor extends CI_Controller
{
    // halaman  utama dashboard
    public function index()
    {
        $data = array(
            'title' => 'Admin',
            'isi'   => 'admin/dasbor/list'
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}
