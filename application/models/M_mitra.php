<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_mitra extends CI_Model
{
    private $_table = "users_data";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
   


}