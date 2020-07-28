<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('m_booking');
        $this->load->helper(array('form', 'url')); 
    }
    
    public function index()
	{
        
        $data['booking'] = $this->m_booking->tampil_data()->result();
        $data['jam'] = $this->m_booking->tampil_jam()->result();

		$this->load->view('template/frontend/header');
		$this->load->view('booking/index',$data);
		$this->load->view('template/frontend/footer');
    }
    public function simpan()
    {
        $id_member = $this->session->userdata('id_member');
        $tanggal = $this->input->post('tanggal');
        $id_studio = $this->input->post('id_studio');
        $id_jam = $this->input->post('id_jam');
		$data = array(
			'id_member' => $id_member,
			'tanggal' => $tanggal,
            'id_studio' => $id_studio,
            'id_jam'=>$id_jam,
            
			);
        $this->m_booking->simpan_data($data,'transaksi_sewa');
        
        redirect('booking/konfirmasi',$data);
    }

    public function konfirmasi()
    {
       

        $this->session->set_flashdata('msg', 
        '<div class="alert alert-success">
            <h4>SELAMAT BOOKING ANDA BERHASIL</h4>
            <p>Silahkan lakukan konfirmasi pembayaran.</p>
        </div>');

        
      
		$this->load->view('template/frontend/header');
		$this->load->view('booking/konfirmasi',$data);
		$this->load->view('template/frontend/footer');
    }

    public function upload()
    {
       
        $config['upload_path']   = './assets/images/'; 
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|PNG'; 
      


         $this->load->library('upload', $config);
            
         if ( ! $this->upload->do_upload('bukti_bayar'))
         {
            $error = $this->upload->display_errors();
            
            $this->load->view('template/frontend/header'); 
            $this->load->view('booking/konfirmasi', compact('error'));
            $this->load->view('template/frontend/footer'); 
         }
            
         else { 
            $upload_data = $this->upload->data(); 
            $this->session->set_flashdata('upload_sukses', 
            '<div class="alert alert-success">
            <p>UPLOAD BUKTI TRANSAKSI SUKSES</p>
            </div>');
            $this->load->view('template/frontend/header');
            $this->load->view('booking/konfirmasi', compact('upload_data')); 
            $this->load->view('template/frontend/footer');
         } 
      
       
    }
    

}