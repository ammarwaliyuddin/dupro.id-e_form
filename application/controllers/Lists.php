<?php

use PhpParser\Node\Stmt\Break_;

defined('BASEPATH') or exit('No direct script access allowed');

require FCPATH.'vendor/autoload.php';

class Lists extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("Form_model");
	}

	public function index()
	{
		$result = $this->Form_model->getAll();
		$this->load->view('list',["result"=>$result]);
	}

}
