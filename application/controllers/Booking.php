<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('m_booking');
        $this->load->helper('url');
    }
    
    public function index()
	{
        
        $data['booking'] = $this->m_booking->tampil_data()->result();

		$this->load->view('template/frontend/header');
		$this->load->view('booking/index',$data);
		$this->load->view('template/frontend/footer');
    }
    public function simpan()
    {
        $id_member = $this->input->post('id_member');
        $tanggal = $this->input->post('tanggal');
        $id_studio = $this->input->post('id_studio');
		$data = array(
			'id_member' => $id_member,
			'tanggal' => $tanggal,
            'id_studio' => $id_studio,
            'status_sewa'=>'booking',
			);
		$this->m_booking->simpan_data($data,'transaksi_sewa');
        redirect('booking');
    }

}