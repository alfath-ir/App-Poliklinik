<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat_model extends CI_Model
{
    public function allObat()
    {
        return $this->db->get('tb_obat')->result_array();
    }

    public function allObatKeluar()
    {
        return $this->db->get('obat_keluar')->result_array();
    }

    public function newObat()
    {
        $data = [
            'no_obat'  => $this->input->post('no', true),
            'nm_obat'  => ucwords($this->input->post('nm_obat', true)),
            'jenis'    => $this->input->post('jenis'),
            'stok'     => $this->input->post('stok', true),
        ];

        $this->db->insert('tb_obat', $data);
    }

    public function oldObat()
    {
        date_default_timezone_set('Asia/Jakarta');

        $obat = $this->db->get_where('tb_obat', ['id' => $this->input->post('id')])->row_array();

        $data = [
            'obat_id'  => $this->input->post('id'),
            'jumlah'  => $this->input->post('jumlah'),
            'tgl'      => date("Y-m-d"),
        ];

        $stok_baru = $data['jumlah'] + $obat['stok'];

        $this->db->insert('obat_masuk', $data);

        $this->db->set('stok', $stok_baru);
        $this->db->where('id', $obat['id']);
        $this->db->update('tb_obat');
    }

    public function upObat($id)
    {
        $data = [
            'nm_obat'  => ucwords($this->input->post('nm_obat')),
            'jenis'  => $this->input->post('jenis'),
            'stok'  => $this->input->post('stok'),
        ];

        $this->db->where('id', $id);
        $this->db->update('tb_obat', $data);
    }

    public function deleteObat($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_obat');
    }

    public function deleteMasuk($id)
    {
        $om = $this->db->get_where('obat_masuk', ['id' => $id])->row_array();
        $obat = $this->db->get_where('tb_obat', ['id' => $om['obat_id']])->row_array();

        $updateStok = $obat['stok'] - $om['jumlah'];

        $this->db->set('stok', $updateStok);
        $this->db->where('id', $obat['id']);
        $this->db->update('tb_obat');

        $this->db->where('id', $id);
        $this->db->delete('obat_masuk');
    }
}
