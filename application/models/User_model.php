<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function allData()
    {
        return $this->db->get('user')->result_array();
    }

    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function addUser()
    {
        $data = [
            'username'  => htmlspecialchars($this->input->post('username', true)),
            'password'  => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'nama'      => ucwords($this->input->post('nama', true)),
            'tugas'     => $this->input->post('profesi', true),
            'no_telp'   => $this->input->post('no_telp', true),
            'foto'      => 'default.jpg',
            'role_id'   => $this->input->post('role_id', true)
        ];

        mkdir('./assets/img/profil/' . $data['username']);

        $asal = './assets/img/default.jpg';
        $tujuan = './assets/img/profil/' . $data['username'] . '/default.jpg';
        copy($asal, $tujuan);

        $this->db->insert('user', $data);
    }

    public function updateUser()
    {
        $id = $this->input->post('id');
        $data['user'] = $this->db->get_where('user', ['id' => $id])->row_array();

        if ($this->input->post('username', true) == $data['user']['username']) {
            rename('./assets/img/profil/' . $data['user']['username'], './assets/img/profil/' . $this->input->post('username', true));
        } else {
            $data = [
                'username'  => $this->input->post('username', true),
                'password'  => $data['user']['password'],
                'nama'      => ucwords($this->input->post('nama', true)),
                'tugas'     => $this->input->post('profesi', true),
                'no_telp'   => $this->input->post('no_telp', true),
                'foto'      => $data['user']['foto'],
                'role_id'   => $this->input->post('role_id', true)
            ];
            $this->db->where('id', $id);
            $this->db->update('user', $data);
        }
    }

    public function updateProfil()
    {
        $id = $this->input->post('id');
        $data['user'] = $this->db->get_where('user', ['id' => $id])->row_array();

        $upload_image = $_FILES['foto']['name'];
        $path = $this->session->userdata('username');

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '2024';
            $config['upload_path']   = './assets/img/profil/' . $path;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                echo $this->upload->display_errors();
            } else {
                $old_image = $data['user']['foto'];
                if ($old_image != $upload_image) {
                    unlink(FCPATH . 'assets/img/user/' . $path . '/' . $old_image);

                    $upload_image = $this->upload->data('file_name');
                }
            }
        } else {
            $upload_image = $data['user']['foto'];
        }

        $data = [
            'username'  => $this->input->post('username'),
            'password'  => $data['user']['password'],
            'nama'      => ucwords($this->input->post('nama', true)),
            'tugas'     => ucwords($data['user']['tugas']),
            'no_telp'   => $this->input->post('no_telp', true),
            'foto'      => $upload_image,
            'role_id'   => $data['user']['role_id']
        ];

        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    public function deleteUser($id)
    {
        $query['user'] = $this->db->get_where('user', ['id' => $id])->row_array();

        $path = $query['user']['username'];

        $fd = ('assets/img/profil/' . $path);

        delete_files($fd);
        rmdir($fd);

        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function updatePasswd()
    {
        $id = $this->input->post('id');

        $new_passwd = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);

        $this->db->set('password', $new_passwd);
        $this->db->where('id', $id);
        $this->db->update('user');
    }
}
