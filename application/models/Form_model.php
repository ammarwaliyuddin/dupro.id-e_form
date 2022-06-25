<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Form_model extends CI_Model
{
    private $_table = "data_perjanjian_kerjasama";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getAllbyMitra($nik)
    {
        return $this->db->get_where($this->_table, ["no_ktp" => $nik])->result();
    }
    
    public function save($data)
    {
        $this->db->insert($this->_table, $data);
    }


    public function getById($id)
    {
        // var_dump($id);
        return $this->db->get_where($this->_table, ["no_ktp" => $id])->row();
    }


}