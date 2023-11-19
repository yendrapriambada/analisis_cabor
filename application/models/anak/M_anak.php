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

    public function jumlahData()
    {
        $data = $this->db->count_all('tb_anak');
        return $data;
    }

    public function jumlahDataLakiLaki()
    {
        $this->db->from('tb_anak');
        $this->db->where('jenis_kelamin_anak', '1');
        $data = $this->db->count_all_results();
        return $data;
    }

    public function jumlahDataPerempuan()
    {
        $this->db->from('tb_anak');
        $this->db->where('jenis_kelamin_anak', '2');
        $data = $this->db->count_all_results();
        return $data;
    }

}
