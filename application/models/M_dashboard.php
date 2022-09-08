<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model
{

    public function totalPerjanjian()
    {
        $this->db->where('active',1);
        $this->db->where('deleted_at',null);
        if($this->session->userdata('level')==2){
            $this->db->where('no_ktp',$this->session->userdata('nik'));
        }
        return $this->db->count_all_results('data_perjanjian_kerjasama');
    }
    public function totalMitra()
    {
        // $this->db->where('level','2');
        return $this->db->count_all_results('users_data');
    }
    public function nominalPerjanjian()
    {
        $this->db->select_sum('harga');

        if($this->session->userdata('level')==2){
            
            $this->db->where('no_ktp',$this->session->userdata('nik'));
        }
        
        $this->db->where('active',1);
        $this->db->where('deleted_at',null);
        $query = $this->db->get('data_perjanjian_kerjasama')->row(); 
        return $query->harga;
    }
    


}