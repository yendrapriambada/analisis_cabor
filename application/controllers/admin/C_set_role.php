<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_set_role extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('role_id')) {
			redirect('auth/C_Login');
		}
		if (!($this->session->userdata('role_id') == 1)) {
			redirect('auth/C_blocked');
		}

		$this->load->library('form_validation');
	}

	public function index()
	{
		$data = array(
			'title' => 'Set Role User | Sport Talent Prediction'
		);
		$this->load->view('admin/v_set_role', $data);
	}
}
