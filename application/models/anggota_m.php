<?php

class anggota_m extends CI_Model
{
    public function getAnggota(){
        // Ambil Semua Data Anggota
        $dataAnggota = $this->db->get('anggota');
        return $dataAnggota ;
    }
    public function getbyIDAnggota(){

    }

    public function tambahAnggota($data){
        $this->db->insert('anggota',$data);
        return true  ;
    }

    public function hapusData($where , $table){
        $this->db->where($where);
        $this->db->delete($table);

    }


}