<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Obat_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    // listing all Obat
    public function listing()
    {
        $this->db->select('obat.*,
                            users.nama,
                            kategori.namaktegori');
        $this->db->from('obat');
        // join
        $this->db->join('users', 'users.iduser = obat.iduser', 'left');
        $this->db->join('kategori', 'kategori.idkategori = obat.idkategori', 'left');
        // akhir join
        $this->db->order_by('idobat', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    // detail Obat
    public function detail($idobat)
    {
        $this->db->select('*');
        $this->db->from('obat');
        $this->db->where('idobat', $idobat);
        $this->db->order_by('idobat', 'asc');
        $query = $this->db->get();
        return $query->row();
    }

    // login Obat
    public function login($obatname, $password)
    {
        $this->db->select('*');
        $this->db->from('obat');
        $this->db->where(array(
            'obatname' => $obatname,
            'password' => SHA1($password)
        ));
        $this->db->order_by('idobat', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    // tambah Obat
    public function tambah($data)
    {
        $this->db->insert('obat', $data);
    }
    // edit Obat
    public function edit($data)
    {
        $this->db->where('idobat', $data['idobat']);
        $this->db->update('obat', $data);
    }
    // hapus Obat
    public function delete($data)
    {
        $this->db->where('idobat', $data['idobat']);
        $this->db->delete('obat', $data);
    }
}
