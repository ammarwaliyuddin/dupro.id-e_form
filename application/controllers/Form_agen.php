<?php
defined('BASEPATH') or exit('No direct script access allowed');

require FCPATH.'vendor/autoload.php';

class Form_agen extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// $this->load->model("Form_model");
	}
	public function index()
	{
		$this->load->view('formulir_agen');
	}
	public function add_seller()
	{
		$this->load->view('Dashboard/add_seller');
	}
	public function add_perjanjian()
	{
		$this->load->view('Dashboard/add_perjanjian');
	}
	
}
