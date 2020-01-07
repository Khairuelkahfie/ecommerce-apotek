<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kategori_model extends CI_Model
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
        $this->db->from('kategori');
        $this->db->order_by('idkategori', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    // detail kategori
    public function detail($idkategori)
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->where('idkategori', $idkategori);
        $this->db->order_by('idkategori', 'asc');
        $query = $this->db->get();
        return $query->row();
    }

    // login kategori
    public function login($kategoriname, $password)
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->where(array(
            'kategoriname' => $kategoriname,
            'password' => SHA1($password)
        ));
        $this->db->order_by('idkategori', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    // tambah kategori
    public function tambah($data)
    {
        $this->db->insert('kategori', $data);
    }
    // edit kategori
    public function edit($data)
    {
        $this->db->where('idkategori', $data['idkategori']);
        $this->db->update('kategori', $data);
    }
    // hapus kategori
    public function delete($data)
    {
        $this->db->where('idkategori', $data['idkategori']);
        $this->db->delete('kategori', $data);
    }
}
