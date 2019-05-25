<?php

class Anggota extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('anggota_m' , 'anggota');
    }

    public  function index()
    {
        $data['anggota'] = $this->anggota->getAnggota()->result();
        $data['title'] = 'anggota' ;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbars' , $data);
        $this->load->view('anggota/index');
        $this->load->view('templates/footer');
    }

    public function tambah(){
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $status = $this->input->post('status');
        var_dump($nama , $alamat , $status);
        die ;
    }
}