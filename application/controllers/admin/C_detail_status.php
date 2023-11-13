<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_detail_status extends CI_Controller
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
            'title' => 'Progress Aktivasi Akun | Sport Talent Prediction'
        );
        $this->load->view('admin/v_detail_status', $data);
    }
}
