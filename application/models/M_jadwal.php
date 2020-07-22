<?php

class M_jadwal extends CI_Model{

	function tampil_data()
	{
		
		$this->db->select('*');
		$this->db->join('member', 'transaksi_sewa.id_member = member.id_member','left');
		$this->db->join('studio', 'transaksi_sewa.id_studio = studio.id_studio','left');
		$this->db->where('transaksi_sewa.tanggal>=CURRENT_DATE()');
		return $this->db->get('transaksi_sewa');
	}
}
