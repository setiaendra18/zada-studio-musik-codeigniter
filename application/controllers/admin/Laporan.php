<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_laporan');
        $this->load->helper('url');
	}

	public function index()
	{
		$data['session'] = $this->session->userdata();
		$data['laporan'] = $this->m_laporan->tampil_data()->result();
		$this->load->view('admin/laporan/v_laporan',$data);
	}

	public function filter() 
	{
		$tgl_awal 	= $this->input->post('tgl_awal', true);
		$tgl_akhir 	= $this->input->post('tgl_akhir', true);
		$post = [
			'date1' => $tgl_awal,
			'date2' => $tgl_akhir
		];
		$data['laporan'] = $this->m_laporan->filter_tanggal($post)->result();
		// print('<pre>');print_r($data);exit();
		$this->load->view('admin/laporan/v_laporan',$data);
	}

	
}
