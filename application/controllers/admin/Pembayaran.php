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
		$id_bayar= $this->input->post('id_bayar');
		$status_bayar= $this->input->post('status_bayar');
			
		$data = array(
			'status_bayar' => $status_bayar,
			);
		$where = array('id_bayar' => $id_bayar);
		$this->m_pembayaran->update_data($where,$data,'bayar');
		redirect('admin/pembayaran/');
	}

	public function edit($id_bayar)
	{
		$where = array('id_bayar' => $id_bayar);
		$data['pembayaran'] = $this->m_pembayaran->edit_data($where,'bayar')->result();
		$this->load->view('admin/pembayaran/v_pembayaran_edit',$data);
	}
	public function hapus($id_bayar)
	{
        $where = array('id_bayar' => $id_bayar);
		$this->m_pembayaran->hapus_data($where,'bayar');
        redirect('admin/pembayaran');
    }
}
