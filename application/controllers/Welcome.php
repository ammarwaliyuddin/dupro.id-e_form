<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// $this->load->library('session');
	}
	public function index()
	{
		// $this->simple_login->islogin();
		$this->load->view('dashboard');
	}
}
