<?php
defined('BASEPATH') or exit('No direct script access allowed');

require FCPATH.'vendor/autoload.php';

class PerjanjianController extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->simple_login->cek_login();
		$this->load->model("Form_model");
	}
	public function index()
	{
	
		if($this->session->userdata('nik') != '') {
			$nik = $this->session->userdata('nik');
			$result = $this->Form_model->getAllbyMitra($nik);
		}else{
			$result = $this->Form_model->getAll();
		}

		
		$this->load->view('Dashboard/List_perjanjian',["result"=>$result]);
		// $this->load->view('Dashboard/List_perjanjian');
	}
	
}
