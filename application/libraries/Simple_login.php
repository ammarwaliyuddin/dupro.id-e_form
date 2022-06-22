<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
* Simple_login Class
* Class ini digunakan untuk fitur login, proteksi halaman dan logout
* @author  Gun Gun Priatna
* @url    https://recodeku.blogspot.com
*/

class Simple_login {

  // SET SUPER GLOBAL
  var $CI = NULL;

  /**
   * Class constructor
   *
   * @return   void
   */
  public function __construct() {
      $this->CI =& get_instance();
  }

  /*
  * cek username dan password pada table users, jika ada set session berdasar data user dari
  * table users.
  * @param string username dari input form
  * @param string password dari input form
  */
  public function login($nik, $password) {

      //cek nik dan password
      $query = $this->CI->db->get_where('users',array('nik'=>$nik,'password' => $password));
    //   $query = $this->CI->db->get_where('users',array('nik'=>$nik,'password' => md5($password)));

      if($query->num_rows() == 1) {
          //ambil data user berdasar nik
          $row  = $this->CI->db->query('SELECT id_user,nama,level FROM users where nik = "'.$nik.'"');
          $admin     = $row->row();
          $id   = $admin->id_user;
          $nama   = $admin->nama;
          $level   = $admin->level;

          //set session user
          $this->CI->session->set_userdata('nik', $nik);
          $this->CI->session->set_userdata('nama', $nama);
          $this->CI->session->set_userdata('level', $level);
          $this->CI->session->set_userdata('id_login', uniqid(rand()));
          $this->CI->session->set_userdata('id', $id);

          //redirect ke halaman dashboard
          redirect(base_url('dashboard'));
      }else{

          //jika tidak ada, set notifikasi dalam flashdata.
          $this->CI->session->set_flashdata('sukses','NIK atau password anda salah, silakan coba lagi.. ');

          //redirect ke halaman login
          redirect(base_url('login'));
      }
       return false;
   }

  /**
   * Cek session login, jika tidak ada, set notifikasi dalam flashdata, lalu dialihkan ke halaman
   * login
   */
  public function cek_login() {

      //cek session username
      if($this->CI->session->userdata('nik') == '') {

          //set notifikasi
          $this->CI->session->set_flashdata('sukses','Anda belum login');

          //alihkan ke halaman login
          redirect(base_url('login'));
      }
  }

//   public function hasperm(){

//   }

  /**
   * Hapus session, lalu set notifikasi kemudian di alihkan
   * ke halaman login
   */
  public function logout() {
      $this->CI->session->unset_userdata('nik');
      $this->CI->session->unset_userdata('nama');
      $this->CI->session->unset_userdata('level');
      $this->CI->session->unset_userdata('id_login');
      $this->CI->session->unset_userdata('id');
      $this->CI->session->set_flashdata('sukses','Anda berhasil logout');
      redirect(base_url('login'));
  }
}