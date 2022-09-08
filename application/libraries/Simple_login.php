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
  public function login($email, $password) {

      //cek email dan password
      $query = $this->CI->db->get_where('users',array('email'=>$email,'password' => $password));
    //   $query = $this->CI->db->get_where('users',array('nik'=>$nik,'password' => md5($password)));

      if($query->num_rows() == 1) {
          //ambil data user berdasar nik
          $row  = $this->CI->db->query('SELECT id_user,nama,level FROM users where email = "'.$email.'"');
          $admin     = $row->row();
          $id   = $admin->id_user;
          $nama   = $admin->nama;
          $level   = $admin->level;

          if($level != 1){
            $row  = $this->CI->db->query('SELECT nik FROM users_data where email = "'.$email.'"');
            $result     = $row->row();
            $nik   = $result->nik;
            $this->CI->session->set_userdata('nik', $nik);
          }

          //set session user
          $this->CI->session->set_userdata('email', $email);
          $this->CI->session->set_userdata('nama', $nama);
          $this->CI->session->set_userdata('level', $level);
          $this->CI->session->set_userdata('id_login', uniqid(rand()));
          $this->CI->session->set_userdata('id', $id);

          //redirect ke halaman dashboard
          redirect(base_url('dashboard'));
      }else{

          //jika tidak ada, set notifikasi dalam flashdata.
          $this->CI->session->set_flashdata('sukses','Email atau password anda salah');

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
      if($this->CI->session->userdata('email') == '') {

          //set notifikasi
          $this->CI->session->set_flashdata('sukses','Anda belum login');

          //alihkan ke halaman login
          redirect(base_url('login'));
      }
  }
  public function cek_notlogin() {

      //cek session username
      if($this->CI->session->userdata('email') != '') {

          //set notifikasi
          $this->CI->session->set_flashdata('sukses','Anda belum login');

          //alihkan ke halaman login
          redirect(base_url('dashboard'));
      }
  }

  public function cek_akses() {

      //cek session username
      if($this->CI->session->userdata('level') != 1) {

          //alihkan ke halaman login
          redirect(base_url('404'));
      }
  }

//   public function hasperm(){

//   }

  /**
   * Hapus session, lalu set notifikasi kemudian di alihkan
   * ke halaman login
   */
  public function logout() {
    //cek session username
    if($this->CI->session->userdata('nik') != '') {
        $this->CI->session->unset_userdata('nik');
    }
    $this->CI->session->unset_userdata('email');
    $this->CI->session->unset_userdata('nama');
    $this->CI->session->unset_userdata('level');
    $this->CI->session->unset_userdata('id_login');
    $this->CI->session->unset_userdata('id');
    $this->CI->session->set_flashdata('sukses','Anda berhasil Keluar');
    redirect(base_url('login'));
  }
}