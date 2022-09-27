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


    public function getById($idPerjanjian)
    {
        // if(empty($nama_pemilik)){
        return $this->db->get_where($this->_table, ["id_perjanjian" => $idPerjanjian])->row();
        // }else{
        //     return $this->db->get_where($this->_table, ["no_ktp" => $id,"nama_pemilik"=>$nama_pemilik])->row();

        // }
    }
    public function activation($id,$is_checked)
    {
        $_is_checked = ($is_checked=="true")?1:0;
        
        $data = array( 
            'active'	=>  $_is_checked 
        );
        $this->db->where('id', $id);
        return $this->db->update($this->_table, $data);
    }

    public function createIdPerjanjian($no_ktp){
        $query = $this->db->select('*');
        $query = $this->db->from($this->_table);
        $query = $this->db->where('no_ktp',$no_ktp);
        $query = $this->db->order_by('id','desc');
        $query = $this->db->get()->result();
        if (count($query)==0){
            $idPerjanjian = $no_ktp.'001';
        }else{
            // $query[0]->$idPerjanjian;
            $_idPerjanjian = str_split($query[0]->id_perjanjian);
            $lastNumber = $_idPerjanjian[16].$_idPerjanjian[17].$_idPerjanjian[18];
            $_idPerjanjian = $lastNumber + 1;
            $_idPerjanjian = sprintf("%03d",$_idPerjanjian);
            $idPerjanjian = $no_ktp.$_idPerjanjian;
            
        }
        
        return $idPerjanjian;
    }


}