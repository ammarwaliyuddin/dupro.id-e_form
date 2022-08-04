<?php
defined('BASEPATH') or exit('No direct script access allowed');

require FCPATH.'vendor/autoload.php';

class DashboardController extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->simple_login->cek_login();
		$this->load->model("M_dashboard");
	}
	public function index()
	{
		$data = [
			'totalPerjanjian' => $this->M_dashboard->totalPerjanjian(),
			'totalMitra' => $this->M_dashboard->totalMitra(),
			'nominalPerjanjian' => $this->M_dashboard->nominalPerjanjian()

		];
		
		$this->load->view('Dashboard/Dashboard',$data);
	}
	
}
