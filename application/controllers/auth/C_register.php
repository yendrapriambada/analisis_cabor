<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_register extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		if ($this->session->userdata('role_id')) {
			redirect('user/C_index_user/beranda');
		}

		// Rules
		$this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim', [
			'required' => 'Nama lengkap harus diisi!'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', [
			'required' => 'Email harus diisi!',
			'is_unique' => 'Email sudah terdaftar!',
			'valid_email' => 'Email tidak valid!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
			'required' => 'Password harus diisi!',
			'min_length' => 'Minimal password 8 karakter!',
			'matches' => 'Password tidak sama!'
		]);
		$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|matches[password1]', [
			'required' => 'Konfirmasi password harus diisi!',
			'matches' => 'Konfirmasi password tidak sama!'
		]);
		// End Rules

		if ($this->form_validation->run() == false) {
			$data = array(
				'title' => 'Registrasi Akun Baru | Sport Talent Prediction'
			);
			$this->load->view('auth/v_register', $data);
		} else {
			// check isQuickAccess checked

			if ($this->input->post('isQuickAccess', true) === 'on') {
				$roleId = 3;
				$isActive = 1;
			} else {
				$roleId = 2;
				$isActive = 0;
			}

			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => 'default.png',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => $roleId,
				'is_active' => $isActive,
				'date_created' => date('Y-m-d H:i:s')
			];

			$this->db->insert('tb_user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akun anda berhasil dibuat. Silahkan login.</div>');
			redirect('auth/C_login');
		}
	}
}
