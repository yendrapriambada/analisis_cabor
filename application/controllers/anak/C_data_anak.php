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
		$this->load->model("anak/M_anak","",TRUE);
	}

	public function index()
	{
		$data = array(
			'title' => 'Data Anak | Sport Talent Prediction',
			'records' => $this->M_anak->getRecords(),
		);
		$this->load->view('anak/v_data_anak', $data);
	}

	public function form_input()
	{
		$data = array(
			'title' => 'Input Data Anak | Sport Talent Prediction'
		);
		$this->load->view('anak/v_input_data_anak', $data);
	}

	public function do_input()
	{
		$this->form_validation->set_error_delimiters();
		$data = array(
				'nama_anak'	        		=> $this->input->post('nama'),
				'jenis_kelamin_anak'        => $this->input->post('jenis_kelamin'),
				'tinggi_badan_anak'    		=> $this->input->post('tinggi_badan'),
				'berat_badan_anak'    		=> $this->input->post('berat_badan'),
				'tinggi_duduk_anak'			=> $this->input->post('tinggi_duduk'),
				'rentang_lengan_anak'		=> $this->input->post('rentang_lengan'),
				'kecepatan_anak'			=> $this->input->post('kecepatan'),
				'kelincahan_anak'			=> $this->input->post('kelincahan'),
				'koordinasi_anak'			=> $this->input->post('koordinasi'),
				'kekuatan_anak'				=> $this->input->post('kekuatan'),
				'power_anak'				=> $this->input->post('power'),
				'daya_tahan_anak'			=> $this->input->post('daya_tahan'),
				'nilai_potensi_anak'		=> $this->input->post('nilai_potensi')
				
		);
		
		$this->M_anak->tambahdata($data);
		$this->session->set_flashdata('ver', 'TRUE');
		$this->session->set_flashdata('class_alert', 'info');
		$this->session->set_flashdata('alert', 'Data Berhasil di tambahkan');
		redirect('anak/C_data_anak');
	}

	public function hapus($id)
	{
		$whereUser = array('id_anak' => $id );
		$hapusUser = $this->M_anak->hapusdata($whereUser);
		$this->session->set_flashdata('ver', 'TRUE');
		$this->session->set_flashdata('class_alert', 'info');
		$this->session->set_flashdata('alert', 'Data Berhasil di hapus');
		redirect('anak/C_data_anak');
	}

	public function form_edit($id)
	{
		$data = array(
			'title' => 'Edit Data Anak | Sport Talent Prediction',
			'dataById' => $this->M_anak->tampil_by_id($id)
		);
		$this->load->view('anak/v_edit_data_anak', $data);
	}

	function do_edit()
	{
		$id = $this->input->post('id_anak');

		$data = array(
			'nama_anak'	        		=> $this->input->post('nama'),
			'jenis_kelamin_anak'        => $this->input->post('jenis_kelamin'),
			'tinggi_badan_anak'    		=> $this->input->post('tinggi_badan'),
			'berat_badan_anak'    		=> $this->input->post('berat_badan'),
			'tinggi_duduk_anak'			=> $this->input->post('tinggi_duduk'),
			'rentang_lengan_anak'		=> $this->input->post('rentang_lengan'),
			'kecepatan_anak'			=> $this->input->post('kecepatan'),
			'kelincahan_anak'			=> $this->input->post('kelincahan'),
			'koordinasi_anak'			=> $this->input->post('koordinasi'),
			'kekuatan_anak'				=> $this->input->post('kekuatan'),
			'power_anak'				=> $this->input->post('power'),
			'daya_tahan_anak'			=> $this->input->post('daya_tahan'),
			'nilai_potensi_anak'		=> $this->input->post('nilai_potensi')
			
		);

		$this->M_anak->update($id, $data);
		$this->session->set_flashdata('ver', 'TRUE');
		$this->session->set_flashdata('class_alert', 'info');
		$this->session->set_flashdata('alert', 'Data Berhasil diubah');
		redirect("anak/C_data_anak");
	}
}
