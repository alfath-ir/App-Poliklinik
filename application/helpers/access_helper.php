<?php

function cek_login()
{
    $ci = get_instance();

    if (!$ci->session->userdata('username')) {
        redirect('auth');
    } else {
        $level = $ci->session->userdata('role_id');

        $menu = $ci->uri->segment(1);

        $queryMenu = $ci->db->get_where('user_submenu', ['judul' => $menu])->row_array();

        $menuId = $queryMenu['id'];

        $queryAkses = $ci->db->get_where('user_access_menu', [
            'role_id'   => $level,
            'menu_id' => $menuId
        ]);

        if ($queryAkses->num_rows() < 1) {
            redirect('auth/error');
        }
    }
}
