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
		$this->load->model('user/M_user'); // Load the M_user model
	}

	public function index()
	{
		$data = array(
			'title' => 'Set Role User | Sport Talent Prediction',
			'users' => $this->M_user->getAllUser() // Access the M_user model
		);
		$this->load->view('admin/v_set_role', $data);
	}

	public function updateRole()
	{
		$idUser = $this->input->post('id_user');
		$roleId = $this->input->post('role_id');

		$this->db->set('role_id', $roleId);
		$this->db->where('id_user', $idUser);
		$this->db->update('tb_user');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Peran user berhasil diubah!</div>');
		redirect('admin/C_set_role');
	}
}
