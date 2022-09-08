<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_users extends CI_Model{

    function get_user($email){
          $query = $this->db->from('users_data');
          $query = $this->db->where('email', $email);
          $query = $this->db->get()->result();
          return $query[0];
    }

    function daftar($data)
    {
         $this->db->insert('users',$data);
    }
    function daftar_users_data($data)
    {
         $this->db->insert('users_data',$data);
    }
    function keahlian($data)
    {
         $this->db->insert('keahlian_users',$data);
    }
    function hasUser($user){
          $this->db->select('*');
          $this->db->from('users');
          $this->db->where('email', $user);
          return $this->db->count_all_results();
    }
}