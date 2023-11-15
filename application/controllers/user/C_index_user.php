<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_index_user extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
	}

	public function beranda()
	{
		if (!$this->session->userdata('role_id')) {
			redirect('auth/C_Login');
		}

		$data = array(
			'title' => 'Beranda | Sport Talent Prediction',
			'user'  =>  $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array()
		);
		$this->load->view('user/v_index_user', $data);
	}

	public function dataAnak()
	{
		$data = array(
			'title' => 'Data Anak | Sport Talent Prediction',
		);
		$this->load->view('user/v_data_anak', $data);
	}

	public function komparasiData()
	{
		$data = array(
			'title' => 'Komparasi Data | Sport Talent Prediction',
		);
		$this->load->view('user/v_komparasi_data', $data);
	}

	public function resultKomparasi()
	{
		$data = array(
			'title' => 'Hasil Komparasi Data | Sport Talent Prediction',
		);
		$this->load->view('user/v_result_komparasi', $data);
	}

	public function normaPenilaian()
	{
		$data = array(
			'title' => 'Norma Penilaian | Sport Talent Prediction',
		);
		$this->load->view('user/v_norma_penilaian', $data);
	}

	public function panduanPenelitian()
	{
		$data = array(
			'title' => 'Panduan Penelitian | Sport Talent Prediction',
		);
		$this->load->view('user/v_panduan_penelitian', $data);
	}

	public function petunjukPenggunaan()
	{
		$data = array(
			'title' => 'Petunjuk Penggunaan| Sport Talent Prediction',
		);
		$this->load->view('user/v_petunjuk_penggunaan', $data);
	}

	public function profilPeneliti()
	{
		$data = array(
			'title' => 'Profil Peneliti | Sport Talent Prediction',
		);
		$this->load->view('user/v_profil_peneliti', $data);
	}

	public function editProfil()
	{
		$data = array(
			'title' => 'Edit Profil | Sport Talent Prediction',
			'user' => $this->db->get_where('tb_user', ['email' => $this->session->userdata['email']])->row_array()
		);
		$this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim');
		// $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', [
		// 	'is_unique' => 'Email ini sudah terdaftar!'
		// ]);

		if ($this->form_validation->run() == false) {
			$this->load->view('user/v_edit_profil', $data);
		} else {
			$name = $this->input->post('name');
			$email = $this->input->post('email');

			$this->db->set('name', $name);
			$this->db->where('email', $email);
			$this->db->update('tb_user');

			$data = [
				'name' => $name
			];
			$this->session->set_userdata($data);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profil berhasil diubah!</div>');

			redirect('user/C_index_user/editProfil');
		}
	}
}
