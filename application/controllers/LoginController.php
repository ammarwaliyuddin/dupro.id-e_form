<?php
defined('BASEPATH') or exit('No direct script access allowed');

require FCPATH.'vendor/autoload.php';

class LoginController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// $this->load->model("Form_model");
	}
	public function index()
	{
		$this->load->view('login');
	}
	
}
