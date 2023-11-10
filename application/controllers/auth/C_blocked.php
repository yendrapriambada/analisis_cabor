<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_blocked extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => '403 Akses Diblokir'
        );
        $this->load->view('auth/v_blocked', $data);
    }
}
