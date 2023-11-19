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

		$this->form_validation->set_rules('email_user', 'Email', 'required|trim|valid_email', [
			'required' => 'Email harus diisi!',
			'valid_email' => 'Email tidak valid!'
		]);
		$this->form_validation->set_rules('password_user', 'Password', 'required|trim', [
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
		$emailUser = $this->input->post('email_user');
		$password = $this->input->post('password_user');

		$user = $this->db->get_where('tb_user', ['email_user' => $emailUser])->row_array();

		// jika usernya ada
		if ($user) {
			// jika usernya aktif
			if ($user['is_active'] == 1) {
				// cek password
				if (password_verify($password, $user['password_user'])) {
					$data = [
						'email_user' => $user['email_user'],
						'role_id' => $user['role_id'],
						'name_user' => $user['name_user']
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
		$this->session->unset_userdata('email_user');
		$this->session->unset_userdata('role_id');
		$this->session->unset_userdata('nama_user');
		$this->session->sess_destroy();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil logout!</div>');
		redirect('auth/C_login');
	}
}
