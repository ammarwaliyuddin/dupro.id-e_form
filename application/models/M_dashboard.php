<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model
{

    public function totalPerjanjian()
    {
        $this->db->where('active',1);
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
        $query = $this->db->get('data_perjanjian_kerjasama')->row(); 
        return $query->harga;
    }
    


}