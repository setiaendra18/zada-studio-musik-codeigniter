<?php

class M_pembayaran extends CI_Model{

	function tampil_data()
	{
		$this->db->select('*');
		//$this->db->join('member', 'transaksi_sewa.id_member = member.id_member','left');
		//$this->db->join('studio', 'transaksi_sewa.id_studio = studio.id_studio','left');
		return $this->db->get('bayar');
	}

	public function simpan_data($data,$table)
    {
        $this->db->insert($table,$data);
	}
	
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data($id_bayar){		
		$this->db->select('*');
		$this->db->join('transaksi_sewa', 'bayar.id_transaksi = transaksi_sewa.id_transaksi','left');
		$this->db->join('member', 'transaksi_sewa.id_member = member.id_member','left');
		$this->db->join('studio', 'transaksi_sewa.id_studio = studio.id_studio','left');
		$this->db->where('bayar.id_bayar=',$id_bayar);
		return $this->db->get('bayar');
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}
