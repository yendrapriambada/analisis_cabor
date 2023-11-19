<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function getAllUser()
    {
        $query = $this->db->get('tb_user');
        return $query->result_array();
    }
}
