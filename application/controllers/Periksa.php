<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Periksa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model('Periksa_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Aplikasi Pelayanan Poliklinik';

        $this->load->view('periksa/index', $data);
    }

    public function cari()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Aplikasi Pelayanan Poliklinik';
        $data['today'] = time();

        if ($this->input->post('keyword') == '') {
            redirect('periksa');
        } else {
            $data['pasien'] = $this->Periksa_model->caridata();
        }

        $this->load->view('periksa/cari_pasien', $data);
    }

    public function cek($id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Periksa Pasien | Aplikasi Pelayanan Poliklinik';
        $data['pasien'] = $this->Periksa_model->getPasienById($id);
        $data['id'] = $id;
        $data['p'] = $this->db->get_where('pasien', ['id' => $id])->row_array();
        $data['today'] = time();

        $data['diagnosa'] = $this->db->get_where('diagnosa', ['id_pasien' => $id])->result_array();

        // var_dump($data['diagnosa']);
        // die;

        $word = strtoupper(str_replace(' ', '', $data['p']['nama']));
        $num  = '1234567890';

        $rand = substr(str_shuffle($word), 0, 4) . substr(str_shuffle($num), 0, 2);

        $this->session->set_userdata('no_periksa', $rand);
        $this->session->set_userdata('reff', current_url());
        $this->session->set_userdata('id_pasien', $id);

        $this->load->view('periksa/periksa', $data);
    }

    public function tambah()
    {
        $this->Periksa_model->tambahPeriksa();
        redirect('periksa/opsi');
    }

    public function opsi()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Aplikasi Pelayanan Poliklinik';

        $data['reff'] = $this->session->userdata('reff');

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/navbar', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('periksa/opsi', $data);
        $this->load->view('templates/user/footer');
    }

    public function diagnosa()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Periksa Pasien | Aplikasi Pelayanan Poliklinik';
        $data['p'] = $this->db->get_where('pasien', ['id' => $this->session->userdata('id_pasien')])->row_array();
        $data['today'] = time();

        // var_dump($data['p']);
        // die;

        $this->load->view('periksa/diagnosa', $data);
    }

    public function tambahDiagnosa()
    {
        $this->Periksa_model->createTemp();
        $this->Periksa_model->addDiagnosa();

        redirect('periksa/obat_pasien');
    }

    public function obat_pasien()
    {
        $data['user']  = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Obat Pasien | Aplikasi Pelayanan Poliklinik';
        $data['p'] = $this->db->get_where('pasien', ['id' => $this->session->userdata('id_pasien')])->row_array();
        $data['today'] = time();
        $data['obat'] = $this->db->get('tb_obat')->result_array();
        $data['obat_pasien'] = $this->Periksa_model->allObatPasien();
        $data['temp_op'] = $this->Periksa_model->tempObat();


        $this->load->view('periksa/obat_pasien', $data);
    }

    public function updateTemp()
    {
        $this->Periksa_model->addTemp();
        redirect('periksa/obat_pasien');
    }

    public function riwayat($id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Periksa Pasien | Aplikasi Pelayanan Poliklinik';
        $data['id'] = $id;
        $data['today'] = time();
        $data['pasien'] = $this->Periksa_model->riwayat($id);

        $this->load->view('periksa/riwayat', $data);
    }

    public function end()
    {
        unset($_SESSION['id_pasien'], $_SESSION['no_periksa'], $_SESSION['reff']);

        $this->db->query("INSERT INTO `obat_pasien` SELECT * FROM `temp_obatpasien`;");
        $this->db->query('DROP TABLE IF EXISTS temp_obatpasien');

        redirect('dashboard');
    }

    public function detailDiagnosa($no)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Periksa Pasien | Aplikasi Pelayanan Poliklinik';
        $data['diagnosa'] = $this->Periksa_model->detailD($no);
        $data['periksa'] = $this->Periksa_model->detailP($no);

        $data['obat_pasien'] = $this->db->get_where('obat_pasien', ['no_periksa' => $no])->result_array();

        $this->load->view('periksa/detail_riwayat', $data);
    }
}
