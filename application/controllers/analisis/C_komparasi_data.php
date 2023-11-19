<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_komparasi_data extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model("cabang_olahraga/M_cabor","",TRUE);
        $this->load->model("anak/M_anak","",TRUE);
	}

    public function komparasiData()
	{
		$data = array(
			'title' => 'Komparasi Data | Sport Talent Prediction',
            'records' => $this->M_cabor->getRecords(),
            'jmlDataAnak' => $this->M_anak->jumlahData(),
		);
		$this->load->view('analisis/v_komparasi_data', $data);
	}

    public function pilih_anak()
	{
        $cabor_id = $this->input->post('cabang_olahraga');
        $jmlAnakInput = $this->input->post('jumlah_anak');
        $jmldataAnak = $this->M_anak->jumlahData();

        if ($jmlAnakInput < $jmldataAnak || $jmlAnakInput == $jmldataAnak) {
            if ($jmlAnakInput > 1) {
                $data = array(
                    'title' => 'Komparasi Data | Sport Talent Prediction',
                    'records' => $this->M_cabor->getRecords(),
                    'dataCaborById' => $this->M_cabor->tampil_by_id($cabor_id),
                    'dataAnak' => $this->M_anak->getRecords(),
                    'jmlDataAnak' => $this->M_anak->jumlahData(),
                    'jmlAnakInput' => $jmlAnakInput,
                );
                $this->load->view('analisis/v_komparasi_data_anak', $data);
            } else {
                $this->session->set_flashdata('ver', 'TRUE');
                $this->session->set_flashdata('class_alert', 'warning');
                $this->session->set_flashdata('alert', 'Jumlah data anak harus lebih dari 2');
                redirect('analisis/C_komparasi_data/komparasiData');   
            }
        } else {
            $this->session->set_flashdata('ver', 'TRUE');
            $this->session->set_flashdata('class_alert', 'warning');
            $this->session->set_flashdata('alert', 'Jumlah data anak yang anda masukan melebihi data anak yang tersedia, saat ini tersedia '.$jmldataAnak);
            redirect('analisis/C_komparasi_data/komparasiData');
        }
	}

	public function resultKomparasi()
	{
        $jmlDataAnak = $this->input->post('jmlhDataAnak');
        $id_cabor = $this->input->post('id_cabor');
        
		$data = array(
			'title' => 'Hasil Komparasi Data | Sport Talent Prediction',
		);
		$this->load->view('analisis/v_result_komparasi', $data);
	}
}
