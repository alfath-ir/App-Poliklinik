<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Periksa_model extends CI_Model
{
    public function caridata()
    {
        $keyword = $this->input->post('keyword', true);

        $query  =  "SELECT * FROM pasien
                    WHERE nama LIKE '%$keyword%'
                  ";

        return $this->db->query($query)->result_array();
    }

    public function getPasienById($id)
    {
        $query  =  "SELECT * FROM pasien 
                    WHERE id LIKE '%$id%'
                    ";

        return $this->db->query($query)->result_array();
    }

    public function tambahPeriksa()
    {
        date_default_timezone_set('Asia/Jakarta');

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['pasien'] = $this->db->get_where('pasien', ['id' => $this->session->userdata('id_pasien')])->row_array();

        $data = [
            'no_periksa'    => $this->session->userdata('no_periksa'),
            'id_pasien'     => $this->input->post('id'),
            'tipe_pasien'   => $data['pasien']['tipe_pasien'],
            'usia'          => $data['pasien']['usia'],
            'id_petugas'    => $data['user']['id'],
            'tgl'           => date('Y-m-d'),
            'tekanan_darah' => $this->input->post('td'),
            'gula_darah'    => $this->input->post('gd'),
            'asam_urat'     => $this->input->post('au'),
            'tipe_tamu'     => 1,
            'diagnosa'      => 0
        ];

        $this->db->insert('periksa', $data);
    }

    public function addDiagnosa()
    {
        date_default_timezone_set('Asia/Jakarta');

        $data = [
            'id_pasien'  => $this->session->userdata('id_pasien'),
            'diagnosa'   => ucwords($this->input->post('diagnosa')),
            'no_periksa' => $this->session->userdata('no_periksa'),
            'tanggal'    => date('Y-m-d'),
            'id_op'      => 0
        ];

        $this->db->insert('diagnosa', $data);

        $this->db->set('tipe_tamu', 2);
        $this->db->where('no_periksa', $this->session->userdata('no_periksa'));
        $this->db->update('periksa');

        $this->db->set('diagnosa', 1);
        $this->db->where('no_periksa', $this->session->userdata('no_periksa'));
        $this->db->update('periksa');
    }

    public function createTemp()
    {
        $this->db->query('DROP TABLE IF EXISTS temp_obatpasien');

        $this->load->dbforge();

        $this->db->query('use Poliklinik');

        $fields = array(
            'no_periksa' => array(
                'type' => 'VARCHAR',
                'constraint' => 128
            ),
            'id_pasien' => array(
                'type' => 'INT',
                'constraint' => 9
            ),
            'id_obat' => array(
                'type' => 'INT',
                'constraint' => 9,
            ),
            'jumlah' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'ket' => array(
                'type' => 'VARCHAR',
                'constraint' => 128
            )
        );

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('temp_obatpasien');
    }

    public function allObatPasien()
    {
        return $this->db->get('temp_obatpasien')->result_array();
    }

    public function tempObat()
    {
        $query  =  "SELECT * 
                    FROM `temp_obatpasien` JOIN `tb_obat` 
                    ON `temp_obatpasien`.`id_obat` = `tb_obat`.`id`
                    ";

        return $this->db->query($query)->result_array();
    }

    public function addTemp()
    {
        $obat = $this->db->get_where('tb_obat', ['id' => $this->input->post('id_obat')])->row_array();
        $new = $obat['stok'] - $this->input->post('jumlah');

        $this->db->set('stok', $new);
        $this->db->where('id', $this->input->post('id_obat'));
        $this->db->update('tb_obat');

        $out = [
            'obat_id' => $this->input->post('id_obat'),
            'jumlah' => $this->input->post('jumlah'),
            'tgl' => date('Y-m-d')
        ];

        $this->db->insert('obat_keluar', $out);

        $ket = $this->input->post('ket1') . 'x' . $this->input->post('ket2');

        $data = [
            'no_periksa' => $this->session->userdata('no_periksa'),
            'id_pasien' => $this->session->userdata('id_pasien'),
            'id_obat' => $this->input->post('id_obat'),
            'jumlah' => $this->input->post('jumlah'),
            'ket' => $ket
        ];

        $this->db->insert('temp_obatpasien', $data);
    }

    public function nowPeriksa()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->like('tgl', date('Y-m-d'));
        $this->db->from('periksa');
        return $this->db->count_all_results();
    }

    public function prevPeriksa()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->like(
            'tgl',
            date('Y-m-d', strtotime('previous month'))
        );
        $this->db->from('periksa');
        return $this->db->count_all_results();
    }

    public function monthPeriksa()
    {
        date_default_timezone_set('Asia/Jakarta');

        $m = date('m');
        $mx = date('Y') . '-' . $m;

        $this->db->like(
            'tgl',
            $mx
        );
        $this->db->from('periksa');
        return $this->db->count_all_results();
    }

    public function lastPeriksa()
    {
        $this->db->select('id, id_pasien, tgl, tipe_tamu,diagnosa');
        $this->db->from('periksa');
        $this->db->order_by('id', 'DESC');
        return $this->db->get()->result_array();
    }

    public function riwayat($id)
    {
        $query = "SELECT * FROM `diagnosa`
                JOIN `pasien` ON `diagnosa`.`id_pasien` = `pasien`.`id` 
                WHERE `id_pasien` = $id";

        return $this->db->query($query)->result_array();
    }

    public function detailD($no)
    {
        return $this->db->get_where('diagnosa', ['no_periksa' => $no])->row_array();
    }

    public function detailP($no)
    {
        return $this->db->get_where('periksa', ['no_periksa' => $no])->row_array();
    }
}
