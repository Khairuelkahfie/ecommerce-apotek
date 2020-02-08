<?php
class Auth_model extends CI_Model
{
    public function ceklogin()
    {
        $email = set_value('émail');
        $pass = set_value('pass');

        $result = $this->db->where('email', $email)
            ->where('pass', $pass)
            ->limit(1)
            ->get('users');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
}
