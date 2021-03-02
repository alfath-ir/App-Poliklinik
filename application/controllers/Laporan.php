<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Obat_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Laporan Obat | Aplikasi Pelayanan Poliklinik';
        $data['dataObat'] = $this->Obat_model->allObat();

        $query_om = "SELECT *
                       FROM `tb_obat` JOIN `obat_masuk`
                         ON `tb_obat`.`id` = `obat_masuk`.`obat_id`
                   ORDER BY `obat_masuk`.`id` ASC
                    ";

        $data['obatMasuk'] = $this->db->query($query_om)->result_array();

        $this->load->view('laporan/laporan_obat', $data);
    }

    public function obat_masuk()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Laporan Obat | Aplikasi Pelayanan Poliklinik';

        $query_om = "SELECT *
                       FROM `tb_obat` JOIN `obat_masuk`
                         ON `tb_obat`.`id` = `obat_masuk`.`obat_id`
                   ORDER BY `obat_masuk`.`id` ASC
                    ";

        $data['obatMasuk'] = $this->db->query($query_om)->result_array();

        $this->load->view('laporan/laporan_obat_masuk', $data);
    }

    public function obat_keluar()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Laporan Obat | Aplikasi Pelayanan Poliklinik';

        $query_om = "SELECT *
                       FROM `tb_obat` JOIN `obat_keluar`
                         ON `tb_obat`.`id` = `obat_keluar`.`obat_id`
                   ORDER BY `obat_keluar`.`id` ASC
                    ";

        $data['obatMasuk'] = $this->db->query($query_om)->result_array();

        $this->load->view('laporan/laporan_obat_keluar', $data);
    }

    public function grafik()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Grafik Pasien | Aplikasi Pelayanan Poliklinik';

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

        $this->load->view('laporan/grafik', $data);
    }

    public function print_obat()
    {
        $data['title'] = ".";
        $data['dataObat'] = $this->Obat_model->allObat();

        $this->load->view('laporan/print/print_obat', $data);
    }

    public function print_om()
    {
        $data['title'] = ".";

        $query_om = "SELECT *
                       FROM `tb_obat` JOIN `obat_masuk`
                         ON `tb_obat`.`id` = `obat_masuk`.`obat_id`
                   ORDER BY `obat_masuk`.`id` ASC
                    ";

        $data['obatMasuk'] = $this->db->query($query_om)->result_array();

        $this->load->view('laporan/print/print_om', $data);
    }

    public function print_ok()
    {
        $data['title'] = ".";

        $query_om = "SELECT *
                       FROM `tb_obat` JOIN `obat_keluar`
                         ON `tb_obat`.`id` = `obat_keluar`.`obat_id`
                   ORDER BY `obat_keluar`.`id` ASC
                    ";

        $data['obatMasuk'] = $this->db->query($query_om)->result_array();

        $this->load->view('laporan/print/print_ok', $data);
    }

    public function print_all()
    {
        $data['title'] = ".";

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

        $this->load->view('laporan/print/print_all', $data);
    }

    public function print_pm()
    {
        $data['title'] = ".";

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

        $this->load->view('laporan/print/print_pm', $data);
    }

    public function print_tm()
    {
        $data['title'] = ".";

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

        $this->load->view('laporan/print/print_tm', $data);
    }
    public function print_pk()
    {
        $data['title'] = ".";

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

        $this->load->view('laporan/print/print_pk', $data);
    }

    public function print_tk()
    {
        $data['title'] = ".";

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

        $this->load->view('laporan/print/print_tk', $data);
    }
}
