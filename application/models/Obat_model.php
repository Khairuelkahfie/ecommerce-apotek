<?php
class Obat_model extends CI_Model
{
    public $tabel = 'obat';
    public $id = 'idobat';
    public $order = 'ASC';
    public function tampildata()
    {
        return $this->db->get('obat');
    }
    public function tambah($data)
    {
        $this->db->insert($this->tabel, $data);
    }
    public function ubah($where)
    {
        return $this->db->get_where($this->tabel, $where);
    }
    public function update($where, $data, $tabel)
    {
        $this->db->where($where);
        $this->db->update($tabel, $data);
    }

    public function hapus($idobat)
    {
        $this->db->where($this->id, $idobat);
        $this->db->delete($this->tabel);
    }
    public function ambilid($id)
    {
        return $this->db->get_where($this->tabel, ["idobat" => $id])->row();
    }

    public function find($id)
    {
        $result = $this->db->where('idobat', $id)
            ->limit(1)
            ->get('obat');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
}
