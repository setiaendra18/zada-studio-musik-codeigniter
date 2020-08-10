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
		$data['laporan'] = $this->m_laporan->tampil_data()->result();
		$this->load->view('admin/laporan/v_laporan',$data);
	}

	public function filter() {
		
		}

	
}
