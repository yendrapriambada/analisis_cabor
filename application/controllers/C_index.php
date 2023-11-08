<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_index extends CI_Controller
{
	public function beranda()
	{
		$data = array(
			'title' => 'Beranda | Sport Talent Prediction'
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
