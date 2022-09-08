<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Form_model extends CI_Model
{
    private $_table = "data_perjanjian_kerjasama";

    public function getAll()
    {
        return $this->db->get_where($this->_table, ["deleted_at" => null])->result();
    }
    public function getAllbyMitra($nik)
    {
        return $this->db->get_where($this->_table, ["active" => 1,"deleted_at" => null,"no_ktp" => $nik])->result();
    }
    
    public function save($data)
    {
        $this->db->insert($this->_table, $data);
    }


    public function getById($id,$nama_pemilik=null)
    {
        if(empty($nama_pemilik)){
            return $this->db->get_where($this->_table, ["no_ktp" => $id])->row();
        }else{
            return $this->db->get_where($this->_table, ["no_ktp" => $id,"nama_pemilik"=>$nama_pemilik])->row();

        }
    }


}