<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_admin');
        $this->load->helper('url');
	}

	public function index()
	{
		$data['admin'] = $this->m_admin->tampil_data()->result();
		$this->load->view('admin/admin/v_admin',$data);
	}

	public function tambah()
	{
		$this->load->view('admin/admin/v_admin_tambah');
	}

	public function simpan()
	{
		$nama_admin= $this->input->post('nama_admin');
		$username= $this->input->post('username');
		$password= $this->input->post('password');
		$email= $this->input->post('email');
		$no_tlpn= $this->input->post('no_tlpn');
		$alamat= $this->input->post('alamat');
		
		$data = array(
			'nama_admin' => $nama_admin,
			'username' => $username,
			'password' => $password,
			'email' => $email,
			'no_tlpn' => $no_tlpn,
			'alamat' => $alamat,
			);
		$this->m_admin->simpan_data($data,'admin');

		redirect('admin/admin');
	}

	public function update()
	{
		$id_admin= $this->input->post('id_admin');
		$nama_admin= $this->input->post('nama_admin');
		$username= $this->input->post('username');
		$password= $this->input->post('password');
		$email= $this->input->post('email');
		$no_tlpn= $this->input->post('no_tlpn');
		$alamat= $this->input->post('alamat');
		
		$data = array(
			'nama_admin' => $nama_admin,
			'username' => $username,
			'password' => $password,
			'email' => $email,
			'no_tlpn' => $no_tlpn,
			'alamat' => $alamat,
			);
		$where = array('id_admin' => $id_admin);
		$this->m_admin->update_data($where,$data,'admin');
		redirect('admin/admin');
	}

	public function edit($id_admin)
	{
		$where = array('id_admin' => $id_admin);
		$data['admin'] = $this->m_admin->edit_data($where,'admin')->result();
		$this->load->view('admin/admin/v_admin_edit',$data);
	}
	public function hapus($id_admin)
	{
        $where = array('id_admin' => $id_admin);
		$this->m_admin->hapus_data($where,'admin');
        redirect('admin/admin/');
    }
}
