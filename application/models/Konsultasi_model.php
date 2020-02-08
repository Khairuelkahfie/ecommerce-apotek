<?php
class Invoice_model extends CI_Model
{
    public $tabel = 'invoice';
    public $id = 'idinvoice';
    public $order = 'ASC';

    public function insert($data)
    {

        $this->db->insert($this->tabel, $data);
    }
}
