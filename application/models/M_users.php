<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_users extends CI_Model{

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
}