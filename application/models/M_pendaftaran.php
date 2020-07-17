<?php

class M_pendaftaran extends CI_Model{

    public $nama_member;
    public $email;
    public $no_tlpn;
    public $alamat;
    public $username;
    public $password;

    public function simpan_data($data,$table)
    {
        $this->db->insert($table,$data);
    }
}
