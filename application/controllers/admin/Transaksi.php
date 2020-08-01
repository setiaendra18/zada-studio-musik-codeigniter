<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_transaksi');
        $this->load->helper('url');
	}

	public function index()
	{
		$data['transaksi'] = $this->m_transaksi->tampil_data()->result();
		$this->load->view('admin/transaksi/v_transaksi',$data);
	}

	public function tambah()
	{
		$this->load->view('admin/transaksi/v_transaksi_tambah');
	}

	public function simpan()
	{
		$nama_transaksi= $this->input->post('nama_transaksi');
		$tarif= $this->input->post('tarif');
		$deskripsi= $this->input->post('deskripsi');
 
		$data = array(
			'nama_transaksi' => $nama_transaksi,
			'tarif' => $tarif,
			'deskripsi' => $deskripsi,
			);
		$this->m_transaksi->simpan_data($data,'transaksi');

		redirect('admin/transaksi/v_transaksi');
	}

	public function update()
	{
		$id_transaksi= $this->input->post('id_transaksi');
		$nama_transaksi= $this->input->post('nama_transaksi');
		$tarif= $this->input->post('tarif');
		$deskripsi= $this->input->post('deskripsi');
		
		
		$data = array(
			'nama_transaksi' => $nama_transaksi,
			'tarif' => $tarif,
			'deskripsi' => $deskripsi,
			);
		$where = array('id_transaksi' => $id_transaksi);
		$this->m_transaksi->update_data($where,$data,'transaksi');
		redirect('admin/transaksi/v_transaksi');
	}

	public function edit($id_transaksi)
	{
		$where = array('id_transaksi' => $id_transaksi);
		$data['transaksi'] = $this->m_transaksi->edit_data($where,'transaksi')->result();
		$this->load->view('admin/transaksi/v_transaksi_edit',$data);
	}
	public function hapus($id_transaksi)
	{
        $where = array('id_transaksi' => $id_transaksi);
		$this->m_transaksi->hapus_data($where,'transaksi');
        redirect('admin/transaksi/v_transaksi');
    }
}
