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


	public function update()
	{
		$id_bayar= $this->input->post('id_bayar');
		$status_bayar= $this->input->post('status_bayar');
		$keterangan= $this->input->post('keterangan');
		$nominal_bayar= $this->input->post('nominal_bayar');

		$data = array(
			'status_bayar' => $status_bayar,
			'keterangan' => $keterangan,
			'nominal_bayar' => $nominal_bayar,
			);

		$where = array('id_bayar' => $id_bayar);
		$this->m_pembayaran->update_data($where,$data,'bayar');
		redirect('admin/pembayaran/');
	}

	public function edit($id_bayar)
	{
		
		$data['pembayaran'] = $this->m_pembayaran->edit_data($id_bayar,'bayar')->result();
		$this->load->view('admin/pembayaran/v_pembayaran_edit',$data);
	}
	public function hapus($id_bayar)
	{
        $where = array('id_bayar' => $id_bayar);
		$this->m_pembayaran->hapus_data($where,'bayar');
        redirect('admin/pembayaran');
    }
}
