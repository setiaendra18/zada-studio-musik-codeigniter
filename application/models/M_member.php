<?php

class M_member extends CI_Model{

	function tampil_data()
	{
		$this->db->select('*');
		//$this->db->join('member', 'transaksi_sewa.id_member = member.id_member','left');
		//$this->db->join('studio', 'transaksi_sewa.id_studio = studio.id_studio','left');
		return $this->db->get('member');
	}

	public function simpan_data($data,$table)
    {
        $this->db->insert($table,$data);
	}
	
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}
