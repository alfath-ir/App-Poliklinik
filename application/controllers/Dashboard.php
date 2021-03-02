<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model('User_model');
        $this->load->model('Pasien_model');
        $this->load->model('Periksa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Aplikasi Pelayanan Poliklinik';
        $data['pasien'] = $this->Pasien_model->allDataPasien();
        $data['nowPeriksa'] = $this->Periksa_model->nowPeriksa();
        $data['prevPeriksa'] = $this->Periksa_model->prevPeriksa();
        $data['monthPeriksa'] = $this->Periksa_model->monthPeriksa();
        $data['lastPeriksa'] = $this->Periksa_model->lastPeriksa();
        $data['today'] = time();

        date_default_timezone_set('Asia/Jakarta');

        $data['pasien_today'] = $this->db->where(['diagnosa' => 1, 'tgl' => date('Y-m-d')])->from("periksa")->count_all_results();
        $data['tamu_today'] = $this->db->where(['diagnosa' => 0, 'tgl' => date('Y-m-d')])->from("periksa")->count_all_results();
        $data['pasien_month'] = $this->db->where(['diagnosa' => 1, 'tgl' => date('Y-m-d', strtotime('previous month'))])->from("periksa")->count_all_results();
        $data['tamu_month'] = $this->db->where(['diagnosa' => 0, 'tgl' => date('Y-m-d', strtotime('previous month'))])->from("periksa")->count_all_results();

        // tamu Mahasiswa 0
        // kurang 18
        $satu = "SELECT COUNT(*) AS `j` FROM `periksa` WHERE `usia` < 18 AND `tipe_pasien` = 2 AND `tipe_tamu` = 1 AND `diagnosa` = 0";
        $data['satu'] = $this->db->query($satu)->result_array();
        // 18-20
        $dua = "SELECT COUNT(*) AS `j` FROM `periksa` WHERE `usia` >= 18 AND `usia` <= 20 AND `tipe_pasien` = 2 AND `tipe_tamu` = 1 AND `diagnosa` = 0";
        $data['dua'] = $this->db->query($dua)->result_array();
        // 21-23
        $tiga = "SELECT COUNT(*) AS `j` FROM `periksa` WHERE `usia` >= 21 AND `usia` <= 23 AND `tipe_pasien` = 2 AND `tipe_tamu` = 1 AND `diagnosa` = 0";
        $data['tiga'] = $this->db->query($tiga)->result_array();
        // lebih 23
        $empat = "SELECT COUNT(*) AS `j` FROM `periksa` WHERE `usia` > 23 AND `tipe_pasien` = 2 AND `tipe_tamu` = 1 AND `diagnosa` = 0";
        $data['empat'] = $this->db->query($empat)->result_array();

        // pasien Mahasiswa 1
        // kurang 18
        $satu = "SELECT COUNT(*) AS `j` FROM `periksa` WHERE `usia` < 18 AND `tipe_pasien` = 2 AND `tipe_tamu` = 2 AND `diagnosa` = 1";
        $data['satup'] = $this->db->query($satu)->result_array();
        // 18-20
        $dua = "SELECT COUNT(*) AS `j` FROM `periksa` WHERE `usia` >= 18 AND `usia` <= 20 AND `tipe_pasien` = 2 AND `tipe_tamu` = 2 AND `diagnosa` = 1";
        $data['duap'] = $this->db->query($dua)->result_array();
        // 21-23
        $tiga = "SELECT COUNT(*) AS `j` FROM `periksa` WHERE `usia` >= 21 AND `usia` <= 23 AND `tipe_pasien` = 2 AND `tipe_tamu` = 2 AND `diagnosa` = 1";
        $data['tigap'] = $this->db->query($tiga)->result_array();
        // lebih 23
        $empat = "SELECT COUNT(*) AS `j` FROM `periksa` WHERE `usia` > 23 AND `tipe_pasien` = 2 AND `tipe_tamu` = 2 AND `diagnosa` = 1";
        $data['empatp'] = $this->db->query($empat)->result_array();

        // // tamu karyawan/dosen 0
        $k1p = "SELECT COUNT(*) AS `j` FROM `periksa` WHERE `usia` < 21 AND `tipe_pasien` = 1 AND `tipe_tamu` = 1 AND `diagnosa` = 0";
        $data['k1p'] = $this->db->query($k1p)->result_array();

        $k2p = "SELECT COUNT(*) AS `j` FROM `periksa` WHERE `usia` > 21 AND `usia` <= 31 AND `tipe_pasien` = 1 AND `tipe_tamu` = 1 AND `diagnosa` = 0";
        $data['k2p'] = $this->db->query($k2p)->result_array();

        $k3p = "SELECT COUNT(*) AS `j` FROM `periksa` WHERE `usia` > 31 AND `usia` <= 41 AND `tipe_pasien` = 1 AND `tipe_tamu` = 1 AND `diagnosa` = 0";
        $data['k3p'] = $this->db->query($k3p)->result_array();

        $k4p = "SELECT COUNT(*) AS `j` FROM `periksa` WHERE `usia` > 41 AND `usia` <= 51 AND `tipe_pasien` = 1 AND `tipe_tamu` = 1 AND `diagnosa` = 0";
        $data['k4p'] = $this->db->query($k4p)->result_array();

        $k5p = "SELECT COUNT(*) AS `j` FROM `periksa` WHERE `usia` > 51 AND `usia` <= 61 AND `tipe_pasien` = 1 AND `tipe_tamu` = 1 AND `diagnosa` = 0";
        $data['k5p'] = $this->db->query($k5p)->result_array();

        $k6p = "SELECT COUNT(*) AS `j` FROM `periksa` WHERE `usia` > 61 AND `tipe_pasien` = 1 AND `tipe_tamu` = 1 AND `diagnosa` = 0";
        $data['k6p'] = $this->db->query($k6p)->result_array();

        // // tamu karyawan/dosen 1
        $k1k = "SELECT COUNT(*) AS `j` FROM `periksa` WHERE `usia` < 21 AND `tipe_pasien` = 1 AND `tipe_tamu` = 2 AND `diagnosa` = 1";
        $data['k1k'] = $this->db->query($k1k)->result_array();

        $k2k = "SELECT COUNT(*) AS `j` FROM `periksa` WHERE `usia` > 21 AND `usia` <= 31 AND `tipe_pasien` = 1 AND `tipe_tamu` = 2 AND `diagnosa` = 1";
        $data['k2k'] = $this->db->query($k2k)->result_array();

        $k3k = "SELECT COUNT(*) AS `j` FROM `periksa` WHERE `usia` > 31 AND `usia` <= 41 AND `tipe_pasien` = 1 AND `tipe_tamu` = 2 AND `diagnosa` = 1";
        $data['k3k'] = $this->db->query($k3k)->result_array();

        $k4k = "SELECT COUNT(*) AS `j` FROM `periksa` WHERE `usia` > 41 AND `usia` <= 51 AND `tipe_pasien` = 1 AND `tipe_tamu` = 2 AND `diagnosa` = 1";
        $data['k4k'] = $this->db->query($k4k)->result_array();

        $k5k = "SELECT COUNT(*) AS `j` FROM `periksa` WHERE `usia` > 51 AND `usia` <= 61 AND `tipe_pasien` = 1 AND `tipe_tamu` = 2 AND `diagnosa` = 1";
        $data['k5k'] = $this->db->query($k5k)->result_array();

        $k6k = "SELECT COUNT(*) AS `j` FROM `periksa` WHERE `usia` > 61 AND `tipe_pasien` = 1 AND `tipe_tamu` = 2 AND `diagnosa` = 1";
        $data['k6k'] = $this->db->query($k6k)->result_array();

        $this->load->view('dashboard/index', $data);
    }

    // Profil Login ///////////////////////////////////////////////////////////////

    public function profil()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Profil | Aplikasi Pelayanan Poliklinik';

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/navbar', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('profil/profil', $data);
        $this->load->view('templates/user/footer');
    }

    public function edit_profil()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Edit Profil | Aplikasi Pelayanan Poliklinik';

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/navbar', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('profil/edit_profil', $data);
        $this->load->view('templates/user/footer');
    }

    public function update_profil()
    {
        $this->User_model->updateProfil();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success background-success" role="alert">Profil behasil diubah!</div>');
        redirect('dashboard/profil');
    }

    ////////////////////////////////////////////////////////////////////////////

}
