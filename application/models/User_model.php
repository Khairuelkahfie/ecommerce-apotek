<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    // listing all User
    public function listing()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->order_by('iduser', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    // detail user
    public function detail($iduser)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('iduser', $iduser);
        $this->db->order_by('iduser', 'asc');
        $query = $this->db->get();
        return $query->row();
    }

    // login user
    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array(
            'username' => $username,
            'password' => sha1($password)
        ));
        $this->db->order_by('iduser', 'asc');
        $query = $this->db->get();
        return $query->row();
    }

    // tambah user
    public function tambah($data)
    {
        $this->db->insert('users', $data);
    }
    // edit user
    public function edit($data)
    {
        $this->db->where('iduser', $data['iduser']);
        $this->db->update('users', $data);
    }
    // hapus user
    public function delete($data)
    {
        $this->db->where('iduser', $data['iduser']);
        $this->db->delete('users', $data);
    }
}
