<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login | Aplikasi Pelayanan Poliklinik';

            $this->load->view('templates/login/header', $data);
            $this->load->view('login/index');
            $this->load->view('templates/login/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'role_id' => $user['role_id']
                ];

                $this->session->set_userdata($data);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('alert', '<div class="alert alert-danger background-danger" role="alert">
                    Password Salah!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('alert', '<div class="alert-warning icons-alert" role="alert">
            User tidak terdaftar!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('alert', '<div class="alert alert-success background-success" role="alert">
        Berhasi Keluar!</div>');
        redirect('auth');
    }

    public function error()
    {
    }
}
