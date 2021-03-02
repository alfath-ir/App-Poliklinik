<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
        $data['title'] = 'Daftar User | Aplikasi Pelayanan Poliklinik';
        $data['dataUser'] = $this->User_model->allData();

        $this->load->view('user/data_user', $data);
    }

    public function profil()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Profil | Aplikasi Pelayanan Poliklinik';

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/navbar', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('user/profil', $data);
        $this->load->view('templates/user/footer');
    }

    public function tambah_user()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['title'] = 'Tambah User | Aplikasi Pelayanan Poliklinik';
        $data['profesi'] = ['Admin', 'Dokter', 'Bidan'];
        $data['akses'] = ['1', '2'];

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/navbar', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('user/tambah_user', $data);
        $this->load->view('templates/user/footer');
    }

    public function add_user()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'is_unique' => 'Username sudah digunakan!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'min_length' => 'Password terlalu pendek!',
            'matches' => 'Password tidak sama!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('no_telp', 'Nomor telfon', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->tambah_user();
        } else {
            $this->User_model->addUser();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success background-success" role="alert">Data behasil ditambahkan!</div>');
            redirect('user');
        }
    }

    public function edit_user($id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Edit User | Aplikasi Pelayanan Poliklinik';
        $data['getUser'] = $this->User_model->getUserById($id);
        $data['profesi'] = ['Admin', 'Dokter', 'Bidan'];
        $data['akses'] = ['1', '2'];

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/navbar', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('user/edit_user', $data);
        $this->load->view('templates/user/footer');
    }

    public function update_user()
    {
        $this->User_model->updateUser();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success background-success" role="alert">Data behasil diubah!</div>');
        redirect('user');
    }

    public function hapus_user($id)
    {
        $this->User_model->deleteUser($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success background-success" role="alert">Data behasil dihapus!</div>');
        redirect('user');
    }

    public function detail_user($id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['detail'] = $this->db->get_where('user', ['id' => $id])->row_array();
        $data['title'] = 'Detail User | Aplikasi Pelayanan Poliklinik';

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/navbar', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('user/detail_user', $data);
        $this->load->view('templates/user/footer');
    }

    public function reset_passwd($id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Reset Password | Aplikasi Pelayanan Poliklinik';
        $data['getUser'] = $this->User_model->getUserById($id);

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/navbar', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('user/reset_passwd', $data);
        $this->load->view('templates/user/footer');
    }

    public function passReset()
    {
        $this->User_model->updatePasswd();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success background-success" role="alert">Password behasil diubah!</div>');
        redirect('user');
    }
}
