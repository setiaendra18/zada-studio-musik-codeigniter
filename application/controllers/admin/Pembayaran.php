<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_pembayaran');
        $this->load->helper('url');
	}

	public function index()
	{
		$data['pembayaran'] = $this->m_pembayaran->tampil_data()->result();
		$this->load->view('admin/pembayaran/v_pembayaran',$data);
	}

	public function tambah()
	{
		$this->load->view('admin/pembayaran/v_pembayaran_tambah');
	}

	public function simpan()
	{
		$nama_pembayaran= $this->input->post('nama_pembayaran');
		$tarif= $this->input->post('tarif');
		$deskripsi= $this->input->post('deskripsi');
 
		$data = array(
			'nama_pembayaran' => $nama_pembayaran,
			'tarif' => $tarif,
			'deskripsi' => $deskripsi,
			);
		$this->m_pembayaran->simpan_data($data,'pembayaran');

		redirect('admin/pembayaran/v_pembayaran');
	}

	public function update()
	{
		$id_pembayaran= $this->input->post('id_pembayaran');
		$nama_pembayaran= $this->input->post('nama_pembayaran');
		$tarif= $this->input->post('tarif');
		$deskripsi= $this->input->post('deskripsi');
		
		
		$data = array(
			'nama_pembayaran' => $nama_pembayaran,
			'tarif' => $tarif,
			'deskripsi' => $deskripsi,
			);
		$where = array('id_pembayaran' => $id_pembayaran);
		$this->m_pembayaran->update_data($where,$data,'pembayaran');
		redirect('admin/pembayaran/v_pembayaran');
	}

	public function edit($id_pembayaran)
	{
		$where = array('id_pembayaran' => $id_pembayaran);
		$data['pembayaran'] = $this->m_pembayaran->edit_data($where,'pembayaran_sewa')->result();
		$this->load->view('admin/pembayaran/v_pembayaran_edit',$data);
	}
	public function hapus($id_pembayaran)
	{
        $where = array('id_pembayaran' => $id_pembayaran);
		$this->m_pembayaran->hapus_data($where,'pembayaran_sewa');
        redirect('admin/pembayaran');
    }
}
