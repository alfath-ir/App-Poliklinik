<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->library('form_validation');
        $this->load->model('Pasien_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Pasien Mahasiswa | Aplikasi Pelayanan Poliklinik';
        $data['pasien'] = $this->Pasien_model->allDataMhs();
        $data['today'] = time();

        $this->load->view('pasien/pasien', $data);
    }

    public function karyawan()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Pasien Karyawan | Aplikasi Pelayanan Poliklinik';
        $data['pasien'] = $this->Pasien_model->allDataKry();
        $data['today'] = time();

        $this->load->view('pasien/pasien_karyawan', $data);
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Tambah Pasien | Aplikasi Pelayanan Poliklinik';
        $data['jenis'] = ['Karyawan', 'Mahasiswa'];
        $data['jklmn'] = ['Laki-laki', 'Perempuan'];

        $this->form_validation->set_rules('no', 'NPM/NIP', 'required|trim|is_unique[pasien.no]', [
            'is_unique' => 'NPM/NIP sudah ada!'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tgl', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('no_telp', 'Nomor', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user/header', $data);
            $this->load->view('templates/user/navbar', $data);
            $this->load->view('templates/user/sidebar', $data);
            $this->load->view('pasien/tambah_pasien', $data);
            $this->load->view('templates/user/footer', $data);
        } else {
            if ($this->input->post('jenis') == 'Mahasiswa') {
                $tipe = '2';
                $this->Pasien_model->newPasien($tipe);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success background-success" role="alert">Data behasil ditambahkan!</div>');
                redirect('pasien');
            } else {
                $tipe = '1';
                $this->Pasien_model->newPasien($tipe);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success background-success" role="alert">Data behasil ditambahkan!</div>');
                redirect('pasien/karyawan');
            }
        }
    }

    public function edit($id)
    {
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['pasien'] = $this->db->get_where('pasien', ['id' => $id])->row_array();
        $data['tipe']   = $data['pasien']['tipe_pasien'];
        $data['title']  = 'Edit Pasien | Aplikasi Pelayanan Poliklinik';
        $data['jklmn']  = ['Laki-laki', 'Perempuan'];
        $data['tp']      = ['1', '2'];

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/navbar', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('pasien/edit_pasien', $data);
        $this->load->view('templates/user/footer', $data);
    }

    public function detail($id)
    {
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['pasien'] = $this->db->get_where('pasien', ['id' => $id])->row_array();
        $data['tipe']   = $data['pasien']['tipe_pasien'];
        $data['title']  = 'Edit Pasien | Aplikasi Pelayanan Poliklinik';
        $data['jklmn']  = ['Laki-laki', 'Perempuan'];
        $data['tp']      = ['1', '2'];

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/navbar', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('pasien/detail_pasien', $data);
        $this->load->view('templates/user/footer', $data);
    }

    public function uppasien()
    {
        $data['pasien'] = $this->db->get_where('pasien', ['id' => $this->input->post('id')])->row_array();

        $this->Pasien_model->upPasien();

        if ($data['pasien']['tipe_pasien'] == 1) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success background-success" role="alert">Data behasil diubah!</div>');
            redirect('pasien/karyawan');
        } elseif ($data['pasien']['tipe_pasien'] == 2) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success background-success" role="alert">Data behasil diubah!</div>');
            redirect('pasien');
        }
    }

    public function hapus($id)
    {
        $data['pasien'] = $this->db->get_where('pasien', ['id' => $id])->row_array();

        $this->Pasien_model->deletePasien($id);

        if ($data['pasien']['tipe_pasien'] == 1) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success background-success" role="alert">Data behasil dihapus!</div>');
            redirect('pasien/karyawan');
        } elseif ($data['pasien']['tipe_pasien'] == 2) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success background-success" role="alert">Data behasil dihapus!</div>');
            redirect('pasien');
        }
    }
}
