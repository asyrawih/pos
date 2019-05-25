<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!isset($this->session->role_id)){
            redirect('auth');
        }
        $this->load->model('login_m' , 'login');
    }

    // Default Controller
	public function index()
	{
	    $data['title'] = 'Dashboard' ;
	    $this->load->view('templates/header', $data);
	    $this->load->view('templates/sidebar');
	    $this->load->view('templates/navbars' , $data);
		$this->load->view('dashboard' , $data);
	    $this->load->view('templates/footer');
	}


}
