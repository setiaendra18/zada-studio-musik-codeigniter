<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_member');
        $this->load->helper('url');
	}

	public function index()
	{
		$data['session'] = $this->session->userdata();
		$data['member'] = $this->m_member->tampil_data()->result();
		$this->load->view('admin/member/v_member',$data);
	}

	public function tambah()
	{
		$data['session'] = $this->session->userdata();
		$this->load->view('admin/member/v_member_tambah',$data);
	}

	public function simpan()
	{
		$nama_member= $this->input->post('nama_member');
		$tarif= $this->input->post('tarif');
		$deskripsi= $this->input->post('deskripsi');
 
		$data = array(
			'nama_member' => $nama_member,
			'tarif' => $tarif,
			'deskripsi' => $deskripsi,
			);
		$this->m_member->simpan_data($data,'member');

		redirect('admin/member/v_member');
	}

	public function update()
	{
		$id_member= $this->input->post('id_member');
		$nama_member= $this->input->post('nama_member');
		$username= $this->input->post('username');
		$password= $this->input->post('password');
		$email= $this->input->post('email');
		$no_tlpn= $this->input->post('no_tlpn');
		$alamat= $this->input->post('alamat');
		
		$data = array(
			'nama_member' => $nama_member,
			'username' => $username,
			'password' => $password,
			'email' => $email,
			'no_tlpn' => $no_tlpn,
			'alamat' => $alamat,
			);
		$where = array('id_member' => $id_member);
		$this->m_member->update_data($where,$data,'member');
		redirect('admin/member/v_member');
	}

	public function edit($id_member)
	{
		$data['session'] = $this->session->userdata();
		$where = array('id_member' => $id_member);
		$data['member'] = $this->m_member->edit_data($where,'member')->result();
		$this->load->view('admin/member/v_member_edit',$data);
	}
	public function hapus($id_member)
	{
        $where = array('id_member' => $id_member);
		$this->m_member->hapus_data($where,'member');
        redirect('admin/member/v_member');
    }
}
