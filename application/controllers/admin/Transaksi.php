<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_transaksi');
        $this->load->helper('url');
	}

	public function index()
	{
		$data['session'] = $this->session->userdata();
		$data['transaksi'] = $this->m_transaksi->tampil_data()->result();
		$this->load->view('admin/transaksi/v_transaksi',$data);
	}

	public function update()
	{
		$id_transaksi= $this->input->post('id_transaksi');
		$tanggal= $this->input->post('tanggal');
		$id_member= $this->input->post('id_member');
		$id_jam= $this->input->post('id_jam');
		$status_sewa= $this->input->post('status_sewa');
		
		$data = array(
			'status_sewa' => $status_sewa,
			);
		$where = array('id_transaksi' => $id_transaksi);
		$this->m_transaksi->update_data($where,$data,'transaksi_sewa');
		redirect('admin/transaksi/');
	}

	public function edit($id_transaksi)
	{
	
		$data['session'] = $this->session->userdata();
		$data['transaksi'] = $this->m_transaksi->edit_data($id_transaksi,'transaksi_sewa')->result();
		$this->load->view('admin/transaksi/v_transaksi_edit',$data);
	}
	public function hapus($id_transaksi)
	{
        $where = array('id_transaksi' => $id_transaksi);
		$this->m_transaksi->hapus_data($where,'transaksi_sewa');
        redirect('admin/transaksi');
    }
}
