<?php

class M_booking extends CI_Model{

	public $id_user;
    public $tanggal;
    public $id_studio;
 


	function tampil_data()
	{
		$this->db->select('*');
		return $this->db->get('studio');
	}


	function tampil_jam()
	{
		$this->db->select('*');
		return $this->db->get('jam');
	}

	function tampil_konfirmasi()
	{
		$this->db->select('*');
		$this->db->join('member', 'transaksi_sewa.id_member = member.id_member','left');
		$this->db->join('studio', 'transaksi_sewa.id_studio = studio.id_studio','left');
		$this->db->join('jam', 'transaksi_sewa.id_jam = jam.id_jam','left');
		$this->db->where('transaksi_sewa.id_transaksi=49');
		return $this->db->get('transaksi_sewa');
	}

    public function simpan_data($data,$table)
    {
        $this->db->insert($table,$data);
    }
}
