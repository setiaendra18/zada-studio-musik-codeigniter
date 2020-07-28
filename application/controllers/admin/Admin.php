<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_studio');
        $this->load->helper('url');
	}

	public function index()
	{
	

		$this->load->view('template/backend/header');
		$this->load->view('template/backend/sidebar');
		$this->load->view('template/backend/index');
		$this->load->view('template/backend/footer');
	}
}
