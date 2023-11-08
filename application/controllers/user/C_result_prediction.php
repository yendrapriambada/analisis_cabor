<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_result_prediction extends CI_Controller
{
    public function index()
    {
        $data = array(
			'title' => 'Hasil Prediksi Cabang Olahraga | Sport Talent Prediction'
		);
        $this->load->view('user/v_result_prediction', $data);
    }
}
