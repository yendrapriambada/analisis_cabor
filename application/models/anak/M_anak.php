<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_anak extends CI_Model
{
    public function getRecords(){
        $query = $this->db->get('tb_anak');
        return $query->result();
    }

    public function tambahdata($data){
        $tambah = $this->db->insert('tb_anak',$data);
        return $tambah;
    }

    public function hapusdata($where)
    {	
        $hapus = $this->db->delete('tb_anak',$where);
        return $hapus;
    }

    function update($id,$data){
        $this->db->where("id_anak",$id);
        $this->db->update("tb_anak",$data);
    }

    public function tampil_by_id($id)
    {
        $this->db->select("*");
        $this->db->where("id_anak",$id);
        $data = $this->db->get("tb_anak")->row();
        return $data;
    }

}
