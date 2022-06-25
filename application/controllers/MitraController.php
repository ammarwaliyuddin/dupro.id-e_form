<?php
defined('BASEPATH') or exit('No direct script access allowed');

require FCPATH.'vendor/autoload.php';

class MitraController extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		
		
		$this->simple_login->cek_akses();
		$this->simple_login->cek_login();
		$this->load->model("M_mitra");
		
	}
	public function index()
	{
	
		
		$result = $this->M_mitra->getAll();
		

		$this->load->view('Dashboard/List_mitra',["result"=>$result]);
	}
	
}
