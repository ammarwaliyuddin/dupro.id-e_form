<?php
defined('BASEPATH') or exit('No direct script access allowed');

require FCPATH.'vendor/autoload.php';

class AuthController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("M_users");
	}
	public function index()
	{
		
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		if(!empty($this->input->post())) {
			$this->simple_login->login($email,$password, base_url('dashboard'), base_url('login'));
		}
		// End fungsi login
		$this->load->view('Auth/login');
	}
	public function logout(){
		$this->simple_login->logout();
	}  

	public function register(){
		// $users ='ap';
		if(!empty($this->input->post())) {
			// var_dump($this->input->post('keahlian'));
			// $wkBeg = date('y-m-d', $this->input->post('tanggalLahir'));
			// var_dump($wkBeg);
			// die;
			$nama = $this->input->post('nama');
			$nik = $this->input->post('nik');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			
			$users = [
				'nama' => $nama,
				'email' => $email,
				'password' => $password,
				'level' => 2
			]; 
			$this->M_users->daftar($users);

			//input usersData
			if ($this->db->affected_rows()) {
				
				$email = $this->input->post('email');
				$nik = $this->input->post('nik');
				$telp = $this->input->post('telp');
				$tanggalLahir = $this->input->post('tanggalLahir');
				$kotaAsal = $this->input->post('kotaAsal');
				$domisili = $this->input->post('domisili');
				$pekerjaan = $this->input->post('pekerjaan');
				$memasarkanProperti = $this->input->post('memasarkanProperti');
				// var_dump($tanggalLahir);
				
				$users_data = [
					'email' => $email,
					'nik' => $nik,
					'noTelp' => $telp,
					'tanggalLahir' => $tanggalLahir,
					'kotaAsal' => $kotaAsal,
					'domisili' => $domisili,
					'pekerjaan' => $pekerjaan,
					'memasarkanProperti' => $memasarkanProperti
				]; 
	
				$this->M_users->daftar_users_data($users_data);
			}
			
		}
		
		
		// var_dump($users);
		
		$this->load->view('Auth/register');
	}  
	
	
}
