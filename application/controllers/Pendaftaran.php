<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {


	public function index()
	{
		$this->load->view('_partials/header');
		$this->load->view('pendaftaran/index');
		$this->load->view('_partials/footer');
	}
}
