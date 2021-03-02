<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Obat_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Daftar Obat | Aplikasi Pelayanan Poliklinik';
        $data['dataObat'] = $this->Obat_model->allObat();

        $this->load->view('obat/data_obat', $data);
    }

    public function obat_baru()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Tambah Obat | Aplikasi Pelayanan Poliklinik';
        $data['jenis'] = ['Pcs', 'Botol'];

        $this->form_validation->set_rules('no', 'Obat', 'required|trim|is_unique[tb_obat.no_obat]', [
            'is_unique' => 'Obat sudah ada!'
        ]);
        $this->form_validation->set_rules('nm_obat', 'Nama Obat', 'required|trim|is_unique[tb_obat.nm_obat]', [
            'is_unique' => 'Obat sudah ada!'
        ]);
        $this->form_validation->set_rules('stok', 'Stok', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user/header', $data);
            $this->load->view('templates/user/navbar', $data);
            $this->load->view('templates/user/sidebar', $data);
            $this->load->view('obat/tambah_obat_baru', $data);
            $this->load->view('templates/user/footer', $data);
        } else {
            $this->Obat_model->newObat();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success background-success" role="alert">Data behasil ditambahkan!</div>');
            redirect('obat');
        }
    }

    public function obat_lama()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Obat Masuk | Aplikasi Pelayanan Poliklinik';
        $data['obat'] = $this->db->get('tb_obat')->result_array();

        $query_om = "SELECT *
                       FROM `tb_obat` JOIN `obat_masuk`
                         ON `tb_obat`.`id` = `obat_masuk`.`obat_id`
                   ORDER BY `obat_masuk`.`id` DESC
                    ";

        $data['obat_masuk'] = $this->db->query($query_om)->result_array();

        $this->load->view('obat/tambah_obat_lama', $data);
    }

    public function updateObat()
    {
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->obat_lama();
        } else {
            $this->Obat_model->oldObat();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success background-success" role="alert">Data behasil ditambahkan!</div>');
            redirect('obat/obat_lama');
        }
    }

    public function edit_obat($id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Edit Obat | Aplikasi Pelayanan Poliklinik';
        $data['jenis'] = ['Pcs', 'Botol'];
        $data['obat'] = $this->db->get_where('tb_obat', ['id' => $id])->row_array();

        $this->form_validation->set_rules('nm_obat', 'Nama Obat', 'required|trim|is_unique[tb_obat.nm_obat]', [
            'is_unique' => 'Obat sudah ada!'
        ]);
        $this->form_validation->set_rules('stok', 'Stok', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user/header', $data);
            $this->load->view('templates/user/navbar', $data);
            $this->load->view('templates/user/sidebar', $data);
            $this->load->view('obat/edit_obat', $data);
            $this->load->view('templates/user/footer', $data);
        } else {
            $this->Obat_model->upObat($id);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success background-success" role="alert">Data behasil diubah!</div>');
            redirect('obat');
        }
    }

    public function hapus_obat($id)
    {
        $this->Obat_model->deleteObat($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success background-success" role="alert">Data behasil dihapus!</div>');
        redirect('obat');
    }

    public function hapus_masuk($id)
    {
        $this->Obat_model->deleteMasuk($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success background-success" role="alert">Data behasil dihapus!</div>');
        redirect('obat/obat_lama');
    }

    public function obat_keluar()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Daftar Obat | Aplikasi Pelayanan Poliklinik';

        $query_om = "SELECT *
                       FROM `tb_obat` JOIN `obat_keluar`
                         ON `tb_obat`.`id` = `obat_keluar`.`obat_id`
                   ORDER BY `obat_keluar`.`id` ASC
                    ";

        $data['obatMasuk'] = $this->db->query($query_om)->result_array();

        $this->load->view('obat/obat_keluar', $data);
    }
}
