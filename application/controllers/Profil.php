<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Profil | Aplikasi Pelayanan Poliklinik';

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/navbar', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('profil/profil', $data);
        $this->load->view('templates/user/footer');
    }
}
