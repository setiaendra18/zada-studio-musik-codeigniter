<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jam extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_jam');
        $this->load->helper('url');
	}

	public function index()
	{
		$data['jam'] = $this->m_jam->tampil_data()->result();
		$this->load->view('admin/jam/v_jam',$data);
	}

	public function tambah()
	{
		$this->load->view('admin/jam/v_jam_tambah');
	}

	public function simpan()
	{
		$jam= $this->input->post('jam');
	
 
		$data = array(
			'jam' => $jam,
						);
		$this->m_jam->simpan_data($data,'jam');

		redirect('admin/jam/v_jam');
	}

	public function update()
	{
		$id_jam= $this->input->post('id_jam');
		$jam= $this->input->post('jam');
		
		
		$data = array(
			'jam' => $jam,
			);
		$where = array('id_jam' => $id_jam);
		$this->m_jam->update_data($where,$data,'jam');
		redirect('admin/jam/v_jam');
	}

	public function edit($jam)
	{
		$where = array('id_jam' => $jam);
		$data['jam'] = $this->m_jam->edit_data($where,'jam')->result();
		$this->load->view('admin/jam/v_jam_edit',$data);
	}
	public function hapus($jam)
	{
        $where = array('id_jam' => $jam);
		$this->m_jam->hapus_data($where,'jam');
        redirect('admin/jam/v_jam');
    }
}
