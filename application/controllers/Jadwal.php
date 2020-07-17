<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('m_jadwal');
        $this->load->helper('url');
	}
	public function index()
	{
        
        $data['jadwal'] = $this->m_jadwal->tampil_data()->result();

		$this->load->view('_partials/header');
		$this->load->view('jadwal/index',$data);
		$this->load->view('_partials/footer');
	}
}
