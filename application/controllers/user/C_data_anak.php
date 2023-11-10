<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_data_anak extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('role_id')) {
			redirect('auth/C_Login');
		}

		$this->load->library('form_validation');
	}

	public function form_input()
	{
		$data = array(
			'title' => 'Input Data Anak | Sport Talent Prediction'
		);
		$this->load->view('user/v_input_data_anak', $data);
	}

	public function form_edit()
	{
		$data = array(
			'title' => 'Edit Data Anak | Sport Talent Prediction'
		);
		$this->load->view('user/v_edit_data_anak', $data);
	}
}
