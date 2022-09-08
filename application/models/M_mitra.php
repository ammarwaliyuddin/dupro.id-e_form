<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_mitra extends CI_Model
{
    private $_table = "users_data";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getById($nik)
    {   
        $query = $this->db->select('ud.*,u.nama');
        $query = $this->db->from('users_data as ud');
        $query = $this->db->join('users as u', 'u.email = ud.email');
        $query = $this->db->where('ud.nik',$nik);
        $query = $this->db->get()->result();
        return $query;

    }
    public function keahlian($email)
    {   
        $this->db->where('email',$email);
        return $this->db->get('keahlian_users')->result();
    }
   


}