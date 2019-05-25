<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Barang extends CI_Controller{
    // Constructor
    public function __construct()
    {
        parent::__construct();
        if (!isset($this->session->role_id)){
            redirect('auth');
        }
        $this->load->model('barang_m' , 'barang');
    }
    // Default Controller Data Barang
    public function index(){
         // Kirim Title
         $data['title'] = 'Data Barang' ;
         $data['username'] = $_SESSION['nama'];
        // Load View Tamplate
        $this->load->view('templates/header' , $data);
        $this->load->view('templates/sidebar');
        $this->load->view( 'barang/barang' );
        $this->load->view('templates/footer');
    }

    public function tambah(){

    }

    public function show(){

    }

    public function edit($id){

    }

    public function delete($id){

    }

}