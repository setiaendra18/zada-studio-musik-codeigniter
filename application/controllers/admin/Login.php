<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_loginadmin');
        $this->load->helper('url');
	}


	public function index()
	{
	

		$this->load->view('template/backend/header');
		
		$this->load->view('admin/login');
	
	}
	public function cek_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_loginadmin->cek_login("admin",$where)->num_rows();
		$data = $this->m_loginadmin->cek_login("admin",$where)->row_array();
		
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin/index"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
