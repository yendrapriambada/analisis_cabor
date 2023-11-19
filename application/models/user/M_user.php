<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function getRecords(){
        $query = $this->db->get('tb_user');
        return $query->result();
    }

    public function tambahdata($data){
        $tambah = $this->db->insert('tb_user',$data);
        return $tambah;
    }

    public function hapusdata($where)
    {	
        $hapus = $this->db->delete('tb_user',$where);
        return $hapus;
    }

    function update($id,$data){
        $this->db->where("id",$id);
        $this->db->update("tb_user",$data);
    }

}
