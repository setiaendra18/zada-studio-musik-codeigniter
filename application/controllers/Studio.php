<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studio extends CI_Controller {


	public function index()
	{
		$this->load->view('_partials/header');
		$this->load->view('studio/index');
		$this->load->view('_partials/footer');
	}
}
