<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_index extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model("anak/M_anak","",TRUE);
	}
	
	public function beranda()
	{
		$data = array(
			'title' => 'Beranda | Sport Talent Prediction',
			'jmlDataAnak' => $this->M_anak->jumlahData(),
			'jmlDataAnakLakiLaki' => $this->M_anak->jumlahDataLakiLaki(),
			'jmlDataAnakPerempuan' => $this->M_anak->jumlahDataPerempuan(),
		);
		$this->load->view('v_index', $data);
	}

	public function login()
	{
		$data = array(
			'Login Page | Sport Talent Prediction'
		);
		$this->load->view('auth/v_login', $data);
	}
}
