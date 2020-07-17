<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_studio');
        $this->load->helper('url');
	}

	public function index()
	{
		$data['studio'] = $this->m_studio->tampil_data()->result();

		$this->load->view('template/frontend/header');
		$this->load->view('main',$data);
		$this->load->view('template/frontend/footer');
	}
}
