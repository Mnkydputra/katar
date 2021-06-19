<?php
date_default_timezone_set('Asia/Jakarta');


function helper_log($email, $nama, $info)
{
    $CI = &get_instance();
    $param['keterangan']    = $info;
    $param['email']         = $CI->session->userdata('email');
    $param['nama']          = $CI->session->userdata('nama');
    $param['tanggal']       = date('y-m-d H:i:s');
    //load model
    $CI->load->model('admin');

    //panggil model
    $CI->admin->save_log($param);
}
