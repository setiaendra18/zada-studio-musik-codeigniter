<?php

class M_booking extends CI_Model{

	public $id_user;
    public $tanggal;
    public $id_studio;
 
	function get_no_invoice()
	{
        $q = $this->db->query("SELECT MAX(RIGHT(id_transaksi,4)) AS kd_max FROM transaksi_sewa");
		$kd = "";
		
		if($q->num_rows()>0)
		{
			foreach($q->result() as $k)
			{
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
		}
		else
		{
            $kd = "0001";
        }
		date_default_timezone_set('Asia/Jakarta');
		
        return date('dmy').$kd;
    }

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
	
	public function simpan_bayar($data,$table)
    {
        $this->db->insert($table,$data);
	}
	
	
}
