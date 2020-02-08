<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('pass', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['judul'] = "login";
            $this->load->view('template/header');
            $this->load->view('auth/login', $data);
            $this->load->view('template/footer');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');

        $user = $this->db->get_where('users', ['email' => $email])->row_array();


        if ($user) {
            // cek password 
            if ($user['pass']) {
                $data = [
                    'email' => $user['email'],
                    'idrole' => $user['role']
                ];
                $this->session->set_userdata($data);
                if ($user['role'] == 1) {
                    redirect('admin/admin');
                } else {
                    redirect('Dashboard');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password Anda Salah</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Email Anda Belum di Daftarkan</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        redirect('dashboard');
    }
}
