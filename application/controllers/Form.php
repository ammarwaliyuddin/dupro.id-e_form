<?php

use PhpParser\Node\Stmt\Break_;

defined('BASEPATH') or exit('No direct script access allowed');

require FCPATH.'vendor/autoload.php';

class Form extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("Form_model");
		$this->load->model("M_users");
	}
	public function index()
	{
		$this->load->view('formulir');
	}
	public function cetak($cetak,$data,$nama_pemilik=null)
	{
		
		date_default_timezone_set('Asia/Jakarta');
        $tanggal = date('Y-m-d');
		$tgl = $this->tanggal_indo($tanggal, true);
		if(empty($nama_pemilik)){
			$result = $this->Form_model->getById($data);
		}else{

			$result = $this->Form_model->getById($data,urldecode($nama_pemilik));
		}
		
		switch($cetak){
			case '1':
				$narasi_pertama = 'Dengan ini sepakat untuk melakukan perjanjian kerjasama jasa pemasaran properti
				milik Pihak Pertama kepada :';
				$narasi_kedua = 'Dengan Perjanjian, jika properti tersebut terjual oleh Pihak Kedua, maka pihak pertama
				akan memberikan komisi kepada pihak kedua dengan ketentuan :';
				$narasi_ketiga = 'jika terjual dari harga final penjualan.';
				break;
			case '2':
				$narasi_pertama = 'Dengan ini sepakat untuk melakukan perjanjian kerjasama jasa pemasaran properti
				milik pihak lainnya yang dinyatakan oleh Pihak Pertama bahwa pemasaran properti
				tersebut telah diwakili kepada Pihak Pertama untuk dipasarkan juga oleh Pihak Kedua.';
				$narasi_kedua = 'Dengan Perjanjian, jika properti tersebut terjual oleh Pihak Kedua, maka pihak pertama
				akan menjamin dan berbagi komisi kepada pihak kedua dengan ketentuan :';
				$narasi_ketiga = 'jika terjual dari harga final penjualan';
				break;
			case '3':
				$narasi_pertama = 'Dengan ini sepakat untuk melakukan perjanjian kerjasama jasa pemasaran properti
				milik '.ucwords($result->nama_pemilik).' yang dinyatakan oleh Pihak Pertama bahwa pemasaran properti
				tersebut telah diwakili kepada Pihak Pertama untuk dipasarkan juga oleh Pihak Kedua.';
				$narasi_kedua = 'Dengan Perjanjian, jika properti tersebut terjual oleh Pihak Kedua, maka pihak
				pertama akan menjamin dan berbagi komisi kepada pihak kedua dengan ketentuan :';
				$narasi_ketiga = 'dari harga deal antara pembeli dan penjual dengan biaya administrasi proses jual beli ditanggung 50:50 oleh Pembeli dan Penjual.';
				break;
			default :
				$narasi_pertama = '';
				$narasi_kedua = '';
				$narasi_ketiga = '';
		}

		
		$harga = number_format($result->harga,2,",",".");
		$result =[
			'result'=>$result,
			'harga'=>$harga,
			'tgl'=>$tgl,
			'narasi_pertama'=>$narasi_pertama,	
			'narasi_kedua'=>$narasi_kedua,
			'narasi_ketiga'=>$narasi_ketiga

		];
		$mpdf = new \Mpdf\Mpdf(
			// [
			// 'default_size' => 2,
			// 'default_font' => 'dejavusans'
			// ]
		);
		$mpdf->SetFont('dejavusans');
		$html = $this->load->view('cetak',$result,true);	
		$mpdf->WriteHTML($html);
		$mpdf->Output();
		// $this->load->view('cetak',$data);	
	}

	public function add(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_ktp = $this->input->post('no_ktp');
		$no_telp = $this->input->post('no_telp');
		$harga = $this->input->post('Harga');
		$komisi = $this->input->post('komisi');
		$detail = $this->input->post('detail');
		$cetak = $this->input->post('cetak');
		$nama_pemilik = (!empty($this->input->post('nama_pemilik'))) ? $this->input->post('nama_pemilik') : NULL;

		$post = $_FILES['ktp']['name'];
		$postsurat = $_FILES['surat']['name'];

		$PecahStr = explode(".", $post);
		$PecahStrsurat = explode(".", $postsurat);
		
		$type = $PecahStr[count($PecahStr)-1];
		$typesurat = $PecahStrsurat[count($PecahStrsurat)-1];
		

		$nama_fix = $no_ktp.'.'.$type;
		$nama_fixsurat = $no_ktp.'_surat.'.$typesurat;

		date_default_timezone_set('Asia/Jakarta');
        $tanggal = date('Y-m-d h:i:sa');
		
		

		$this->load->library('upload'); 
		//--------------------
		if(!empty($_FILES['ktp']['name']) ){
			// Set preference foto
			$config['upload_path'] = './assets/ktp'; 
			$config['allowed_types'] = 'jpg|jpeg|png|gif'; 
			$config['max_size'] = '10000'; // max_size in kb 
			$config['file_name'] = $nama_fix; 
			// Load upload library 
			
			$this->upload->initialize($config);

			// var_dump($config);
			// die;
				
			// File upload
			if ( !$this->upload->do_upload('ktp')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error', $error['error']);
				
				switch($cetak){
					case '1':
						redirect(base_url('form'));
						break;
					case '2':
						redirect(base_url('form_agen'));
						break;
					case '3':
						redirect(base_url('form_perwakilan'));
						break;
					default :
						redirect(base_url('welcome'));
				}
				
				
				
			}else{
				$ktp = $nama_fix;
				// if( $this->input->post('foto_default') != 'default.jpg'){
				// 	unlink("assets/users/foto/".$this->input->post('foto_default'));
				// }
				
			}
		
		}

		else{
			$ktp = $this->input->post('ktp');	
		}


		//TTTDDDD
		if(!empty($_FILES['surat']['name'])){
			// Set preference ttd'

			$configs['upload_path'] = './assets/ktp'; 
			$configs['allowed_types'] = 'jpg|jpeg|png|gif'; 
			$configs['max_size'] = '10000'; // max_size in kb 
			$configs['file_name'] = $nama_fixsurat;
			// Load upload library 

			// $this->load->library('upload'); 
			$this->upload->initialize($configs);

			// File upload
			if ( !$this->upload->do_upload('surat')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error', $error['error']);
				
				switch($cetak){
					case '1':
						redirect(base_url('form'));
						break;
					case '2':
						redirect(base_url('form_agen'));
						break;
					case '3':
						redirect(base_url('form_perwakilan'));
						break;
					default :
						redirect(base_url('welcome'));
				}
			}else{
				$surat = $nama_fixsurat;
				// if( $this->input->post('ttd_default') != 'default.jpg'){
				// 	unlink("assets/users/ttd/".$this->input->post('ttd_default'));
				// }
				
			}
		
		}

		else{
			$surat = $this->input->post('surat');	
		}

		$data = [
            'nama' => $nama,
			'nama_pemilik' => $nama_pemilik,
            'alamat' => $alamat,
            'no_ktp' => $no_ktp,
            'no_telp' => $no_telp,
            'harga' => $harga,
            'pembagian_komisi' => $komisi,
            'detail' => $detail,
            'ktp' => $ktp,
            'surat_legal' => $surat,
			'insert_tanggal'=>$tanggal,
			'update_tanggal' =>$tanggal,
			'konfirmasi' => 'N',
			'type_perjanjian'=> $cetak
        ]; 
		$this->Form_model->save($data);
		// if ($this->db->affected_rows()) {

        //     $this->session->set_flashdata('msg', '1');
        // } else {
        //     $this->session->set_flashdata('msg', '2');
        // };
        redirect(base_url("form/cetak/".$cetak."/".$no_ktp.""));


	}

	public function add_with_agen_registered(){
		$nama = $this->session->userdata('nama');
		$email = $this->session->userdata('email');
		$data_user = $this->M_users->get_user($email);
		
		
		$alamat = $data_user->domisili;
		$no_ktp = $data_user->nik;
		$no_telp = $data_user->noTelp;
		$harga = $this->input->post('Harga');
		$komisi = $this->input->post('komisi');
		$detail = $this->input->post('detail');
		$cetak = $this->input->post('cetak');
		$nama_pemilik =$this->input->post('nama_pemilik');
	
		$postsurat = $_FILES['surat']['name'];
		$PecahStrsurat = explode(".", $postsurat);
		$typesurat = $PecahStrsurat[count($PecahStrsurat)-1];
		

		$nama_fixsurat = $no_ktp.'_surat_'.str_replace(" ","",$nama_pemilik).'.'.$typesurat;

		date_default_timezone_set('Asia/Jakarta');
        $tanggal = date('Y-m-d h:i:sa');
		
		$this->load->library('upload'); 

		//TTTDDDD
		if(!empty($_FILES['surat']['name'])){
			// Set preference ttd'

			$configs['upload_path'] = './assets/ktp'; 
			$configs['allowed_types'] = 'jpg|jpeg|png|gif'; 
			$configs['max_size'] = '10000'; // max_size in kb 
			$configs['file_name'] = $nama_fixsurat;
			// Load upload library 

			// $this->load->library('upload'); 
			$this->upload->initialize($configs);

			// File upload
			if ( !$this->upload->do_upload('surat')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error', $error['error']);
				
				redirect(base_url('add_perjanjian'));
			}else{
				$surat = $nama_fixsurat;
				
			}
		
		}

		else{
			$surat = $this->input->post('surat');	
		}

		$data = [
            'nama' => $nama,
            'alamat' => $alamat,
            'no_ktp' => $no_ktp,
            'no_telp' => $no_telp,
            'harga' => $harga,
            'pembagian_komisi' => $komisi,
            'detail' => $detail,
            'ktp' => $data_user->fotoKtp,
            'surat_legal' => $surat,
			'insert_tanggal'=>$tanggal,
			'update_tanggal' =>$tanggal,
			'nama_pemilik' =>$nama_pemilik,
			'konfirmasi' => 'N',
			'type_perjanjian'=> $cetak
        ]; 
		$this->Form_model->save($data);
		$this->session->set_flashdata('sukses', 'Tambah Data Berhasil');
        redirect(base_url("perjanjian"));

	}

	//buat tanggal indo
	public function tanggal_indo($tanggal, $cetak_hari = false)
	{
		$hari = array ( 1 =>    'Senin',
					'Selasa',
					'Rabu',
					'Kamis',
					'Jumat',
					'Sabtu',
					'Minggu'
				);
				
		$bulan = array (1 =>   'Januari',
					'Februari',
					'Maret',
					'April',
					'Mei',
					'Juni',
					'Juli',
					'Agustus',
					'September',
					'Oktober',
					'November',
					'Desember'
				);
		$split 	  = explode('-', $tanggal);
		$tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
		
		if ($cetak_hari) {
			$num = date('N', strtotime($tanggal));
			return $hari[$num] . ', ' . $tgl_indo;
		}
		return $tgl_indo;
	}
}
