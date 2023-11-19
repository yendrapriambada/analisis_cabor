<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_cabor extends CI_Model
{
    public function getRecords(){
        $query = $this->db->get('tb_cabor');
        return $query->result();
    }

    public function tampil_by_id($id)
    {
        $this->db->select("*");
        $this->db->where("id_cabor",$id);
        $data = $this->db->get("tb_cabor")->row();
        return $data;
    }

}
