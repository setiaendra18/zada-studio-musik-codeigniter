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
				'admin_id'=> $data['id_admin'],
				'admin_nama' => $data['nama_admin'],
				'admin_username' => $username,
				'admin_status' => "login"
				);
				
			$this->session->set_userdata('login_admin',$data_session);
 
			redirect('admin/dashboard',$data_session);
 
		}else{
			$this->session->set_flashdata('gagal', 
            '<div class="alert alert-danger">
            <p>PASSWORD ATAU USERNAME SALAH</p>
            </div>');
			redirect(base_url("admin/"));
		}
	}
 
	public function logout(){
		$this->session->unset_userdata('login_admin');
		redirect(base_url('login'));
	}
}
