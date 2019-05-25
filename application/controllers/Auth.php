<?php

class Auth extends  CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model( 'login_m' , 'login' );
    }
    public function index()
    {
        if (isset($this->session->role_id)){
            redirect('dashboard');
        }
        $data['title'] = 'Login Page ';
        $this->load->view('templates/header', $data);
        $this->load->view('login');
        $this->load->view('templates/footer');
    }
    public function login(){
        //Tengkap Data nya
        $email = $this->input->post('email');
        $password= $this->input->post('password');
        // cek login
       $cek =  $this->login->cek_login('users' , ['email' => $email] , ['password' => $password]);
       if ($cek != false){
           // looping data nya masukan ke session denga array assosiatif
           foreach ($cek as $user ){
               $data = [
                   'role_id' => $user->role_id ,
                   'nama'    => $user->nama
               ];
              $this->session->set_userdata($data);
              redirect('dashboard');
           }
       } else {
           redirect('auth');
       }
    }
    public function logout()
    {
        $this->session->unset_userdata('role_id');
        redirect('auth');
    }
}