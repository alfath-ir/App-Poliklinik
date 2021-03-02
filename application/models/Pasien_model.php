<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien_model extends CI_Model
{
    public function allDataPasien()
    {
        return $this->db->get('pasien')->result_array();
    }

    public function allDataKry()
    {
        return $this->db->get_where('pasien', ['tipe_pasien' => 1])->result_array();
    }

    public function allDataMhs()
    {
        return $this->db->get_where('pasien', ['tipe_pasien' => 2])->result_array();
    }

    public function newPasien($tipe)
    {
        $usia = substr(timespan(strtotime($this->input->post('tgl')), time(), 1), 0, 3);

        $data = [
            'no'          => $this->input->post('no', true),
            'nama'        => ucwords($this->input->post('nama', true)),
            'tgl_lahir'   => $this->input->post('tgl', true),
            'usia'        => $usia,
            'jk'          => ucwords($this->input->post('jklmn', true)),
            'no_telp'     => $this->input->post('no_telp', true),
            'alamat'      => ucwords($this->input->post('alamat', true)),
            'tipe_pasien' => $tipe
        ];

        $this->db->insert('pasien', $data);
    }

    public function upPasien()
    {
        $id = $this->input->post('id');

        $usia = substr(timespan(strtotime($this->input->post('tgl')), time(), 1), 0, 3);

        $data = [
            'no'          => $this->input->post('no', true),
            'nama'        => ucwords($this->input->post('nama', true)),
            'tgl_lahir'   => $this->input->post('tgl', true),
            'usia'        => $usia,
            'jk'          => $this->input->post('jklmn', true),
            'no_telp'     => $this->input->post('no_telp', true),
            'alamat'      => $this->input->post('alamat', true),
            'tipe_pasien' => $this->input->post('tipe', true)
        ];

        $this->db->where('id', $id);
        $this->db->update('pasien', $data);
    }

    public function deletePasien($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pasien');
    }
}
