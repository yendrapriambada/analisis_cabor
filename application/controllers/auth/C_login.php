<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_login extends CI_Controller
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

		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
			'required' => 'Email harus diisi!',
			'valid_email' => 'Email tidak valid!'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', [
			'required' => 'Password harus diisi!'
		]);

		if ($this->form_validation->run() == false) {
			$data = array(
				'title' => 'Login Page | Sport Talent Prediction'
			);
			$this->load->view('auth/v_login', $data);
		} else {
			echo "berhasil";
			// validasinya success
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

		// jika usernya ada
		if ($user) {
			// jika usernya aktif
			if ($user['is_active'] == 1) {
				// cek password
				if (password_verify($password, $user['password'])) {
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id'],
						'name' => $user['name']
					];
					$this->session->set_userdata($data);
					redirect('user/C_index_user/beranda');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
					redirect('auth/C_login');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum diaktivasi!</div>');
				redirect('auth/C_login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar!</div>');
			redirect('auth/C_login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->unset_userdata('nama');
		$this->session->sess_destroy();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil logout!</div>');
		redirect('auth/C_login');
	}
}
