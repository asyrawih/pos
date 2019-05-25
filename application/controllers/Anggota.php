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
        $data['status'] = $this->session->status ;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbars' , $data);
        $this->load->view('anggota/index',$data);
        $this->load->view('templates/footer');
    }

    public function tambah(){
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $status = $this->input->post('status');
        $data = [
            'nama' => $nama ,
            'alamat' => $alamat ,
            'status' => $status
        ];
        $query =  $this->anggota->tambahAnggota($data);
        if($query == true){
            $data = ['status' => 'berhasil di tambahkan'];
            $this->session->set_userdata($data);
            redirect('anggota/index');
        }
    }
    // Hapus data
    public function hapus($id){
        $data = ['id' => $id] ;
        $hapus =  $this->anggota->hapusData($data, 'anggota');
        $data = ['hapus' => 'berhasil di tambahkan'];
        $this->session->set_userdata($data);
        redirect('anggota/index');
    }
}