<?php
defined('BASEPATH') or exit('No direct script access allowed');

require FCPATH.'vendor/autoload.php';

class PerjanjianController extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->simple_login->cek_login();
		// $this->load->model("Form_model");
	}
	public function index()
	{
		$this->load->view('Dashboard/List_perjanjian');
	}
	
}
