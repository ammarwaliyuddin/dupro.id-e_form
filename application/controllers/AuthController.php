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
				$usia = $this->hitung_umur($tanggalLahir);
				$kotaAsal = $this->input->post('kotaAsal');
				$domisili = $this->input->post('domisili');
				$pekerjaan = $this->input->post('pekerjaan');
				$memasarkanProperti = $this->input->post('memasarkanProperti');
				$handleSurvey = $this->input->post('handleSurvey');
				$closingProperti = $this->input->post('closingProperti');
				$kepercayaanMemasarkan = $this->input->post('kepercayaanMemasarkan');
				$jadwalKerja = $this->input->post('jadwalKerja');
				$sertifikatBNSP = $this->input->post('sertifikatBNSP');
				$textSertifikatBNSP = ($sertifikatBNSP=='ya') ? $this->input->post('textSertifikatBNSP')['ya'] : $this->input->post('textSertifikatBNSP')['tidak'];
				
				$users_data = [
					'email' => $email,
					'nik' => $nik,
					'noTelp' => $telp,
					'tanggalLahir' => $tanggalLahir,
					'usia' => $usia,
					'kotaAsal' => $kotaAsal,
					'domisili' => $domisili,
					'pekerjaan' => $pekerjaan,
					'memasarkanProperti' => $memasarkanProperti,
					'handleSurvey' => $handleSurvey,
					'closingProperti' => $closingProperti,
					'kepercayaanMemasarkan' => $kepercayaanMemasarkan,
					'jadwalKerja' => $jadwalKerja,
					'sertifikatBNSP' => $sertifikatBNSP,
					'textSertifikatBNSP' => $textSertifikatBNSP
				]; 

				if ($this->db->affected_rows()) {
					$keahlian = $this->input->post('keahlian');
					foreach ($keahlian as $item) {
						$keahlian_data = [
							'email' => $email,
							'nama_keahlian' => $item
						];
						$this->M_users->keahlian($keahlian_data);
					}
					$this->M_users->daftar_users_data($users_data);
					$this->session->set_flashdata('sukses','Pendaftaran Berhasil');
					redirect(base_url('login'));
				}
			}
			
		}
		
		$this->load->view('Auth/register');
	}  

	function hitung_umur($tanggal_lahir){
		$birthDate = new DateTime($tanggal_lahir);
		$today = new DateTime("today");
		if ($birthDate > $today) { 
			exit("0 tahun 0 bulan 0 hari");
		}
		$y = $today->diff($birthDate)->y;
		return $y;
	}
	
	
}
