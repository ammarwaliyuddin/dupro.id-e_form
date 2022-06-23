<?php
defined('BASEPATH') or exit('No direct script access allowed');

require FCPATH.'vendor/autoload.php';

class AuthController extends CI_Controller
{
	// function __construct()
	// {
	// 	parent::__construct();
	// 	// $this->load->model("Form_model");
	// }
	public function index()
	{
		
		$nik = $this->input->post('nik');
		$password = $this->input->post('password');
		
		if(!empty($this->input->post())) {
			$this->simple_login->login($nik,$password, base_url('dashboard'), base_url('login'));
		}
		// End fungsi login
		$this->load->view('Auth/login');
	}
	public function logout(){
		$this->simple_login->logout();
	}  

	public function register(){
		$this->load->view('Auth/register');
	}  
	
	
}
