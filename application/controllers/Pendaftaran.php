<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {


	function __construct(){
		parent::__construct();		
		$this->load->model('m_pendaftaran');
        $this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('template/frontend/header');
		$this->load->view('pendaftaran/index');
		$this->load->view('template/frontend/footer');
	}

	public function simpan()
    {
		$nama_member = $this->input->post('nama_member');
		$username = $this->input->post('username');
		$password= $this->input->post('password');
		$email= $this->input->post('email');
		$alamat= $this->input->post('alamat');
		$no_tlpn= $this->input->post('no_tlpn');
 
		$data = array(
			'nama_member' => $nama_member,
			'username' => $username,
			'password' => $password,
			'email' => $email,
			'alamat' => $alamat,
			'no_tlpn' => $no_tlpn,
			);
		$this->m_pendaftaran->simpan_data($data,'member');
		
		redirect('pendaftaran');
    }
}
