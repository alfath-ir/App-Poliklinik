<?php
if (!function_exists('hitung_usia')) {
    function hitung_usia($tgl)
    {
        $tanggal = new DateTime($tgl);
        $today = new DateTime('today');
        $y = $today->diff($tanggal)->y;
        $m = $today->diff($tanggal)->m;
        $d = $today->diff($tanggal)->d;
        return $y . ' Tahun';
    }
}
