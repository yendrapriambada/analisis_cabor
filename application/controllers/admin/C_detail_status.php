<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_detail_status extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user/M_user');
    }

    public function progress($id)
    {
        if (!$this->session->userdata('role_id')) {
            redirect('auth/C_Login');
        }
        if (!($this->session->userdata('role_id') == 1)) {
            redirect('auth/C_blocked');
        }

        $data = array(
            'title' => 'Progress Aktivasi Akun | Sport Talent Prediction',
            'user' => $this->M_user->getUserById($id)
        );
        $this->load->view('admin/v_detail_status', $data);
    }

    public function updateProgress($id, $progres)
    {
        if (!$this->session->userdata('role_id')) {
            redirect('auth/C_Login');
        }
        if (!($this->session->userdata('role_id') == 1)) {
            redirect('auth/C_blocked');
        }

        $this->db->set('progres_aktivasi_user', $progres);
        $this->db->where('id_user', $id);
        $this->db->update('tb_user');

        if ($progres == 2) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun user berhasil dikonfirmasi!</div>');
        } else if ($progres == 3) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Email verifikasi berhasil dikirim kepada email user.</div>');
        }

        redirect('admin/C_detail_status/progress/' . $id);
    }

    public function sendEmailVerification($id)
    {
        if (!$this->session->userdata('role_id')) {
            redirect('auth/C_Login');
        }
        if (!($this->session->userdata('role_id') == 1)) {
            redirect('auth/C_blocked');
        }
        $email = $this->input->post('email_user', true);

        // siapkan token
        $token = base64_encode(random_bytes(32));
        $user_token = [
            'email_user' => $email,
            'token' => $token,
            'created' => time()
        ];

        $this->db->insert('tb_tokens', $user_token);

        $this->_sendEmail($token, 'verify');

        redirect('admin/C_detail_status/updateProgress/' . $id . '/3');
    }

    // TODO Yendra: Seluruh proses authentication jadiin satu file aja supaya tidak banyak boilerplate code
    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_user' => 'sporttalentprediction@gmail.com',
            'smtp_pass' => 'ahak nyfz soqp xqxp',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        $this->load->library('email', $config);
        $this->email->initialize($config);  //tambahkan baris ini

        $this->email->from('sporttalentprediction@gmail.com', 'Sport Talent Prediction');
        $this->email->to($this->input->post('email_user'));

        if ($type == 'verify') {
            $this->email->subject('Account Verification');
            $this->email->message('Click this link to verify you account : <a href="' . base_url() . 'admin/C_detail_status/verify?email=' . $this->input->post('email_user') . '&token=' . urlencode($token) . '">Activate</a>');
        } else if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('Klik link ini untuk reset password akun anda : <a href="' . base_url() . 'auth/C_lupa_password/resetPassword?email=' . $this->input->post('email_user') . '&token=' . urlencode($token) . '">Reset Password</a>');
        } else if ($type == 'activated') {
            $this->email->subject('Akun Berhasil Diaktivasi');
            $this->email->message('Halo! Terima kasih sudah mendaftarkan akun anda. Akun anda saat ini sudah aktif dan sudah dapat digunakan. Klik link ini untuk login : <a href="' . base_url() . 'auth/C_login">Login</a>');
        } else if ($type == 'deactivated') {
            $this->email->subject('Akun Gagal Diaktivasi');
            $this->email->message('Halo! Terima kasih sudah mendaftarkan akun anda. Akun anda saat ini belum dapat aktif dan belum dapat dapat digunakan. Untuk informasi lebih lanjut, silahkan hubungi kontak person yang tertera pada aplikasi website. Terima kasih.');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('tb_user', ['email_user' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('tb_tokens', ['token' => $token])->row_array();

            if ($user_token) {
                if (time() - $user_token['created'] < (60 * 60 * 24 * 7)) {        // token verifikasi valid selama 7 hari
                    // $this->db->set('is_active', 1);
                    $this->db->set('progres_aktivasi_user', 4);
                    $this->db->where('email_user', $email);
                    $this->db->update('tb_user');

                    $this->db->delete('tb_tokens', ['email_user' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terima kasih sudah verifikasi email "' . $email . '", admin akan segera mengirim informasi akun melalui email.</div>');
                    redirect('auth/C_login');
                } else {
                    $this->db->delete('tb_user', ['email_user' => $email]);
                    $this->db->delete('tb_tokens', ['email_user' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Verifikasi akun gagal! Token sudah tidak berlaku, hubungi admin.</div>');
                    redirect('auth/C_login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Verifikasi akun gagal! Token salah.</div>');
                redirect('auth/C_login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Verifikasi akun gagal! Email salah.</div>');
            redirect('auth/C_login');
        }
    }

    public function activateAccount($id)
    {
        if (!$this->session->userdata('role_id')) {
            redirect('auth/C_Login');
        }
        if (!($this->session->userdata('role_id') == 1)) {
            redirect('auth/C_blocked');
        }

        $isActive = $this->input->post('is_active');
        $this->db->set('is_active', $isActive);
        $this->db->set('progres_aktivasi_user', 5);
        $this->db->where('id_user', $id);
        $this->db->update('tb_user');

        if ($isActive == 1) {
            $this->_sendEmail('activated', 'activated');
        } else {
            $this->_sendEmail('deactivated', 'deactivated');
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun user berhasil diaktivasi!</div>');
        redirect('admin/C_detail_status/progress/' . $id);
    }
}
