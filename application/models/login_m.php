<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_m extends  CI_Model {
    public function login_id(){
            return $this->session->userdata('role_id');
    }
    public function cek_login($table , $email , $password ){
        // Select Data user
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($email);
        $this->db->where($password);
        $query = $this->db->get();
        // cek perubahan apakah ada ato tdk
        // pada row di table
        if($query->num_rows() == 0 ){
            return false ;
        }else {
            return $query->result();
        }
    }
}