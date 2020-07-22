<?php

class M_booking extends CI_Model{

	public $id_user;
    public $tanggal;
    public $id_studio;
 


	function tampil_data()
	{
		$this->db->select('*');
		$this->db->join('transaksi_sewa', 'studio.id_studio = transaksi_sewa.id_studio');
		$this->db->where('transaksi_sewa.tanggal>=CURRENT_DATE()');
		$this->db->where('transaksi_sewa.status_sewa="selesai"');
		$this->db->group_by('transaksi_sewa.id_studio');
		return $this->db->get('studio');
	}

    public function simpan_data($data,$table)
    {
        $this->db->insert($table,$data);
    }
}
