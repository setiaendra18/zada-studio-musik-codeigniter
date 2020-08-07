<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studio extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_studio');
		$this->load->helper(array('form', 'url')); 
	}

	public function index()
	{
		$data['studio'] = $this->m_studio->tampil_data()->result();
		$this->load->view('admin/studio/v_studio',$data);
	}

	public function tambah()
	{
		$this->load->view('admin/studio/v_studio_tambah');
	}

	public function simpan()
	{
		$config['upload_path']   = './assets/images/studio'; 
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|PNG'; 
		$config['overwrite'] = TRUE;
		
        $this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar'))
        {
            $error = $this->upload->display_errors();
            $this->load->view('admin/studio/v_studio_tambah', compact('error'));
		}
		else 
		{
			$nama_studio= $this->input->post('nama_studio');
			$tarif= $this->input->post('tarif');
			$deskripsi= $this->input->post('deskripsi');
	
			$data = array(
				'nama_studio' => $nama_studio,
				'tarif' => $tarif,
				'deskripsi' => $deskripsi,
				'gambar'=> $this->upload->data('file_name'),
				);

			$upload_data = $this->upload->data(); 
			$this->m_studio->simpan_data($data,'studio');

			redirect('admin/studio/v_studio');
		}
		
	}

	public function update()
	{
		$id_studio= $this->input->post('id_studio');
		$nama_studio= $this->input->post('nama_studio');
		$tarif= $this->input->post('tarif');
		$deskripsi= $this->input->post('deskripsi');
		
		 
		$data = array(
			'nama_studio' => $nama_studio,
			'tarif' => $tarif,
			'deskripsi' => $deskripsi,
			);
		$where = array('id_studio' => $id_studio);
		$this->m_studio->update_data($where,$data,'studio');
		redirect('admin/studio/v_studio');
	}

	public function edit($id_studio)
	{
		$where = array('id_studio' => $id_studio);
		$data['studio'] = $this->m_studio->edit_data($where,'studio')->result();
		$this->load->view('admin/studio/v_studio_edit',$data);
	}
	public function hapus($id_studio)
	{
        $where = array('id_studio' => $id_studio);
		$this->m_studio->hapus_data($where,'studio');
        redirect('admin/studio/v_studio');
    }
}
